<?php
require_once "conexion.php";
/**
 * 
 */
class ModeloFormularios {
	static public function mdlRegistro($tabla, $datos){
		$stmt = Conexion::conectar()->prepare("INSERT INTO registro (nombre, email, password) VALUES (:nombre, :email, :pwd)");
		$stmt->bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email",$datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":pwd",$datos["pwd"], PDO::PARAM_STR);
		if($stmt->execute()){
			return "ok";
		}
		else{
			print_r(Conexion::conectar()->errorInfo());
		}
		$stmt->close();
		$stmt = null;
	}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	static public function mdlReservacion($tabla, $datos){
		//$stmt = Conexion::conectar()->prepare("INSERT INTO registro (nombre, email, password) VALUES (:nombre, :email, :pwd)");
		$stmt = Conexion::conectar()->prepare("INSERT INTO reservacion (nombre, apellidos, fecha, hora) VALUES (:nombre, :apellidos, :fecha, :hora)");

		$stmt->bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellidos",$datos["apellidos"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha",$datos["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":hora",$datos["hora"], PDO::PARAM_STR);
		if($stmt->execute()){
			return "ok";
		}
		else{
			print_r(Conexion::conectar()->errorInfo());
		}
		$stmt->close();
		$stmt = null;
	}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////









	static public function mdlSeleccionarRegistros($tabla, $item, $valor){
		if ($item == null && $valor==null) {
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();
		return $stmt->fetchAll();
	}//fin del if
	else{
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
		$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetch();
	}
		$stmt->close();
		$stmt = null;
	}

	static function mdlActualizarRegistro($tabla, $datos){
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre,email=:email,password=:password WHERE id=:id");
		$stmt->bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email",$datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password",$datos["pwd"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos['id'], PDO::PARAM_INT);
		if ($stmt->execute()) {
			return "ok";
		}else{
			print_r(Conexion::conectar()->errorInfo());
		}
		$stmt->close();
		$stmt = null;
	}
	static function mdlEliminarRegistro($tabla, $valor){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");
		$stmt->bindParam(":id", $valor, PDO::PARAM_INT);
		if ($stmt->execute()) {
			return "ok";
		}else{
			print_r(Conexion::conectar()->errorInfo());
		}
		$stmt->close();
		$stmt = null;
	}
}

?>