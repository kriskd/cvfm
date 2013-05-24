<?php

class Sponsor extends AppModel {
    
    public $name = 'Sponsor';
    
    public $validate = array(
            'name' => array(
                'name_not_empty' => array(
                    'rule' => 'notEmpty'
                    ,'message' => 'Sponsor name is required.')
                )

            ,'website' => array(
                'valid_url' => array(
                    'rule' => array('url', true),
                    'allowEmpty' => true,
                    'message' => 'Enter proper URL.'
                ))
            );
}