<?php
App::uses('AppController', 'Controller');
/**
 * Staffs Controller
 *
 * @property Staff $Staff
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class StaffsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
    public $paginate = array(
        'order' => 'Staff.last_name ASC, Staff.first_name',
        'limit' => 20,
    );
    public $roles = ['manager' => 'Manager', 'volunteer' => 'Volunteer'];

    public function beforeFilter() {
        parent::beforeFilter();
        $this->set(array('slug' => 'staffs'));
    }

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Staff->recursive = 0;
        $this->Paginator->settings = $this->paginate;
		$this->set('staffs', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Staff->exists($id)) {
			throw new NotFoundException(__('Invalid staff'));
		}
		$options = array('conditions' => array('Staff.' . $this->Staff->primaryKey => $id));
		$this->set('staff', $this->Staff->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Staff->create();
			if ($this->Staff->save($this->request->data, ['validate' => false])) {
				$this->Session->setFlash(__('The staff has been saved.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff could not be saved. Please, try again.'), 'danger');
			}
		}
        if ($this->request->is('ajax') && isset($this->request->query['data'])) {
            $this->Staff->set($this->request->query['data']);
            if ($this->Staff->validates()) {
                $this->set(['data' => ['success' => true]]);
            } else {
                $this->set(['data' => $this->Staff->validationErrors]);
            }
        }
        $this->set('options', $this->roles);
        $this->layout = 'ajax';
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Staff->exists($id)) {
			throw new NotFoundException(__('Invalid staff'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Staff->save($this->request->data)) {
				$this->Session->setFlash(__('The staff has been saved.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff could not be saved. Please, try again.'), 'danger');
			}
		}
        $options = array('conditions' => array('Staff.' . $this->Staff->primaryKey => $id));
        $staff = $this->Staff->find('first', $options);
        $this->set(['options' => $this->roles, 'staff' => $staff]);
        $this->request->data = $staff;
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Staff->id = $id;
		if (!$this->Staff->exists()) {
			throw new NotFoundException(__('Invalid staff'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Staff->delete()) {
			$this->Session->setFlash(__('The staff has been deleted.', 'success'));
		} else {
			$this->Session->setFlash(__('The staff could not be deleted. Please, try again.', 'danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
