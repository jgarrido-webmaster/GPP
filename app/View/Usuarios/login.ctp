 <div class="container">
      
      <div class="logo-sing text-center">
        <img src="/images/sddsd.png" alt="logo-sing">
      </div>

      <?php echo $this->Session->flash(); ?>
      
      <?php echo $this->Form->create('Usuario',array('action' => 'login','method' => 'post','class' => 'form-signin')); ?>
        
        <label for="inputEmail" class="sr-only">Email address</label>
          <?php echo $this->Form->input('username',array('class' => 'form-control no-border required', 'id' => 'inputEmail', 'placeholder' => 'Correo Electrónico' , 'label' => false)); ?>

        <label for="inputPassword" class="sr-only">Password</label>
        <?php echo $this->Form->input('password',array('class' => 'form-control no-border required', 'id' => 'inputPassword', 'placeholder' => 'Password',  'label' => false,'type' => 'password' )); ?>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme
          </label>
        </div>
        <button class="btn btn-orange btn-lg btn-block" type="submit">Ingresar</button>
      <?php echo $this->Form->end(); ?>
      <div class="row">
        <div class="col-md-12">
            <h4 class="text-center white" style="color: white"></h4>
        </div>
      </div>
      
    
  </div> 