<?php

class ProductsController extends AppController{
    
    public function __construct(){
        parent::__construct();
        $this->loadModel('Schedule');
        $this->loadModel('Product');
        $this->loadModel('Producttype');
    }

    public function index(){
        $products = $this->Product->find('all');
        $product_types = array();
        foreach($products as $product){
            $product_types[$product['Producttype']['type']][] = array(
                                                                    'product' => array(
                                                                        $product['Product']['id'] => $product['Product']['name'])
                                                                );
        }
        //var_dump($product_types);
        $this->set(array('product_types' => $product_types));
    }
    
    public function get_vendors($product_id){
        $products = $this->Product->findById($product_id);
        $vendors_arr = $products['Vendor'];
        foreach($vendors_arr as $vendor){
            $schedule_id = $vendor['schedule_id'];
            $schedule_arr = $this->Schedule->findById($schedule_id);
            $schedule = $schedule_arr['Schedule']['description'];
            $vendors[] = array($vendor['name'], $vendor['location'], $schedule);
        }
        echo json_encode($vendors);
        exit();
    }
    
    public function get_products($type_id){
        $products = $this->Product->find('all', array('conditions' => array('product_type' => $type_id)));
        echo json_encode($products);
        //var_dump($products);
        exit;
    }
    
    //Create
    public function admin_add(){
        if($this->data){
            $product = $this->Product->save($this->data);
            $id = $this->Product->id;
            $this->redirect('/admin/products/edit/' . $id);
        }
        $product_types = $this->_get_product_types();
        $this->set(array('product_types' => $product_types));
    }
    
    //Retrieve
    public function admin_index(){
        $products = $this->Product->find('all');
        $product_types = array();
        foreach($products as $product){
            $product_types[$product['Producttype']['type']][] = array(
                                                                    'product' => array(
                                                                        $product['Product']['id'] => $product['Product']['name'])
                                                                );
        }
        $this->set(array('product_types' => $product_types));
    }
    
    //Update
    public function admin_edit($id=null){
        $product_types = $this->_get_product_types();
        if(empty($this->data)){
            $product = $this->Product->findById($id); 
        }
        else {
            $product = $this->Product->save($this->data);
        }
        $this->set(array('product' => $product, 'product_types' => $product_types));
    }

    //Delete
    public function admin_delete($id=null){
        
    }
    

}

