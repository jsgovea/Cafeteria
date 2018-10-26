	<?php
	  include("variable4.php");
	  include("ip.php");
	  include("conectarse.php");
	  $link=Conectarse();
	  $n=$_GET['n'];
      $d=$_GET['d'];
      $user=$_GET['nombre'];
	  $numcompra=$_GET['numcompra'];
	  $codproveedor=$_GET['codproveedor']; 
	  $numcompra2=substr($numcompra,4,9);		
      $numcompra2=(string)(int)$numcompra2;
	
	     
	  $q = "UPDATE orden_temp set Facturar='".$facturar."' , Entregar='".$entregar."', iva='".$iva."', autorizo='".$autoriza."',FechaEntrega='".$fechaentrega."'  where NumOrden='".$numcompra2."'";
mysql_query($q, $link) or die ("problema con query1");
	
		 
		 
	  echo $codproducto;
      $link=Conectarse();    
      $select;
      // SE OBTIENE EL IP DE LA PC
      $ip=getIP();		     
      //SE OBTIENE EL NOMBRE DEL HOST 
      $host = gethostbyaddr($ip);
	  $host; 
      $result2 = mysql_query('SELECT * FROM producto WHERE CodProducto=\''.$codproducto.'\' AND Depto = \''.$d.'\' '); 
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
					$status="A";
		 if($CodProducto2!="")
		 {
	$query = 'INSERT INTO orden_temp (CodProveedor,CodProducto,NombreProducto,Descripcion,Cantidad,Unidad,PrecUni,Importe,iva,Moneda,Facturar,FechaOrden,autorizo,FechaEntrega,Entregar,user,Depto, ip,host,NumOrden,status) VALUES (\''.$codproveedor.'\',\''.$CodProducto2.'\',\''.$NombreProducto.'\',\''.$Descripcion.'\',\''.$cantidad.'\',\''.$Unidad.'\',\''.$PrecioUni.'\',\''.$total.'\',\''.$iva.'\',\''.$Moneda.'\',\''.$facturar.'\',\''.date("Y-m-d ").'\',\''.$autorizo.'\',\''.$fechaentrega.'\',\''.$entregar.'\',\''.$user.'\',\''.$d.'\',\''.$ip.'\',\''.$host.'\',\''.$numcompra2.'\',\''.$status.'\'   )';	
	
	mysql_query($query) or die(mysql_error());		  
	echo  "<img src =\"images/procesando.gif\" width=300px height=200px border=0> ";	
	echo "<script language=\"javascript\">			window.location.href=\"modificar_orden.php?codproveedor=$codproveedor&nombre=$user&iva=$iva&fecha=$fechaentrega&autorizo=$autorizo&numcompra=$numcompra&entregar=$entregar&facturar=$facturar&autorizo=$autoriza&n=$n&d=$d\";
			</script>";
		 }
		 else
		 {
	 	echo  "<img src =\"images/procesando.gif\"> "; 
   	    echo " <script language=JavaScript> 
                alert('Orden Modificada'); 
                </script>";
		echo "<script language=\"javascript\">		window.location.href=\"modificar_orden.php?codproveedor=$codproveedor&nombre=$user&iva=$iva&fecha=$fechaentrega&numcompra=$numcompra&entregar=$entregar&facturar=$facturar&autorizo=$autoriza&n=$n&d=$d\";
			</script>"; 
		 }
?>
<html>
<br>
<br>
<br>
</html>




