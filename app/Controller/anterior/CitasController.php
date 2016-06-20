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
class CitasController extends AppController {

  public $components = array(
        'Session',
        'Auth' => array(
        	'loginAction' => array(
            'controller' => 'usuarios',
            'action' => 'login'
        ),
            'loginRedirect' => array('controller' => 'usuarios', 'action' => 'escritorio'),
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
        $this->layout = "logueado";


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

		$citas = $this->Cita->find('all',array('conditions' => array('Cita.usuario_id' => $this->Auth->user('id'))));
		$this->set(compact('citas'));
	}

	public function ver($id = null) {
		$this->Cita->id = $id;
		if (!$this->Cita->exists()) {
			throw new NotFoundException(__('Invalid Cita'));
		}
		$this->set('cita', $this->Cita->read(null, $id));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Cita->create();
			if ($this->Cita->save($this->request->data)) {
				$this->Session->setFlash($this->mensajeOK('Cita Generada Exitosamente.'));		
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash($this->mensajeERROR('Intente nuevamente.'));		
				$this->redirect(array('action' => 'add'));
			}
		}
	}

public function addcarga() {

		$this->loadModel('Carga');
		$cargas = $this->Carga->find('all',array('conditions' => array('Carga.usuario_id' => $this->Auth->user('id'))));
		$this->set(compact('cargas'));

		if ($this->request->is('post')) {
			$this->Cita->create();
			if ($this->Cita->save($this->request->data)) {
				$this->Session->setFlash($this->mensajeOK('Cita Creada Exitosamente.'));		
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash($this->mensajeERROR('Intente nuevamente.'));		
				$this->redirect(array('action' => 'add'));
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

		$this->layout = 'admin';
		 $id = $this->Auth->user('id');
        $usuario = $this->Auth->user('username');

        $this->set('usuario',$usuario);
        $this->Usuario->id = $id;

        if (!$this->Usuario->exists($id)) {
            throw new NotFoundException(__('Error: Usuario Invalido'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->setFlash(__('Usuario actualizado correctamente'));
                $this->redirect(array('action' => 'edit'));
            } else {
                $this->Session->setFlash(__('Error: Imposible actualizar datos.'));
            }
        } else {
            $this->request->data = $this->Usuario->read(null, $id);
            unset($this->request->data['Usuario']['password']);
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

	public function clinicas() {

		$this->loadModel('Examen');
		$this->loadModel('Cita');

		$examenes = $this->Examen->find('all',array('conditions' => array('Examen.usuario_id' => $this->Auth->user('id'))));
		$citas = $this->Cita->find('all',array('conditions' => array('Cita.usuario_id' => $this->Auth->user('id'))));

		$this->set(compact('examenes','citas'));
	}



}
