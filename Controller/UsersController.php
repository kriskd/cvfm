<?php

class UsersController extends AppController {
    
    public $name = 'Users';
    
    public function beforeFilter() {
        parent::beforeFilter();
        if (empty($this->request->params['prefix'])) {
            //Note an admin page
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

    public function forget() {

        $this->layout = 'admin';
    }

    public function admin_change() {
        if ($this->request->is('post')) {
            $this->request->data['User']['id'] = $this->Auth->user('id');
            if ($this->User->save($this->request->data)) {
                return $this->Session->setFlash('Password changed.', 'success');
            }
            $this->Session->setFlash('Problem changing password.', 'danger');
        }
        $this->layout = 'admin';
    }
}
