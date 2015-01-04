<?php

class VendorsController extends AppController {
    
    public $uses = array('Vendor', 'State');
	public $components = array('Paginator');
    public $paginate = array(
        'order' => 'Vendor.business_name ASC',
        'limit' => 10,
    );

    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->deny();
        $this->Auth->allow('index', 'add');
        $this->set(array('slug' => 'vendors'));
    }
    
    public function index() {
        $schedules = $this->Vendor->Schedule->activeVendors($this->fiscalYear);
        $this->set(array('schedules' => $schedules));
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
                $this->redirect(array(
                    'action' => 'index',
                    'admin' => true
                ));
            }
        }
        $groupedProducts = $this->Vendor->Product->productsByType(); 
        $schedules = $this->_get_schedules();
        $options = array('checked' => true);
        $this->set(compact('schedules', 'groupedProducts', 'options'));
    }
      
    //Retrieve Vendors
    public function admin_index(){
        if ($this->request->is('ajax')) {
            $data = $this->request->data;
            $active = $data['active'];
            $id = $data['id'];
            $this->Vendor->id = $id;
            $this->Vendor->saveField('active', $active);
        }
        $this->Paginator->settings = $this->paginate;
		$this->set('vendors', $this->Paginator->paginate('Vendor'));
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
            $this->Session->setFlash('Vendor saved.', 'success');
        } else {
            $vendor = $this->Vendor->findById($id); 
        }

        $this->request->data = $vendor;
        $product_types = $this->_get_product_types(); 
        $schedules = $this->_get_schedules();
        $groupedProducts = $this->Vendor->Product->productsByType(); 
        $this->set(compact('vendor', 'product_types', 'schedules', 'groupedProducts'));
    }
    
/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Vendor->id = $id;
		if (!$this->Vendor->exists()) {
			throw new NotFoundException(__('Invalid vendor'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Vendor->delete()) {
			$this->Session->setFlash(__('The vendor has been deleted.'), 'success');
		} else {
			$this->Session->setFlash(__('The vendor could not be deleted. Please, try again.'), 'danger');
		}
		return $this->redirect(array('action' => 'index', 'admin' => true));
	}
    
}
