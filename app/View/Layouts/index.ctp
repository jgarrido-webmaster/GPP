<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/images/required/ico/favicon.ico">
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/required/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/required/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/required/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="/images/required/ico/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="/images/required/ico/favicon.png">

   <?php echo $this->Element('titulo'); ?>

  <!-- Required CSS Files -->
  <link type="text/css" href="/css/required/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link type="text/css" href="/js/required/jquery-ui-1.11.0.custom/jquery-ui.min.css" rel="stylesheet" />
  <link type="text/css" href="/js/required/jquery-ui-1.11.0.custom/jquery-ui.structure.min.css" rel="stylesheet" />
  <link type="text/css" href="/js/required/jquery-ui-1.11.0.custom/jquery-ui.theme.min.css" rel="stylesheet" />
  <link type="text/css" href="/css/required/mCustomScrollbar/jquery.mCustomScrollbar.min.css" rel="stylesheet" />
  <link type="text/css" href="/css/required/icheck/all.css" rel="stylesheet" />
  <link type="text/css" href="/fonts/metrize-icons/styles-metrize-icons.css" rel="stylesheet">

  <!-- Optional CSS Files -->
  <link type="text/css" href="/css/optional/jqvmap/jqvmap.css" rel="stylesheet" />
  <link type="text/css" href="/css/optional/jqvmap/circloid-jqvmap.css" rel="stylesheet" />
  <link type="text/css" href="/css/optional/fullcalendar/fullcalendar.min.css" rel="stylesheet" />
  <link type="text/css" href="/css/optional/fullcalendar/circloid-fullcalendar.css" rel="stylesheet" />
  <link type="text/css" href="/css/optional/fullcalendar/fullcalendar.print.css" rel="stylesheet" media="print" />
  <link type="text/css" href="/css/optional/bootstrap-datetimepicker.min.css" rel="stylesheet" />


  <!-- add datatables  -->
  <link type="text/css" href="/css/optional/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet" />
  <link type="text/css" href="/css/optional/datatables/css/dataTables.tableTools.min.css" rel="stylesheet" />
  <link type="text/css" href="/css/optional/datatables/css/dataTables.responsive.min.css" rel="stylesheet" />

  <!-- add CSS files here -->

  <!-- More Required CSS Files -->
  <link type="text/css" href="/css/styles-core.css" rel="stylesheet" />
  <link type="text/css" href="/css/styles-core-responsive.css" rel="stylesheet" />

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="/js/required/misc/ie10-viewport-bug-workaround.js"></script>

  <!--[if IE 7]>
  <link type="text/css" href="/css/required/misc/style-ie7.css" rel="stylesheet">
  <script type="text/javascript" src="/fonts/lte-ie7.js"></script>
  <![endif]-->
  <!--[if IE 8]>
  <link type="text/css" href="/css/required/misc/style-ie8.css" rel="stylesheet">
  <![endif]-->
  <!--[if lte IE 8]>
  <script type="text/javascript" src="/css/required/misc/excanvas.min.js"></script>
  <![endif]-->
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="container-fluid">
    <!-- START Header Container -->
   <div id="header-container">
      <div class="header-bar navbar navbar-inverse" role="navigation"> <!-- NOTE TO READER: Accepts the following class(es) "navbar-fixed-top" class -->
        <div class="container">
          <div class="navbar-header">
            <!-- START logo -->
            <div class="logo">
              <a href="/">
                <img class="default-logo" src="/images/required/logo-default.png" width="156" height="44" alt="Logo" />
                <img class="small-logo" src="/images/required/logo-small.png" width="48" height="44" alt="Logo" />
              </a>
            </div>
            <!-- END logo -->

            <!-- START Mobile Menu Toggle -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Cambiar Vista</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- END Mobile Menu Toggle -->

            <!-- START Language Selector -->
            <div class="header-language"> <!-- NOTE TO READER: Accepts the following class(es) "animate" class -->
              <ul>
                <li>
                  <a href="#" class="language-closed">
                    <span aria-hidden="true" class="icon icon-wireframe-globe"></span>
                    <span class="main-text">Soporte</span>
                  </a>
                  <a href="#" class="language-opened">
                    <span aria-hidden="true" class="icon icon-cross"></span>
                    <span class="main-text">Soporte</span>
                  </a>
                  <ul>
                    <li class="language-list-item">
                      <div class="language-block">
                        <a href="mailto:contacto@greencloud.cl">
                          <span class="language-name">
                            Enviar Consulta
                          </span>
                        </a>
                      </div>
                    </li>
              
              
                  </ul>
                </li>
              </ul>
            </div>
            <!-- END Language Selector -->


            <!-- START Header Info Container -->
            <div class="header-info">
              <!-- START Header User Profile -->
              <div class="header-profile"> <!-- NOTE TO READER: Accepts the following class(es) "animate" class -->
                <ul class="header-profile-menu">
                  <li>
                    <a href="#" class="top">
                      <span class="header-profile-menu-icon">
                        <img class="list-thumbnail" src="/images/emilio.jpg" width="39" height="39" alt="39x39" style="width: 39px; height: 39px;"/>
                      </span>
                      <span class="main-menu-text">
                        <?php print $this->Session->read('Auth.User.nombre'); ?> <?php print $this->Session->read('Auth.User.apellidos'); ?>
                        <i class="icon icon-arrow-down-bold-round icon-size-small"></i>
                      </span>
                    </a>
                    <ul>
                      <li>
                        <a href="#">
                          <span aria-hidden="true" class="icon icon-user"></span>
                          <span class="main-text">Perfil</span>
                        </a>
                      </li>
                     <li>
                        <a href="/agendas/doctorHoy">
                          <span aria-hidden="true" class="icon icon-mail"></span>
                          <span class="main-text">
                            
                            Mi Agenda Hoy
                          </span>
                        </a>
                      </li>
                      <li>
                        <a href="/agendas/doctorMes">
                          <span aria-hidden="true" class="icon icon-star "></span>
                          <span class="main-text">
                            Mi Agenda Mes
                            
                          </span>
                        </a>
                      </li>
                      <li>
                        <a href="/usuarios/logout">
                          <span aria-hidden="true" class="icon icon-arrow-curve-right"></span>
                          <span class="main-text">Desconectarme</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <!-- END Header User Profile -->

              <!-- START Header Notification Alert -->
           
              <!-- END Header Notification Alert -->

            </div>
            <!-- END Header Info Container -->

          </div>
        </div>
      </div>
    </div>
    <!-- END Header Container -->

    <!-- START Body Container -->
    <div id="body-container">

      <!-- START Left Column -->
     <?php echo $this->Element('menulateral'); ?>



      <?php echo $this->fetch('content'); ?>

    </div>
    <!-- END Body Container -->
  </div><!-- /.container -->
  <!-- Placed at the end of the document so the pages load faster -->
  <!-- Required JS Files -->
  <script type="text/javascript" src="/js/required/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="/js/required/jquery-ui-1.11.0.custom/jquery-ui.min.js"></script>
  <script type="text/javascript" src="/js/required/bootstrap/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/required/jquery.easing.1.3-min.js"></script>
  <script type="text/javascript" src="/js/required/jquery.mCustomScrollbar.min.js"></script>
  <script type="text/javascript" src="/js/required/misc/jquery.mousewheel-3.0.6.min.js"></script>
  <script type="text/javascript" src="/js/required/misc/retina.min.js"></script>
  <script type="text/javascript" src="/js/required/icheck.min.js"></script>
  <script type="text/javascript" src="/js/required/misc/jquery.ui.touch-punch.min.js"></script>
  <script type="text/javascript" src="/js/required/circloid-functions.js"></script>

  <!-- Optional JS Files -->
  <script type="text/javascript" src="/js/optional/circloid-functions-optional.js"></script>
  <script type="text/javascript" src="/js/optional/jqvmap/jquery.vmap.min.js"></script>
  <script type="text/javascript" src="/js/optional/jqvmap/maps/jquery.vmap.world.js"></script>
  <script type="text/javascript" src="/js/optional/jqvmap/data/jquery.vmap.sampledata.js"></script> <!-- JQVMap Sample Data -->
  <script type="text/javascript" src="/js/optional/flot/jquery.flot.min.js"></script>
  <script type="text/javascript" src="/js/optional/flot/jquery.flot.JUMlib.min.js"></script>
  <script type="text/javascript" src="/js/optional/flot/jquery.flot.resize.min.js"></script>
  <script type="text/javascript" src="/js/optional/flot/jquery.flot.tooltip.min.js"></script>
  <script type="text/javascript" src="/js/optional/flot/jquery.flot.pie.min.js"></script>
  <script type="text/javascript" src="/js/optional/flot/jquery.flot.stack.min.js"></script>
  <script type="text/javascript" src="/js/optional/flot/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="/js/optional/flot/jquery.flot.orderBars.js"></script>
  <script type="text/javascript" src="/js/optional/easy-pie-chart/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="/js/optional/misc/moment.js"></script>
  <script type="text/javascript" src="/js/optional/fullcalendar/fullcalendar.min.js"></script>
  <script type="text/javascript" src="/js/optional/bootstrap-datetimepicker.min.js"></script>

  <script type="text/javascript" src="/js/optional/datatables/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="/js/optional/datatables/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/optional/datatables/js/dataTables.tableTools.min.js"></script>
  <script type="text/javascript" src="/js/optional/datatables/js/dataTables.responsive.min.js"></script>
  <!-- add optional JS plugin files here -->

  <!-- REQUIRED: User Editable JS Files -->
  <script type="text/javascript" src="/js/script.js"></script>
  <!-- add additional User Editable files here -->

  <!-- Demo JS Files -->
        <script type="text/javascript" src="/js/demo-files/index.js"></script>
    <script type="text/javascript" src="/js/demo-files/ecommerce-dashboard-1.js"></script>

    <script type="text/javascript" src="/js/optional/ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="/js/optional/ckeditor/adapters/jquery.js"></script> 

</body>
</html>