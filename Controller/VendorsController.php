<?php

class VendorsController extends AppController {
    
    public $uses = array('Vendor', 'State');
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->deny();
        $this->Auth->allow('index', 'add');
    }
    
    public function index() {
        $schedules = $this->Vendor->Schedule->activeVendors();
        $this->set(array('schedules' => $schedules, 'slug' => 'vendors'));
    }
    
    public function add()
    {
        if (dev() != true) {
            $this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
        }
        if($this->request->is('post')){
            $data = $this->request->data; 
            $fee = 100;
            if ($data['Vendor']['schedule_id'] == 1) {
                $fee = 190;
            }
            $this->Vendor->set($data);
            $valid = $this->Vendor->validates($data); 
            if ($valid == true) {
                $stripeToken = $this->request->data['stripeToken'];
                
                $stripeData = array(
                    'amount' => $fee,
                    'stripeToken' => $stripeToken,

                );
		$result = $this->Stripe->charge($stripeData);
		
		if(is_array($result) && $result['stripe_paid'] == true){
                    $this->Vendor->save($data);
                    $this->Session->setFlash('<span class="glyphicon glyphicon-ok"></span> Payment Success.',
                             'default', array('class' => 'alert alert-success'));
                }
            }
        }
        
        $groupedProducts = $this->Vendor->Product->productsByType(); 

        $schedules = $this->Vendor->Schedule->find('list', array('fields' => array('Schedule.id', 'Schedule.description')));
        $states = $this->State->find('all');
        $months = array_combine(range(1,12), range(1,12));
        $year = date('Y'); 
        for($i=date('Y'); $i<=date('Y')+10; $i++){
            $years[$i] = $i;
        }
        $this->set(compact('schedules', 'states', 'months', 'years', 'groupedProducts'));
    }
    
    //Create Vendor
    public function admin_add(){
        if($this->request->data){
            if($this->Vendor->save($this->request->data)){
                //$id = $this->Vendor->id;
                $this->redirect(array(
                    'action' => 'index',
                    'admin' => true
                ));
            }
        }
        $groupedProducts = $this->Vendor->Product->productsByType(); 
        $schedules = $this->_get_schedules();
        $this->set(compact('schedules', 'groupedProducts'));
    }
      
    //Retrieve Vendors
    public function admin_index(){
        $vendors = $this->Vendor->find('all', array('order' => 'name'));
        $this->set(array('vendors' => $vendors));
    }  

    //Update Vendor
    public function admin_edit($id = null){
        if (empty($id)) {
            $this->redirect(array(
                'action' => 'index'
            ));
        }

        if(!empty($this->request->data)){
            $vendor = $this->request->data;
            $this->Vendor->save($vendor);
            $this->Session->setFlash('Vendor saved.');
        } else {
            $vendor = $this->Vendor->findById($id); 
        }

        $this->request->data = $vendor;
        $product_types = $this->_get_product_types(); 
        $schedules = $this->_get_schedules();
        $groupedProducts = $this->Vendor->Product->productsByType(); 
        $this->set(compact('vendor', 'product_types', 'schedules', 'groupedProducts'));
    }
    
    //Delete Vendor
    public function admin_delete($id = null){
        
    }
    
    
}
