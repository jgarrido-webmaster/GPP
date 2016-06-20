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
class ExamenesController extends AppController {

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
		
		$examenes = $this->Examen->find('all',array('conditions' => array('Examen.usuario_id' => $this->Auth->user('id'))));

		$this->set(compact('examenes'));
	
	}


	public function login() {
		
    $this->layout = "login";
   if($this->request->is('post')) {

    if($this->Auth->login())
    {
       $this->redirect('/usuarios/escritorio');
          
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
	public function ver($id = null) {
		$this->Examen->id = $id;
		if (!$this->Examen->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->set('examen', $this->Examen->findById($id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		if ($this->request->is('post')) {
			$this->Examen->create();


			if(is_uploaded_file($this->data['Examen']['imagen']['tmp_name']))
            {
                $carpeta = "/uploads/examenes/";
                $carpeta_url = WWW_ROOT."/uploads/examenes/";
                $nombre = $this->data['Examen']['imagen']['name'];
                str_replace(' ', '-', $nombre);
                $nombre = date("d-m-Y-H-i-s").$nombre;
                $full_carpeta = $carpeta_url.$nombre;

                move_uploaded_file($this->data['Examen']['imagen']['tmp_name'], $nombre);
                
        
$this->request->data['Examen']['imagen2'] = $full_nombre;

            }else {

			if(!empty($this->data["imageData"])) {
			$dataURL = $this->data["imageData"];
			$dataURL = str_replace('data:image/png;base64,', '', $dataURL);
			$dataURL = str_replace(' ', '+', $dataURL);
			$image = base64_decode($dataURL);
			$filename = date('d-m-Y-h-i-s').'.png';
			file_put_contents(WWW_ROOT.'/uploads/examenes/' . $filename, $image);
			$this->request->data['Examen']['imagen1'] = $filename;
		}}
			if ($this->Examen->save($this->request->data)) {
				$this->Session->setFlash($this->mensajeOK('Examen creado con exito'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash($this->mensajeERROR('Intente nuevamente'));
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

	$this->Examen->id = $id;
		if (!$this->Examen->exists()) {
			throw new NotFoundException(__('Invalid Examen'));
		}
			if ($this->request->is('post') || $this->request->is('put') || $this->request->is('ajax')) {
 			


		if(is_uploaded_file($this->data['Examen']['imagen']['tmp_name']))
            {
           
                $carpeta = "/uploads/examenes/";
                $carpeta_url = WWW_ROOT."/uploads/examenes/";
                $nombre = $this->data['Examen']['imagen']['name'];
                str_replace(' ', '-', $nombre);
                $nombre = date("d-m-Y-H-i-s").$nombre;
                $full_carpeta = $carpeta_url.$nombre;

                move_uploaded_file($this->data['Examen']['imagen']['tmp_name'], $full_carpeta);
                
        
$this->request->data['Examen']['imagen2'] = $nombre;

            }else {

			if(!empty($this->data["imageData"])) {
			$dataURL = $this->data["imageData"];
			$dataURL = str_replace('data:image/png;base64,', '', $dataURL);
			$dataURL = str_replace(' ', '+', $dataURL);
			$image = base64_decode($dataURL);
			$filename = date('d-m-Y-h-i-s').'.png';
			file_put_contents(WWW_ROOT.'/uploads/examenes/' . $filename, $image);
			$this->request->data['Examen']['imagen1'] = $filename;
		}}
			if ($this->Examen->save($this->request->data)) {
				$this->Session->setFlash($this->mensajeOK('Examen creado con exito'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash($this->mensajeERROR('Intente nuevamente'));
				$this->redirect(array('action' => 'edit'));
			}

		

		
	}
	$this->set(compact('id'));
	$this->request->data = $this->Examen->read(null, $id);
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

		$this->Examen->id = $id;
		if (!$this->Examen->exists()) {
			throw new NotFoundException(__('Invalid examen'));
		}
		if ($this->Examen->delete()) {
			$this->Session->setFlash($this->mensajeOK('Eliminado correctamente'));
			$this->redirect(array('action' => 'index'));
		}
			$this->Session->setFlash($this->mensajeERROR('Intente nuevamente'));
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
	

public function download($nombre) {
        $this->viewClass = 'Media';
        
        $partes = explode('.',$nombre);
        $params = array(
            'id'        => $nombre,
            'name'      =>  $partes[0],
            'download'  => true,
            'extension' => $partes[1],
            'path'      => "uploads/examenes/"
        );
        $this->set($params);
  
	}

	public function registrar(){
		if ($this->request->is('post')) {
			$this->Examen->create();


		if(is_uploaded_file($this->data['Examen']['imagen']['tmp_name']))
            {
           
                $carpeta = "/uploads/examenes/";
                $carpeta_url = WWW_ROOT."/uploads/examenes/";
                $nombre = $this->data['Examen']['imagen']['name'];
                str_replace(' ', '-', $nombre);
                $nombre = date("d-m-Y-H-i-s").$nombre;
                $full_carpeta = $carpeta_url.$nombre;

                move_uploaded_file($this->data['Examen']['imagen']['tmp_name'], $full_carpeta);
                
        
$this->request->data['Examen']['imagen2'] = $nombre;

            }else {

			if(!empty($this->data["imageData"])) {
			$dataURL = $this->data["imageData"];
			$dataURL = str_replace('data:image/png;base64,', '', $dataURL);
			$dataURL = str_replace(' ', '+', $dataURL);
			$image = base64_decode($dataURL);
			$filename = date('d-m-Y-h-i-s').'.png';
			file_put_contents(WWW_ROOT.'/uploads/examenes/' . $filename, $image);
			$this->request->data['Examen']['imagen1'] = $filename;
		}}
			if ($this->Examen->save($this->request->data)) {
				$this->Session->setFlash($this->mensajeOK('Examen creado con exito'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash($this->mensajeERROR('Intente nuevamente'));
				$this->redirect(array('action' => 'add'));
			}
		}
	}

	public function reporte(){

		$examenes = $this->Examen->find('all',array('conditions' => array('Examen.centroMedico =' =>  $this->Auth->user('clinica'))));	
		$this->set(compact('examenes'));
	}

	public function verclinica($id){
		$this->Examen->id = $id;
		if (!$this->Examen->exists()) {
			throw new NotFoundException(__('Invalid Examen'));
		}
		$this->set('examen', $this->Examen->findById($id));

	}

	public function addcarga(){

		$this->loadModel('Carga');

		$cargas = $this->Carga->find('all',array('conditions' => array('Carga.usuario_id' => $this->Auth->user('id'))));
		$this->set(compact('cargas'));
		if ($this->request->is('post')) {
			$this->Examen->create();


			if(is_uploaded_file($this->data['Examen']['imagen']['tmp_name']))
            {
                $carpeta = "/uploads/examenes/";
                $carpeta_url = WWW_ROOT."/uploads/examenes/";
                $nombre = $this->data['Examen']['imagen']['name'];
                str_replace(' ', '-', $nombre);
                $nombre = date("d-m-Y-H-i-s").$nombre;
                $full_carpeta = $carpeta_url.$nombre;

                move_uploaded_file($this->data['Examen']['imagen']['tmp_name'], $nombre);
                
        
$this->request->data['Examen']['imagen2'] = $full_nombre;

            }else {

			if(!empty($this->data["imageData"])) {
			$dataURL = $this->data["imageData"];
			$dataURL = str_replace('data:image/png;base64,', '', $dataURL);
			$dataURL = str_replace(' ', '+', $dataURL);
			$image = base64_decode($dataURL);
			$filename = date('d-m-Y-h-i-s').'.png';
			file_put_contents('/uploads/examenes/' . $filename, $image);
			$this->request->data['Examen']['imagen1'] = $filename;
		}}
			if ($this->Examen->save($this->request->data)) {
				$this->Session->setFlash($this->mensajeOK('Examen creado con exito'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash($this->mensajeERROR('Intente nuevamente'));
				$this->redirect(array('action' => 'add'));
			}
		}
	}

}
