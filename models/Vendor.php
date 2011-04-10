<?php

class Vendor extends Model {
    
    public $name = 'Vendor';
    
    public $hasAndBelongsToMany = array(
                    'Product' => array(
                        'className' => 'Product'
                        ,'joinTable' => 'product_vendors'
                        ,'foreignKey' => 'vendor_id'
                        ,'associationForeignKey' => 'product_id'
                        //This sorts the products by vendor
                        ,'order' => 'name'
                    )
            );
    
    public $belongsTo = array(
                'Schedule' => array(
                    'className' => 'Schedule'
                    ,'foreignKey' => 'schedule_id'
                )              
            );
    
}