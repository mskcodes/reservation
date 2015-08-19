<?php
App::uses('Primary', 'Model');

/**
 * Primary Test Case
 *
 */
class PrimaryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.primary',
		'app.customer',
		'app.affiliation',
		'app.answer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Primary = ClassRegistry::init('Primary');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Primary);

		parent::tearDown();
	}

}
