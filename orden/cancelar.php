<?php
include("ip.php");
include("conectarse.php");
	
	$link=Conectarse();
	$nombre=$_GET['nombre'];
	$numcompra=$_GET['numcompra'];
	$n=$_GET['n'];
    $d=$_GET['d'];	
	$status="C";
	
	$numcompra2=substr($numcompra,4,9);
    $numcompra2=(string)(int)$numcompra2;
	$neworden= $numcompra2;
	
	// SE OBTIENE EL IP DE LA PC
	$ip=getIP();		    
	//SE OBTIENE EL NOMBRE DEL HOST 
	$host = gethostbyaddr($ip);
	$host;

	
	
	$q = "UPDATE orden_temp set status ='".$status."' , ip ='".$ip."' , host ='".$host."' where NumOrden='".$neworden."'";
mysql_query($q, $link) or die ("problema con query1");
 


	echo " <script language=JavaScript> 
           alert('Orden Cancelada..'); 
    	    </script>";

	echo "<script language=\"javascript\">					window.location.href=\"consulta_orden.php?nombre=$nombre&n=$n&d=$d\";
			</script>";
			
?>
