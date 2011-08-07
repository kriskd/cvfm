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
    
    function login() {
        if(!empty($this->data)){ 
            $this->User->set($this->data);
            if($this->User->validates()){
                $this->Session->setFlash('You have successfully logged in.');
                //$this->redirect(array('controller' => 'vendors', 'action' => 'admin_index'));
            }
            else{
                $this->redirect('/login');
            }
        }
    }
    
    function logout(){
        $this->redirect($this->Auth->logout());
    }
}