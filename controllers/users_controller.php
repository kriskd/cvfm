<?php
class UsersController extends Controller {
    
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
    
    function admin_login() {
        
    }
    
    function logout(){
        $this->redirect($this->Auth->logout());
    }
}