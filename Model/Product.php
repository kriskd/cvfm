<?php

class Product extends AppModel {
    
    public $name = 'Product';
    
    public $hasAndBelongsToMany = array(
                    'Vendor' => array(
                        'className' => 'Vendor',
                        'joinTable' => 'product_vendors',
                        'foreignKey' => 'product_id',
                        'associationForeignKey' => 'vendor_id'
                        ,'order' => 'name'
                    ),
                    'Month' => array(
                        'className' => 'Month',
                        'joinTable' => 'month_products',
                        'foreignKey' => 'product_id',
                        'associationForignKey' => 'month_id'
                    )
            );
    
        
    public $belongsTo = array(
                    'Producttype' => array(
                        'className' => 'Producttype',
                        'foreignKey' => 'product_type'
                        ,'order' => 'name'
                    )
            );
    
    public function productsByType()
    {
        return $this->find('all', array(
                                    'fields' => array('Product.id', 'Product.name'),
                                    'order' => 'Producttype.type, Product.name',
                                    'contain' => array(
                                                'Producttype' => array(
                                                    'fields' => 'type',
                                                )
                                            ),
                                    
                                )
                           );
    }
}