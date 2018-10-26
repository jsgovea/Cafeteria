
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="DELETE from ingredientesextras where id_ingrediente='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>