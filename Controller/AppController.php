<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
    public $components = array(
                'Auth' => array('authorize' => 'controller',
                                'allowedActions' => array('index', 'display'))
                ,'Session');

    public function beforeFilter(){
        parent::beforeFilter();
        $this->loadModel('Month');
        $this->loadModel('Product');
        $this->loadModel('ProductVendor');
        $this->loadModel('Producttype');
        $this->loadModel('Schedule');
        $this->loadModel('Vendor');
    }
    
    protected function _get_product_types(){
        $product_types_arr = $this->Producttype->find('all'); 
        foreach($product_types_arr as $types){
            $product_types[$types['Producttype']['id']] = $types['Producttype']['type'];
        }
        return $product_types;
    }
    
    protected function _get_schedules(){
        $schedules_arr = $this->Schedule->find('all');
        foreach($schedules_arr as $item){
            $schedules[$item['Schedule']['id']] = $item['Schedule']['description'];
        }
        return $schedules;
    }
}
