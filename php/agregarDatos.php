<?php 

	require_once "conexion.php";
	$conexion=conexion();
	 $n=$_POST['nombre'];
	 $ap=$_POST['apellido'];
	$apellido2=$_POST['apellido2'];
	$user=$_POST['usuario'];
$pass=$_POST['pass'];
$tipo=$_POST['tipo'];

	//$n="RAMSES";
	//$ap="TAMAYO";
	//$am="LEDESMA";
	//$user="RAM";
//$pass="RAMSES123";
//$tipo=1;


	//$sql="INSERT into usuarios (nombre,apellido_paterno,apellido_materno,user,password,tipo_usuario)
		//						values ('$n','$ap','$am','$user','$pass','$tipo')";



	$sql="INSERT into usuarios (nombre,apellidoPaterno,apellidoMaterno,user,password,tipo_usuario)
							values ('$n','$ap','$apellido2','$user','$pass','$tipo')";

	echo $result=mysqli_query($conexion,$sql);

 ?>