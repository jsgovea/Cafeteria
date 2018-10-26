<?php
include_once"conexion.php";

echo $nombre=$_POST["nombre"];
echo $ap=$_POST["ap"];
echo $am=$_POST["am"];
echo $user=$_POST["user"];
echo $pass=$_POST["pass"];
echo $tipo=$_POST["tipo"];

echo $borrar=$_POST["borrar"];
echo $modificar=$_POST["modificar"];


//$consulta = "DELETE FROM usuarios WHERE ID=$id_user";
//$consulta = "update usuarios set nombre=, apellidoPaterno=, apellidoMaterno=, user=, password=, tipo_usuario= where id=";

//Ejecutar la consulta
$result = mysqli_query($con, "delete from usuarios where id = '".$borrar."'" );
$result = mysqli_query($con, "update usuarios set nombre='".$nombre."', apellidoPaterno='".$ap."', apellidoMaterno='".$am."', user='".$user."', password='".$pass."', tipo_usuario='".$tipo."' where id='".$modificar."';" );

//redirigir nuevamente a la página para ver el resultado
header("location: tabla.php");

?>