<?php

class FooController extends Controller {
    
    public $components = array('Auth');
    
    public function index(){
        $this->set(array('foo' => 'Hello World'));
    }
    
}