<?php
App::uses('ItemsIp', 'Model');

/**
 * ItemsIp Test Case
 *
 */
class ItemsIpTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.items_ip',
		'app.item',
		'app.disk',
		'app.items_disk',
		'app.mem',
		'app.items_mem',
		'app.processer',
		'app.items_processer',
		'app.ip'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemsIp = ClassRegistry::init('ItemsIp');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemsIp);

		parent::tearDown();
	}

}
