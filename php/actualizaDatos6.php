<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$ap=$_POST['ap'];
	$am=$_POST['am'];
	$credito=$_POST['credito'];
	$sql=" call actualizacliente('".$id."','".$nombre."','".$ap."','".$am."','".$credito."')";
	echo $result=mysqli_query($conexion,$sql);

 ?>