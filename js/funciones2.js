

function agregardatos(id_articulo,descripcion,cantidad,precio_unitario){

	cadena="id_articulo=" + id_articulo +
			"&descripcion=" + descripcion+
			"&cantidad=" + cantidad+
			"&precio_unitario=" + precio_unitario;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos2.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla2.php');
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
	$('#des').val(d[1]);
	$('#cant').val(d[2]);
	$('#pu').val(d[3]);
	
}

function actualizaDatos(){


	id=$('#idpersona').val();
	descripcion=$('#des').val();
	cantidad=$('#cant').val();
	precio_unitario=$('#pu').val();

	cadena= "id=" + id +
			"&descripcion=" + descripcion + 
			"&cantidad=" + cantidad +
			"&precio_unitario=" + precio_unitario;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos2.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla2.php');
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
			url:"php/eliminarDatos2.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla2.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}