<?php

class ContentsController extends AppController {
    
    public $components = array(
                    'Auth' => array('authorize' => 'controller',
                                    'allowedActions' => array('index')));
    
    public function isAuthorized(){
        return true;
    }

    public function index($uri){
        $content = $this->Content->findByUri($uri);
        $this->set(array('content' => $content));
        $this->layout = 'cvfm';
    }
    
    //Create
    
    //Retrieve
    public function admin_index(){
        $contents = $this->Content->find('all');
        $this->set(array('contents' => $contents));
    }
    
    //Update
    
    //Delete
}