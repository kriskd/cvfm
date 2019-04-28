<?php
/**
 * Event Fixture
 */
class EventFixture extends CakeTestFixture {

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
        'date' => array('type' => 'date', 'null' => false, 'default' => null),
        'description' => array('type' => 'string', 'null' => false, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'indexes' => array(
            'PRIMARY' => array('column' => 'id', 'unique' => 1)
        ),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );

    /**
     * Init
     *
     * Set event to always be in the future
     *
     * @return void
     */
    public function init() {
        $this->records[0]['date'] = date_create('now')->modify('+1 year')->format('Y-m-d');

        parent::init();
    }

    /**
     * Records
     *
     * @var array
     */
    public $records = array(
        array(
            'id' => '1',
            'date' => '2015-05-27',
            'description' => 'Opening Day',
        ),
    );
}
