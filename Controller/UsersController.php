<?php
App::uses('CakeEmail', 'Network/Email');

class UsersController extends AppController {

    public $name = 'Users';

    public function beforeFilter() {
        parent::beforeFilter();
        if (empty($this->request->params['prefix'])) {
            //Not an admin page
            $this->Auth->allow($this->action);
        }
        $this->set(['slug' => 'users']);
    }

    public function login() {
        if($this->Auth->loggedIn() == true){
            $this->redirect($this->Auth->redirectUrl());
        }
        if($this->request->is('post') || $this->request->is('put')){
            if($this->Auth->login()){
                $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->danger('Username or password is incorrect.');
        }
        $this->layout = 'admin';
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function reset($token = null) {
        $this->layout = 'admin';
		$this->User->removeEmailUniqueValidation();
        if (!empty($token)) {
            if ($user = $this->User->find('first', [
                    'conditions' => [
                        'password_token' => $token,
                    ]
                ]
            )) {
                if (!empty($this->request->data)) {
                    $this->request->data['User']['id'] = $user['User']['id'];
                    if ($this->User->save($this->request->data)) {
                        $this->User->updateAll([
                            'password_token' => null,
                            'password_token_expire' => null,
                        ],[
                            'id' => $user['User']['id']
                        ]);
                        $this->Flash->success('Password changed.');
                        return $this->redirect(['action' => 'login']);
                    }
                    $this->Flash->danger('Password could not be changed, try again.');
                }
                if (strtotime($user['User']['password_token_expire']) < strtotime('now')) {
                    $this->Flash->info('Please request reset again.');
                    return $this->redirect(['action' => 'reset']);
                }
            } else {
                $this->Flash->info('Please retry password reset.');
                return $this->redirect(['action' => 'reset']);
            }
        } elseif ($this->request->is('post')) {
            $this->User->set($this->request->data);
            if ($this->User->validates(['fieldList' => ['username']])) {
                if ($user = $this->User->find('first', [
                        'conditions' => [
                            'username' => $this->User->data['User']['username'],
                        ]
                    ]
                )) {
                    $id = $user['User']['id'];
                    $token = CakeText::uuid();
                    $expire = date('Y-m-d H:i:s', strtotime('+1 hour'));
                    $data['User'] = [
                        'id' => $id,
                        'password_token' => $token,
                        'password_token_expire' => $expire,
                    ];
                    $this->User->save($data, ['validate' => false]);

                    $Email = new CakeEmail('smtp');
                    $Email->emailFormat('both')
                        ->to($user['User']['username'])
                        ->from(Configure::read('Email.from'))
                        ->subject('Password Reset Instructions')
                        ->send('Click here to reset your password: '.Configure::read('SiteUrl').'/users/reset/'.$token);

                    $this->Flash->info('Check your email for information on resetting your password.');
                }
                return $this->redirect(['action' => 'login']); 
            } else {
                $this->Flash->danger('Try again.'); 
            }
        }
    }

    public function admin_add() {
        if (!empty($this->request->data)) {
            if ($this->User->save($this->request->data)) {
                return $this->Flash->success('User Added.');
            }
            $this->Flash->danger('Problem adding user.');
        }
        $this->layout = 'admin';
    }

    public function admin_change() {
        if (!empty($this->request->data)) {
            $this->request->data['User']['id'] = $this->Auth->user('id');
            if ($this->User->save($this->request->data)) {
                return $this->Flash->success('Password changed.');
            }
            $this->Flash->danger('Problem changing password.');
        }
        $this->layout = 'admin';
    }
}
