<?php
App::uses('Rack', 'Model');

/**
 * Rack Test Case
 *
 */
class RackTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rack'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Rack = ClassRegistry::init('Rack');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Rack);

		parent::tearDown();
	}

}
