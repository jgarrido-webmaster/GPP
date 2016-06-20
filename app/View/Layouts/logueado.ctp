<!DOCTYPE html>
<html lang="es" class="app">
<head>
<meta charset="utf-8" />
   <?php echo $this->Element('titulo'); ?>
<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="/css/app.v1.css" type="text/css" />
<link rel="stylesheet" href="/js/calendar/bootstrap_calendar.css" type="text/css" />
<link rel="stylesheet" href="/js/datepicker/datepicker.css" type="text/css" />
<link type="text/css" rel="stylesheet" media="screen" href="/css/Photobooth.css" />
<!--[if lt IE 9]> <script src="/js/ie/html5shiv.js"></script> <script src="/js/ie/respond.min.js"></script> <script src="/js/ie/excanvas.js"></script> <![endif]-->
</head>
<body class="">
<section class="vbox">
  <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
    <div class="navbar-header aside-md dk"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav"> <i class="fa fa-bars"></i> </a> <a href="/" class="navbar-brand"><img src="/images/logo2.png" class="m-r-sm">My Salud</a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a> </div>
    <ul class="nav navbar-nav hidden-xs">
      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="i i-grid"></i> </a>

      </li>
    </ul>
    <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
      <div class="form-group">
        <div class="input-group"> <span class="input-group-btn">
          <button type="submit" class="btn btn-sm bg-white b-white btn-icon"><i class="fa fa-search"></i></button>
          </span>
          <input type="text" class="form-control input-sm no-border" placeholder="Buscar Atención">
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">

      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="/images/a5.png"> </span> <?php echo AuthComponent::user('nombre'); ?> <b class="caret"></b> </a>
        <ul class="dropdown-menu animated fadeInRight">
          <span class="arrow top"></span>
          <li> <a href="/usuarios/perfil">Perfil</a> </li>
          <li> <a href="/principal/ayuda">Ayuda</a> </li>
          <li class="divider"></li>
          <li> <a href="/usuarios/logout">Desconectar</a> </li>
        </ul>
      </li>
    </ul>
  </header>
  <section>
    <section class="hbox stretch">
      <!-- .aside -->
      <aside class="bg-black aside-md hidden-print" id="nav">
        <section class="vbox">
          <section class="w-f scrollable">
            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-color="#333333">
              <div class="clearfix wrapper dk nav-user hidden-xs">
                <div class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb avatar pull-left m-r"> <img src="/images/a5.png"> <i class="on md b-black"></i> </span> <span class="hidden-nav-xs clear"> <span class="block m-t-xs"> <strong class="font-bold text-lt"><?php echo AuthComponent::user('nombre'); ?></strong> <b class="caret"></b> </span> <span class="text-muted text-xs block"><?php  if(AuthComponent::user('tipo_id') == 1) echo "Administrador"; if(AuthComponent::user('tipo_id') == '2') echo "Paciente";  if(AuthComponent::user('tipo_id') == 3) echo "Médico";   if(AuthComponent::user('tipo_id') == 4) echo "Clinica"; ?></span> </span> </a>
                  <ul class="dropdown-menu animated fadeInRight m-t-xs">
	                    <span class="arrow top hidden-nav-xs"></span>
	                  <li> <a href="/usuarios/perfil">Perfil</a> </li>
			          <li> <a href="/principal/ayuda">Ayuda</a> </li>
			          <li class="divider"></li>
			          <li> <a href="/usuarios/logout">Desconectar</a> </li>
                  </ul>
                </div>
              </div>
              <!-- nav -->

            <!-- Menu pacientes -->
            <?php if(AuthComponent::user('tipo_id') == 2) { ?> 
              <nav class="nav-primary hidden-xs">
                <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Menu Principal</div>
                <ul class="nav nav-main" data-ride="collapse">
                  <li class="active"> <a href="/usuarios/escritorio" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Escritorio</span> </a> </li>

                    <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-lab icon"> </i> <span class="font-bold">Citas</span> </a>
                     <ul class="nav dk">
                       <?php if(AuthComponent::user('tipo_id') == 2) { ?>
                      <li > <a href="/citas/add" class="auto"> <i class="i i-dot"></i> <span>Nueva Titular</span> </a> </li>
                      <li > <a href="/citas/addcarga" class="auto"> <i class="i i-dot"></i> <span>Nueva Carga</span> </a> </li>
                      <li > <a href="/citas/index" class="auto"> <i class="i i-dot"></i> <span>Listado</span> </a> </li>

                      <?php } ?>

                    </ul>
                  </li>
                  <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <b class="badge bg-danger pull-right"></b> <i class="i i-stack icon"> </i> <span class="font-bold">Examenes</span> </a>
                    <ul class="nav dk">

                      <?php if(AuthComponent::user('tipo_id') == 2) { ?>
                      <li > <a href="/examenes/add" class="auto"> <i class="i i-dot"></i> <span>Nuevo titular</span> </a> </li>
                      <li > <a href="/examenes/addcarga" class="auto"> <i class="i i-dot"></i> <span>Nuevo Carga</span> </a> </li>
                      <li > <a href="/examenes/index" class="auto"> <i class="i i-dot"></i> <span>Listado</span> </a> </li>

                      <?php } ?>



                    </ul>
                  </li>
                   <li> <a href="/usuarios/historico" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Mi Historico</span> </a> </li>
                   <li> <a href="/usuarios/tratamientos" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Tratamientos</span> </a> </li>
                  <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-lab icon"> </i> <span class="font-bold">Cargas Familiares</span> </a>
                  	 <ul class="nav dk">
                      <?php if(AuthComponent::user('tipo_id') == 2) { ?>

                      <li > <a href="/cargas/add" class="auto"> <i class="i i-dot"></i> <span>Ingresar Nueva</span> </a> </li>
                      <li > <a href="/cargas/index" class="auto"> <i class="i i-dot"></i> <span>Listado</span> </a> </li>
                       <?php } ?>



                    </ul>
                  </li>
                  <?php if(AuthComponent::user('tipo_id') == 2) { ?>
                    <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-lab icon"> </i> <span class="font-bold">Clinica</span> </a>
                  	 <ul class="nav dk">
                      <li > <a href="/citas/clinicas" class="auto"> <i class="i i-dot"></i> <span>Ver Historico</span> </a> </li>
                    </ul>
                  </li>
                     <?php } ?>


                </ul>
              
              </nav>
              <?php } ?>

              <!-- Menu Clinica -->
               <?php if(AuthComponent::user('tipo_id') == 4) { ?>
              <nav class="nav-primary hidden-xs">
                <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Menu Principal</div>
                <ul class="nav nav-main" data-ride="collapse">
                  <li class="active"> <a href="/usuarios/escritorio" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Escritorio</span> </a> </li>
                  <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <b class="badge bg-danger pull-right"></b> <i class="i i-stack icon"> </i> <span class="font-bold">Reportes</span> </a>
                    <ul class="nav dk">

                      <li > <a href="/reportes/clinicas" class="auto"> <i class="i i-dot"></i> <span>Clinicas</span> </a> </li>
                      <li > <a href="/reportes/medicos" class="auto"> <i class="i i-dot"></i> <span>Medicos</span> </a> </li>
                      <li > <a href="/reportes/consultas" class="auto"> <i class="i i-dot"></i> <span>Consultas</span> </a> </li>
                      <li > <a href="/reportes/examenes" class="auto"> <i class="i i-dot"></i> <span>Examenes</span> </a> </li>
                      <li > <a href="/reportes/enfermedades" class="auto"> <i class="i i-dot"></i> <span>Enfermedades</span> </a> </li>
                      <li > <a href="/reportes/cargas" class="auto"> <i class="i i-dot"></i> <span>Cargas Fam.</span> </a> </li>
                



                    </ul>
                  </li>
                          <li> <a href="/usuarios/familiar" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Buscador Familiar</span> </a> </li>
                           <li> <a href="/usuarios/clinicas" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Buscador Clinicas</span> </a> </li>
                            <li> <a href="/usuarios/enfermedades" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Buscador Enfermedades</span> </a> </li>

                </ul>
              
              </nav>

                <?php } ?>
              <!-- / nav -->
            </div>
          </section>
          <footer class="footer hidden-xs no-padder text-center-nav-xs"> <a href="/usuarios/logout" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"> <i class="i i-logout"></i> </a> <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a> </footer>
        </section>
      </aside>
      <!-- /.aside -->
      <?php echo $this->fetch('content'); ?>
          <!-- side content -->
        
          <!-- / side content -->
        </section>
        </section>
    </section>
  </section>
