<?php
App::uses('ProductsController', 'Controller');

/**
 * ProductsController Test Case
 */
class ProductsControllerTest extends ControllerTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'app.product',
        'app.producttype',
        'app.product_vendor',
        'app.month_product',
        'app.vendor',
        'app.user',
    );

    /**
     * setUp
     *
     * @return void
     */
    public function setUp() {
        $this->Product = ClassRegistry::init('Product');
        $this->User = ClassRegistry::init('User');

        parent::setUp();
    }

    /**
     * testIndex method
     *
     * @return void
     */
    public function testIndex() {
        $this->markTestIncomplete('testIndex not implemented.');
    }

    /**
     * testGetVendors method
     *
     * @return void
     */
    public function testGetVendors() {
        $this->markTestIncomplete('testGetVendors not implemented.');
    }

    /**
     * testGetProducts method
     *
     * @return void
     */
    public function testGetProducts() {
        $this->markTestIncomplete('testGetProducts not implemented.');
    }

    /**
     * testAdminAdd method
     *
     * @return void
     */
    public function testAdminAdd() {
        $data = [
            'Product' => [
                'id' => '',
                'name' => 'New Product',
                'product_type' => '2',
            ],
            'Month' => [
                'Month' => [
                    '8',
                    '9',
                    '10',
                ],
            ],
        ];
        $this->testAction('/admin/products/add', ['method' => 'post', 'data' => $data]);
        unset($data['Product']['id']);
        $conditions = $data['Product'];
        $this->Product->recursive = -1;
        $product = $this->Product->find('first', [
            'conditions' => $conditions,
        ]);

        $this->assertNotEmpty($product);
    }

    /**
     * testAdminAdd method
     *
     * @return void
     */
    public function testAdminAddAjax() {
        $_SERVER['HTTP_X_REQUESTED_WITH'] = 'XMLHttpRequest';
        $this->setAuthUserSession(1);
        $data = [
            'Product' => [
                'id' => '',
                'name' => 'New Product',
                'product_type' => '2',
            ],
            'Month' => [
                'Month' => [
                    '8',
                    '9',
                    '10',
                ],
            ],
        ];
        $this->testAction('/admin/products/add', ['method' => 'post', 'return' => 'vars', 'data' => $data]);
        $this->assertTrue($this->vars['data']['success']);
    }

    /**
     * testAdminIndex method
     *
     * @return void
     */
    public function testAdminIndex() {
        $this->markTestIncomplete('testAdminIndex not implemented.');
    }

    /**
     * testAdminEdit method
     *
     * @return void
     */
    public function testAdminEdit() {
        $this->markTestIncomplete('testAdminEdit not implemented.');
    }

    /**
     * testAdminDelete method
     *
     * @return void
     */
    public function testAdminDelete() {
        $this->markTestIncomplete('testAdminDelete not implemented.');
    }

	/**
	 * Add a user record to the `Auth.User` session.
	 *
	 * @param int $userId The User primary key.
	 * @return bool The result of CakeSession::write()
	 */
	protected function setAuthUserSession($userId) {
		$this->User->recursive = -1;
		$user = $this->User->findById($userId);

		return CakeSession::write('Auth.User', $user['User']);
	}
}
