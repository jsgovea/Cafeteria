

<?php 
		function conexion2(){
			$servidor="localhost";
			$usuario="root";
			$password="";
			$bd="cafeteria";

			$conexion2=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion2;
		}

 ?>