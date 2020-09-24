<?php 
/**
 * Clase de conexion
 */
class conexion
{
	public static function conectar(){
		try {
			$cn = new PDO("mysql:host=localhost;dbname=zapateria","root","");
			return $cn;

		} catch (PDOException $e) {
			die("Error en la conexion: ".$e->getMessage());
		}
	}
}