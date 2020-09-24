<?php 
	include "assets/inc/header.php";
	include "assets/inc/menu.php";
	session_start();
	if (isset($_SESSION["usuario"])) {
		header("location: index.php");
	}
 ?>
<br>
<div class="container">
	<div class="jumbotron">
		<h1>Nuevo Usuario</h1>
		<form action="" class="form-group">
			<!--Input usuario-->
			<div class="row">
				<div class="col-12">
					<label for="">Nuevo usuario</label>
					<input id="usuario" type="text" class="form-control" required>
				</div>
			</div>
			
			<!--input contraseña-->
			<div class="row">
				<div class="col-12">
					<label for="">Contraseña</label>
					<input id="passwordUno" type="password" class="form-control" required>	
				</div>
			</div>
			
			<!--input confirmar contraseña-->
			<div class="row">
				<div class="col-12">
					<label for="">Confirme contraseña</label>
					<input id="passwordDos" type="password" class="form-control" required>
				</div>
			</div>

			<!--Input nombre-->
			<div class="row">
				<div class="col-12">
					<label for="">Nombre del usuario</label>
					<input id="nombre" type="text" class="form-control" required>
				</div>
			</div>

			<!--Input Tipo-->
			<div class="form-group"> 
				<label for="">Tipo Usuario</label>
				<input id="tipo" type="text" class="form-control" required>
			</div>

			<br>
			<!--Boton-->
			<div class="row">
				<div class="col-12 text-right">
					<input id="btnRegistro" type="button" class="btn btn-primary" value="Enviar">
				</div>
			</div>
		</form>
	</div>
	

</div>

<script src="assets/js/nuevoUsuario.js"></script>

<?php 
	include "assets/inc/footer.php";
?>