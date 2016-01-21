<?php
/**
 * AffiliationFixture
 *
 */
class AffiliationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'affiliation_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'tel' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
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
			'affiliation_name' => 'Lorem ipsum dolor sit amet',
			'tel' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-08-27 11:40:25',
			'modified' => '2015-08-27 11:40:25'
		),
	);

}
