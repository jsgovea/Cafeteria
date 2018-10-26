

function agregardatos(id_cliente,nombre,ap_paterno,ap_materno,credito){

	cadena="id_cliente=" + id_cliente +
			"&nombre=" + nombre+
			"&ap_paterno=" + ap_paterno+
			"&ap_materno=" + ap_materno+
		"&credito=" + credito;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos6.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla7.php');
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
	$('#nom').val(d[1]);
	$('#ap').val(d[2]);
	$('#am').val(d[3]);
		$('#cre').val(d[4]);
	
}

function actualizaDatos(){


	id=$('#idpersona').val();
	nombre=$('#nom').val();
	ap=$('#ap').val();
	am=$('#am').val();
	credito=$('#cre').val();

	cadena= "id=" + id +
			"&nombre=" + nombre + 
			"&ap=" + ap +
			"&am=" + am+
		"&credito=" + credito;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos6.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla7.php');
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
			url:"php/eliminarDatos6.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla7.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}