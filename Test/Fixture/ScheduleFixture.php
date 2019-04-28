<?php
/**
 * Schedule Fixture
 */
class ScheduleFixture extends CakeTestFixture {

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
        'start_date' => array('type' => 'date', 'null' => true, 'default' => null),
        'end_date' => array('type' => 'date', 'null' => true, 'default' => null),
        'description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
        'short' => array('type' => 'string', 'null' => false, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
        'indexes' => array(
            'PRIMARY' => array('column' => 'id', 'unique' => 1)
        ),
        'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
    );

    /**
     * Records
     *
     * @var array
     */
    public $records = array(
        array(
            'id' => '1',
            'start_date' => '2019-05-29',
            'end_date' => '2019-10-09',
            'description' => 'Full Season',
            'short' => 'Full'
        ),
        array(
            'id' => '2',
            'start_date' => null,
            'end_date' => '2015-07-01',
            'description' => 'First Half of Season',
            'short' => 'First Half'
        ),
        array(
            'id' => '3',
            'start_date' => '2015-07-15',
            'end_date' => null,
            'description' => 'Second Half of Season ',
            'short' => 'Second Half'
        ),
    );

}
