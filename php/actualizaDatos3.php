<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['idper'];
	$descripcion=$_POST['descripcion'];
	$precio=$_POST['precio'];
	$sql=" call actualizaplatillo('".$id."','".$descripcion."','".$precio."')";
	echo $result=mysqli_query($conexion,$sql);

 ?>