<?php

class ProductsController extends AppController
{
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->deny();
        $this->Auth->allow('index', 'get_vendors');
    }
    public function index(){
        $products = $this->Product->find('all');
        $current_month = date('n');
        //var_dump($products);
        $product_types = array();
        $products_in_season = array();
        foreach($products as $product){
            $vendors = $product['Vendor'];
            //Check to make sure there is at least one active vendor selling the product.
            $actives = array();
            foreach($vendors as $vendor){
                $actives[] = $vendor['active'];
            }
            if(in_array(1,$actives)){
                $product_types[$product['Producttype']['type']][] = array('product' => array(0 => 'Select One:'));
                $product_types[$product['Producttype']['type']][] = array(
                                                                        'product' => array(
                                                                            $product['Product']['id'] => $product['Product']['name'])
                                                                    );
            }
            $months = $product['Month'];   
            foreach($months as $month){
                if(strcasecmp($month['id'],$current_month)==0){
                    $products_in_season[] = $product['Product']['name'];
                }
            }
        }
        //var_dump($product_types);
        $this->set(array('product_types' => $product_types, 'products_in_season' => $products_in_season));
        $this->layout = 'cvfm';
    }
    
    public function get_vendors($product_id){
        $products = $this->Product->findById($product_id);
        $vendors_arr = $products['Vendor'];
        $vendors = array();
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
        $this->layout = 'ajax';
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
        //var_dump($this->Auth->user());
        if($this->data){
            $data = $this->data;
            $this->Product->save($data);
            $id = $data['Product']['id'];
            $this->redirect('/admin/products/edit/' . $id);
        }
        $product_types = $this->_get_product_types();
        $months = $this->Month->find('all'); 
        
        foreach($months as $month){
            $month_arr[$month['Month']['id']] = $month['Month']['name'];
        }
        $product = $this->Product->findById($id); 
        $product_months = $product['Month'];
        $selected_months = array();
        foreach($product_months as $product_month){
            $selected_months[] = $product_month['id'];
        }
        $this->set(array('product' => $product
                         , 'product_types' => $product_types
                         , 'months' => $month_arr
                         , 'selected_months' => $selected_months));
        
    }

    //Delete
    public function admin_delete($id=null){
        $this->Product->delete($id, false);
        $this->redirect(array('controller' => 'Products', 'action' => 'index', 'admin' => true));
    }
    

}

