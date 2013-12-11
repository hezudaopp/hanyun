<?php
App::uses('Ip', 'Model');

/**
 * Ip Test Case
 *
 */
class IpTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ip',
		'app.item',
		'app.disk',
		'app.items_disk',
		'app.mem',
		'app.items_mem',
		'app.processer',
		'app.items_processer',
		'app.items_ip'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ip = ClassRegistry::init('Ip');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ip);

		parent::tearDown();
	}

}
