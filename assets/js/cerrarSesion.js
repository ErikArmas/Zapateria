$(document).on('click','#cerrarSesion',function(){
	swal({
		title: "Aviso!",
		text: "¿Desea cerrar sesion?",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Si',
		cancelButtonText: "No"			        
	}).then((result) => {
		if (result.value) {
			window.location.href = "datos/cerrarSesion.php";
		}
	});
});
