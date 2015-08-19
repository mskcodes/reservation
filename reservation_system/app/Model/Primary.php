<?php
App::uses('AppModel', 'Model');
/**
 * Primary Model
 *
 * @property Customer $Customer
 */
class Primary extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'primarys';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'primary_type';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'primary_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
