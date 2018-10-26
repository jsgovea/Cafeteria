<?php 

	require_once "conexion.php";
	$conexion=conexion();
	 $id_articulo=$_POST['id_articulo'];
	 $descripcion=$_POST['descripcion'];
	$cantidad=$_POST['cantidad'];
	$precio_unitario=$_POST['precio_unitario'];
	//$n="RAMSES";
	//$ap="TAMAYO";
	//$am="LEDESMA";
	//$user="RAM";
//$pass="RAMSES123";
//$tipo=1;


	//$sql="INSERT into usuarios (nombre,apellido_paterno,apellido_materno,user,password,tipo_usuario)
		//						values ('$n','$ap','$am','$user','$pass','$tipo')";



	$sql="call insertarinventario('".$id_articulo."','".$descripcion."','".$cantidad."','".$precio_unitario."')";

	echo $result=mysqli_query($conexion,$sql);

 ?>