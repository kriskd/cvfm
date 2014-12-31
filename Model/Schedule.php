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

    public function beforeSave($options = array()) {
        parent::beforeSave($options);
        $this->data[$this->alias]['start_date'] = empty($this->data[$this->alias]['start_pick']) ? '' : $this->data[$this->alias]['start_date'];
        $this->data[$this->alias]['end_date'] = empty($this->data[$this->alias]['end_pick']) ? '' : $this->data[$this->alias]['end_date'];
        return true; 
    }

    public function afterFind($results, $primary = false) {
        foreach ($results as $key => $val) {
            if (isset($val[$this->alias]['start_date'])) {
                $results[$key][$this->alias]['start_date'] = date('F j', strtotime($val[$this->alias]['start_date']));
            }
            if (isset($val[$this->alias]['end_date'])) {
                $results[$key][$this->alias]['end_date'] = date('F j', strtotime($val[$this->alias]['end_date']));
            }
        }
        return $results;
    }

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
                'Schedule.description', 'Schedule.start_date', 'Schedule.end_date',
            )
        ));
    }
}
