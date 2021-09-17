
<?php
if (isset($_GET['id'])) {
  $item = "id";
  $valor = $_GET['id'];
  $usuario = ControladorFormularios::ctrSeleccionarRegistro($item, $valor);
}
?>
<div class="d-flex justify-content-center text-center">
<form class="p-5 bg-light" method="post">
      <div class="form-group">
        
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Ingresa tu nombre" id="nombre" name="actualizarNombre" value="<?php echo $usuario['nombre']; ?>">
          </div>
      </div>

      <div class="form-group">
        
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
            </div>
            <input type="email" class="form-control" placeholder="Ingresa tu correo electronico" id="email" name="actualizarEmail" value="<?php echo $usuario['email']; ?>">
          </div>
      </div>

      <div class="form-group">
        
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="Ingresa tu contraseña" id="pwd" name="actualizarPassword">
            <input type="hidden" name="passwordActual" value="<?php echo $usuario['password']; ?>">
          </div>
      </div>
      <?php
        $actualizar = new ControladorFormularios();
        $actualizar->ctrActualizarRegistro();
      ?>
      <input type="hidden" name="idUsuario" value="<?php echo $_GET['id']; ?>">

      <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
</div>