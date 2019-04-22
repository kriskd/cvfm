<?php
/**
 * Staff Fixture
 */
class StaffFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'first_name' => array('type' => 'string', 'null' => false, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'last_name' => array('type' => 'string', 'null' => false, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'role' => array('type' => 'string', 'null' => false, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'first_name' => 'Krista',
			'last_name' => 'Gullick',
			'role' => 'manager'
		),
		array(
			'id' => '2',
			'first_name' => 'Laurie',
			'last_name' => 'Benda',
			'role' => 'volunteer'
		),
		array(
			'id' => '4',
			'first_name' => 'Lauren',
			'last_name' => 'Cnare',
			'role' => 'volunteer'
		),
		array(
			'id' => '5',
			'first_name' => 'Kris',
			'last_name' => 'Dockter',
			'role' => 'volunteer'
		),
		array(
			'id' => '6',
			'first_name' => 'Tonya',
			'last_name' => 'Nye',
			'role' => 'volunteer'
		),
		array(
			'id' => '7',
			'first_name' => 'Becky',
			'last_name' => 'Paris',
			'role' => 'volunteer'
		),
		array(
			'id' => '8',
			'first_name' => 'Amanda',
			'last_name' => 'Hall',
			'role' => 'volunteer'
		),
	);

}
