      <section id="content">
        <section class="vbox">
          <section class="scrollable padder">
            <div class="m-b-md">
              <h3 class="m-b-none">Mi historico Tratamientos</h3><br>
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
                      <th width="35%">Tratamiento</th>
                      <th width="10%"></th>
                      <th with="5%"></th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php foreach ($tratamientos as $key => $c) { ?>
                    
                  
                      <tr>
                      <td><?php echo $c['Cita']['enfermedad']; ?></td>
                      <td><?php echo $c['Cita']['doctor']; ?></td>
                      <td><?php echo $c['Cita']['tratamiento']; ?></td>
                       <td></td>
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
