<?php

class Sponsor extends AppModel {
    
    public $name = 'Sponsor';
    
    public $validate = array(
            'name' => array(
                'name_not_empty' => array(
                    'rule' => 'notEmpty'
                    ,'message' => 'Sponsor name is required.')
                ),
            'type' => array(
                'name_not_empty' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Specify type of sponsor.'
                )
            ),
            'website' => array(
                'valid_url' => array(
                    'rule' => array('url', true),
                    'allowEmpty' => true,
                    'message' => 'Enter proper URL.'
                ))
            );
}
