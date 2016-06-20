 <!-- /.aside -->
      <section id="content">
        <section class="vbox">
          <section class="scrollable">
            <section class="hbox stretch">
              <aside class="aside-lg bg-light lter b-r">
                <section class="vbox">
                  <section class="scrollable">
                    <div class="wrapper">
                      <section class="panel no-border bg-primary lt">
                        <div class="panel-body">
                          <div class="row m-t-xl">
                            <div class="col-xs-3 text-right padder-v"> </div>
                            <div class="col-xs-6 text-center">
                              <div class="inline">
                                <div class="easypiechart" data-percent="75" data-line-width="8" data-bar-color="#fff" data-track-Color="#0d5e92" data-scale-Color="false" data-size="140" data-line-cap='butt' data-animate="1000">
                                  <div class="thumb-lg"> <img src="/images/a5.png" class="img-circle"> </div>
                                </div>
                                <div class="h4 m-t m-b-xs font-bold text-lt"><?php echo $usuario['Usuario']['nombre']; ?></div>
                                <small class="text-muted m-b"><?php echo $usuario['Tipo']['titulo']; ?></small> </div>
                            </div>
                            <div class="col-xs-3 padder-v"> </div>
                          </div>
                          <div class="wrapper m-t-xl m-b">
                            <div class="row m-b">
                              <div class="col-xs-6 text-right"> <small>Telefono</small>
                                <div class="text-lt font-bold"><?php echo $usuario['Usuario']['telefono']; ?></div>
                              </div>
                              <div class="col-xs-6"> <small>E-mail</small>
                                <div class="text-lt font-bold"><?php echo $usuario['Usuario']['mail']; ?></div>
                              </div>
                            </div>

                          </div>
                        </div>
                        <footer class="panel-footer dk text-center no-border">
                          <div class="row pull-out">
                            <div class="col-xs-4">
                              <div class="padder-v"> <span class="m-b-xs h3 block text-white"><?php echo $cExamen; ?></span> <small class="text-muted">Examenes</small> </div>
                            </div>
                            <div class="col-xs-4 dker">
                              <div class="padder-v"> <span class="m-b-xs h3 block text-white"><?php echo $cCarga; ?></span> <small class="text-muted">Cargas</small> </div>
                            </div>
                            <div class="col-xs-4">
                              <div class="padder-v"> <span class="m-b-xs h3 block text-white"><?php echo $cCita; ?></span> <small class="text-muted">Citas</small> </div>
                            </div>
                          </div>
                        </footer>
                      </section>
                    </div>
                  </section>
                </section>
              </aside>
              <aside class="col-lg-4 b-l no-padder">
                <section class="vbox">
                  <section class="scrollable">
                    <div class="wrapper">

                      <section class="panel panel-default">
                        <h4 class="padder">Actualizar Información</h4>


                        <?php echo $this->Session->flash(); ?>
  <?php echo $this->Form->create('Usuario',array('action' => 'edit', 'id' => 'crearusuario','method' => 'post')); ?>
    <div class="list-group">
          <div class="list-group-item">
           <?php echo $this->Form->input('nombre',array('class' => 'form-control no-border', 'label' => false, 'placeholder' => 'Su nombre' )); ?>
           
          </div>
          <div class="list-group-item">
            <?php echo $this->Form->input('pass',array('class' => 'form-control no-border', 'label' => false, 'placeholder' => 'Contraseña','type' => 'password', 'value' => '' )); ?>
          </div>
           <div class="list-group-item">
           <?php echo $this->Form->input('mail',array('class' => 'form-control no-border', 'label' => false, 'placeholder' => 'Su Email','type' => 'email' )); ?>
           
          </div>
              <div class="list-group-item">
           <?php echo $this->Form->input('telefono',array('class' => 'form-control no-border', 'label' => false, 'placeholder' => 'Su Telefono')); ?>
           
          </div>
           <div class="list-group-item">
              <input type="radio" name="data[Usuario][sexo]" value="M" class="paciente">Masculino<br />
               <input type="radio" name="data[Usuario][sexo]" value="F" class="medico">Femenino<br />
          </div>
        </div>

        <button type="submit" class="btn btn-lg btn-primary btn-block">Actualizar</button>

    <?php echo $this->Form->end(); ?>

                      </section>

                    </div>
                  </section>
                </section>
              </aside>
            </section>
          </section>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>
    </section>
  </section>
</section>