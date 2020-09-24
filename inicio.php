<?php 
	include 'assets/inc/header.php';  
	include 'assets/inc/menu.php';
	session_start();
	if (isset($_SESSION["usuario"])) {
		header("location: index.php");
	}
?>


<br>
<div class="container">
	<div class="jumbotron">
		<div class="col-12 text-right">
			<h5>Usuario: <span class="badge badge-primary"><?php echo $_SESSION["usuario"]["tipo"]; ?></span></h5>
		</div>
		<div>
			<h1 class="text-info">Bienvenido al sistema</h1>
		</div>
		<div>
			<input id="nuevoUsuario" type="button" class="btn btn-primary" value="Registrar nuevo usuario">
		</div>
	</div>
</div>

<script src="assets/js/inicio.js"></script>


 <?php include 'assets/inc/footer.php'; ?>