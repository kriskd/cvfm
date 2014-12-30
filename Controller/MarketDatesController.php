<?php
App::uses('AppController', 'Controller');
/**
 * MarketDates Controller
 *
 * @property MarketDate $MarketDate
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MarketDatesController extends AppController {

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
			if ($this->MarketDate->saveMany($this->request->data['MarketDate'])) {
				$this->Session->setFlash(__('The market date has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The market date could not be saved. Please, try again.'));
			}
        }
		$this->MarketDate->recursive = 0;
        $marketDates = $this->MarketDate->find('all');
        $this->request->data = $marketDates;
		$this->set('marketDates', $marketDates);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->MarketDate->exists($id)) {
			throw new NotFoundException(__('Invalid market date'));
		}
		$options = array('conditions' => array('MarketDate.' . $this->MarketDate->primaryKey => $id));
		$this->set('marketDate', $this->MarketDate->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->MarketDate->create();
			if ($this->MarketDate->save($this->request->data)) {
				$this->Session->setFlash(__('The market date has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The market date could not be saved. Please, try again.'));
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
		if (!$this->MarketDate->exists($id)) {
			throw new NotFoundException(__('Invalid market date'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MarketDate->save($this->request->data)) {
				$this->Session->setFlash(__('The market date has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The market date could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MarketDate.' . $this->MarketDate->primaryKey => $id));
			$this->request->data = $this->MarketDate->find('first', $options);
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
		$this->MarketDate->id = $id;
		if (!$this->MarketDate->exists()) {
			throw new NotFoundException(__('Invalid market date'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MarketDate->delete()) {
			$this->Session->setFlash(__('The market date has been deleted.'));
		} else {
			$this->Session->setFlash(__('The market date could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
