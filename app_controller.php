<?php

class AppController extends Controller {
    
    public $components = array(
                    'Auth' => array('authorize' => 'controller',
                                    'allowedActions' => array('index')));

    public function __construct(){
        parent::__construct();
        $this->loadModel('Product');
        $this->loadModel('ProductVendor');
        $this->loadModel('Producttype');
        $this->loadModel('Schedule');
        $this->loadModel('Vendor');
    }
    
    protected function _get_product_types(){
        $product_types_arr = $this->Producttype->find('all'); 
        foreach($product_types_arr as $types){
            $product_types[$types['Producttype']['id']] = $types['Producttype']['type'];
        }
        return $product_types;
    }
    
    protected function _get_schedules(){
        $schedules_arr = $this->Schedule->find('all');
        foreach($schedules_arr as $item){
            $schedules[$item['Schedule']['id']] = $item['Schedule']['description'];
        }
        return $schedules;
    }
    
}