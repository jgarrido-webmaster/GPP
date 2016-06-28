<?php
App::uses('AppController', 'Controller');
/**
 * Direcciones Controller
 *
 * @property Direccion $Direccion
 * @property PaginatorComponent $Paginator
 */
class DireccionesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	 public $components = array(
        'Session',
        'Auth' => array(
        	'loginAction' => array(
            'controller' => 'usuarios',
            'action' => 'login'
        ),
            'loginRedirect' => array('controller' => 'principal', 'action' => 'index'),
            'authenticate' => array(
            	'Form' => array(
            		'userModel' => 'Usuario',
                	'fields' => array('username' => 'username','password' => 'password')
          		  )),
            'logoutRedirect' => array('controller' => 'principal', 'action' => 'index')
        )
    );

 public function beforeFilter() {
        $this->Auth->allow('login','add','registrar','edit');


    }

 public function mensajeERROR($mensaje){

 	return '<div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <h4><i class="fa fa-bell-alt"></i>ERROR!</h4>
                  <p>'.$mensaje.'</p></div>';
 }

  public function mensajeOK($mensaje){

 	return '<div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <h4><i class="fa fa-bell-alt"></i>COMPLETADO!</h4>
                  <p>'.$mensaje.'</p></div>';
 }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Direccion->recursive = 0;
		$this->set('direcciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Direccion->exists($id)) {
			throw new NotFoundException(__('Invalid direccion'));
		}
		$options = array('conditions' => array('Direccion.' . $this->Direccion->primaryKey => $id));
		$this->set('direccion', $this->Direccion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		if ($this->request->is('post')) {

			$this->Direccion->create();
			if ($this->Direccion->save($this->request->data)) {
				$this->Session->setFlash($this->mensajeOK('Dirección creada exitosamente'));
				$this->redirect("/clientes/index");
			} else {
				$this->Session->setFlash($this->mensajeERROR('Intente nuevamente'));
				$this->redirect("/clientes/index");
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
		if (!$this->Direccion->exists($id)) {
			throw new NotFoundException(__('Invalid direccion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Direccion->save($this->request->data)) {
				$this->Session->setFlash(__('The direccion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The direccion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Direccion.' . $this->Direccion->primaryKey => $id));
			$this->request->data = $this->Direccion->find('first', $options);
		}
		$clientes = $this->Direccion->Cliente->find('list');
		$usuarios = $this->Direccion->Usuario->find('list');
		$this->set(compact('clientes', 'usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Direccion->id = $id;

		if (!$this->Direccion->exists()) {
			throw new NotFoundException(__('Direccion Invalida'));
		}
		
		if ($this->Direccion->delete()) {
			$this->Session->setFlash($this->mensajeOK('Dirección eliminada exitosamente'));
			$this->redirect("/clientes/index");
		}
	}
}
