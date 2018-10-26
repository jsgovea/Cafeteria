	<?php
	  include("variable3.php");
	  include("ip.php");
	  include("conectarse.php"); 
	   
	  $user=$_GET['nombre'];
	   $codproveedor=$_GET['codproveedor'];
	   $iva=$_GET['iva'];
	  $link=Conectarse();    
	  $select;
		  // SE OBTIENE EL IP DE LA PC
		  $ip=getIP();		    
	     //SE OBTIENE EL NOMBRE DEL HOST 
		 $host = gethostbyaddr($ip);
		 $host;
		 
		 
		 
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
		 
		 
		 
	$query = 'INSERT INTO orden_temp (CodProveedor,CodProducto,NombreProducto,Descripcion,Cantidad,Unidad,PrecUni,Importe,iva,Moneda,Facturar,FechaEntrega,Entregar,user,ip,host) VALUES (\''.$codproveedor.'\',\''.$CodProducto2.'\',\''.$NombreProducto.'\',\''.$Descripcion.'\',\''.$cantidad.'\',\''.$Unidad.'\',\''.$PrecioUni.'\',\''.$total.'\',\''.$iva.'\',\''.$Moneda.'\',\''.$facturar.'\',\''.$fechaentrega.'\',\''.$entregar.'\',\''.$user.'\',\''.$ip.'\',\''.$host.'\'   )';	
		
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




