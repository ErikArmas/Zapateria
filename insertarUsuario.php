<?php 

include 'controlador/controladorUsuarios.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST["usuario"]) && isset($_POST["password"]) && isset($_POST["nombre"]) && isset($_POST["tipo"]) ) {
		$txtUsuario = $_POST["usuario"];
		$txtPassword = $_POST["password"];
		$txtNombre = $_POST["nombre"];
		$txtTipo = $_POST["tipo"];
		if (ControladorUsuarios::nuevoUsuario($txtUsuario,$txtPassword,$txtNombre,$txtTipo)) {
			$respuesta = array("estado" => "true");
			return print(json_encode($respuesta));
		}
	}
}
$respuesta = array("estado" => "false");
return print(json_encode($respuesta));	