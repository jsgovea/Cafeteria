

function agregardatos(idpersona,descripcion,precio){

	cadena="idpersona=" + idpersona +
			"&descripcion=" + descripcion+
			"&precio=" + precio;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos3.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla3.php');
				// $('#buscador').load('componentes/buscador.php');
				alertify.success("agregado con exito12 :)");
			}else{
				alertify.error("Fallo el servidor 1:(");
			}
		}
	});

}

function agregaform(datos){
	d=datos.split('||');
	$('#idper').val(d[0]);
	$('#descr').val(d[1]);
	$('#prec').val(d[2]);
	
}

function actualizaDatos(){
	idpersona=$('#idper').val();
	descripcion=$('#descr').val();
	precio=$('#prec').val();
	
	cadena= "idper=" + idpersona +
			"&descripcion=" + descripcion + 
			"&precio=" + precio ;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos3.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla3.php');
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
			url:"php/eliminarDatos3.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla3.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}