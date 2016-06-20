<?php
App::uses('Direccion', 'Model');

/**
 * Direccion Test Case
 *
 */
class DireccionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.direccion',
		'app.cliente',
		'app.usuario',
		'app.tipo',
		'app.compra',
		'app.producto',
		'app.productos_compra'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Direccion = ClassRegistry::init('Direccion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Direccion);

		parent::tearDown();
	}

}
