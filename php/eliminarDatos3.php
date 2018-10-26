
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="DELETE from platillos where idPlatillo='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>