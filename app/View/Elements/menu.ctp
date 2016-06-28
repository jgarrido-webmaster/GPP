 <header data-role="header" id="header">
    <div class="navbar-wrapper navbar-inverse">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php" data-transition="slide"><img src="/img/logo/SYMWHT.png" altp="logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="/principal/index" data-transition="flip">Inicio</a></li>
                <li><a href="#about" data-transition="slide">Perfil</a></li>
                <li><a href="#contact" data-transition="slide">Mis ventas</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Administrar <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="/productos/index" rel="external" >Gestionar Productos</a></li>
                    <li><a href="/clientes/index" data-transition="slide">Gestionar Clientes</a></li>
                    <li><a href="/promociones/index" rel="external" >Gestionar Promociones</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Ventas</li>
                    <li><a href="/ordenes/index" data-transition="slide">Gestionar Solicitudes</a></li>
                    <li><a href="/productos/stock" data-transition="slide">Gestionar Stock</a></li>
                  </ul>
                </li>
                <li><a href="/usuarios/logout" rel="external">Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
</header>