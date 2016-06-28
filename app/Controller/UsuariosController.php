<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class UsuariosController extends AppController {

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
		$this->layout = 'login';
	
	}


	public function login() {
		
    $this->layout = "login";
   if($this->request->is('post')) {

    if($this->Auth->login())
    {
       $this->redirect('/principal/index');
          
    }else{
    	$this->Session->setFlash($this->mensajeERROR('Datos incorrectos'));
    	$this->redirect('/usuarios/login');
    }

}
            
  
}

public function logout() {
	$this->Session->setFlash($this->mensajeOK('Desconectado Exitosamente'));
    $this->redirect($this->Auth->logout());
}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->set('usuario', $this->Usuario->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario has been saved'));
				$this->redirect('/index');
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'));
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
	public function edit() {


        $this->Usuario->id = $this->Auth->user('id');

        if (!$this->Usuario->exists($id)) {
            throw new NotFoundException(__('Error: Usuario Invalido'));
        }

         if($this->data['Usuario']['pass'] != ""){
         	$this->request->data['Usuario']['password'] = $this->data['Usuario']['pass'];
         }

         if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->setFlash($this->mensajeOK('Datos actualizados con exito'));
                $this->redirect(array('action' => 'perfil'));
            } else {
                $this->Session->setFlash($this->mensajeERROR('Intente nuevamente'));
                $this->redirect(array('action' => 'perfil'));
            }
        } else {
            $this->request->data = $this->Usuario->read(null,  $this->Auth->user('id'));
           
        }
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this->Usuario->delete()) {
			$this->Session->setFlash(__('Usuario deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Usuario was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	

	public function escritorio(){

		if($this->Auth->user('tipo_id') == 2){
		$this->loadModel('Cita');
		$citas = $this->Cita->find('all',array('conditions' => array('Cita.usuario_id' => $this->Auth->user('id'))));
		$this->set(compact('citas'));

		$this->loadModel('Examen');
		$numExamenes = $this->Examen->find('count',array('conditions' => array('Examen.usuario_id' => $this->Auth->user('id'))));
		$this->set(compact('numExamenes'));
		
		$this->loadModel('Carga');
		$numCargas = $this->Carga->find('count',array('conditions' => array('Carga.usuario_id' => $this->Auth->user('id'))));
		$this->set(compact('numCargas'));


		$numCitas = $this->Cita->find('count',array('conditions' => array('Cita.usuario_id' => $this->Auth->user('id'))));
		$this->set(compact('numCitas'));

		} else {

		$this->loadModel('Cita');
		$citas = $this->Cita->find('all');
		$this->set(compact('citas'));

		$this->loadModel('Examen');
		$numExamenes = $this->Examen->find('count');
		$this->set(compact('numExamenes'));
		
		$this->loadModel('Carga');
		$numCargas = $this->Carga->find('count');
		$this->set(compact('numCargas'));
		
		$numCitas = $this->Cita->find('count');
		$this->set(compact('numCitas'));

		}
	}

	public function registrar(){
		$this->layout = "login";

		if ($this->request->is('post')) {

			$existe = $this->Usuario->find('count',array('conditions' => array('Usuario.username' => $this->data['Usuario']['username'])));

			if($existe == 0) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash($this->mensajeOK('Usuario creado exitosamente'));
				$this->redirect(array('action' => 'login'));
			} else {
			    $this->Session->setFlash($this->mensajeERROR('Intente nuevamente'));
				$this->redirect(array('action' => 'registrar'));
			}
		 }else {
		 	$this->Session->setFlash($this->mensajeERROR('El usuario ya existe'));
				$this->redirect(array('action' => 'registrar'));
		 }
		}
	}

	public function perfil(){

       $usuario = $this->Usuario->findById($this->Auth->user('id'));
       $this->set(compact('usuario'));
 	   
 	   $this->loadModel('Examen');
 	   $this->loadModel('Cita');
 	   $this->loadModel('Carga');

 	   $cExamen = $this->Examen->find('count',array('conditions' => array('Examen.usuario_id' => $this->Auth->user('id'))));
 	   $cCita = $this->Cita->find('count',array('conditions' => array('Cita.usuario_id' => $this->Auth->user('id'))));
 	   $cCarga = $this->Carga->find('count',array('conditions' => array('Carga.usuario_id' => $this->Auth->user('id'))));

 	   $this->set(compact('cExamen','cCita','cCarga'));

 	    $this->request->data = $this->Usuario->read(null,  $this->Auth->user('id'));
	}

	public function historico(){

       $usuario = $this->Usuario->findById($this->Auth->user('id'));
       $this->set(compact('usuario'));
 	   
 	   $this->loadModel('Examen');
 	   $this->loadModel('Cita');
 	   $this->loadModel('Carga');

 	   $examenes = $this->Examen->find('all',array('conditions' => array('Examen.usuario_id' => $this->Auth->user('id'))));
 	   $citas = $this->Cita->find('all',array('conditions' => array('Cita.usuario_id' => $this->Auth->user('id'),'Cita.tipo' => 'Enfermedad')));
 	   $cargas = $this->Carga->find('all',array('conditions' => array('Carga.usuario_id' => $this->Auth->user('id'))));
 	   $controles = $this->Cita->find('all',array('conditions' => array('Cita.usuario_id' => $this->Auth->user('id'),'Cita.tipo' => 'Control')));

 	   $this->set(compact('examenes','citas','cargas','controles'));

 	    
	}


	public function tratamientos(){

       $usuario = $this->Usuario->findById($this->Auth->user('id'));
       $this->set(compact('usuario'));
 	 
 	   $this->loadModel('Cita');


 	   $tratamientos = $this->Cita->find('all',array('conditions' => array('Cita.usuario_id' => $this->Auth->user('id'),'Cita.tipo' => 'Enfermedad')));

 	   $this->set(compact('tratamientos'));

 	    
	}

		public function familiar(){

 	 
 	   $this->loadModel('Cita');

 	   $buscar = 0;
 	   if ($this->request->is('post')) {

 			$buscar = 1;

 			$condiciones = array();

 			if(!empty($this->data['centroMedico']))
 				$condiciones[] = array('Cita.centroMedico' => $this->data['centroMedico']);

 			if(!empty($this->data['especialidad']))
 				$condiciones[] = array('Cita.especialidad' => $this->data['especialidad']);

 			if(!empty($this->data['enfermedad']))
 				$condiciones[] = array('Cita.enfermedad' => $this->data['enfermedad']);


		 	$historicos = $this->Cita->find('all',array('conditions' => $condiciones));


 	   }else{


 	   $historicos = $this->Cita->find('all');

 	   
 		}

 		$this->set(compact('historicos','buscar'));
 	    
 	    $enfermedades = $this->Cita->find('all',array('fields' => 'DISTINCT Cita.enfermedad'));
 	    $this->set(compact('enfermedades'));
	}

	public function clinicas(){

 	 
 	   $this->loadModel('Cita');

 	   $buscar = 0;
 	   if ($this->request->is('post')) {

 			$buscar = 1;

 			$condiciones = array();

 			if(!empty($this->data['centroMedico']))
 				$condiciones[] = array('Cita.centroMedico' => $this->data['centroMedico']);

 			if(!empty($this->data['enfermedad']))
 				$condiciones[] = array('Cita.enfermedad' => $this->data['enfermedad']);


		 	$historicos = $this->Cita->find('all',array('conditions' => $condiciones));


 	   }else{


 	   $historicos = $this->Cita->find('all');

 	   
 		}

 		$this->set(compact('historicos','buscar'));
 	    
 	    $enfermedades = $this->Cita->find('all',array('fields' => 'DISTINCT Cita.enfermedad'));
 	    $this->set(compact('enfermedades'));
	}

	public function enfermedades(){

 	 
 	   $this->loadModel('Cita');

 	   $buscar = 0;
 	   if ($this->request->is('post')) {

 			$buscar = 1;

 			$condiciones = array();

 			if(!empty($this->data['ciudad']))
 				$condiciones[] = array('Usuario.ciudad' => $this->data['ciudad']);

 			if(!empty($this->data['enfermedad']))
 				$condiciones[] = array('Cita.enfermedad' => $this->data['enfermedad']);


		 	$historicos = $this->Cita->find('all',array('conditions' => $condiciones));


 	   }else{


 	   $historicos = $this->Cita->find('all');

 	   
 		}

 		$this->set(compact('historicos','buscar'));
 	    
 	    $enfermedades = $this->Cita->find('all',array('fields' => 'DISTINCT Cita.enfermedad'));
 	    $this->set(compact('enfermedades'));
	}

}
