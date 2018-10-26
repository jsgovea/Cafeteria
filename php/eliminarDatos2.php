
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="DELETE from inventario where id_articulo='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>