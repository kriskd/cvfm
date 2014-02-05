<?php

class Vendor extends AppModel {
    
    public $validate = array(
            'business_name' => array(
                'name_not_empty' => array(
                    'rule' => 'notEmpty'
                    ,'message' => 'Vendor\'s business name is required.')
                )
            ,'schedule_id' =>array(
                'pick_schedule' => array(
                    'rule' => array('comparison', '>', 0)
                    ,'message' => 'Choose a schedule.'
                )
            )
            ,'email' => array(
                'valid_email' => array(
                    'rule' => array('email'),
                    'message' => 'Please enter a valid email.'
                ),
                'email_not_empty' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Please enter an email address.'
                )
            )
            ,'website' => array(
                'valid_url' => array(
                    'rule' => array('url', true),
                    'allowEmpty' => true,
                    'message' => 'Enter proper URL.'
                )
            ),
            'agree' => array(
                'agree' => array(
                    'rule' => array('equalTo', '1'),
                    'message' => 'You must agree to the bylaws.'
                ),
                'required' => array(
                    'rule' => 'notEmpty',
                    'message' => 'You must agree to the bylaws.'
                )
            )
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
    
    public $virtualFields = array(
            'location' => 'CONCAT(Vendor.city, ", ", Vendor.state)'  
    );
    
}