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
        <label for="apellidos">Apellidos:</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Ingresa tu apellidos" id="apellidos" name="apellidos">
          </div>
      </div>

      <div class="form-group">
        <label for="fecha">Fecha:</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Ingresa tu fecha" id="fecha" name="fecha">
          </div>
      </div>

      <div class="form-group">
        <label for="hora">Hora:</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Ingresa tu hora" id="hora" name="hora">
          </div>
      </div>

      

      <?php
      ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      /*$registro = new ControladorFormularios();
      $registro -> ctrRegistro();*/
//  $registro = ControladorFormularios::ctrRegistro();
      //echo $registro;

    //  $registro = ControladorFormularios::ctrCita();
      //if ($registro=="ok") {*
        $reservacion = ControladorFormularios::ctrReservacion();

      if ($reservacion=="ok") {
        echo '<div class="alert alert-success"> Reservacion Exitosa</div>';
      }
      ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      ?>

      <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
