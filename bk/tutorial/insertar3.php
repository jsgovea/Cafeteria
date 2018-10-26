	<?php
	   include("variable3.php");
	   include("ip.php");

	   echo $user=$_GET['nombre'];
	   $codproveedor=$_GET['codproveedor'];
	   $iva=$_GET['iva'];
	   
	 
	     
	   $select;
		  // SE OBTIENE EL IP DE LA PC
		  $ip=getIP();		    
	     //SE OBTIENE EL NOMBRE DEL HOST 
		 $host = gethostbyaddr($ip);
		 $host;
		 
 	
	$conexion = mysql_connect('localhost','jorge','noen'); 
 	// se conecta con el servidor
	 mysql_select_db('pasesmercancia', $conexion); 
 	// selecciona la base de datos
 	$tabla = mysql_query("SELECT Deptoid FROM usuariosnew where Nombre='".trim($user, " ")."'"); 
 	// selecciono todos los registros de la tabla usuarios, ordenado por nombre
   if($registro = mysql_fetch_array($tabla ))
 
  { 
 // comienza un bucle que leera todos los registros y ejecutara las ordenes que siguen 
 $depto= $registro['Deptoid'];
 } // fin del bucle de ordenes
 
 mysql_free_result($tabla); // libera los registros de la tabla
mysql_close($conexion); // cierra la conexion con la base de datos.
			  
 

	   include("conectarse.php"); 
	     $link=Conectarse(); 
	  $result2 = mysql_query('SELECT * FROM producto WHERE CodProducto=\''.$codproducto.'\''); 
	  if($row = mysql_fetch_array($result2 ))
					{
					 $CodProducto2= $row['CodProducto'];
					 $NombreProducto= $row['NombreProducto'];
					 $Descripcion= $row['Descripcion'];
					 $Unidad= $row['Unidad'];
					 $PrecioUni= $row['PrecioUni'];
					 $Moneda= $row['Moneda'];
					  $Unidad= $row['Unidad'];
					}	 
					$total=$PrecioUni*$cantidad;

		 if($CodProducto2!="")
		 {

	$query = 'INSERT INTO orden_temp (CodProveedor,CodProducto,NombreProducto,Descripcion,Cantidad,Unidad,PrecUni,Importe,iva,Moneda,Facturar,FechaEntrega,Entregar,user,ip,host,Depto) VALUES (\''.$codproveedor.'\',\''.$CodProducto2.'\',\''.$NombreProducto.'\',\''.$Descripcion.'\',\''.$cantidad.'\',\''.$Unidad.'\',\''.$PrecioUni.'\',\''.$total.'\',\''.$iva.'\',\''.$Moneda.'\',\''.$facturar.'\',\''.$fechaentrega.'\',\''.$entregar.'\',\''.$user.'\',\''.$ip.'\',\''.$host.'\',\''.$depto.'\'   )';
		
	mysql_query($query) or die(mysql_error());		  
	echo  "<img src =\"images/procesando.gif\" width=300px height=200px border=0> ";	
	echo "<script language=\"javascript\">			window.location.href=\"crear_orden.php?codproveedor=$codproveedor&nombre=$user&iva=$iva&fecha=$fechaentrega&autorizo=$autorizo&entregar=$entregar&facturar=$facturar\";
			</script>";
		 }
		 else
		 {
	 	echo  "<img src =\"images/error404.png\"> "; 
   	    echo " <script language=JavaScript> 
                alert('Error'); 
                </script>";
		echo "<script language=\"javascript\">		window.location.href=\"crear_orden.php?codproveedor=$codproveedor&nombre=$user&iva=$iva&fecha=$fechaentrega&autorizo=$autorizo&entregar=$entregar&facturar=$facturar\";
			</script>"; 
		 }
?>
<html>
<br>
<br>
<br>
</html>




