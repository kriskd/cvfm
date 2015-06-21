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
            $this->Session->setFlash('Username or password is incorrect.', 'danger');
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
                        $this->Session->setFlash('Password changed.', 'success');
                        return $this->redirect(['action' => 'login']);
                    }
                    $this->Session->setFlash('Password could not be changed, try again.', 'danger');
                }
                if (strtotime($user['User']['password_token_expire']) < strtotime('now')) {
                    $this->Session->setFlash('Please request reset again.', 'info');
                    return $this->redirect(['action' => 'reset']);
                }
            } else {
                $this->Session->setFlash('Please retry password reset.', 'info');
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
                    $token = String::uuid();
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

                    $this->Session->setFlash('Check your email for information on resetting your password.', 'info');
                }
                return $this->redirect(['action' => 'login']); 
            } else {
                $this->Session->setFlash('Try again.', 'danger'); 
            }
        }
    }

    public function admin_add() {
        if (!empty($this->request->data)) {
            if ($this->User->save($this->request->data)) {
                return $this->Session->setFlash('User Added.', 'success');
            }
            $this->Session->setFlash('Problem adding user.', 'danger');
        }
        $this->layout = 'admin';
    }

    public function admin_change() {
        if (!empty($this->request->data)) {
            $this->request->data['User']['id'] = $this->Auth->user('id');
            if ($this->User->save($this->request->data)) {
                return $this->Session->setFlash('Password changed.', 'success');
            }
            $this->Session->setFlash('Problem changing password.', 'danger');
        }
        $this->layout = 'admin';
    }
}
