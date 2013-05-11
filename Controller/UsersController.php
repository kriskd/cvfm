<?php
class UsersController extends AppController {
    
    public $name = 'Users';
    public $components = array('Auth');
    
    /*function isAuthorized(){
        if(!parent::isAuthorized()){
            return false;
        }
        if(in_array($this->action, array('login'))){
            $this->Auth->authError = 'You are already logged in.';
            return false;
        }
        return true;
    }*/
    public function beforeFilter () {
        if (empty($this->params['prefix'])) {
            //Note an admin page
            $this->Auth->allow($this->action);
        } 
    }
    
    public function login() {
        if($this->Auth->loggedIn() == true){ 
            $this->redirect($this->Auth->redirectUrl($redirect));
        }
        if($this->request->is('post') || $this->request->is('put')){
            if(!$this->Auth->login()){ 
                $this->Session->setFlash('Username or password is incorrect.');
                return; 
            }
        }  
    }
    
    public function logout(){
        $this->redirect($this->Auth->logout());
    }
}