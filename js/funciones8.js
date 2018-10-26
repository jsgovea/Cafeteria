 
function preguntarSiNo(id){
	alertify.confirm('Eliminar orden', '¿Esta seguro de terminar la orden?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/termina_kiosco.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla9.php');
					 
					alertify.success("Eliminado con exito!");
					location.reload();
				}else{
					alertify.error("Fallo el servidor :(");
					location.reload();
				}
			}
		});
}