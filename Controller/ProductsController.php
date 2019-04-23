<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 */
class ProductsController extends AppController {

    /**
     * beforeFilter
     *
     * @return void
     */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->deny();
        $this->Auth->allow('index', 'get_vendors');
        $this->set(['slug' => 'products']);
    }

    /**
     * index method
     *
     * @return void
     */
    public function index(){
        $products = $this->Product->find('all', array(
            'contain' => [
                'Vendor' => [
                    'conditions' => [
                        'Vendor.active' => 1,
                    ]
                ],
                'Month', 'Producttype',
            ],
        ));
        $products = array_filter($products, function($item) {
            return !empty($item['Vendor']);
        });
        $current_month = date('n');
        $product_types = array();
        $products_in_season = array();
        foreach($products as $product){
            $product_types[$product['Producttype']['type']][] = array(
                'product' => array(
                    $product['Product']['id'] => $product['Product']['name'])
                );
            $months = $product['Month'];
            foreach($months as $month){
                if(strcasecmp($month['id'],$current_month)==0){
                    $products_in_season[] = $product['Product']['name'];
                }
            }
        }

        $popular = $this->Product->popularProducts();
        $popular = array_map('strtolower', $popular);
        $last = array_pop($popular);
        $popular = array_merge($popular, array('and '.$last));
        $this->set(array('product_types' => $product_types, 'products_in_season' => $products_in_season, 'popular' => $popular));
    }

    /**
     * get_vendors method
     *
     * @return void
     */
    public function get_vendors($product_id){
        $products = $this->Product->find('first', array(
            'contain' => [
                'Vendor' => [
                    'conditions' => [
                        'Vendor.active' => 1,
                    ]
                ],
            ],
            'conditions' => [
                'Product.id' => $product_id,
            ],
        ));
        $vendors_arr = $products['Vendor'];
        $vendors = array();
        foreach($vendors_arr as $vendor){
            $vendors[] = array($vendor['business_name'], $vendor['location']);
        }
        echo json_encode($vendors);
        exit();
    }

    /**
     * get_products method
     *
     * @return void
     */
    public function get_products($type_id){
        $products = $this->Product->find('all', array('conditions' => array('product_type' => $type_id)));
        echo json_encode($products);
        $this->autoRender = false;
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add(){
        $this->request->allowMethod('ajax', 'post');

        if (!empty($this->request->data)) {
            if ($this->request->is('ajax')) {
                $this->Product->set($this->request->data);
                if ($this->Product->validates()) {
                    $this->set(['data' => ['success' => true]]);
                } else {
                    $this->set(['data' => $this->Product->validationErrors]);
                }
            } elseif ($this->request->is('post')) {
                $this->Product->create();
                if ($this->Product->save($this->request->data, ['validate' => false])) {
                    $this->Flash->success(__('The product has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
            }
        }

        $productTypes = $this->_get_product_types();
        $months = $this->Product->Month->find('list', array(
            'fields' => array(
                'id', 'name'
            )
        ));
        $this->set(compact('productTypes', 'months'));
        $this->layout = 'ajax';
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $products = $this->Product->find('all');
        $product_types = array();
        foreach($products as $product){
            $product_types[$product['Producttype']['type']][] = array(
                'product' => array(
                    $product['Product']['id'] => $product['Product']['name'])
                );
        }
        $this->set(array('product_types' => $product_types));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id=null) {
        if (empty($id)) {
            $this->redirect(array(
                'action' => 'index'
            ));
        }

        if ($this->request->data) {
            $product = $this->request->data;
            $this->Product->save($product);
            $this->Flash->success('Product saved.');
        } else {
            $product = $this->Product->findById($id);
            $this->request->data = $product;
        }

        $product_types = $this->_get_product_types();
        $months = $this->Product->Month->find('list', array(
            'fields' => array(
                'id', 'name'
            )
        ));

        $this->set(array(
            'product' => $product,
            'product_types' => $product_types,
            'months' => $months,
        ));
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException(__('Invalid product'));
        }

        $this->request->allowMethod('post', 'delete');
        if ($this->Product->delete($id, false)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->danger(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(array('action' => 'index', 'admin' => true));
    }
}

