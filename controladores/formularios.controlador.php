<?php
/**
 * 
 */
class ControladorFormularios {
	static public function ctrRegistro() {
		if (isset($_POST['nombre'])) {
			/*return $_POST['nombre']."<br>".
			$_POST['email']."<br>".
			$_POST['pwd']."<br>";
			return "ok";*/
			$tabla = "registro";
			$datos = array('nombre' => $_POST['nombre'],
							'email' => $_POST['email'],
							'pwd' => $_POST['pwd'] );
			$respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
			return $respuesta;
		}
	}
	static public function ctrSeleccionarRegistro($item, $valor){
		$tabla = "registro";
		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
		return $respuesta;
	}

///////////////////////////////////quitar clase y dejar el puro metodo /////////////////////////////////////

	static public function ctrReservacion() {//metodo
		if (isset($_POST['nombre'])) {
			
			//$tabla = "registro";
			$tabla = "reservacion";
			$datos = array('nombre' => $_POST['nombre'],
						   'apellidos' => $_POST['apellidos'],
						   'fecha' => $_POST['fecha'],
						   'hora' => $_POST['hora'] );
			$respuesta = ModeloFormularios::mdlrReservacion($tabla, $datos);
			return $respuesta;
		}
	}
	static public function ctrSeleccionarRecervacion($item, $valor){
		$tabla = "reservacion";
		$respuesta = ModeloFormularios::mdlSeleccionarReservacion($tabla, $item, $valor);
		return $respuesta;
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////











	public function ctrIngreso(){
		if (isset($_POST['ingresoEmail'])) {
			$tabla = "registro";
			$item = "email";
			$valor = $_POST['ingresoEmail'];
			$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
			if ($respuesta["email"]==$_POST['ingresoEmail'] && $respuesta["password"]==$_POST['ingresoPassword']){
				//echo "Ingreso exitoso";
				$_SESSION['validarIngreso']="ok";
				header('Location:index.php?pagina=inicio');
			}else{
				echo '<div class="alert alert-danger"> El usuario no esta registrado</div>';
			}
		}

	}//fin del metodo ctrIngreso

	public function ctrActualizarRegistro(){
		if (isset($_POST['actualizarNombre'])) {
			if ($_POST['actualizarPassword']!="") {
				$password = $_POST['actualizarPassword'];
			}else{
				$password = $_POST['passwordActual'];
			}
			$tabla="registro";
			//echo "id: ". $_POST['idUsuario'];
			//echo "nombre: ".$_POST['actualizarNombre'];
			$datos = array( 'id' => $_POST['idUsuario'],
							'nombre' => $_POST['actualizarNombre'],
							'email' => $_POST['actualizarEmail'],
							'pwd' => $password );
			$respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);
			if ($respuesta=="ok"){
				/*echo '<div class="alert alert-success">El usuario ha sido actualizado</div>';*/
				header('Location:index.php?pagina=inicio');
			}
			return $respuesta;
			
		}
	}

	public function ctrEliminarRegistro(){
		if (isset($_POST['eliminarRegistro'])) {
			$tabla="registro";
			$valor = $_POST['eliminarRegistro'];
			$respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);
			if ($respuesta=="ok") {
				/*echo '<div class="alert alert-success">El usuario ha sido borrado</div>';*/
				header('Location:index.php?pagina=inicio');
			}
		}
	}

}

?>
