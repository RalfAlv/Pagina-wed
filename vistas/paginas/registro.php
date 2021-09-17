<div class="d-flex justify-content-center text-center">
<form class="p-5 bg-light" method="post">
			<div class="form-group">
        <label for="nombre">Nombre:</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Ingresa tu nombre" id="nombre" name="nombre">
          </div>
      </div>

      <div class="form-group">
        <label for="email">Correo electronico:</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
            </div>
            <input type="email" class="form-control" placeholder="Ingresa tu correo electronico" id="email" name="email">
          </div>
      </div>

      <div class="form-group">
        <label for="pwd">Contraseña:</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="Ingresa tu contraseña" id="pwd" name="pwd">
          </div>
      </div>

      <?php
      /*$registro = new ControladorFormularios();
      $registro -> ctrRegistro();*/
      $registro = ControladorFormularios::ctrRegistro();
      //echo $registro;
      if ($registro=="ok") {
        echo '<div class="alert alert-success"> El usuario ha sido registrado</div>';
      }
      ?>

      <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>