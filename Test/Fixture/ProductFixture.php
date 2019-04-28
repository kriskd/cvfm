<?php
/**
 * Product Fixture
 */
class ProductFixture extends CakeTestFixture {

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
        'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
        'product_type' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true),
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
            'name' => 'Popcorn',
            'product_type' => '2'
        ),
        array(
            'id' => '2',
            'name' => 'Kettlecorn',
            'product_type' => '2'
        ),
        array(
            'id' => '3',
            'name' => 'Lemonade',
            'product_type' => '2'
        ),
        array(
            'id' => '4',
            'name' => 'Fresh cheese',
            'product_type' => '2'
        ),
        array(
            'id' => '5',
            'name' => 'Cheese curds',
            'product_type' => '2'
        ),
        array(
            'id' => '6',
            'name' => 'Gluten-free raw granola',
            'product_type' => '2'
        ),
        array(
            'id' => '7',
            'name' => 'Gluten-free crackers',
            'product_type' => '2'
        ),
        array(
            'id' => '8',
            'name' => 'Produce',
            'product_type' => '5'
        ),
        array(
            'id' => '9',
            'name' => 'Flowers',
            'product_type' => '1'
        ),
        array(
            'id' => '10',
            'name' => 'Jams',
            'product_type' => '2'
        ),
    );

}
