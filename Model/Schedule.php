<?php

class Schedule extends AppModel {
    
    public $hasMany = array(
                'Vendor' => array(
                    'className' => 'Vendor',
                    'foreignKey' => 'schedule_id',
                    'dependent' => true,
                    'order' => 'Vendor.name'
                )                  
            );
}