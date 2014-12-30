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
            'Auth' => array('authorize' => 'Controller',
            'allowedActions' => array('index', 'display'),
            'loginAction' => array('controller' => 'users', 'action' => 'login', 'admin' => false),
            'loginRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login', 'admin' => false),
        ),
        'Session', 'Paginator', 'DebugKit.Toolbar',
        'Stripe' => array('className' => 'Stripe.Stripe')
    );

    public $fiscalYear;

    public function beforeFilter(){
        parent::beforeFilter();
        $this->loadModel('Month');
        $this->loadModel('Product');
        $this->loadModel('ProductVendor');
        $this->loadModel('Producttype');
        $this->loadModel('Schedule');
        $this->loadModel('Vendor');

        $this->setFiscalYear();
        $this->set('fiscalYear', $this->fiscalYear);
    }

    /**
     * Fiscal year is defined at November 1 - October 31.
     * Set appropriately.
     */
    protected function setFiscalYear() {
        $this->fiscalYear = date('Y');
        if (strtotime('now') > mktime(23, 59, 59, 10, 31, date('Y')) && 
            strtotime('now') <= mktime(23, 59, 59, 12, 31, date('Y'))) {
            $this->fiscalYear++; 
        } 
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
    
    public function isAuthorized($user){
        
        if(empty($this->request->params['admin'])) return true;
        
        if($user) return true;
        
        if(in_array($this->action, array('login'))){
            $this->Auth->authError = 'You are already logged in.';
            return false;
        }
        
        return false;
    }
    
    public function array_merge_recursive_distinct(array &$array1, array &$array2)
    {
        $merged = $array1;
      
        foreach ($array2 as $key => &$value) {
            if (is_array ($value) && isset($merged[$key]) && is_array($merged[$key])) {
                $merged[$key] = $this->array_merge_recursive_distinct($merged[$key], $value);
            }
            else {
                $merged[$key] = $value;
            }
        }
      
        return $merged;
    }
}
