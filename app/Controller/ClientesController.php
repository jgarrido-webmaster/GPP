<?php
App::uses('AppController', 'Controller');
/**
 * Clientes Controller
 *
 * @property Cliente $Cliente
 * @property PaginatorComponent $Paginator
 */
class ClientesController extends AppController {

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
		$clientes = $this->Cliente->find('all');
		$this->set(compact("clientes"));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function ver($id = null) {
		$this->layout = "ajax";
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Cliente Invalido'));
		}

		$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
		$this->set('cliente', $this->Cliente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {

			$existe = $this->Cliente->find('count',array('conditions' => array('Cliente.rut' => $this->data['Cliente']['rut'])));

			if($existe == 0) {
				$this->Cliente->create();
				if ($this->Cliente->save($this->request->data)) {

					$this->Session->setFlash($this->mensajeOK('Cliente creado exitosamente'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash($this->mensajeERROR('Intente nuevamente'));
					$this->redirect(array('action' => 'index'));
				}
			} else {
		 		$this->Session->setFlash($this->mensajeERROR('El RUT de empresa ya existe'));
				$this->redirect(array('action' => 'index'));
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
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash(__('The cliente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cliente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
			$this->request->data = $this->Cliente->find('first', $options);
		}
		$usuarios = $this->Cliente->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		
		$this->Cliente->id = $id;
		
		if (!$this->Cliente->exists()) {
			throw new NotFoundException(__('Cliente Invalido'));
		}


		if ($this->Cliente->delete()) {
			$this->Session->setFlash($this->mensajeOK('Cliente eliminado exitosamente'));
			$this->redirect(array('action' => 'index'));
		} 

	}
}
