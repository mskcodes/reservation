<?php
App::uses('SalesInfo', 'Model');

/**
 * SalesInfo Test Case
 *
 */
class SalesInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sales_info',
		'app.customer',
		'app.affiliation',
		'app.primary',
		'app.ticket',
		'app.answer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SalesInfo = ClassRegistry::init('SalesInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SalesInfo);

		parent::tearDown();
	}

}
