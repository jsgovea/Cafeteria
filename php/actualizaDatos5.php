<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$cantidad=$_POST['cantidad'];
	$nota=$_POST['nota'];
	$sql=" call actualizacaja('".$id."','".$cantidad."','".$nota."')";
	echo $result=mysqli_query($conexion,$sql);

 ?>