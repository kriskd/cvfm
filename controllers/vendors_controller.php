<?php

class VendorsController extends AppController {
    
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
 
    //Create Vendor
    public function admin_add(){
        if($this->data){
           var_dump($this->data); 
        }
        $schedules = $this->_get_schedules();
        $this->set(array('schedules' => $schedules));
    }
      
    //Retrieve Vendors
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
                $this->Vendor->save($submit);
                /*//exit;
                switch($submit['Vendor']['active']){
                    case 'yes':
                       $submit['Vendor']['active'] = '1';
                       break;
                    default;
                        $submit['Vendor']['active'] = '0';
                }
                //var_dump($submit);
                //exit;
                $this->Vendor->save($submit);*/
                $this->redirect('/admin/vendors/edit/' . $id);
            }
            $vendor = $this->Vendor->findById($id); 
            $this->set(array('vendor' => $vendor, 'product_types' => $product_types, 'schedules' => $schedules));
        }
        else {
            $this->redirect('/admin/vendors');
        }
    }
    
    //Delete Vendor
    public function admin_delete($id = null){
        
    }
    
    
}