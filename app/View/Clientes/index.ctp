<div class="container marketing" data-role="content">
     <div class="row">
     <div class="title2">  
         <h2 class="text-center">Gestionar Clientes</h2>
     </div>
     

     <div class="process">
      <?php echo $this->Session->flash(); ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             
              <?php echo $this->Form->create('Cliente',array('action' => 'add', 'role' => 'form','method' => 'post','type' => 'file' , 'rel' => 'external')); ?>

                 <div class="form-group">
                    
                   
                    <input type="text" name="data[Cliente][nombre]" class="text-center col-xs-6" id="nombre" placeholder="Nombre" data-role="none">

                    <input type="text" name="data[Cliente][apellidos]" class="text-center col-md-6 col-xs-6" id="apellidos" placeholder="Apellidos" data-role="none">

                    <input type="text" name="data[Cliente][empresa]" class="text-center col-xs-6" id="empresa" placeholder="Empresa" data-role="none">

                    <input type="text" name="data[Cliente][rut]" class="text-center col-md-6 col-xs-6" id="rut" placeholder="Rut" data-role="none">

                    <input type="text" name="data[Cliente][razonSocial]" class="text-center col-md-6 col-xs-6" id="razonSocial" placeholder="Razón Social" data-role="none">

                    <input type="text" name="data[Cliente][giro]" class="text-center col-xs-6" id="giro" placeholder="Giro" data-role="none">

                    <input type="text" name="data[Cliente][telefono]" class="text-center col-md-6 col-xs-6" id="Telefono" placeholder="Telefono" data-role="none">

                    <input type="text" name="data[Cliente][celular]" class="text-center col-xs-6" id="celular" placeholder="Celular" data-role="none">

                    

                    <input type="submit" id="busca" class="btn btn-primary btn-block" value="Crear Cliente" data-role="none">
                 </div>
              <?php echo $this->Form->end(); ?>
              
               
     <div class="title4">  
         <h4 class="text-center">Clientes Registrados</h4>
     </div>

              <div class="table-responsive">
                  <table class="table table-hover">
                      <tr>
                          <td class="info">Empresa</td>
                          <td class="info">Rut</td>
                          <td class="info">Contacto</td>
                          <td class="info">Telefono</td>
                      </tr>
                      <?php foreach ($clientes as $key => $cliente) { ?>
                      <tr>
                          <td><a href="/clientes/ver/<?php echo $cliente["Cliente"]["id"]; ?>" data-toggle="modal" data-target="#myModal"><?php echo $cliente["Cliente"]["empresa"]; ?></a></td>
                          <td><a href="/clientes/ver/<?php echo $cliente["Cliente"]["id"]; ?>" data-toggle="modal" data-target="#myModal"><?php echo $cliente["Cliente"]["rut"]; ?></a></td>
                          <td><a href="/clientes/ver/<?php echo $cliente["Cliente"]["id"]; ?>" data-toggle="modal" data-target="#myModal"><?php echo $cliente["Cliente"]["nombre"]." ".$cliente["Cliente"]["apellidos"]; ?></a></td>
                          <td><a href="/clientes/ver/<?php echo $cliente["Cliente"]["id"]; ?>" ><?php echo $cliente["Cliente"]["telefono"]; ?></a></td>
                          <td class="danger text-center"><a href="/clientes/delete/<?php echo $cliente["Cliente"]["id"]; ?>" rel="external">x</a></td>
                      </tr>
                    
                      <?php } ?>
                  </table>
              </div>
          </div>
        </div> <!-- row -->
        </div>
        
          <a href="/principal/index" data-transition="slider"><div class="btn btn-primary btn-block">Inicio</div></a>
        
     </div><!-- Process -->
     </div> <!-- row -->
    </div>

          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content" data-role="content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Información de Producto</h4>
              </div>
                  <div class="modal-body">
                      <div class="container">
                      <div class="row">
                       <div class="col-md-12">
                       <h4>Nombre producto</h4>
                       </div>
                           <div class="col-md-6 col-xs-6">
                            <p>SKU: 00000000</p>
                            <p>Cod: 00000000</p>
                            <p>Item: AAAAAA BBBBBB CCCCC</p>
                            <h5>Stock: 1000L</h5>
                            <h5>Precio: $200.000</h5>
                           </div>
                           <div class="col-md-6 col-xs-6">
                                <img class="img-responsive" src="images/productos/deltron.jpg" alt="deltron">
                           </div>
                       </div><!-- row -->

                       <div class="row">
                        <div class="col-md-12">  
                        <p>Descripción: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae soluta, doloremque. Aperiam nihil eum laborum unde ad nesciunt dolores, quo. Qui temporibus, laborum sequi. Sed laborum fugit doloribus vero explicabo.</p>
                        </div>
                      </div><!-- row -->
                      </div><!-- container -->
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
           
            </div>
          </div>