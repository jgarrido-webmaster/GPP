<?php
App::uses('AppController', 'Controller');
/**
 * ProductosCompras Controller
 *
 * @property ProductosCompra $ProductosCompra
 * @property PaginatorComponent $Paginator
 */
class ProductosComprasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProductosCompra->recursive = 0;
		$this->set('productosCompras', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductosCompra->exists($id)) {
			throw new NotFoundException(__('Invalid productos compra'));
		}
		$options = array('conditions' => array('ProductosCompra.' . $this->ProductosCompra->primaryKey => $id));
		$this->set('productosCompra', $this->ProductosCompra->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductosCompra->create();
			if ($this->ProductosCompra->save($this->request->data)) {
				$this->Session->setFlash(__('The productos compra has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The productos compra could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProductosCompra->exists($id)) {
			throw new NotFoundException(__('Invalid productos compra'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductosCompra->save($this->request->data)) {
				$this->Session->setFlash(__('The productos compra has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The productos compra could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductosCompra.' . $this->ProductosCompra->primaryKey => $id));
			$this->request->data = $this->ProductosCompra->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProductosCompra->id = $id;
		if (!$this->ProductosCompra->exists()) {
			throw new NotFoundException(__('Invalid productos compra'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProductosCompra->delete()) {
			$this->Session->setFlash(__('The productos compra has been deleted.'));
		} else {
			$this->Session->setFlash(__('The productos compra could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
