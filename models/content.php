<?php

class Content extends Model {
    
    public $name = 'Content';
    
    public $validate = array(
            'uri' => array(
                'uri_not_empty' => array(
                    'rule' => 'notEmpty'
                    ,'message' => 'URL is required.')
                )
            );
    
    
}