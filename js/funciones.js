function agregardatos(nombre,apellido,apellido2,usuario,pass,tipo){

	cadena="apellido=" + apellido +
			"&nombre=" + nombre+
			"&apellido2=" + apellido2+
			"&usuario=" + usuario+
		"&pass=" + pass+
		"&tipo=" + tipo;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				// $('#buscador').load('componentes/buscador.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos){

	d=datos.split('||');

	$('#idpersona').val(d[0]);
	$('#nombreM').val(d[1]);
	$('#apellidoM').val(d[2]);
	$('#apellido2M').val(d[3]);
	$('#usuarioM').val(d[4]);
    $('#passM').val(d[5]);
	$('#tipoM').val(d[6]);

	
}

function actualizaDatos(){


	id=$('#idpersona').val();
	nombre=$('#nombreM').val();
	apellido=$('#apellidoM').val();
	apellio2=$('#apellido2M').val();
	usuario=$('#usuarioM').val();
    pass=$('#passM').val();
    tipo=$('#tipoM').val();

	cadena= "id=" + id +
			"&nombre=" + nombre + 
			"&apellido=" + apellido +
			"&apellido2=" + apellio2 +
			"&usuario=" + usuario+
		    "&pass=" + pass+
		    "&tipo=" + tipo;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}























































