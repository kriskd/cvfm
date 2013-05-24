<?php

class Producttype extends AppModel {
    
    public $name = 'Producttype';
    
    public $hasMany = array(
                'Product' => array(
                    'className' => 'Product',
                    'foreignKey' => 'product_type',
                    'dependent' => true
                )           
            );
}