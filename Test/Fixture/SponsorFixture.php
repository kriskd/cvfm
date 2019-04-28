<?php
/**
 * Sponsor Fixture
 */
class SponsorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'website' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'logo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'amount' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '6,2', 'unsigned' => false),
		'type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'active' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Veridian Homes',
			'website' => 'http://www.veridianhomes.com/',
			'logo' => 'logo-veridian.png',
			'amount' => '250.00',
			'type' => 'sponsor',
			'active' => 1
		),
		array(
			'id' => '10',
			'name' => 'The Emerson Assisted Living Boutique',
			'website' => 'http://www.emersonmadison.com/',
			'logo' => '',
			'amount' => '100.00',
			'type' => 'sponsor',
			'active' => 1
		),
		array(
			'id' => '14',
			'name' => 'Dom Dockter',
			'website' => 'http://www.emersonmadison.com/',
			'logo' => null,
			'amount' => null,
			'type' => 'sponsor',
			'active' => 0
		),
	);

}
