<?php 
include 'assets/inc/header.php'; 
include 'assets/inc/menu.php';
?>
<div class="jumbotron conten-nav">
	<div class="container">
		<form id="login" action="validarLogin.php" method="post" class="form-group justify-content-center">
			<div class="row">
				<div class="col-12">
					<h1>Login</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-md-10 col-xs-12">
					<label for="usuario" class="visible-lg">Usuario</label>
					<input id="usuario" type="text" class="form-control" name="usuario" placeholder="Escriba su usuario" required>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-md-10 col-xs-12">
					<label for="password" class="visible-lg">Contraseña</label>
					<input id="pw" type="password" class="form-control" name="password" placeholder="Escriba su contraseña" required>
				</div>
			</div>
			<br>	
			<div class="row">
				<div class="col-lg-8 col-md-10 col-xs-12">
					<input id="btn-login" type="button" class="btn btn-uno" value="Enviar">
				</div>
			</div>
			<div class="row">
				<div class="col-12" id="mensaje">
				</div>
			</div>
		</form>
	</div>
</div>

<script src="assets/js/script.js"></script>
<?php include 'assets/inc/footer.php'; ?>