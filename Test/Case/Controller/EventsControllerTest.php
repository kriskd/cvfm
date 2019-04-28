<?php
App::uses('EventsController', 'Controller');

/**
 * EventsController Test Case
 */
class EventsControllerTest extends ControllerTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'app.event',
        'app.staff',
        'app.sponsor',
        'app.user',
    );

    /**
     * setUp
     *
     * @return void
     */
    public function setUp() {
        $this->Event = ClassRegistry::init('Event');
        $this->User = ClassRegistry::init('User');

        parent::setUp();
    }

    /**
     * tearDown()
     *
     * @return void
     */
	public function tearDown() {
        unset($_SERVER['HTTP_X_REQUESTED_WITH']);

		parent::tearDown();
	}

    /**
     * testIndex method
     *
     * @return void
     */
    public function testIndex() {
        $this->testAction('/events', ['return' => 'vars']);

        $this->assertNotEmpty($this->vars['events']);
    }

    /**
     * testAdminIndex method
     *
     * @return void
     */
    public function testAdminIndex() {
        $this->testAction('/admin/events', ['return' => 'vars']);

        $this->assertNotEmpty($this->vars['events']);
    }

    /**
     * testAdminView method
     *
     * @return void
     */
    public function testAdminView() {
        $this->testAction('/admin/events/view/1', ['return' => 'vars']);

        $this->assertNotEmpty($this->vars['event']);
    }

    /**
     * testAdminAdd method
     *
     * @return void
     */
    public function testAdminAdd() {
        $data = [
            'id' => '',
            'date_pick' => date_create('now')->modify('+1 day')->format('m/d/Y'),
            'date' => date_create('now')->modify('+1 day')->format('Y-m-d'),
            'description' => 'A special new event',
        ];
        $this->testAction('/admin/events/add', ['method' => 'post', 'data' => $data]);
        unset($data['id']);
        unset($data['date_pick']);
        $event = $this->Event->find('first', [
            'conditions' => $data,
        ]);

        $this->assertNotEmpty($event);
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
            'id' => '',
            'date_pick' => date_create('now')->modify('+1 day')->format('m/d/Y'),
            'date' => date_create('now')->modify('+1 day')->format('Y-m-d'),
            'description' => 'A special new event',
        ];
        $this->testAction('/admin/events/add', ['method' => 'post', 'return' => 'vars', 'data' => $data]);
        $this->assertTrue($this->vars['data']['success']);
    }

    /**
     * testAdminAdd method Invalid data
     *
     * @return void
     */
    public function testAdminAddAjaxFail() {
        $_SERVER['HTTP_X_REQUESTED_WITH'] = 'XMLHttpRequest';
        $this->setAuthUserSession(1);
        $data = [
            'id' => '',
            'date_pick' => date_create('now')->modify('+1 day')->format('m/d/Y'),
            'date' => date_create('now')->modify('+1 day')->format('Y-m-d'),
            'description' => '',
        ];
        $this->testAction('/admin/events/add', ['method' => 'post', 'return' => 'vars', 'data' => $data]);
        $this->assertNotEmpty($this->vars['data']['description']);
    }

    /**
     * testAdminEditGet method
     *
     * @return void
     */
    public function testAdminEditGet() {
        $this->testAction('/admin/events/edit/1', ['method' => 'get', 'return' => 'vars']);
        $this->assertNotEmpty($this->vars['event']);
    }

    /**
     * testAdminEditPostSuccess method
     *
     * @return void
     */
    public function testAdminEditPostSuccess() {
        $data = [
            'id' => '1',
            'date_pick' => date_create('now')->modify('+1 day')->format('m/d/Y'),
            'date' => date_create('now')->modify('+1 day')->format('Y-m-d'),
            'description' => 'An edit',
        ];
        $this->testAction('/admin/events/edit/1', ['method' => 'post', 'return' => 'vars', 'data' => $data]);
        unset($data['date_pick']);
        $event = $this->Event->find('first', [
            'conditions' => $data,
        ]);
        $this->assertNotEmpty($event);
    }

    /**
     * testAdminEditPostFail method
     *
     * @return void
     */
    public function testAdminEditPostFail() {
        $eventId = '1';
        $eventBefore = $this->Event->findById($eventId);
        $data = [
            'id' => $eventId,
            'date_pick' => date_create('now')->modify('+1 day')->format('m/d/Y'),
            'date' => date_create('now')->modify('+1 day')->format('Y-m-d'),
            'description' => '',
        ];
        $this->testAction('/admin/events/edit/1', ['method' => 'post', 'return' => 'vars', 'data' => $data]);
        unset($data['date_pick']);
        $eventAfter = $this->Event->findById($eventId);
        $this->assertEquals($eventBefore, $eventAfter);
    }

    /**
     * testAdminDeleteSuccess method
     *
     * @return void
     */
    public function testAdminDeleteSuccess() {
        $eventId = 1;
        $event = $this->Event->findById($eventId);
        $this->assertNotEmpty($event);
        $eventId = '1';
        $this->testAction('/admin/events/delete/' . $eventId, ['method' => 'post']);
        $event = $this->Event->findById($eventId);
        $this->assertEmpty($event);
    }

    /**
     * testAdminDeleteFail method
     *
     * @return void
     */
    public function testAdminDeleteFail() {
        $Events = $this->generate('Events', [
            'models' => [
                'Event' => ['delete'],
            ]
        ]);
        $Events->Event->expects($this->once())
            ->method('delete')
            ->will($this->returnValue(false));
        $eventId = 1;
        $event = $this->Event->findById($eventId);
        $this->assertNotEmpty($event);
        $eventId = '1';
        $this->testAction('/admin/events/delete/' . $eventId, ['method' => 'post']);
        $event = $this->Event->findById($eventId);
        $this->assertNotEmpty($event);
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
