<?php
session_start();
?>
<?php
include_once"conexion.php";
if($con->connect_error)
{
	die("LA CONEXION FALLO".$con->connect_error);
}
 $user=$_GET['usuario'];
 $password=$_GET['password'];
$result = mysqli_query($con, "SELECT * FROM usuarios where user = '".$user."' AND password = '".$password."'");
 if($result){
   if(mysqli_num_rows($result) > 0) {
	 
	    if(mysqli_num_rows($result) > 0) {
	   
	   while($ver=mysqli_fetch_row($result)){ 
		   	      $id=$ver[0];
				 $nombre=$ver[1];
		         $ap=$ver[2];
		   
		  
	   }
	    $_SESSION["id"]=$id;
	   
			$_SESSION["nombre"]=$nombre;
	   
	    $_SESSION["ap"]=$ap;
	
	  header('location:index.php');
   }
   else {
       echo "<script>
                alert('VERIFIQUE SUS DATOS ACCESO DENEGADO');
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
