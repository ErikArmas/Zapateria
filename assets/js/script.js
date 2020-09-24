$(document).ready(function(){
	//Sirve para que al dar enter en los inputs del formulario se le de un click al botono y se ejecute la accion
	$("#pw").keyup(function(event) {
		if (event.keyCode === 13) {
			$("#btn-login").click();
		}
	});

	$("#usuario").keyup(function(event) {
		if (event.keyCode === 13) {
			$("#btn-login").click();
		}
	});
	//fin de las funciones para los inputs
	
	//
	$('#log').addClass("active");

	//Sirve para que al dar click al boton se valide el usuario y contraseña con ajax
	$('#btn-login').bind("click",function(){
		var usuario = document.getElementById("usuario").value;
		var pw = document.getElementById("pw").value;
		$.ajax({
			type: "POST",
			url: "validarLogin.php",
			data: {usuario:usuario,password:pw},
			dataType: "json",
			success:function(response){
				if (response.estado == "false") {
					$("#mensaje").html("<hr><h5 class='text-yellow'>El usuario y/o contraseña son incorrectos</h5>");
				}else{
					window.location.href = "inicio.php";
				}
				$("#usuario").val("");
				$("#pw").val("");
			},
			error:function(){
				swal({
					title: "Aviso",
					text: "Se a producido un error",
					type: "error"
				});
			}

		});
	});
});    