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
class CargasController extends AppController {

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
		
		$cargas = $this->Carga->find('all',array('conditions' => array('Carga.usuario_id' => $this->Auth->user('id'))));

		$this->set(compact('cargas'));
	}


	public function ver($id = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->set('usuario', $this->Usuario->read(null, $id));
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->Carga->create();
			if ($this->Carga->save($this->request->data)) {
				$this->Session->setFlash($this->mensajeOK('Carga creada con exito'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash($this->mensajeERROR('Rellene todos los campos'));
				$this->redirect(array('action' => 'add'));
			}
		}
	}

	public function edit($id = null) {

		$this->set(compact('id'));

        $this->Carga->id = $id;

        if (!$this->Carga->exists($id)) {
            throw new NotFoundException(__('Error: Carga Invalido'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Carga->save($this->request->data)) {
               $this->Session->setFlash($this->mensajeOK('Carga actualizada con exito'));
				$this->redirect(array('action' => 'index'));
            } else {
              $this->Session->setFlash($this->mensajeERROR('Rellene todos los campos'));
				$this->redirect('/cargas/edit/'.$id);
            }
        } else {
            $this->request->data = $this->Carga->read(null, $id);
            
        }
	}


	public function delete($id = null) {

		$this->Carga->id = $id;
		if (!$this->Carga->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this->Carga->delete()) {
			 $this->Session->setFlash($this->mensajeOK('Carga eliminada con exito'));
			$this->redirect(array('action' => 'index'));
		}
		 $this->Session->setFlash($this->mensajeERROR('Intente nuevamente'));
				$this->redirect('/cargas/edit/'.$id);
	}



}
