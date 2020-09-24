<?php 
include 'datos/DaoUsuarios.php';
class ControladorUsuarios
{
	public static function login($usuario,$password){
		$obj_usuario = new usuario();
		$obj_usuario->setUsuario($usuario);
		$obj_usuario->setPassword($password);
		
		return DaoUsuarios::login($obj_usuario);
	}

	public static function nuevoUsuario($usuario,$password,$nombre,$tipo){
		$obj_usuario = new usuario();
		$obj_usuario->setUsuario($usuario);
		$obj_usuario->setPassword($password);
		$obj_usuario->setNombre($nombre);
		$obj_usuario->setTipo($tipo);

		return DaoUsuarios::insertarUsuario($obj_usuario);
	}
}