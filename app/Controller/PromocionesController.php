<?php
App::uses('AppController', 'Controller');
/**
 * Promociones Controller
 *
 * @property Promocion $Promocion
 * @property PaginatorComponent $Paginator
 */
class PromocionesController extends AppController {

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
		$promociones = $this->Promocion->find("all");
		$this->set(compact("promociones"));
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

		if (!$this->Promocion->exists($id)) {
			throw new NotFoundException(__('Promocion Invalida'));
		}

		$options = array('conditions' => array('Promocion.' . $this->Promocion->primaryKey => $id));
		$this->set('promocion', $this->Promocion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {

			if(!empty($this->request->data['Promocion']['img1']['name']))
                    {
                    	
                        $file = $this->request->data['Promocion']['img1']; //put the data into a var for easy use

                        $nombre = 'uploads/' . date('dmYhis') . $file['name'];
                            move_uploaded_file($file['tmp_name'], WWW_ROOT . $nombre );

                            //prepare the filename for database entry
                            $this->data['Promocion']['documento'] = $nombre;
                            $this->request->data['Promocion']['documento'] = $nombre;

             		}

			$this->Promocion->create();
			if ($this->Promocion->save($this->request->data)) {
				$this->Session->setFlash($this->mensajeOK('Promoción creada exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash($this->mensajeERROR('Intente nuevamente'));
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
		if (!$this->Promocion->exists($id)) {
			throw new NotFoundException(__('Invalid promocion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Promocion->save($this->request->data)) {
				$this->Session->setFlash(__('The promocion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The promocion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Promocion.' . $this->Promocion->primaryKey => $id));
			$this->request->data = $this->Promocion->find('first', $options);
		}
		$productos = $this->Promocion->Promocion->find('list');
		$usuarios = $this->Promocion->Usuario->find('list');
		$this->set(compact('productos', 'usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Promocion->id = $id;
		if (!$this->Promocion->exists()) {
			throw new NotFoundException(__('Promocion Invalida'));
		}

		if ($this->Promocion->delete()) {
			$this->Session->setFlash($this->mensajeOK('Promoción eliminada exitosamente'));
			$this->redirect(array('action' => 'index'));
		} 

	}
}
