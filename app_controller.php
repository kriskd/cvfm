<?php

class AppController extends Controller {
    
    protected function _get_product_types(){
        $product_types_arr = $this->Producttype->find('all'); 
        foreach($product_types_arr as $types){
            $product_types[$types['Producttype']['id']] = $types['Producttype']['type'];
        }
        return $product_types;
    }
    
}