<?php 
	include 'assets/inc/header.php';
	include 'assets/inc/menu.php';

 ?>
 
<br>
<div class="container">
	<div class="jumbotron">
		<h1>Registrar un nuevo zapato</h1>
		<form action="" method="post" class="form-signin" id="form-registro">
			<div class="row">
				<label for="">Marca</label>
				<input type="text" class="form-control" required id="txtMarca" name="txtMarca">
			</div>

			<div class="row">
				<label for="">Stock</label>
				<input type="text" class="form-control" required id="txtStock" name="txtStock">
			</div>

			<div class="row">
				<label for="">Precio</label>
				<input type="text" class="form-control" required id="txtPrecio" name="txtPrecio">
			</div>

			<div class="row">
				<label for="">Descripcion</label>
				<input type="text" class="form-control" required id="txtDescripcion" name="txtDescripcion">
			</div>

			<div class="row">
				<label for="">Talla</label>
				<input type="text" class="form-control" required id="txtTalla" name="txtTalla">
			</div>

			<div class="row">
				<label for="">Color</label>
				<input type="text" class="form-control" required id="txtColor" name="txtColor">
			</div>
			
			<br>
			<div class="row">
				<div class="col-12">
					<input type="button" id="btn-enviar" class="btn btn-primary" value="Enviar">
				</div>
			</div>

		</form>
	</div>
</div>


<script src="assets/js/RegistroZapatos.js"></script>
<?php 
	include 'assets/inc/footer.php';
 ?>