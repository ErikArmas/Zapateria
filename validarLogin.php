<?php 
include 'controlador/controladorUsuarios.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST["usuario"]) && isset($_POST["password"]) ) {
		$txtUsuario = $_POST["usuario"];
		$txtPassword = $_POST["password"];
		if (ControladorUsuarios::login($txtUsuario,$txtPassword)) {
			$respuesta = array("estado" => "true");
			return print(json_encode($respuesta));
		}
	}
}
$respuesta = array("estado" => "false");
return print(json_encode($respuesta));	