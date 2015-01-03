<?php

class SponsorsController extends AppController {
    
	public $components = array('Paginator');
    public $paginate = array(
        'order' => 'Sponsor.name ASC',
        'limit' => 10,
    );

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->deny();
        $this->Auth->allow('index');
    }
    
    public function index() {
        $sponsors = $this->Sponsor->find('all', array(
            'order' => array('Sponsor.amount DESC'),
            'conditions' => array(
                'active' => 1,
            ), 
        ));
        $this->set(array('sponsors' => $sponsors, 'slug' => 'sponsors'));
    }
    
    //Create Sponsor
    public function admin_add(){
        if($this->request->data){
            if($this->Sponsor->save($this->request->data)){
                $this->redirect('/admin/sponsors/index/');
            }
        }
        $this->layout = 'ajax';
    }
    
    //Retrieve Sponsor
    public function admin_index(){
        if ($this->request->is('ajax')) {
            $data = $this->request->data;
            $active = $data['active'];
            $id = $data['id'];
            $this->Sponsor->id = $id;
            $this->Sponsor->saveField('active', $active);
        }
        $this->Paginator->settings = $this->paginate;
		$this->set('sponsors', $this->Paginator->paginate('Sponsor'));
    }
    
    //Update Sponsor
    public function admin_edit($id=null){
        if($id){
            if(!empty($this->request->data)){
                $this->Sponsor->save($this->request->data);
                $this->Session->setFlash('Sponsor saved.');
            }
            $sponsor = $this->Sponsor->findById($id);
            $this->request->data = $sponsor;
            $this->set(array('sponsor' => $sponsor));
        }
        else{
            $this->redirect('/admin/sponsors');
        }
    }
    
    //Delete Sponsor
}
