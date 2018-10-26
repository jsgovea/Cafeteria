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
 

$result = mysqli_query($conexion, "call procesaventa ('".$idcajero."','".$codigo."','".$cantidad."','".$nota."','".$cliente."')");
 


if($result){ 
	   echo "<script>
                 window.location= '../caja_admin.php?id=$cliente'
                </script>";
	   
}
   
   else {
       echo "<script>
                alert('VERIFIQUE SUS DATOS ERROR');
                window.location= '../caja_admin.php?id=$cliente'
    </script>";
   
echo  "Problemas en la query:" . mysqli_error($con);
   }

mysqli_close($conexion);
?>
