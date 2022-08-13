function agregardatos(usuario_user,pass_user,name_user,correo_app){

	cadena="usuario_user=" + usuario_user + 
			"&pass_user=" + pass_user +
			"&name_user=" + name_user +
			"&correo_app=" + correo_app;

	$.ajax({
		type:"POST",
		url:"crud_usr/agregarDatos_app.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tablaUserAplicacion.php');
				 //$('#buscador').load('componentes/buscador.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}