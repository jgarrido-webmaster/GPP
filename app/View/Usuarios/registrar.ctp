  <div class="container-fluid">
    <div id="body-container">
      <div class="standalone-page registration-page">
        <div class="standalone-page-logo">
          <a href="index.html">
            <img src="/images/required/logo-default.png" width="156" height="44" alt="Logo" />
          </a>
        </div>
        <div class="standalone-page-top-border">
          <span class="border-block bg-color-green"></span>
          <span class="border-block bg-color-orange"></span>
          <span class="border-block bg-color-yellow"></span>
          <span class="border-block bg-color-blue"></span>
          <span class="border-block bg-color-red"></span>
          <span class="border-block bg-color-lime"></span>
          <span class="border-block bg-color-purple"></span>
        </div>
        <div class="standalone-page-block">
          <div class="row">
            <div class="col-xs-12">
              <h2 class="heading">
                <span aria-hidden="true" class="icon icon-user"></span>
                <span class="main-text">
                  Crear Nueva Cuenta
                </span>
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
  <?php echo $this->Form->create('Usuario',array('action' => 'registrar', 'role' => 'form','method' => 'post','type' => 'file', 
   'class' => 'registration-form form-horizontal')); ?>
                <div class="form-group">
                  <label for="inputUsername" class="col-sm-3 control-label">Nombre</label>
                  <div class="col-sm-9">
                   <?php echo $this->Form->input('nombre',array('class' => 'form-control required', 'label' => false)); ?>

                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-sm-3 control-label">Apellidos</label>
                  <div class="col-sm-9">
                   <?php echo $this->Form->input('apellidos',array('class' => 'form-control required', 'label' => false)); ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-9">
                   <?php echo $this->Form->input('username',array('class' => 'form-control required', 'label' => false,'type'=> 'email')); ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPasswordConfirm" class="col-sm-3 control-label">Contraseña</label>
                  <div class="col-sm-9">
                   <?php echo $this->Form->input('password',array('class' => 'form-control required', 'label' => false)); ?>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-success">Crear Usuario</button>
                  </div>
                </div>
                    <?php echo $this->Form->end(); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="change-section">
                <h3 class="heading">Ya estas registrado?</h3>
                <a href="/usuarios/login" class="btn btn-default btn-block">Identificarme</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.container -->