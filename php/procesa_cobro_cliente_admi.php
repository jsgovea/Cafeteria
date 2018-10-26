<?php
 session_start();
	require_once "conexion.php";
	$conexion=conexion();
echo $idcajero=$_SESSION['id'];

?>
<?php
echo $codigocliente=$_GET['idcliente'];
 
if($codigocliente!="")
{}
else{
echo $codigocliente=$_POST['codigocliente'];
}
	$sql1="select sum(total) from caja where id_cliente=$codigocliente";
 $result3=mysqli_query($conexion,$sql1);
while($ver=mysqli_fetch_row($result3)){
	$total_caja=$ver[0];
}

$sql2="select sum(total) from ventas where id_cliente=$codigocliente and status=0 and Eliminada=0";
 $result4=mysqli_query($conexion,$sql2);
while($ver=mysqli_fetch_row($result4)){
$total_venta=$ver[0];
}

$sql3="select credito from clientes where id_cliente=$codigocliente";
 $result5=mysqli_query($conexion,$sql3);
while($ver=mysqli_fetch_row($result5)){
$credito=$ver[0];
}
 $consumo=$total_caja+$total_venta;
echo "/".$consumo."/";

if($result5){ 
	   echo "<script>
                 window.location= '../pago_clientes.php?c=$consumo&codigo=$codigocliente&id=1'
                </script>";
	   
}
   
   else {
       echo "<script>
                alert('VERIFIQUE SUS DATOS ERROR');
                window.location= '../pago_clientes.php'
    </script>";
   
echo  "Problemas en la query:" . mysqli_error($con);
   }

mysqli_close($conexion);
?>
