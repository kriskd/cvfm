<?php

class Vendor extends AppModel {
    
    public $validate = array(
            'name' => array(
                'name_not_empty' => array(
                    'rule' => 'notEmpty'
                    ,'message' => 'Vendor name is required.')
                )
            ,'schedule_id' =>array(
                'pick_schedule' => array(
                    'rule' => array('comparison', '>', 0)
                    ,'message' => 'Choose a schedule.'
                )
            )
            ,'website' => array(
                'valid_url' => array(
                    'rule' => array('url', true),
                    'allowEmpty' => true,
                    'message' => 'Enter proper URL.'
                ))
            );
    
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