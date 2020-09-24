const nuevoUsuario = document.getElementById("nuevoUsuario");
nuevoUsuario.addEventListener('click',() => {
	swal({
		title:"Aviso",
		text:"¿Desea agregar un nuevo usuario?",
		type:"success",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Si',
		cancelButtonText: "No"
	}).then((resultado)=>{
		if (resultado.value) {
			window.location.href = "nuevoUsuario.php";
		}
	});
});