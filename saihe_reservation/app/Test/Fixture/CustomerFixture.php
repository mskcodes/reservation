<?php
/**
 * CustomerFixture
 *
 */
class CustomerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'affiliation_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'primary_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'customer_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'tel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'affiliation_id' => 1,
			'primary_id' => 1,
			'customer_name' => 'Lorem ipsum dolor sit amet',
			'tel' => 'Lorem ipsu',
			'email' => 'Lorem ipsum dolor sit amet',
			'sales_info_id' => 1,
			'created' => '2015-08-27 11:42:19',
			'modified' => '2015-08-27 11:42:19'
		),
	);

}
