<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$id_cliente=$_POST['id_cliente'];
	$nombre=$_POST['nombre'];
	$ap_paterno=$_POST['ap_paterno'];
	$ap_materno=$_POST['ap_materno'];
    $credito=$_POST['credito'];
	

//$n="RAMSES";
	//$ap="TAMAYO";
	//$am="LEDESMA";
	//$user="RAM";
//$pass="RAMSES123";
//$tipo=1;


	//$sql="INSERT into usuarios (nombre,apellido_paterno,apellido_materno,user,password,tipo_usuario)
		//						values ('$n','$ap','$am','$user','$pass','$tipo')";



	$sql="call insertacliente('".$id_cliente."','".$nombre."','".$ap_paterno."','".$ap_materno."','".$credito."')";

	echo $result=mysqli_query($conexion,$sql);

 ?>