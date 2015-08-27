<?php
/**
 * TicketFixture
 *
 */
class TicketFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'ticket_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'stock' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'customer_count' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'ticket_name' => 'Lorem ipsum dolor sit amet',
			'stock' => 1,
			'customer_count' => 1,
			'sales_info_id' => 1,
			'created' => '2015-08-27 11:42:58',
			'modified' => '2015-08-27 11:42:58'
		),
	);

}
