<?php 
session_start();
	require_once "php/conexion.php";
	$conexion=conexion();

echo $idcajero=$_SESSION['id'];
 echo $id_cliente2=$_GET['id'];

	$sql1="select sum(total) from caja where id_cliente=$id_cliente2";
 $result3=mysqli_query($conexion,$sql1);
while($ver=mysqli_fetch_row($result3)){
	$total_caja=$ver[0];
}

$sql2="select sum(total) from ventas where id_cliente=$id_cliente2 and status=0 and Eliminada=0";
 $result4=mysqli_query($conexion,$sql2);
while($ver=mysqli_fetch_row($result4)){
$total_venta=$ver[0];
}

$sql3="select credito from clientes where id_cliente=$id_cliente2";
 $result5=mysqli_query($conexion,$sql3);
while($ver=mysqli_fetch_row($result5)){
$credito=$ver[0];
}
$consumo=$total_caja+$total_venta;
echo "consumo=".$consumo."-";
if($consumo>$credito and $id_cliente2!=0)
{
	       
 echo "<script>
                alert('Excede El Credito!!!');
                window.location= 'caja.php?id=$id_cliente2'
    </script>";

}
else{
	



	$sql="select * from caja where id_cajero='$idcajero'";
	$sql0="select max(id_venta) from ventas";
 $result2=mysqli_query($conexion,$sql0);
while($ver2=mysqli_fetch_row($result2)){
 $idventa=$ver2[0]+1;	
 
}

echo $idventa;
//$sql="INSERT into usuarios (nombre,apellido_paterno,apellido_materno,user,password,tipo_usuario)
		//						values ('$n','$ap','$am','$user','$pass','$tipo')";
 $result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 
 
					$datos=$ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6]."||".
						   $ver[7]."||";
$id_cajero=$ver[1];
$cliente=$ver[2];					
 $id_producto=$ver[3];
$descripcion=$ver[4];
$cantidad=$ver[5];
$pu=$ver[6];
$total=$ver[7];
$nota=$ver[8];

	
				 
					
					
$insercion="insert into ventas (id_venta,id_cajero,id_cliente,id_producto,descripcion,cantidad,pu,total,nota) values ('".$idventa."','".$idcajero."','".$cliente."','".$id_producto."','".$descripcion."','".$cantidad."','".$pu."','".$total."','".$nota."')";
	  
	
					echo "productoo=".$id_producto;
		
					
$insercion2="call procesa_kiosco('".$idventa."','".$id_producto."','".$descripcion."','".$cantidad."','".$nota."')";
	  				
		$ejecucion2=mysqli_query($conexion,$insercion2)	;
		
					
if($ejecucion=mysqli_query($conexion,$insercion)){
        
 echo "<script>
                alert('Pago efectuado');
                window.location= 'caja.php?id=0'
    </script>";

        }else{

echo  mysql_error(); 

    }
   
          }
	$sql1="delete from caja where id_cajero='$idcajero'";
 $result3=mysqli_query($conexion,$sql1);

require_once "Tickets/ticket.php";
	
}
 ?>
 

