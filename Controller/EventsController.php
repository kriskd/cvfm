<?php
App::uses('AppController', 'Controller');
/**
 * Events Controller
 *
 * @property Event $Event
 * @property PaginatorComponent $Paginator
 */
class EventsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
    public $paginate = array(
        'order' => 'Event.date ASC',
        'limit' => 10,
    );

    public function beforeFilter() {
        parent::beforeFilter();
        $this->set(array('slug' => 'events'));
    }

    public function index() {
		$events = $this->Event->find('all', array(
                'conditions' => array(
                    'date >=' => date('Y-m-d')
                ),
                'fields' => array(
                    'date', 'description'
                ),
                'order' => array(
                    'date ASC',
                ),
            )
        ); 
        $this->set(array('events' => $events));
    }

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Event->recursive = 0;
        $this->Paginator->settings = $this->paginate;
		$this->set('events', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
		$this->set('event', $this->Event->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Event->create();
			if ($this->Event->save($this->request->data, ['validate' => false])) {
				$this->Session->setFlash(__('The event has been saved.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.'), 'danger');
			}
		}
        if ($this->request->is('ajax') && isset($this->request->query['data'])) {
            $this->Event->set($this->request->query['data']);
            if ($this->Event->validates()) {
                $this->set(['data' => ['success' => true]]);
            } else {
                $this->set(['data' => $this->Event->validationErrors]);
            }
        }
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
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Event->save($this->request->data)) {
				$this->Session->setFlash(__('The event has been saved.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.'), 'danger');
			}
		} 
        $options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
        $event = $this->Event->find('first', $options);
        $this->set('event', $event);
        $this->request->data = $event;
        $this->request->data['Event']['date_pick'] = date('m/d/Y', strtotime($event['Event']['date']));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Event->id = $id;
		if (!$this->Event->exists()) {
			throw new NotFoundException(__('Invalid event'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Event->delete()) {
			$this->Session->setFlash(__('The event has been deleted.'), 'success');
		} else {
			$this->Session->setFlash(__('The event could not be deleted. Please, try again.'), 'danger');
		}
		return $this->redirect(array('action' => 'index'));
    }

}
