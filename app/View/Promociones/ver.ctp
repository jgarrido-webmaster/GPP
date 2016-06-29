<div class="container marketing" data-role="content" style="width: 100%; margin-top: 0!important;">
     <div class="row">
     <div class="title2">  
         <h2 class="text-center">Detalle Promocion</h2>
     </div>
     

     <div class="process">
      <?php echo $this->Session->flash(); ?>
      <div class="container" style="width: 100%;">
      <div class="row">
          <div class="col-md-12">
          	<ul class="datosClientes">
          		<li><strong>Titulo: </strong><?php echo $promocion["Promocion"]["titulo"]; ?></li>
          		<li><strong>Desde: </strong><?php echo date("d-m-Y",strtotime($promocion["Promocion"]["desde"])); ?></li>
          		<li><strong>Hasta: </strong><?php echo date("d-m-Y",strtotime($promocion["Promocion"]["hasta"])); ?></li>
          		<li><strong>Descripción: </strong><br><?php echo $promocion["Promocion"]["descripcion"]; ?></li>
          	</ul>
          	<?php 
          	if($promocion['Promocion']['documento'] != "") { ?>
          	<a href="/<?php echo $promocion["Promocion"]["documento"]; ?>" rel="external">VER PDF</a>
          	<?php } ?>
          </div>
       </div>
    
        </div>
        
          <a href="/principal/index" data-transition="slider"><div class="btn btn-primary btn-block">Inicio</div></a>
        
     </div><!-- Process -->
     </div> <!-- row -->
    </div>

        