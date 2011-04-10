<?php

class Product extends Model {
    
    public $name = 'Product';
    
    public $hasAndBelongsToMany = array(
                    'Vendor' => array(
                        'className' => 'Vendor',
                        'joinTable' => 'product_vendors',
                        'foreignKey' => 'product_id',
                        'associationForeignKey' => 'vendor_id'
                        //,'order' => 'name'
                    )
            );
    
        
    public $belongsTo = array(
                    'Producttype' => array(
                        'className' => 'Producttype',
                        'foreignKey' => 'product_type'
                        //,'order' => 'name'
                    )
            );
}