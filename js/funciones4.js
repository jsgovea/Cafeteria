

function agregardatos(id_ingrediente,descripcion,precio){

	cadena="id_ingrediente=" + id_ingrediente +
			"&descripcion=" + descripcion+
			"&precio=" + precio;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos4.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla4.php');
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
	$('#pre').val(d[2]);
	
}

function actualizaDatos(){
	id=$('#idpersona').val();
	descripcion=$('#des').val();
	precio=$('#pre').val();
	
	cadena= "id=" + id +
			"&descripcion=" + descripcion + 
			"&precio=" + precio ;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos4.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla4.php');
				alertify.success("Actualizado con exito :)");
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
			url:"php/eliminarDatos4.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla4.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}