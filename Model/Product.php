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
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Please enter product name.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'product_type' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
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

	public function popularProducts() {
		return $this->find('list', array(
			'recursive' => -1,
			'joins' => array(
				array(
					'table' => 'product_vendors',
					'alias' => 'ProductVendor',
					'type' => 'INNER',
					'conditions' => array(
						'Product.id = ProductVendor.product_id',
					),
				),
				array(
					'table' => 'vendors',
					'alias' => 'Vendor',
					'type' => 'INNER',
					'conditions' => array(
						'ProductVendor.vendor_id = Vendor.id',
					),
				)
			),
			'order' => 'Product.name',
			'conditions' => array(
				'Vendor.active' => 1,
			),
			'group' => array(
				'Product.name HAVING count(Product.name) > 1'
			),
			'fields' => array(
				'Product.name'
			),
		));
	}
}
