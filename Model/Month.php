<?php

class Month extends AppModel {
    
    public $hasAndBelongsToMany = array(
                'Product' => array(
                    'className' => 'Product'
                    ,'joinTable' => 'month_products'
                    ,'foreignKey' => 'product_id'
                    ,'associationForeignKey' => 'month_id'
                )
        );
    
}