<?php
App::uses('Promocion', 'Model');

/**
 * Promocion Test Case
 *
 */
class PromocionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.promocion',
		'app.producto',
		'app.usuario',
		'app.tipo',
		'app.compra',
		'app.cliente',
		'app.direccion',
		'app.productos_compra'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Promocion = ClassRegistry::init('Promocion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Promocion);

		parent::tearDown();
	}

}
