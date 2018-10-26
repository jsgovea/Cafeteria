<?php 
 
require_once "conexion.php";
	$conexion=conexion();
	echo $id=$_POST['id'];
 
	$sql="call termina_orden('".$id."')";

	echo $result=mysqli_query($conexion,$sql);
 ?>