<?php
App::uses('AppModel', 'Model');
App::uses('ArraySource', 'Datasources.Model/Datasource');
App::uses('ConnectionManager', 'Model');

// Add new db config
ConnectionManager::create('month', array('datasource' => 'Datasources.ArraySource'));

class Month extends AppModel {
    
    public $useDbConfig = 'month';
        
    public $useTable = false;

    public $fields = array(
        'id' => array('type' => 'integer', 'key' => 'primary'),
        'name' => array('type' => 'string', 'null' => false)
    );

    public $records = array(
        array(
            'id' => 1, 'name' => 'January'
        ),
        array(
            'id' => 2, 'name' => 'February'
        ),
        array(
            'id' => 3, 'name' => 'March'
        ),
        array(
            'id' => 4, 'name' => 'April'
        ),
        array(
            'id' => 5, 'name' => 'May'
        ),
        array(
            'id' => 6, 'name' => 'June'
        ),
        array(
            'id' => 7, 'name' => 'July'
        ),
        array(
            'id' => 8, 'name' => 'August'
        ),
        array(
            'id' => 9, 'name' => 'September'
        ),
        array(
            'id' => 10, 'name' => 'October'
        ),
        array(
            'id' => 11, 'name' => 'November'
        ),
        array(
            'id' => 12, 'name' => 'December'
        ),
    );

    public $hasAndBelongsToMany = array(
                'Product' => array(
                    'className' => 'Product'
                    ,'joinTable' => 'month_products'
                    ,'foreignKey' => 'product_id'
                    ,'associationForeignKey' => 'month_id'
                )
        );
    
}
