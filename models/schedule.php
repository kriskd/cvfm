<?php

class Schedule extends Model {
    
    //var $name = 'Schedule';
    
    public $hasMany = array(
                'Vendor' => array(
                    'className' => 'Vendor',
                    'foreignKey' => 'schedule_id',
                    'dependent' => true,
                    'order' => 'Vendor.name'
                )                  
            );
}