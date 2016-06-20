<?php
/**
 * CompraFixture
 *
 */
class CompraFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'cliente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'neto' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 15, 'unsigned' => false),
		'descuento' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 15, 'unsigned' => false),
		'total' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 15, 'unsigned' => false),
		'formaPago' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'documento' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'aprobado' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'usuario_id' => 1,
			'cliente_id' => 1,
			'neto' => 1,
			'descuento' => 1,
			'total' => 1,
			'formaPago' => 'Lorem ipsum dolor ',
			'documento' => 'Lorem ipsum dolor ',
			'aprobado' => 1,
			'created' => '2016-06-20 14:11:53',
			'modified' => '2016-06-20 14:11:53'
		),
	);

}
