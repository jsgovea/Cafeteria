<?php
 session_start();
	require_once "conexion.php";
	$conexion=conexion();
echo $idcajero=$_SESSION['id'];
?>
<?php
echo $codigo=$_POST['codigoBarras'];
echo $cantidad=$_POST['cantidad'];
echo $nota=$_POST['nota'];
echo $cliente=$_POST['cliente'];
 

$result2 = mysqli_query($conexion,"select cantidad from inventario where id_articulo='".$codigo."'");
while($ver=mysqli_fetch_row($result2)){ 
	$cant=$ver[0];}

$result3 = mysqli_query($conexion,"select idPlatillo from platillos where idPlatillo='".$codigo."'");
while($ver=mysqli_fetch_row($result3)){ 
	$cant=$ver[0];}


$result4 = mysqli_query($conexion,"select id_ingrediente from ingredientesextras where id_ingrediente='".$codigo."'");
while($ver=mysqli_fetch_row($result4)){ 
	$cant=$ver[0];}

 
$TOTAL=$cantidad+cant;

if($cant<=$TOTAL)
{
	       
 echo "<script>
                alert('PRODUCTO SIN EXISTENCIA EN EL INVENTARIO!!');
                window.location= '../caja.php?id=0'
    </script>";
}
else
{

$result = mysqli_query($conexion, "call procesaventa ('".$idcajero."','".$codigo."','".$cantidad."','".$nota."','".$cliente."')");
 


if($result){ 
	   echo "<script>
                 window.location= '../caja.php?id=$cliente'
                </script>";
	   
}
   
   else {
       echo "<script>
                alert('VERIFIQUE SUS DATOS ERROR');  
                window.location= '../caja.php?id=$cliente'
    </script>";
   
echo  "Problemas en la query:" . mysqli_error($con);
   }
}	
mysqli_close($conexion);
?>
