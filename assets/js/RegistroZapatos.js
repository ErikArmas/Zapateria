$(document).ready(function(){
	$("#btn-enviar").click(function(){
		var marca = document.getElementById("txtMarca").value;
		console.log(marca);
		$.ajax({
			type:"POST",
			url:"InsertarZapatos.php",
			data: {txtMarca:marca},
			dataType:"JSON",
			success: function(){
				swal({
					title:"",
					text:"Se realizo correctamente",
					type:"success"
				});
			},
			error: function(){
				swal({
					title:"aviso",
					text: "Se ha producido un error",
					type: "error"
				});
			}
		});
	});
});