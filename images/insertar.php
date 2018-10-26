	<?php
	  $tipopase=$_GET['tipopase'];
	  include("ip.php");
	  include("conectarse.php"); 
	  include("grupos.php");
	  include("variables1.php");
	   $link=Conectarse();    
	   $select;
 
//echo $descripcion;
//echo $combo2;

		  // SE OBTINE EL  VALOR MAXIMO  SEGUN LA SERIE		  
		   $result2 = mysql_query('SELECT max(Folio) as Folio FROM pasesmuestra WHERE GrupoCode=\''.$GrupoCode.'\'');		  
		  // SE OBTIENE EL IP DE LA PC
		  $ip=getIP();		    
	     //SE OBTIENE EL NOMBRE DEL HOST 
		 $host = gethostbyaddr($ip);
		 $host;
		 if($row = mysql_fetch_array($result2 ))
					{
		echo "Guardado....";
		$folio= $row['Folio'];
		$folio=$folio+1;
		$query = 'INSERT INTO pasesmuestra (Serie,GrupoCode,Folio,Fecha,Cliente,Solicitante,Autoriza,depto,Empleado,Modelo,descripcion,Concepto,Cantidad,Unidad,Nota,IPaddress,Host,FechaSalida,obsequio,regresa,costo,moneda,tipopase) VALUES (\''.$tipopase.'\',\''.$GrupoCode.'\',\''.$folio.'\',\''.date("Y-m-d G:i").'\',\''.$cliente.'\',\''.$solicitante.'\',\''.$autorizo.'\',\''.$depto.'\',\''.$empleado.'\',\''.$modelo.'\',\''.$descripcion.'\',\''.$concepto.'\',\''.$cant.'\',\''.$unidad.'\',\''.$nota.'\',\''.$ip.'\',\''.$host.'\',\''.date("Y-m-d G:i").'\',\''.$obsequio.'\',\''.$combo1.'\',\''.$costo.'\',\''.$moneda.'\',\''.$combo2.'\' )';				
		 mysql_query($query) or die(mysql_error());		  
	




echo "<script language=\"javascript\">
			window.location.href=\"tuto2.php?folio=$folio&GrupoCode=$GrupoCode\";
			</script>";

}
		else
	{
	     echo "Error al insertar";
	 }
?>

<html>
<br>
<br>
<br>
 
</html>




