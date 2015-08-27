<?php
/**
 * AnswerFixture
 *
 */
class AnswerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'answer_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 12, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'sales_info_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'answer_name' => 'Lorem ipsu',
			'sales_info_id' => 1,
			'created' => '2015-08-27 11:41:49',
			'modified' => '2015-08-27 11:41:49'
		),
	);

}
