<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$descripcion=$_POST['descripcion'];
	$cantidad=$_POST['cantidad'];
	$precio_unitario=$_POST['precio_unitario'];
	$sql=" call actulizainventario('".$id."','".$descripcion."','".$cantidad."','".$precio_unitario."')";
	echo $result=mysqli_query($conexion,$sql);

 ?>