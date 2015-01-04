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
		if ($this->request->is('post')) {
			$this->Sponsor->create();
			if ($this->Sponsor->save($this->request->data, ['validate' => false])) {
				$this->Session->setFlash(__('The sponsor has been saved.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sponsor could not be saved. Please, try again.'), 'danger');
			}
		}
        if ($this->request->is('ajax') && isset($this->request->query['data'])) {
            $this->Sponsor->set($this->request->query['data']);
            if ($this->Sponsor->validates()) {
                $this->set(['data' => ['success' => true]]);
            } else {
                $this->set(['data' => $this->Sponsor->validationErrors]);
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
                $this->Session->setFlash('Sponsor saved.', 'success');
            }
            $sponsor = $this->Sponsor->findById($id);
            $this->request->data = $sponsor;
            $this->set(array('sponsor' => $sponsor));
        }
        else{
            $this->redirect('/admin/sponsors');
        }
    }
    
/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Sponsor->id = $id;
		if (!$this->Sponsor->exists()) {
			throw new NotFoundException(__('Invalid sponsor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Sponsor->delete()) {
			$this->Session->setFlash(__('The sponsor has been deleted.'), 'success');
		} else {
			$this->Session->setFlash(__('The sponsor could not be deleted. Please, try again.'), 'danger');
		}
		return $this->redirect(array('action' => 'index'));
    }

}
