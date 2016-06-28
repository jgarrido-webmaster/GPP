<div class="container marketing" data-role="content" style="width: 100%; margin-top: 0!important;">
     <div class="row">
     <div class="title2">  
         <h2 class="text-center">Datos Cliente</h2>
     </div>
     

     <div class="process">
      <?php echo $this->Session->flash(); ?>
      <div class="container" style="width: 100%;">
      <div class="row">
          <div class="col-md-12">
          	<ul class="datosClientes">
          		<li><strong>Empresa: </strong><?php echo $cliente["Cliente"]["empresa"]; ?></li>
          		<li><strong>Rut: </strong><?php echo $cliente["Cliente"]["rut"]; ?></li>
          		<li><strong>Razon Social: </strong><?php echo $cliente["Cliente"]["razonSocial"]; ?></li>
          		<li><strong>giro: </strong> <?php echo $cliente["Cliente"]["giro"]; ?></li>
          		<li><strong>Telefono: </strong> <?php echo $cliente["Cliente"]["telefono"]; ?> - <strong>Celular: </strong><?php echo $cliente["Cliente"]["celular"]; ?></li>
          		<li><strong>Contacto: </strong><?php echo $cliente["Cliente"]["nombre"]." ".$cliente["Cliente"]["apellidos"]; ?></li>
          	</ul>
          </div>
       </div>
        <div class="row" style="width: 100%;">
          <div class="col-md-12">
             

     <div class="title4">  
         <h4 class="text-center">Direcciones Registradas</h4>
     </div>

              <div class="table-responsive">
                  <table class="table table-hover">
                      <tr>
                          <td class="info">Nombre</td>
                          <td class="info">Direccion</td>
                          <td class="info">Ciudad</td>
                      </tr>

                      <?php 
                      
                      foreach ($cliente["Direccion"] as $key => $direccion) { ?>
                      <tr>
                          <td><?php echo $direccion["nombre"]; ?></td>
                          <td><?php echo $direccion["direccion"]; ?></td>
                          <td><?php echo $direccion["ciudad"]; ?></td>
                          <td class="danger text-center"><a href="/direcciones/delete/<?php echo $direccion["id"]; ?>" rel="external">x</a></td>
                      </tr>
                    
                      <?php } ?>
                  </table>
              </div>

               <?php echo $this->Form->create('Direccion',array('action' => 'add', 'role' => 'form','method' => 'post','type' => 'file' , 'rel' => 'external')); ?>
               	<h4>Añadir Nueva Direccion</h4>
                 <div class="form-group">
                    
                   
                    <input type="text" name="data[Direccion][nombre]" class="text-center col-xs-6" id="nombre" placeholder="Nombre Identificatorio" data-role="none">

                   
                    <input type="text" name="data[Direccion][ciudad]" class="text-center col-md-6 col-xs-6" id="ciudad" placeholder="Ciudad" data-role="none">

 					<input type="text" name="data[Direccion][direccion]" class="form-control text-center" id="direccion" placeholder="Direccion" data-role="none">

                   <select name="data[Direccion][region]" id="region" class="form-control text-center col-md-6 col-xs-6">
					<option value="" selected="selected">Regiones</option>
					<option >1 Tarapaca</option>
					<option >2 Antofagasta</option>
					<option >3 Atacama</option>
					<option >4 Coquimbo</option>
					<option >5 Valparaiso</option>
					<option >6 O'Higgins</option>
					<option >7 Maule</option>
					<option >8 Bio - Bio</option>
					<option >9 Araucania</option>
					<option >10 Los Lagos</option>
					<option >11 Aisen</option>
					<option >12 Magallanes Y Antartica</option>
					<option >13 Metropolitana</option>
					<option >14 Los Rios</option>
					<option >15 Arica y Parinacota</option>
					</select>

    
    			<input type="hidden" name="data[Direccion][cliente_id]" class="text-center col-md-6 col-xs-6" id="cliente" placeholder="cliente" data-role="none" value="<?php echo $cliente["Cliente"]["id"]; ?>">


                    

                    <input type="submit" id="busca" class="btn btn-primary btn-block" value="Crear Direccion" data-role="none">
                 </div>
              <?php echo $this->Form->end(); ?>

          </div>
        </div> <!-- row -->
        </div>
        
          <a href="/principal/index" data-transition="slider"><div class="btn btn-primary btn-block">Inicio</div></a>
        
     </div><!-- Process -->
     </div> <!-- row -->
    </div>

        