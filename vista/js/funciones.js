
/*Funciones para Usuario */

function agregarUsuario(usuario,password,nombre,apellidopaterno,apellidomaterno){

	cadena= "usuario=" + usuario +
			"&password=" + password +
			"&nombre=" + nombre +
			"&apellidopaterno=" + apellidopaterno +
			"&apellidomaterno=" + apellidomaterno;

	$.ajax({
		type:"POST",
		url:"../controlador/agregarUsuario.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tablausuario').load('admiUsuario.php');
				alertify.success("agregado con exito ");
			}else{
				alertify.error("No se pudo realizar la accion");
			}
		} 
	});

}

function agregaformUsuario(datos){

	d=datos.split('||');

	$('#idusuariou').val(d[0]);
	$('#usuariou').val(d[1]);
	$('#passwordu').val(d[2]);
	$('#nombreu').val(d[3]);
	$('#apellidopu').val(d[4]);
	$('#apellidomu').val(d[5]);
	$('#estadou').val(d[6]);
	
}

function actualizarUsuario(id,nombre,apepat,apemat,usuario,password,estado){

	cadena= "id=" + id +
			"&nombre=" + nombre + 
			"&apellidopaterno=" + apepat +
			"&apellidomaterno=" + apemat +
			"&usuario=" + usuario +
			"&password=" + password +
			"&estado=" + estado;

	$.ajax({
		type:"POST",
		url:"../controlador/actualizarUsuario.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tablausuario').load('admiUsuario.php');
				alertify.success("Actualizado con exito ");
			}else{
				alertify.error("No se pudo realizar la accion");
			}
		}
	});

}



