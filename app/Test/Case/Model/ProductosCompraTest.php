<?php
App::uses('ProductosCompra', 'Model');

/**
 * ProductosCompra Test Case
 *
 */
class ProductosCompraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.productos_compra',
		'app.compra',
		'app.usuario',
		'app.tipo',
		'app.cliente',
		'app.direccion',
		'app.producto',
		'app.promocion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductosCompra = ClassRegistry::init('ProductosCompra');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductosCompra);

		parent::tearDown();
	}

}
