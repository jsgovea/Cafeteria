<?php 

	require_once "conexion.php";
	$conexion=conexion();
	 $id_ingrediente=$_POST['id_ingrediente'];
	 $descripcion=$_POST['descripcion'];
	$precio=$_POST['precio'];
	
	//$n="RAMSES";
	//$ap="TAMAYO";
	//$am="LEDESMA";
	//$user="RAM";
//$pass="RAMSES123";
//$tipo=1;


	//$sql="INSERT into usuarios (nombre,apellido_paterno,apellido_materno,user,password,tipo_usuario)
		//						values ('$n','$ap','$am','$user','$pass','$tipo')";



	$sql="call insertaringredientes('".$id_ingrediente."','".$descripcion."','".$precio."')";

	echo $result=mysqli_query($conexion,$sql);

 ?>