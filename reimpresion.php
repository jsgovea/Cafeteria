<?php 
  session_start();
  unset($_SESSION['consulta']);

 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Control de inventario</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones2.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
</head>
<?php
        include("cabecera.php");
    ?>
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
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo articulo</h4>
      </div>
      <div class="modal-body">
        	<label>id_articulo</label>
        	<input type="text" name="" id="id_articulo" class="form-control input-sm">
        	<label>descripcion</label>
        	<input type="text" name="" id="descripcion" class="form-control input-sm">
        	<label>cantidad </label>
        	<input type="text" name="" id="cantidad" class="form-control input-sm">
        	<label>precio_unitario</label>
        	<input type="text" name="" id="precio_unitario" class="form-control input-sm">
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
      		<input type="text"  id="idpersona" name="" hidden="">
 <label>Descripcion</label>
        	<input type="text" name="" id="des" class="form-control input-sm">
        	<label>Cantidad</label>
        	<input type="text" name="" id="cant" class="form-control input-sm">
        	<label>Precio Unitario</label>
        	<input type="text" name="" id="pu" class="form-control input-sm">
        	
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
		$('#tabla').load('componentes/tabla11.php');
    $('#buscador').load('componentes/buscador6.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          id_aritculo=$('#id_articulo').val();
          descripcion=$('#descripcion').val();
         cantidad=$('#cantidad').val();
        precio_unitario=$('#precio_unitario').val();
	      
            agregardatos(id_aritculo,descripcion,cantidad,precio_unitario);
        });



        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>