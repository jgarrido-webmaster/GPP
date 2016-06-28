<div class="container marketing" data-role="content">
     <div class="row">
     <div class="title2">  
         <h2 class="text-center">Gestionar Productos</h2>
     </div>
     

     <div class="process">
      <?php echo $this->Session->flash(); ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             
              <?php echo $this->Form->create('Producto',array('action' => 'add', 'role' => 'form','method' => 'post','type' => 'file' , 'rel' => 'external')); ?>

                 <div class="form-group">
                    
                   
                    <input type="text" name="data[Producto][item]" class="text-center col-xs-6" id="nombre" placeholder="Nombre Item" data-role="none">

                    <input type="text" name="data[Producto][precio]" class="text-center col-md-6 col-xs-6" id="precio" placeholder="Precio" data-role="none">

                    <input type="text" name="data[Producto][codigo]" class="text-center col-xs-6" id="codigo" placeholder="Código" data-role="none">

                    <input type="text" name="data[Producto][sku]" class="text-center col-md-6 col-xs-6" id="sku" placeholder="SKU" data-role="none">

                    <input type="text" name="data[Producto][stock]" class="text-center col-md-6 col-xs-6" id="stock" placeholder="Stock Actual" data-role="none">

                    <div class="text-center col-xs-6">
                    	<label style="float: left;">Imagen </label>
                    	<input type="file" name="data[Producto][img1]" id="img" placeholder="Imagen" data-role="none">
                    </div>

                    <textarea class="form-control" id="descripcion" name="data[Producto][descripcion]" placeholder="Ingrese descripción producto"></textarea>

                    

                    <input type="submit" id="busca" class="btn btn-primary btn-block" value="Crear Producto" data-role="none">
                 </div>
              <?php echo $this->Form->end(); ?>
              
               
     <div class="title4">  
         <h4 class="text-center">Productos Registrados</h4>
     </div>

              <div class="table-responsive">
                  <table class="table table-hover">
                      <tr>
                          <td class="info">Item</td>
                          <td class="info">SKU</td>
                          <td class="info">Código</td>
                          <td class="info">Stock</td>
                      </tr>
                      <?php foreach ($productos as $key => $producto) { ?>
                      <tr>
                          <td><a href="/productos/ver/<?php echo $producto["Producto"]["id"]; ?>" data-toggle="modal" data-target="#myModal"><?php echo $producto["Producto"]["item"]; ?></a></td>
                          <td><a href="/productos/ver/<?php echo $producto["Producto"]["id"]; ?>" data-toggle="modal" data-target="#myModal"><?php echo $producto["Producto"]["sku"]; ?></a></td>
                          <td><a href="/productos/ver/<?php echo $producto["Producto"]["id"]; ?>" data-toggle="modal" data-target="#myModal"><?php echo $producto["Producto"]["codigo"]; ?></a></td>
                          <td><a href="/productos/ver/<?php echo $producto["Producto"]["id"]; ?>" ><?php echo $producto["Producto"]["stock"]; ?></a></td>
                          <td class="danger text-center"><a href="/productos/delete/<?php echo $producto["Producto"]["id"]; ?>" rel="external">x</a></td>
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