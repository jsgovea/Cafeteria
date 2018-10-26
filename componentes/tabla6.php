
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?><h2><?php echo "Bienvenido: "; echo $_SESSION['nombre']; echo " "; echo $_SESSION['ap'];?></h2>
<div class="row">
	<div class="col-sm-12">
	<h2>Reporte General</h2>
	<p>&nbsp;</p>
	
	
	</div>
</div>

 <html>
 	<form name="formulario" method="post" action="fpdf/tutorial/rpt_general.php">
 	<div class="col-sm-4">
  <!-- Campo de entrada de fecha -->
  <font size="4"  >
  <table width="1285" border="0" >
    <tbody>
      <tr>
        <td width="264" rowspan="3"><img src="img/reportes.png" width="264" height="215" alt=""/></td>
        <td width="41" >&nbsp;</td>
        <td width="150" >Fecha inicial:</td>
        <td colspan="3"><input type="date" name="fecha1" id="fecha1"></td>
        <td width="125">  Fecha final :</td>
        <td width="449"><input type="date" name="fecha2" id="fecha2"></td>
        <td width="17">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="3">&nbsp;</td>
        <td></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="166"><button type="submit" class="btn btn-danger btn-lg btn-block" >Generar Reporte</button></a></td>
        <td width="17">&nbsp;</td>
        <td width="18">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
  
  <!-- Campo de entrada de hora -->
  <!-- Campo de entrada de hora -->
  
   
</form>
		</div>
 </html>