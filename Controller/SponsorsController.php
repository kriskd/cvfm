<?php

class SponsorsController extends AppController {
    
    public function beforeFilter()
    {
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
        if($this->data){
            if($this->Sponsor->save($this->request->data)){
                $this->redirect('/admin/sponsors/index/');
                $this->layout = 'ajax';
            }
        }
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
        $sponsors = $this->Sponsor->find('all', array('order' => array('Sponsor.name')));
        $this->set(array('sponsors' => $sponsors));
    }
    
    //Update Sponsor
    public function admin_edit($id=null){
        if($id){
            if(!empty($this->data)){
                //var_dump($this->data);
                $this->Sponsor->save($this->data);
                $this->Session->setFlash('Sponsor saved.');
                $this->redirect('/admin/sponsors/edit/' . $id);
            }
            $sponsor = $this->Sponsor->findById($id);
            $this->set(array('sponsor' => $sponsor));
        }
        else{
            $this->redirect('/admin/sponsors');
        }
    }
    
    //Delete Sponsor
}
