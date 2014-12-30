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

    public function activeVendors() {
        return $this->find('all', array(
            'contain' => array(
                'Vendor' => array(
                    'conditions' => array(
                        'Vendor.active' => 1
                    ),
                    'fields' => array(
                        'Vendor.business_name', 'Vendor.website', 'Vendor.location',
                    ),
                ),
            ),
            'fields' => array(
                'Schedule.description',             
            )
        ));
    }
}
