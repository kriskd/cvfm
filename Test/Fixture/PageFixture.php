<?php
/**
 * Page Fixture
 */
class PageFixture extends CakeTestFixture {

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
        'uri' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'val' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'indexes' => array(
            'PRIMARY' => array('column' => 'id', 'unique' => 1),
            'unique_uri' => array('column' => 'uri', 'unique' => 1)
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
            'uri' => 'about',
            'title' => 'About Us',
            'val' => '<p>The farmers market is located on the south side of Sharpsburg Drive
            starting at the corner of North Star Drive on the east side of Madison
            across from the new Great Dane Pub within the Grandview Commons Neighborhood and
            visible from Cottage Grove Road.</p>
            <p>The overall goal of the market is to bring
            quality, fresh foods at an affordable price to East Madison by providing an
            outlet for purchasing locally grown produce, farm fresh meats, dairy products,
            and baked goods.</p>',
            'created' => '0000-00-00 00:00:00',
            'modified' => '0000-00-00 00:00:00'
        ),
    );

}
