<?php

class VendorsController extends AppController {
    
    public $uses = array('Vendor', 'State');
    
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->deny();
        $this->Auth->allow('index', 'add');
    }
    
    public function index(){
        $schedules = $this->Schedule->find('all');
        $this->set(array('schedules' => $schedules));
        $this->layout = 'cvfm';
    }
    
    public function add()
    {
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
        
        $schedules = $this->Vendor->Schedule->find('list', array('fields' => array('Schedule.id', 'Schedule.description')));
        $states = $this->State->find('all');
        $months = array_combine(range(1,12), range(1,12));
        $year = date('Y'); 
        for($i=date('Y'); $i<=date('Y')+10; $i++){
            $years[$i] = $i;
        }
        $this->set(compact('schedules', 'states', 'months', 'years'));
        $this->layout = 'cvfm';
    }
    
    //Create Vendor
    public function admin_add(){
        if($this->data){
            if($this->Vendor->save($this->data)){
                //$id = $this->Vendor->id;
                $this->redirect('/admin/vendors/index/');
            }
        }
        $schedules = $this->_get_schedules();
        $this->set(array('schedules' => $schedules));
        $this->layout = 'ajax';
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
                $this->Session->setFlash('Vendor saved.');
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