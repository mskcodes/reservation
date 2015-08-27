<?php
App::uses('AppModel', 'Model');
/**
 * Answer Model
 *
 * @property SalesInfo $SalesInfo
 * @property SalesInfo $SalesInfo
 */
class Answer extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'answer_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'answer_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'SalesInfo' => array(
			'className' => 'SalesInfo',
			'foreignKey' => 'sales_info_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'SalesInfo' => array(
			'className' => 'SalesInfo',
			'foreignKey' => 'answer_id',
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
