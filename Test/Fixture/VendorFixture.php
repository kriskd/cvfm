<?php
/**
 * Vendor Fixture
 */
class VendorFixture extends CakeTestFixture {

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
        'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
        'business_name' => array('type' => 'string', 'null' => false, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
        'city' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
        'state' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'postal_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
        'email' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
        'website' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
        'schedule_id' => array('type' => 'smallinteger', 'null' => false, 'default' => null, 'length' => 1, 'unsigned' => false),
        'organize' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
        'donate' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
        'comments' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
        'agree' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
        'active' => array('type' => 'boolean', 'null' => false, 'default' => null),
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
            'name' => null,
            'business_name' => 'Chippys Kettle Corn',
            'address' => null,
            'city' => 'Beaver Dam',
            'state' => 'WI',
            'postal_code' => null,
            'email' => '',
            'website' => 'http://www.chippyskettlecorn.com/',
            'description' => null,
            'schedule_id' => '1',
            'organize' => 0,
            'donate' => 0,
            'comments' => null,
            'agree' => 0,
            'active' => 1
        ),
        array(
            'id' => '2',
            'name' => null,
            'business_name' => 'Farmer John\'s Cheese',
            'address' => null,
            'city' => 'Dodgeville',
            'state' => 'WI',
            'postal_code' => null,
            'email' => '',
            'website' => 'http://www.farmerjohnsstore.com/',
            'description' => null,
            'schedule_id' => '1',
            'organize' => 0,
            'donate' => 0,
            'comments' => null,
            'agree' => 0,
            'active' => 1
        ),
        array(
            'id' => '5',
            'name' => null,
            'business_name' => 'Krueger',
            'address' => null,
            'city' => 'Waterloo',
            'state' => 'WI',
            'postal_code' => null,
            'email' => '',
            'website' => '',
            'description' => null,
            'schedule_id' => '1',
            'organize' => 0,
            'donate' => 0,
            'comments' => null,
            'agree' => 0,
            'active' => 1
        ),
        array(
            'id' => '7',
            'name' => null,
            'business_name' => 'Nehmer Produce and Greenhouse',
            'address' => null,
            'city' => 'Columbus',
            'state' => 'WI',
            'postal_code' => null,
            'email' => '',
            'website' => 'http://www.savorwisconsin.com/AllListings/detail.asp?recordid=2163&table=producer',
            'description' => null,
            'schedule_id' => '1',
            'organize' => 0,
            'donate' => 0,
            'comments' => null,
            'agree' => 0,
            'active' => 1
        ),
        array(
            'id' => '27',
            'name' => null,
            'business_name' => 'Young Earth Farm',
            'address' => null,
            'city' => 'Randolph',
            'state' => 'WI',
            'postal_code' => null,
            'email' => '',
            'website' => 'http://www.youngearthfarm.com/',
            'description' => null,
            'schedule_id' => '1',
            'organize' => 0,
            'donate' => 0,
            'comments' => null,
            'agree' => 0,
            'active' => 1
        ),
        array(
            'id' => '23',
            'name' => null,
            'business_name' => 'JTC Angus',
            'address' => null,
            'city' => 'Cottage Grove',
            'state' => 'WI',
            'postal_code' => null,
            'email' => '',
            'website' => 'http://www.jtcangus.com/',
            'description' => null,
            'schedule_id' => '2',
            'organize' => 0,
            'donate' => 0,
            'comments' => null,
            'agree' => 0,
            'active' => 1
        ),
        array(
            'id' => '24',
            'name' => null,
            'business_name' => 'Steiny Jo\'s Bakery',
            'address' => null,
            'city' => 'Brooklyn',
            'state' => 'WI',
            'postal_code' => null,
            'email' => '',
            'website' => 'http://steinyjosbakery.com/',
            'description' => null,
            'schedule_id' => '1',
            'organize' => 0,
            'donate' => 0,
            'comments' => null,
            'agree' => 0,
            'active' => 1
        ),
        array(
            'id' => '26',
            'name' => null,
            'business_name' => 'Liquid Gold Honey',
            'address' => null,
            'city' => 'Madison',
            'state' => 'WI',
            'postal_code' => null,
            'email' => '',
            'website' => 'http://liquidgoldhoney.com/',
            'description' => null,
            'schedule_id' => '2',
            'organize' => 0,
            'donate' => 0,
            'comments' => null,
            'agree' => 0,
            'active' => 1
        ),
        array(
            'id' => '18',
            'name' => null,
            'business_name' => 'Thors',
            'address' => null,
            'city' => 'Madison',
            'state' => 'WI',
            'postal_code' => null,
            'email' => '',
            'website' => '',
            'description' => null,
            'schedule_id' => '1',
            'organize' => 0,
            'donate' => 0,
            'comments' => null,
            'agree' => 0,
            'active' => 1
        ),
        array(
            'id' => '28',
            'name' => null,
            'business_name' => 'Frochy Community Farm',
            'address' => null,
            'city' => 'Cottage Grove',
            'state' => 'WI',
            'postal_code' => null,
            'email' => '',
            'website' => 'https://www.facebook.com/FrochyFarm',
            'description' => null,
            'schedule_id' => '1',
            'organize' => 0,
            'donate' => 0,
            'comments' => null,
            'agree' => 0,
            'active' => 1
        ),
    );

}
