<section id="content">
        <section class="hbox stretch">
          <section>
            <section class="vbox">
              <section class="scrollable padder">
                <section class="row m-b-md">
                  <div class="col-sm-6">
                    <h3 class="m-b-xs text-black">Escritorio Clinico</h3>
                   </div>
                  <div class="col-sm-6 text-right text-left-xs m-t-md">
                     <a href="#nav, #sidebar" class="btn btn-icon b-2x btn-info btn-rounded" data-toggle="class:nav-xs, show"><i class="fa fa-bars"></i></a> 
                  </div>
                </section>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="panel b-a">
                      <div class="row m-n">
                        <div class="col-md-6 b-b b-r"> <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i> <i class="i i-plus2 i-1x text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-danger"><?php echo $numExamenes; ?></span> <small class="text-muted text-u-c">Examenes</small> </span> </a> </div>
                        <div class="col-md-6 b-b"> <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i> <i class="i i-users2 i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-success"><?php echo $numCargas; ?></span> <small class="text-muted text-u-c">Cargas</small> </span> </a> </div>
                        <div class="col-md-6 b-b b-r"> <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i> <i class="i i-location i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-info">4 <span class="text-sm"></span></span> <small class="text-muted text-u-c">Clinicas</small> </span> </a> </div>
                        <div class="col-md-6 b-b"> <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i> <i class="i i-alarm i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-primary"><?php echo $numCitas; ?></span> <small class="text-muted text-u-c">Citas</small> </span> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="panel b-a">
                      <div class="panel-heading no-border bg-primary lt text-center"> <a href="#"> <i class="fa fa-facebook fa fa-3x m-t m-b text-white"></i> </a> </div>
                      <div class="padder-v text-center clearfix">
                        <div class="col-xs-6 b-r">
                          <div class="h3 font-bold">42k</div>
                          <small class="text-muted">Friends</small> </div>
                        <div class="col-xs-6">
                          <div class="h3 font-bold">90</div>
                          <small class="text-muted">Feeds</small> </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="panel b-a">
                      <div class="panel-heading no-border bg-info lter text-center"> <a href="#"> <i class="fa fa-twitter fa fa-3x m-t m-b text-white"></i> </a> </div>
                      <div class="padder-v text-center clearfix">
                        <div class="col-xs-6 b-r">
                          <div class="h3 font-bold">27k</div>
                          <small class="text-muted">Tweets</small> </div>
                        <div class="col-xs-6">
                          <div class="h3 font-bold">15k</div>
                          <small class="text-muted">Followers</small> </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 hide">
                    <section class="panel b-a">
                      <header class="panel-heading b-b b-light">
                        <ul class="nav nav-pills pull-right">
                          <li> <a href="ajax.pie.html" class="text-muted" data-bjax data-target="#b-c"> <i class="i i-cycle"></i> </a> </li>
                          <li> <a href="#" class="panel-toggle text-muted"> <i class="i i-plus text-active"></i> <i class="i i-minus text"></i> </a> </li>
                        </ul>
                        Connection </header>
                      <div class="panel-body text-center bg-light lter" id="b-c">
                        <div class="easypiechart inline m-b m-t" data-percent="60" data-line-width="4" data-bar-Color="#23aa8c" data-track-Color="#c5d1da" data-color="#2a3844" data-scale-Color="false" data-size="120" data-line-cap='butt' data-animate="2000">
                          <div> <span class="h2 m-l-sm step"></span>%
                            <div class="text text-xs">completed</div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="row bg-light dk m-b">
                  <div class="col-md-6 dker">
                    <section>
                      <header class="font-bold padder-v">
                        <div class="pull-right">
                          <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-sm btn-rounded btn-default dropdown-toggle"> <span class="dropdown-label">2014</span> <span class="caret"></span> </button>
                            <ul class="dropdown-menu dropdown-select">
                              <li><a href="#">
                                <input type="radio" name="b">
                                2015</a></li>
                              <li><a href="#">
                                <input type="radio" name="b">
                                2016</a></li>
                            </ul>
                          </div>
                          <a href="#" class="btn btn-default btn-icon btn-rounded btn-sm">Ir</a> </div>
                        Estadistica Atenciones </header>
                      <div class="panel-body">
                        <div id="flot-sp1ine" style="height:210px"></div>
                      </div>
                     
                    </section>
                  </div>
                  <div class="col-md-6">
                      <section class="panel b-light">
                      <header class="panel-heading"><strong>Calendario</strong></header>
                      <div id="calendar" class="bg-light dker m-l-n-xxs m-r-n-xxs"></div>
                      <div class="list-group">
                      <?php foreach ($citas as $key => $cita) { ?>
                        
                      <a href="#" class="list-group-item text-ellipsis"> 
                         <span class="badge bg-warning"><?php echo $cita['Cita']['hora']; ?></span> <strong><?php echo date('d-m-Y', strtotime($cita['Cita']['fechaCita'])); ?> </strong> Consulta: <?php echo $cita['Cita']['doctor']; ?> | <?php echo $cita['Cita']['centroMedico']; ?>
                      </a> 
                      <?php } ?>

                    </div>
                    </section>
                  </div>
                </div>

              </section>
            </section>
          </section>