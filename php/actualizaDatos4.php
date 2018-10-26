<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$descripcion=$_POST['descripcion'];
	$precio=$_POST['precio'];
	$sql=" call actualizaingrediente('".$id."','".$descripcion."','".$precio."')";
	echo $result=mysqli_query($conexion,$sql);

 ?>