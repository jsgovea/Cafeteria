<?php
 session_start();
 if(!isset($_SESSION['nombre']))
 {
      echo "<script>
              alert('Sesión expirada');
              window.location= 'login.php'
            </script>";    
 }
	require_once "php/conexion.php";
	$conexion=conexion();
 $idcajero=$_SESSION['id'];
$flag=$_GET['id'];
if($flag==0){}else{
$codigocliente=$_GET['c'];
 $codigocliente2=$_GET['codigo'];
}
					$sql="call cobrocaja('".$idcajero."')";

				$result=mysqli_query($conexion,$sql);	
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0];
				}

?>
<!doctype html>
<html lang="en">
<head>
  <title>Cafeteria</title>
  <!-- Required meta tags -->
  
 <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones5.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
</head>
<body>
<?php
        include("cabecera.php");
    ?>
<br>
  <div class="container">
<h2><?php echo "Cajero: "; echo $_SESSION['nombre']; echo " "; echo $_SESSION['ap'];?></h2>
   
   
    <div class="row">
      <div class="col-sm-4">
        <form  name="procesapago" action="php/procesa_cobro_cliente_admi.php"  method="post" autocomplete="off" onKeyPress="return anular(event)" >
      
          <div class="form-group">
            <label for="codigoBarras">Codigo de cliente</label>
            <input type="text" class="form-control" name="codigocliente" id="codigocliente">
          </div>  
          <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Consultar" ></form>
          
          <form  name="procesapago2" action="cobroclientes.php?idcliente=<?php echo $codigocliente2; ?>"  method="post" autocomplete="off" onKeyPress="return anular(event)" >
      <br>    
           <form  name="procesapago" action="cobroclientes.php?id=<?php echo $codigocliente2;?>" method="post" autocomplete="off" onKeyPress="return anular(event)" >
      
          <button id="btnImprimir" type="submit" class="btn btn-danger btn-lg btn-block" >Realizar cobro</button></a>
		  </form>
      </div> 
      <div class="col-sm-8">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Total a pagar: $<?php if($flag==0){}else {echo $_GET['c']; }?></h1>
            <h1 class="display-3" id="total"></h1>
          </div>
        </div>
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
      		<input type="text" hidden="true" id="idpersona" name="">
            <label>Cantidad</label>
        	<input type="text" name="" id="cant" class="form-control input-sm">
        	<label>Nota</label>
        	<input type="text" name="" id="not" class="form-control input-sm">
        	 
             </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>
<div id="tabla"></div>
<!-- Modal para edicion de datos -->
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
		$('#tabla').load('componentes/tabla8.php?codigocliente=<?php echo $codigocliente2; ?>');
		
        $('#buscador').load('componentes/buscador3.php');
		
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          idpersona=$('#idpersona').val();
          cant=$('#codigocliente').val();
         nota=$('#nota').val();
       
            agregardatos(idpersona,cant,nota);
        });



        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>
 <script type="text/javascript">
     function anular(e) {
          tecla = (document.all) ? e.keyCode : e.which;
          return (tecla != 13);
     }
</script>
