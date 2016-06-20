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
class ReportesController extends AppController {

  public $components = array(
  	    'RequestHandler',
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
	public function clinicas() {

	}

	public function medicos(){

		$this->loadModel('Cita');

		$medicos = $this->Cita->find('all',array('order' => array('Cita.doctor')));
		$this->set(compact('medicos'));

		$clinica = $this->Auth->user('clinica');
		$this->set(compact('clinica'));
	}

	public function consultas(){

		$this->loadModel('Cita');
		$citas = $this->Cita->find('all',array('order' => array('Cita.fechaCita')));
		$this->set(compact('citas'));

		$clinica = $this->Auth->user('clinica');
		$this->set(compact('clinica'));
	}

	public function examenes(){

		$this->loadModel('Examen');
		$examenes = $this->Examen->find('all',array('order' => array('Examen.fechaExamen')));
		$this->set(compact('examenes'));

		$clinica = $this->Auth->user('clinica');
		$this->set(compact('clinica'));
	}

	public function enfermedades(){

		$this->loadModel('Cita');
		$citas = $this->Cita->find('all',array('conditions' => array('NOT' => array('Cita.enfermedad' => '')) ,'order' => array('Cita.enfermedad')));
		$this->set(compact('citas'));

		$clinica = $this->Auth->user('clinica');
		$this->set(compact('clinica'));
	}

	public function cargas(){

		$this->loadModel('Carga');
		$cargas = $this->Carga->find('all',array('order' => array('Carga.usuario_id')));
		$this->set(compact('cargas'));

		$clinica = $this->Auth->user('clinica');
		$this->set(compact('clinica'));
	}
}
