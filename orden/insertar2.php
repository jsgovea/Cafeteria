	<?php
	  $user=$_GET['nombre'];
	   $n=$_GET['n'];
	    $d=$_GET['d'];
	  include("variables2.php");
	  include("ip.php");
	  include("conectarse.php"); 
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
					}	  

		 
		 if($CodProducto2=="")
		 {
		$query = 'INSERT INTO producto (CodProducto,NombreProducto,Modelo,Descripcion,Marca,PrecioUni,Moneda,Unidad,user,Depto,ip,host,fecha) VALUES (\''.$codproducto.'\',\''.$nombreproducto.'\',\''.$modeloproducto.'\',\''.$descripcionproducto.'\',\''.$marcaproducto.'\',\''.$preciouni.'\',\''.$moneda.'\',\''.$unidad.'\',\''.$user.'\',\''.$d.'\',\''.$ip.'\',\''.$host.'\',\''.date("Y-m-d G:i").'\' )';	
					
		mysql_query($query) or die(mysql_error());		  
		   echo  "<img src =\"images/procesando.gif\" width=300px height=200px border=0> ";

	
	echo " <script language=JavaScript> 
                alert('Guardado'); 
                </script>";

	

echo "<script language=\"javascript\">
			window.location.href=\"alta_producto.php?nombre=$user&n=$n&d=$d\";
			</script>";


		 }
		 else
		 {
		  $q = "UPDATE producto set NombreProducto='".$nombreproducto."', Modelo='".$modeloproducto."', Descripcion='".$descripcionproducto."', Marca='".$marcaproducto."' ,PrecioUni='".$preciouni."', Moneda='".$moneda."',Unidad='".$unidad."',user='".$user."',Depto='".$d."', ip='".$ip."', host='".$host."', fecha='".date("Y-m-d G:i")."'  where CodProducto='".$CodProducto2."'  AND Depto='".$d."'";
mysql_query($q, $link) or die ("problema con query1");
  
	echo " <script language=JavaScript> 
                alert('MODIFICADO'); 
                </script>";


echo "<script language=\"javascript\">
			window.location.href=\"alta_producto.php?nombre=$user&n=$n&d=$d\";
			</script>";
	 
		 }
		 
		 
		
 
?>

<html>
<br>
<br>
<br>
 
</html>




