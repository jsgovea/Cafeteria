<?php 
session_start();
$idcajero=$_SESSION['id'];
	
require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="call ProcesaEliminaVenta('".$id."','".$idcajero."')";

	echo $result=mysqli_query($conexion,$sql);
 ?>