<?php
if (isset($_SESSION['validarIngreso'])) {
  if ($_SESSION['validarIngreso'] != "ok") {
    header('Location:index.php?pagina=registro');
    return;
  }
}else{
  header('Location:index.php?pagina=registro');
    return;
}
$usuario = ControladorFormularios::ctrSeleccionarRegistro(null, null);
//print_r($usuario);
?>

<center>
  <h1 class="display-1">"BARBER SHOP</h1>
  <h1 class="display-1">OLD SCHOOL"</h1>
  <h5 class="card-title">"Alejandro Alvarez"</h5>
  <hr>
<img src="img/0.jpg">
<hr>
<div class="card" style="width: 18rem;">
  <img src="img/4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">LLAMANOS</h5> 
    <hr>
   <h5 class="card-title">558-555-98-86</h5> 

  </div>
</div>
<hr>
<center> 
 <footer>
    <a href = "mailto:oldSchool@gmail.com">Contactame aqui</a>
    <p>© Copyright 2021</p>
  </footer>
  <hr>
  </center> 





<!--
<table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      /*foreach ($usuario as $key => $value) {
        ?>
      <tr>
        <td><?php echo $value["nombre"];?> </td>
        <td><?php echo $value["email"];?></td>
        <td>
          <div class="btn-group">
            <a href="index.php?pagina=editar&id=<?php echo $value['id'];?> " class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
            <div class="px-1">
              <form method="post"> 
                <input type="hidden" name="eliminarRegistro" value="<?php echo $value['id'];?> ">
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>

            <?php
              $eliminar = new ControladorFormularios();
              $eliminar->ctrEliminarRegistro();

            ?>
            </form>
            </div>
            
          </div>
        </td>
      </tr>
      <?php
    }
    ?>
      
    </tbody>
  </table>
-->*/