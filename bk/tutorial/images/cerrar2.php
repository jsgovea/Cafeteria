<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:346px;
	height:126px;
	z-index:1;
	left: 321px;
	top: 97px;
}
-->
</style>
<div id="Layer1">
  <table width="339" height="120" border="0">
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><?php  
	  $GrupoCode2=$_GET['variable2'];
	  
	  if($GrupoCode2!="")
	  {
	   echo  "<img src =\"images/procesando.gif\" width=300px height=200px border=0> ";
	   }
	   ?></td>
      
	  <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
	<?php
	  $tipopase=$_GET['tipopase'];
      $GrupoCode2=$_GET[variable2];
	  $flag=$_GET[flag];
	  include("ip.php");
	  include("conectarse.php"); 
	  include("grupos.php");
	  include("variables1.php");
	  $link=Conectarse();    
	  $select;
	  $moneda;
	  $folio=$_GET[variable];  
			//echo $combo2;
		  // SE OBTINE EL  VALOR MAXIMO  SEGUN LA SERIE		  


		$result2 = mysql_query('SELECT * FROM pasesmuestra WHERE Folio=\''.$folio.'\' AND GrupoCode=\''.$GrupoCode2.'\'');		  
	
		  // SE OBTIENE EL IP DE LA PC
 		$ip=getIP();	
	     //SE OBTIENE EL NOMBRE DEL HOST 		 
		$host = gethostbyaddr($ip);
		$host;
	 if($row = mysql_fetch_array($result2 ))
		{
		
		
					
					
					//echo "Guardado";
					 $serie= $row['Serie'];
	  				 $grupocode= $row['GrupoCode'];
					 $fecha= $row['Fecha'];
					 $cliente= $row['Cliente'];
					 $solicitante= $row['Solicitante'];
					 $autoriza= $row['Autoriza'];
					 $depto= $row['depto'];
					 $empleado= $row['Empleado'];
					 $modelo= $row['Modelo'];
					 $descripcion= $row['descripcion'];
					 $concepto= $row['Concepto'];
					 $cantidad= $row['Cantidad'];
					 $unidad= $row['Unidad'];
					 $nota= $row['Nota'];
					 $fechasalida= $row['FechaSalida'];
					 $obsequio= $row['obsequio'];
					 $regresa= $row['regresa'];
					 $costo= $row['costo'];
					 $moneda= $row['moneda'];
					 $tipopase= $row['tipopase'];

	 
	$query = 'INSERT INTO pasescerrados (Serie,GrupoCode,Folio,Fecha,Cliente,Solicitante,Autoriza,depto,Empleado,Modelo,descripcion,Concepto,Cantidad,Unidad,Nota,IPaddress,Host,FechaSalida,obsequio,regresa,costo,moneda,tipopase,fechadecierre) VALUES (\''.$serie.'\',\''.$grupocode.'\',\''.$folio.'\',\''.date("Y-m-d G:i").'\',\''.$cliente.'\',\''.$solicitante.'\',\''.$autoriza.'\',\''.$depto.'\',\''.$empleado.'\',\''.$modelo.'\',\''.$descripcion.'\',\''.$concepto.'\',\''.$cantidad.'\',\''.$unidad.'\',\''.$nota.'\',\''.$ip.'\',\''.$host.'\',\''.$fechasalida.'\',\''.$obsequio.'\',\''.$regresa.'\',\''.$costo.'\',\''.$moneda.'\',\''.$tipopase.'\',\''.date("Y-m-d G:i").'\')';	
	
	mysql_query("delete from pasesmuestra where Folio='$folio' AND GrupoCode='$grupocode'",$link);
	
	if($flag!="")
	{
	
	 echo "<script language=\"javascript\">
	   alert('Se Cerro El Pase Carrectamente','');
	   	window.location.href=\"consulta.php\";
		</script>";	
	}
	else
	{
	
	
	 echo "<script language=\"javascript\">
	   alert('Se Cerro El Pase Carrectamente','');
	   	window.location.href=\"cerrar.php\";
		</script>";	  
		
		}
		
		
	 mysql_query($query) or die(mysql_error());		  
	}
		else
	{
	echo  "<img src =\"images/error404.png\"> ";
	 }


?>








