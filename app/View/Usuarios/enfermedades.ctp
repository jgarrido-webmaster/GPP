      <section id="content">
        <section class="vbox">
          <section class="scrollable padder">

            <section class="panel panel-default">
              <header class="panel-heading font-bold">Buscador </header>
              <div class="panel-body">
                <form class="form-inline" role="form" action="/usuarios/enfermedades" method="post">
                  <div class="form-group">
                    <label class="sr-only" for="
                    ">Enfermedad</label>
                      <select class="form-control" name="data[enfermedad]">
                        <option value="" selected>Diagnosticos</option>
                         <?php foreach ($enfermedades as $key => $e) { ?>
                        <option value="<?php echo $e['Cita']['enfermedad']; ?>" selected><?php echo $e['Cita']['enfermedad']; ?></option>
                      <?php } ?>
                         

                      </select>
                  </div>
                
                  <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail2">Ciudad</label>
                      <select class="form-control" name="data[ciudad]">
                      <option value="" selected>Ciudad</option>
                      <option value="Concepción">Concepción</option>
                          <option value="Talcahuano">Talcahuano</option>
                          <option value="Chiguayante" >Chiguayante</option>
                          <option value="San Pedro" >San Pedro</option>
                          <option value="Tomé" >Tomé</option>
                          <option value="Coronel" >Coronel</option>
                          <option value="Lota" >Lota</option>
                           <option value="Lota" >Penco</option>
                      </select>
                  </div>
               
                  <button type="submit" class="btn btn-default">Buscar</button>
                </form>
              </div>
            </section>

            <?php if($buscar == 1) { ?>
            <section class="panel panel-default">
              <header class="panel-heading"> Contenido <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i> </header>
              <div class="table-responsive">
                <table class="table table-striped m-b-none" data-ride="datatables">
                  <thead>
                    <tr>
                      <th width="25%">Ciudad</th>
                      <th width="25%">Enfermedad</th>
                      <th width="25%">Centro Medico</th>
                      <th width="20%">Paciente</th>
                      <th with="5%"></th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php foreach ($historicos as $key => $c) { ?>
                    
                  
                      <tr>
                      <td><?php echo $c['Usuario']['ciudad']; ?></td>
                      <td><?php echo $c['Cita']['enfermedad']; ?></td>
                      <td><?php echo $c['Cita']['centroMedico']; ?></td>
                       <td><?php echo $c['Usuario']['nombre']; ?></td>
                        <td></td>
                    </tr>
                    <?php } ?>
                      
                  </tbody>
                </table>
              </div>
            </section>
            <?php } ?>
          </section>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> 
</section>
