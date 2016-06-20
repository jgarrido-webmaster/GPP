      <section id="content">
        <section class="vbox">
          <section class="scrollable padder">
            <div class="m-b-md">
              <h3 class="m-b-none">Mi historico Enfermedades</h3><br>
                <?php echo $this->Session->flash(); ?> 
            </div>
            <section class="panel panel-default">
              <header class="panel-heading"> Contenido <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i> </header>
              <div class="table-responsive">
                <table class="table table-striped m-b-none" data-ride="datatables">
                  <thead>
                    <tr>
                      <th width="25%">Enfermedad</th>
                      <th width="25%">Doctor</th>
                      <th width="15%">Especialidad</th>
                      <th width="15%">Fecha</th>
                      <th with="20%"></th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php foreach ($citas as $key => $c) { ?>
                    
                  
                      <tr>
                      <td><?php echo $c['Cita']['enfermedad']; ?></td>
                      <td><?php echo $c['Cita']['doctor']; ?></td>
                      <td><?php echo $c['Cita']['especialidad']; ?></td>
                       <td><?php echo date('d-m-Y',strtotime( $c['Cita']['fechaCita'])); ?></td>
                        <td></td>
                    </tr>
                    <?php } ?>
                      
                  </tbody>
                </table>
              </div>
            </section>

                        <div class="m-b-md">
              <h3 class="m-b-none">Mi historico Controles</h3><br>
                <?php echo $this->Session->flash(); ?> 
            </div>
            <section class="panel panel-default">
              <header class="panel-heading"> Contenido <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i> </header>
              <div class="table-responsive">
                <table class="table table-striped m-b-none" data-ride="datatables">
                  <thead>
                    <tr>
                      <th width="25%">Enfermedad</th>
                      <th width="25%">Doctor</th>
                      <th width="15%">Especialidad</th>
                      <th width="15%">Fecha</th>
                      <th with="20%"></th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php foreach ($controles as $key => $c) { ?>
                    
                  
                      <tr>
                      <td><?php echo $c['Cita']['enfermedad']; ?></td>
                      <td><?php echo $c['Cita']['doctor']; ?></td>
                      <td><?php echo $c['Cita']['especialidad']; ?></td>
                       <td><?php echo date('d-m-Y',strtotime( $c['Cita']['fechaCita'])); ?></td>
                        <td></td>
                    </tr>
                    <?php } ?>
                      
                  </tbody>
                </table>
              </div>
            </section>
          </section>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> 
</section>
