<div class="container marketing" data-role="content" style="width: 100%; margin-top: 0!important;">
     <div class="row">
     <div class="title2">  
         <h2 class="text-center">Detalle Producto</h2>
     </div>
     

     <div class="process">
      <?php echo $this->Session->flash(); ?>
      <div class="container" style="width: 100%;">
      <div class="row">
          <div class="col-md-12">
          	<ul class="datosClientes">
          		<li><strong>Producto: </strong><?php echo $producto["Producto"]["item"]; ?></li>
          		<li><strong>Código: </strong><?php echo $producto["Producto"]["codigo"]; ?></li>
          		<li><strong>SKU: </strong><?php echo $producto["Producto"]["sku"]; ?></li>
          		<li><strong>Stock: </strong> <?php echo $producto["Producto"]["stock"]; ?></li>
          		<li><strong>Precio: </strong> <?php echo $producto["Producto"]["precio"]; ?> </li>
          		<li><strong>Descripción: </strong><?php echo $producto["Producto"]["descripcion"]; ?></li>
          	</ul>
          	<?php 
          	if($producto['Producto']['img'] != "") { ?>
          	<img src="/<?php echo $producto['Producto']['img']; ?>" style="max-width: 300px;">
          	<?php } ?>
          </div>
       </div>
    
        </div>
        
          <a href="/principal/index" data-transition="slider"><div class="btn btn-primary btn-block">Inicio</div></a>
        
     </div><!-- Process -->
     </div> <!-- row -->
    </div>

        