<div class="container marketing" data-role="content">
     <div class="row">
     <div class="title2">  
         <h2 class="text-center">Gestionar Promociones</h2>
     </div>
     

     <div class="process">
      <?php echo $this->Session->flash(); ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             
              <?php echo $this->Form->create('Promocion',array('action' => 'add', 'role' => 'form','method' => 'post','type' => 'file' , 'rel' => 'external','data-ajax' => 'false')); ?>

                 <div class="form-group">
                    
                   
                    <input type="text" name="data[Promocion][titulo]" class="text-center col-xs-6" id="nombre" placeholder="Nombre Item" data-role="none">

                    

                    <input type="date" name="data[Promocion][desde]" class="text-center col-md-6 col-xs-6" id="precio" placeholder="Precio" data-role="none">

                    <input type="date" name="data[Promocion][hasta]" class="text-center col-xs-6" id="codigo" placeholder="Código" data-role="none">

                     <div class="text-center col-xs-6">
                    	<label style="float: left;">PDF </label>
                    	<input type="file" name="data[Promocion][img1]" id="img" placeholder="Imagen" data-role="none">
                    </div>

                    <textarea class="form-control" id="descripcion" name="data[Promocion][descripcion]" placeholder="Ingrese descripción promocion"></textarea>

                    

                    <input type="submit" id="busca" class="btn btn-primary btn-block" value="Crear Promocion" data-role="none">
                 </div>
              <?php echo $this->Form->end(); ?>
              
               
     <div class="title4">  
         <h4 class="text-center">Promociones Registradas</h4>
     </div>

              <div class="table-responsive">
                  <table class="table table-hover">
                      <tr>
                          <td class="info">Titulo</td>
                          <td class="info">Desde</td>
                          <td class="info">Hasta</td>
                          <td class="info">PDF</td>
                      </tr>
                      <?php foreach ($promociones as $key => $promocion) { ?>
                      <tr>
                          <td><a href="/promociones/ver/<?php echo $promocion["Promocion"]["id"]; ?>" data-toggle="modal" data-target="#myModal<?php echo $promocion["Promocion"]["id"]; ?>"><?php echo $promocion["Promocion"]["titulo"]; ?></a></td>
                          <td><a href="/promociones/ver/<?php echo $promocion["Promocion"]["id"]; ?>" data-toggle="modal" data-target="#myModal<?php echo $promocion["Promocion"]["id"]; ?>"><?php echo date("d-m-Y",strtotime($promocion["Promocion"]["desde"])); ?></a></td>
                          <td><a href="/promociones/ver/<?php echo $promocion["Promocion"]["id"]; ?>" data-toggle="modal" data-target="#myModal<?php echo $promocion["Promocion"]["id"]; ?>"><?php echo date("d-m-Y",strtotime($promocion["Promocion"]["hasta"])); ?></a></td>
                          <td><a href="/<?php echo $promocion["Promocion"]["documento"]; ?>" rel="external">Descargar</a></td>
                          <td class="danger text-center"><a href="/promociones/delete/<?php echo $promocion["Promocion"]["id"]; ?>" rel="external">x</a></td>
                      </tr>
                      
          <div class="modal fade" id="myModal<?php echo $promocion["Promocion"]["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content" data-role="content">
              
            </div>
           
            </div>
          </div>
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
              
            </div>
           
            </div>
          </div>