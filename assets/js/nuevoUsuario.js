$(document).ready(function(){
	
	$("#tipo").keyup(function(event) {
		if (event.keyCode === 13) {
			$("#btnRegistro").click();
		}
	});

	$("#btnRegistro").bind("click",function(){
		var input = document.getElementsByTagName('input');
		if (input[0].value.length >= 1 && 
				input[1].value.length >= 1 &&
					input[2].value.length >= 1 && 
						input[3].value.length >= 1 &&
							input[4].value.length >= 1 ) {

			if (input[1].value == input[2].value) {
				$.ajax({
					type: "POST",
					url: "insertarUsuario.php",
					data: {usuario:input[0].value,password:input[1].value,nombre:input[3].value,tipo:input[4].value},
					dataType: "json",
					success:function(response){
						if (response.estado == "true") {
							for (var i = 0; i <= 4; i++) {
								input[i].value = "";
							}
							swal({ 
								title: "Aviso!", 
								text: "Registo exitoso, ¿Desea agregar otro empleado?", 
								type: "success",
								showCancelButton: true,
								confirmButtonColor: '#3085d6',
								cancelButtonColor: '#d33',
								confirmButtonText: 'Si'
							}).then((result)=>{
								if (!result.value){
									window.location.href = "inicio.php";
								}	
							}); 
						}else{
							swal({
								title: "Aviso",
								text: "No se pudo registrar el usuario",
								type: "error"
							});
						}
					},
					error:function(){
						swal({
							title: "Aviso",
							text: "Se a producido un error",
							type: "error"
						});
					}
				});
			}else{
				swal({
					title:"Error",
					text: "Las contraseñas no coinciden",
					type: "error"
				});
				input[1].value = "";
				input[2].value = "";
				
			}
		}else{
			swal({
				title:"Error",
				text: "Faltan campos por completar",
				type: "error"
			});
		}
	});
});