</section>
<!-- Bootstrap -->
<!-- App -->
<script src="/js/app.v1.js"></script>
<script type="text/javascript">
  

$(document).ready(function(){

    $ancho = $(window).width();

  $('#fotoCam').css('width',"90%");
    $('#fotoCam').css('height', "400px");

  $('.foto').click(function(){
    $('.foto1').css('display','block');
    $('.archivo1').css('display','none');
  });

    $('.archivo').click(function(){
    $('.foto1').css('display','none');
    $('.archivo1').css('display','block');
  });



});




</script>



<script src="/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
<script src="/js/charts/sparkline/jquery.sparkline.min.js"></script>
<script src="/js/charts/flot/jquery.flot.min.js"></script>
<script src="/js/charts/flot/jquery.flot.tooltip.min.js"></script>
<script src="/js/charts/flot/jquery.flot.spline.js"></script>
<script src="/js/charts/flot/jquery.flot.pie.min.js"></script>
<script src="/js/charts/flot/jquery.flot.resize.js"></script>
<script src="/js/charts/flot/jquery.flot.grow.js"></script>
<script src="/js/charts/flot/demo.js"></script>
<script src="/js/calendar/bootstrap_calendar.js"></script>
<script src="/js/sortable/jquery.sortable.js"></script>

<script src="/js/datepicker/bootstrap-datepicker.js"></script>
<script src="/js/photobooth_min.js"></script>
<script src="/js/datatables/jquery.dataTables.min.js"></script>

