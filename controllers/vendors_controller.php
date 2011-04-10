<?php

class VendorsController extends AppController {
    
    public $components = array(
                        'Auth' => array('authorize' => 'controller',
                                        'allowedActions' => array('index')));
    
    public function __construct(){
        parent::__construct();
        $this->loadModel('Product');
        $this->loadModel('ProductVendor');
        $this->loadModel('Producttype');
        $this->loadModel('Schedule');
    }
    
    public function isAuthorized(){
        return true;
    }
    
    public function index(){
        $vendors = $this->Vendor->find('all');
        $this->set(array('vendors' => $vendors));
        //var_dump($vendors);
    }
    
    public function get_vendor_by_product_id($id){
        
    }
    
    //Retrieve Vendor
    public function admin_index(){
        $vendors = $this->Vendor->find('all', array('order' => 'name'));
        $this->set(array('vendors' => $vendors));
    }
    
    //Update Vendor
    public function admin_edit($id = null){
        $product_types = $this->_get_product_types();
        $schedules = $this->_get_schedules();
        if($id){
            if(!empty($this->data)){
                //var_dump($this->data);
                $submit = $this->data;
                //exit;
                switch($submit['Vendor']['active']){
                    case 'yes':
                       $submit['Vendor']['active'] = '1';
                       break;
                    default;
                        $submit['Vendor']['active'] = '0';
                }
                //var_dump($submit);
                //exit;
                $this->Vendor->save($submit);
                $this->redirect('/admin/vendors/edit/' . $id);
            }
            $vendor = $this->Vendor->findById($id); 
            $this->set(array('vendor' => $vendor, 'product_types' => $product_types, 'schedules' => $schedules));
        }
        else {
            $this->redirect('/admin/vendors');
        }
    }
    
    //Create Vendor Product
    public function admin_add_product($vendor_id){
        $product_id = $this->data['Vendor']['product_id'];
        $count = $this->ProductVendor->find('count', array('conditions' => array('vendor_id' => $vendor_id, 'product_id' => $product_id)));
        if($count==0){
            $this->ProductVendor->save(array('vendor_id' =>$vendor_id, 'product_id' => $product_id));
        }
        $this->redirect('/admin/vendors/edit/' . $vendor_id);
    }
    
    //Delete Vendor Product
    public function admin_delete_product($vendor_id = null, $product_id = null){
        if($vendor_id && $product_id){
            $this->ProductVendor->deleteAll(array('vendor_id' => $vendor_id, 'product_id' => $product_id));
            $vendor = $this->Vendor->findById($vendor_id); 
            $this->set(array('vendor' => $vendor));
            $this->render('admin_edit');
        }
    }
    
    protected function _get_schedules(){
        $schedules_arr = $this->Schedule->find('all');
        foreach($schedules_arr as $item){
            $schedules[$item['Schedule']['id']] = $item['Schedule']['description'];
        }
        return $schedules;
    }
    
}