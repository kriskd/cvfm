<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Page', 'Schedule');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function display() { 
		$path = func_get_args();
		$slug = current($path); 
        $this->set('slug', $slug);

		if ($content = $this->Page->find('first', array('conditions' => array('uri' => $slug)))) {
			$this->set('content', $content);
            $this->render('page');
		} else {

            $count = count($path);
            if (!$count) {
                $this->redirect('/');
            }
            $page = $subpage = $title_for_layout = null;

            if (!empty($path[0])) {
                $page = $path[0];
            }
            if (!empty($path[1])) {
                $subpage = $path[1];
            }
            if (!empty($path[$count - 1])) {
                $title_for_layout = Inflector::humanize($path[$count - 1]);
            }

            $schedule = $this->Schedule->find('first', array(
                'conditions' => array(
                    'short' => 'Full',
                    'YEAR(start_date) >=' => $this->fiscalYear,
                    'YEAR(end_date) >=' => $this->fiscalYear,
                ),
                'recursive' => -1,
                'fields' => array(
                    'start_date', 'end_date'
                ),
            ));
            $this->set(array('fiscalYear' => $this->fiscalYear));
            $this->set(compact('page', 'subpage', 'title_for_layout', 'schedule'));
            $this->render(implode('/', $path));
        }
	}
	
	public function admin_index()
	{
		$pages = $this->Paginator->paginate('Page');
		$this->set('pages', $pages);
	}
	
	public function admin_edit($id = null)
	{
		if (!$this->Page->exists($id)) {
			throw new NotFoundException(__('Invalid page'));
		}
        
		$options = array('conditions' => array('Page.' . $this->Page->primaryKey => $id));
		$page = $this->Page->find('first', $options);
		
		if ($this->request->is('post') || $this->request->is('put')) {
			$page = $this->array_merge_recursive_distinct($page, $this->request->data);
			if ($this->Page->save($page)) {
			    $this->Session->setFlash(__('The page has been saved'));
			    $this->redirect(array('action' => 'edit', $id));
			} else {
			    $this->Session->setFlash(__('The page could not be saved. Please, try again.'));
			}
		}
        
		$this->request->data = $page;
		$this->set('page', $page);
	}
}
