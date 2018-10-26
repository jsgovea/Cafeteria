<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$ap=$_POST['apellido'];
	$am=$_POST['apellido2'];
	$user=$_POST['usuario'];
$pass=$_POST['pass'];
$tipo=$_POST['tipo'];

	$sql="UPDATE usuarios set nombre='$nombre',
								apellidoPaterno='$ap',
								apellidoMaterno='$am',
								user='$user',
								password='$pass',
								tipo_usuario='$tipo'
				where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>