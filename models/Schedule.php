<?php

class Schedule extends Model {
    
    public $name = 'Schedule';
    
    public $hasMany = array(
                'Vendor' => array(
                    'className' => 'Vendor',
                    'foreignKey' => 'schedule_id',
                    'dependent' => true
                )                  
            );
}