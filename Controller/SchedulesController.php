<?php
App::uses('AppController', 'Controller');
/**
 * Schedules Controller
 *
 * @property Schedule $Schedule
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SchedulesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		if ($this->request->is(array('post', 'put'))) {
            //debug($this->request->data); exit;
			if ($this->Schedule->saveMany($this->request->data['Schedule'])) {
				$this->Session->setFlash(__('The schedule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The schedule could not be saved. Please, try again.'));
			}
        }
		$this->Schedule->recursive = 0;
        $schedules = $this->Schedule->find('all', array(
            'callbacks' => false,
        ));
        $this->request->data = $schedules;
		$this->set(['schedules' => $schedules, 'fiscalYear' => $this->fiscalYear]);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Schedule->exists($id)) {
			throw new NotFoundException(__('Invalid schedule'));
		}
		$options = array('conditions' => array('Schedule.' . $this->Schedule->primaryKey => $id));
		$this->set('schedule', $this->Schedule->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Schedule->create();
			if ($this->Schedule->save($this->request->data)) {
				$this->Session->setFlash(__('The schedule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The schedule could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Schedule->exists($id)) {
			throw new NotFoundException(__('Invalid schedule'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Schedule->save($this->request->data)) {
				$this->Session->setFlash(__('The schedule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The schedule could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Schedule.' . $this->Schedule->primaryKey => $id));
			$this->request->data = $this->Schedule->find('first', $options);
		}
	}

}
