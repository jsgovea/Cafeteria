

function agregardatos(codigocliente){

	cadena="codigocliente=" + codigocliente ;

	$.ajax({
		type:"POST",
		url:"php/tabla8.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla8.php');
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
	$('#cant').val(d[4]);
	$('#not').val(d[7]);
	
}

function actualizaDatos(){
	id=$('#idpersona').val();
	cant=$('#cant').val();
	nota=$('#not').val();
	
	cadena= "id=" + id +
			"&cantidad=" + cant + 
			"&nota=" + nota ;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos5.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla5.php');
				
				
				alertify.success("Actualizado con exito :)");
				location.reload();
			}else{
				alertify.error("Fallo el servidor 2:(");
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
			url:"php/eliminarDatos7.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla8.php');
					 
					alertify.success("Eliminado con exito!");
					location.reload();
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}