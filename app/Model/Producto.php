<?php
App::uses('AppModel', 'Model');
/**
 * Producto Model
 *
 * @property Usuario $Usuario
 * @property Promocion $Promocion
 * @property Compra $Compra
 */
class Producto extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */



/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Compra' => array(
			'className' => 'Compra',
			'joinTable' => 'productos_compras',
			'foreignKey' => 'producto_id',
			'associationForeignKey' => 'compra_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
