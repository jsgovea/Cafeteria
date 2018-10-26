<?php 
  session_start();
  unset($_SESSION['consulta']);

 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Control de clientes</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones6.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
</head>
<body>

	<div class="container">
    <div id="buscador"></div>
		<div id="tabla"></div>
	</div>

	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo cliente</h4>
      </div>
      <div class="modal-body">
        	<label>id_cliente:</label>
        	<input type="text" name="" id="id_cliente" class="form-control input-sm">
        	<label>Nombre:</label>
        	<input type="text" name="" id="nombre" class="form-control input-sm">
        	<label>Ap.Paterno: </label>
        	<input type="text" name="" id="ap_paterno" class="form-control input-sm">
        	<label>Ap.Materno: </label>
        	<input type="text" name="" id="ap_materno" class="form-control input-sm">
        	<label>Credito: </label>
        	<input type="text" name="" id="credito" class="form-control input-sm">
	                          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
      		<input type="text"  id="idpersona" name="">
 <label>Nombre</label>
        	<input type="text" name="" id="nom" class="form-control input-sm">
        	<label>Ap. Paterno:</label>
        	<input type="text" name="" id="ap" class="form-control input-sm">
        	<label>Ap. Materno</label>
        	<input type="text" name="" id="am" class="form-control input-sm">
        	<label>Credito</label>
        	<input type="text" name="" id="cre" class="form-control input-sm">
        	
             </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>
<script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla7.php');
    $('#buscador').load('componentes/buscador5.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          id_cliente=$('#id_cliente').val();
          nombre=$('#nombre').val();
         ap_paterno=$('#ap_paterno').val();
			ap_materno=$('#ap_materno').val();
        credito=$('#credito').val();
	      
            agregardatos(id_cliente,nombre,ap_paterno,ap_materno,credito);
        });



        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>