<?php
App::uses('AnswersTicket', 'Model');

/**
 * AnswersTicket Test Case
 *
 */
class AnswersTicketTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.answers_ticket',
		'app.answer',
		'app.customer',
		'app.affiliation',
		'app.primary',
		'app.ticket'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AnswersTicket = ClassRegistry::init('AnswersTicket');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AnswersTicket);

		parent::tearDown();
	}

}
