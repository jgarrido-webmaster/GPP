<?php
App::uses('AppController', 'Controller');
/**
 * Productos Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 */
class ProductosController extends AppController {

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
		$productos = $this->Producto->find('all');
		$this->set(compact("productos"));
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
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Producto Invalido'));
		}
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->set('producto', $this->Producto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			

			$existe = $this->Producto->find('count',array('conditions' => array('Producto.codigo' => $this->data['Producto']['codigo'])));

			if($existe == 0) {

				if(!empty($this->request->data['Producto']['img1']['name']))
                    {
                    	
                        $file = $this->request->data['Producto']['img1']; //put the data into a var for easy use

                        $nombre = 'uploads/' . date('dmYhis') . $file['name'];
                            move_uploaded_file($file['tmp_name'], WWW_ROOT . $nombre );

                            //prepare the filename for database entry
                            $this->data['Producto']['img'] = $nombre;
                            $this->request->data['Producto']['img'] = $nombre;

             		}

             $this->Producto->create();	
			if ($this->Producto->save($this->request->data)) {
				
				$this->Session->setFlash($this->mensajeOK('Producto creado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
					$this->Session->setFlash($this->mensajeERROR('Intente nuevamente'));
					$this->redirect(array('action' => 'index'));
				}


			} else {
		 		$this->Session->setFlash($this->mensajeERROR('El código de producto ya existe'));
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
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The producto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
		}
		$usuarios = $this->Producto->Usuario->find('list');
		$compras = $this->Producto->Compra->find('list');
		$this->set(compact('usuarios', 'compras'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Producto->id = $id;
		
		if (!$this->Producto->exists()) {
			throw new NotFoundException(__('Producto Invalido'));
		}

		if ($this->Producto->delete()) {
			$this->Session->setFlash($this->mensajeOK('Producto eliminado exitosamente'));
			$this->redirect(array('action' => 'index'));
		} 
	}
}
