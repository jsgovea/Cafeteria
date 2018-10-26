<?php
session_start();
?>
<?php
include_once"conexion.php";
if($con->connect_error)
{
	die("LA CONEXION FALLO".$con->connect_error);
}
 $user=$_POST['usuario'];
 $password=$_POST['password'];
$result = mysqli_query($con, "SELECT * FROM usuarios where user = '".$user."' AND password = '".$password."'");
 if($result){
   if(mysqli_num_rows($result) > 0) {
	 
	    if(mysqli_num_rows($result) > 0) {
	   
	   while($ver=mysqli_fetch_row($result)){ 
		   	      $id=$ver[0];
				 $nombre=$ver[1];
		         $ap=$ver[2];
				 $tipo=$ver[6];
		  
	   }

	   if($tipo==0){
			$_SESSION["id"]=$id;
			$_SESSION["nombre"]=$nombre;
			$_SESSION["ap"]=$ap;
			$_SESSION["tipo"]=$tipo;

			header('location:caja.php?id=0');
	   }
	   else{
		    $_SESSION["id"]=$id;
			$_SESSION["nombre"]=$nombre;
	  	  	$_SESSION["ap"]=$ap;
	  	  	$_SESSION["ap"]=$ap;
			$_SESSION["tipo"]=$tipo;
			
			header('location:index.php');
	   }

   }
   else {
       echo "<script>
                alert('VERIFIQUE SUS DATOS ACCESO DE NAGADO');
                window.location= 'login.php'
    </script>";

   }
}
else
 {
echo  "Problemas en la query:" . mysqli_error($con);
}
 }
mysqli_close($con);
?>
