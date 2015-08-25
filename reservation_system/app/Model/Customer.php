<?php
App::uses('AppModel', 'Model');
App::uses('CustomersController' , 'AppController', 'Controller');

/**
 * Customer Model
 *
 * @property Affiliation $Affiliation
 * @property Primary $Primary
 * @property Answer $Answer
 */
class Customer extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'customer_name';
	public $components = array('Paginator', 'Session');


/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'primary_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'customer_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'answer_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ticket_id' => array(
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
		'Affiliation' => array(
			'className' => 'Affiliation',
			'foreignKey' => 'affiliation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Primary' => array(
			'className' => 'Primary',
			'foreignKey' => 'primary_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ticket' => array(
			'className' => 'Ticket',
			'foreignKey' => 'ticket_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache' => 'customer_count',
            'counterScope' => array('answer_id' => 2)
		),
		'Answer' => array(
			'className' => 'Answer',
			'foreignKey' => 'answer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
}
