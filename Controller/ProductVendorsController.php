<?php

class ProductVendorsController extends AppController {
    
    public $name = 'ProductVendors';
    
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->deny();
    }
    
    //Create Vendor Product
    public function admin_add_product($vendor_id){
        $product_id = $this->data['Vendor']['product_id'];
        if($product_id){
            $count = $this->ProductVendor->find('count', array('conditions' => array('vendor_id' => $vendor_id, 'product_id' => $product_id)));
            if($count==0){
                $this->ProductVendor->save(array('vendor_id' =>$vendor_id, 'product_id' => $product_id));
            }
        }
        $this->redirect('/admin/vendors/edit/' . $vendor_id);
    }
    
    //Delete Vendor Product
    public function admin_delete_product($vendor_id = null, $product_id = null){
        if($vendor_id && $product_id){
            $this->ProductVendor->deleteAll(array('vendor_id' => $vendor_id, 'product_id' => $product_id));
            $vendor = $this->Vendor->findById($vendor_id);
            $product_types = $this->_get_product_types();
            $schedules = $this->_get_schedules();
            $this->set(array('vendor' => $vendor, 'product_types' => $product_types, 'schedules' => $schedules));
            $this->render('/Vendors/admin_edit');
        }
    }
    
}