<?php
App::uses('AppModel', 'Model');
/**
 * Product Model
 *
 */

class Product extends AppModel {

    public $name = 'Product';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter product name.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'product_type' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please choose product type.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

    public $hasAndBelongsToMany = array(
        'Vendor' => array(
            'className' => 'Vendor',
            'joinTable' => 'product_vendors',
            'foreignKey' => 'product_id',
            'associationForeignKey' => 'vendor_id'
            ,'order' => 'name'
        ),
        'Month' => array(
            'className' => 'Month',
            'joinTable' => 'month_products',
            'foreignKey' => 'product_id',
            'associationForignKey' => 'month_id'
        )
    );


    public $belongsTo = array(
        'Producttype' => array(
            'className' => 'Producttype',
            'foreignKey' => 'product_type'
            ,'order' => 'name'
        )
    );

    public function productsByType() {
        return $this->find('list', array(
            'fields' => array('Product.id', 'Product.name', 'Producttype.type'),
            'order' => 'Product.product_type, Product.name',
            'contain' => array(
                'Producttype' => array(
                    'fields' => 'type',
                )
            ),
            'order' => 'Producttype.type, Product.name',
        ));
    }

}