<script src="/js/app.plugin.js"></script>

<script type="text/javascript">
  $(function(){
      $( '#fotoCam' ).photobooth().on( "image", function( event, dataUrl ){
        $( "#galeriaCam" ).show().html( '<img src="' + dataUrl + '" >');
         $("#imageData").val(dataUrl);
      });
    });

$(document).ready( function(){


  var cTime = new Date(), month = cTime.getMonth()+1, year = cTime.getFullYear();

  theMonths = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

  theDays = ["DO", "LU", "MA", "MI", "JU", "VI", "SA"];
    events = [
<?php if(isset($citas)) { ?>
    <?php foreach ($citas as $key => $cita) { 
      $fecha1 = date('j-n-Y',strtotime($cita['Cita']['fechaCita'])); 
      $fecha = explode('-',$fecha1); ?>
      [
        "<?php echo $fecha[0]; ?>/<?php echo $fecha[1]; ?>/<?php echo $fecha[2]; ?>", 
        'Cita: <?php echo $cita['Cita']['doctor']; ?>', 
        '#', 
        '#177bbb', 
        'En <?php echo $cita['Cita']['centroMedico']; ?> a las <?php echo $cita['Cita']['hora']; ?>'
      ],

    <?php }} ?>
    
    ];
    $('#calendar').calendar({
        months: theMonths,
        days: theDays,
        events: events,
        popover_options:{
            placement: 'top',
            html: true
        }
    });
});
</script>
<script type="text/javascript" src="/js/jquery.validate.js"></script>
<script src="/js/jquery.Rut.js"></script>
<script type="text/javascript">
  
$(document).ready(function() {
    
$.validator.addMethod("rut", function(value, element) {
  return this.optional(element) || $.Rut.validar(value);
}, "Este campo debe ser un rut valido.");

$(".formv").validate();

  $('.rut').Rut({
  on_error: function(){ alert('Rut incorrecto'); $('.rut').val(''); },
  format_on: 'keyup'
});

    $(".rut").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});

</script>

</body>
</html>
