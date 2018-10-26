<?php 
session_start();
	require_once "php/conexion.php";
	$conexion=conexion();

echo $idcajero=$_SESSION['id'];
 echo $id_cliente2=$_GET['id'];

	 
$sql3="select * from clientes where id_cliente=$id_cliente2";
 $result5=mysqli_query($conexion,$sql3);
while($ver3=mysqli_fetch_row($result5)){
$nombre=$ver3[1];
	$ap=$ver3[2];
$am=$ver3[3];
}

echo $nombre_cliente=$nombre." ".$ap." ".$am;


$sql2="select sum(total) from ventas where id_cliente=$id_cliente2 and status=0 and Eliminada=0";
 $result4=mysqli_query($conexion,$sql2);
while($ver=mysqli_fetch_row($result4)){
$total_venta=$ver[0];
}

$consumo=$total_venta;
echo "consumo=".$consumo."-"; 

 


require_once "Tickets/ticket2.php";


	$sql0="call ProcesaPagoCliente('".$id_cliente2."','".$idcajero."')";
 $result2=mysqli_query($conexion,$sql0);
 

//echo $idventa;
//$sql="INSERT into usuarios (nombre,apellido_paterno,apellido_materno,user,password,tipo_usuario)
		//						values ('$n','$ap','$am','$user','$pass','$tipo')";
   
 

    
	 

	
 ?>
 

