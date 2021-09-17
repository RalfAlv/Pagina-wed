<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Archivos de Bootstrap  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<!--Link para los iconos -->
	<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>


	<title>MVC</title>
</head>
<body>
	<div class="container-fluid">
		<h3 class="text-center py-3"></h3>
	</div>
	<div class="container-fluid bg-light">
		<div class="container">
			<nav class="navbar navbar-expand-sm bg-light">
				<ul class="navbar-nav">
				<li class="nav-item">
				  <a class="nav-link" href="index.php?pagina=registro">REGISTRO</a>
				</li>
				<!--<li class="nav-item">
				  <a class="nav-link" href="index.php?pagina=inicio">Iniciar</a>
				</li>-->
				<li class="nav-item">
				  <a class="nav-link" href="index.php?pagina=ingreso">INGRESAR</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="index.php?pagina=salir">SALIR</a>
				</li>
				</ul>
				</nav>
		</div>	
		
	</div>

<ul class="nav justify-content-center">
  <li class="nav-item">
  <a class="nav-link" href="index.php?pagina=inicio">INICIO</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="index.php?pagina=quienes somos">¿QUIENES SOMOS?</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="index.php?pagina=blog	">BLOG</a>
  </li><li class="nav-item">
  <a class="nav-link" href="index.php?pagina=cita">RESERVAR CITA</a>
  </li> 
</ul>

	<div class="container-fluid">
		<div class="container py-5">
			<?php
				if (isset($_GET['pagina'])) {
					if ($_GET['pagina']=="registro" ||
						$_GET['pagina']=="ingreso" ||
						$_GET['pagina']=="inicio" ||
						$_GET['pagina']=="editar" ||

						$_GET['pagina']=="quienes somos" ||
						$_GET['pagina']=="blog" ||
						$_GET['pagina']=="cita" ||
						$_GET['pagina']=="salir" ) {
						include "paginas/".$_GET['pagina'].".php";
					}else{
						include "paginas/error404.php";
					}

				} else{
					include "paginas/registro.php";
				}
			?>
		</div>
	</div>

	
</body>
</html>