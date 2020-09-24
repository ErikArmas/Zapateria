<?php 
include 'datos/conexion.php';
include 'entidades/usuarios.php';

class DaoUsuarios extends conexion
{
	static $cn;

	private static function getConexion(){
		self::$cn = conexion::conectar();
	}

	private static function closeConexion(){
		self::$cn = null;
	}

	public static function login($us){
		$query = "SELECT * FROM usuarios WHERE usuario = :usuario";
		$User = $us->getUsuario();
		$pw = $us->getPassword();
		self::getConexion();
		$resultado = self::$cn->prepare($query);
		$resultado->bindParam("usuario",$User,PDO::PARAM_STR);
		$resultado->execute();

		$res = $resultado->fetch(PDO::FETCH_ASSOC);

		if (isset($res["usuario"])) {
			if (password_verify($pw,$res["password"])) {
				session_start();
				$_SESSION["usuario"] = array(
					"nombre" => $res["nombre"],
					"usuario"=> $res["usuario"],
					"tipo" => $res["type"],
				);
				return true;
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
		
		self::closeConexion();
	}


	public static function insertarUsuario($us){
		$query = "INSERT INTO usuarios VALUES(null,:usuario,:pw,:nombre,:tipo)";
		$usuario = $us->getUsuario();
		$pw = $us->getPassword();
		$nombre = $us->getNombre();
		$tipo = $us->getTipo();
		$passHash = password_hash($pw, PASSWORD_DEFAULT);
		self::getConexion();
		$resultado = self::$cn->prepare($query);
		$resultado->bindParam("usuario",$usuario,PDO::PARAM_STR);
		$resultado->bindParam("pw",$passHash,PDO::PARAM_STR);
		$resultado->bindParam("nombre",$nombre,PDO::PARAM_STR);
		$resultado->bindParam("tipo",$tipo,PDO::PARAM_STR);
		$resultado->execute();
		
		if ($resultado->rowCount() > 0) {
			return true;
		}else{
			return false;
		}
		self::closeConexion();
	}
/*
	public static function getUsuarios($us){
		$query = "SELECT idUsuario,usuario,type,nombre WHERE usuario = :usuario";
		$User = $us->getUsuario();
		self::getConexion();
		$resultado = self::$cn->prepare($query);
		$resultado->bindParam("usuario",$User,PDO::PARAM_STR);
		$resultado->execute();
		
		$us->setIdUsuario();

		self::closeConexion();
	}
*/
}