<?php
		function getIP()
		 {
		if (isset($_SERVER)) 
		{
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) 
		{
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		 else
		 {
		return $_SERVER['REMOTE_ADDR'];
		}
		} 
		else 
		{
		if (isset($GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDER_FOR'])) {
		return $GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDED_FOR'];
		}
		 else 
		{
		return $GLOBALS['HTTP_SERVER_VARS']['REMOTE_ADDR'];
		}
		}
		}
?>
<?php 
session_start();
			//datos para establecer la conexion con la base de mysql.
			mysql_connect('localhost','jorge','noen')or die ('Ha fallado la conexin: '.mysql_error());
			mysql_select_db('pasesmercancia')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
			function quitar($mensaje)
{
			$nopermitidos = array("'",'\\','<','>',"\"");
			$mensaje = str_replace($nopermitidos, "", $mensaje);
			return $mensaje;
}

if(trim($_POST["usuario"]) != "" && trim($_POST["password"]) != "")

{			

// Puedes utilizar la funcion para eliminar algun caracter en especifico
//$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
//$password = $HTTP_POST_VARS["password"];
// o puedes convertir los a su entidad HTML aplicable con htmlentities
$usuario = strtolower(htmlentities($_POST["usuario"], ENT_QUOTES));
$password = $_POST["password"];	
$flag5=1;		 
$result = mysql_query('SELECT Nombre,IdSupervisor, PassWord, Username, email,Deptoid, IdUsuario FROM usuariosnew WHERE Username=\''.$usuario.'\'AND sistema_ordencompra=\''.$flag5.'\'');
$ip=getIP();
//echo $ip;

$fecha=date( "Y-m-d G:i" );
mysql_query('UPDATE usuariosnew SET UltNodo=\''.$ip.'\' WHERE Username=\''.$usuario.'\'');
mysql_query('UPDATE usuariosnew SET FechaUltLogin=\''.$fecha.'\' WHERE Username=\''.$usuario.'\'');
if($row = mysql_fetch_array($result ))
{
			if($row["PassWord"] == $password)
{
$_SESSION["k_email2"] = $row['email'];
			echo $_SESSION["k_IdSupervisor2"] = $row['IdSupevisor'];
			$_SESSION["k_username2"] = $row['username'];
			$_SESSION["k_name2"] = $row['Nombre'];
?>
			<SCRIPT LANGUAGE="javascript">
		       location.href = "tutorial/alta_proveedor.php?nombre= <?php echo $_SESSION["k_name2"];?>";
			</SCRIPT>
			<?php		
}
else
{
}
}
if($row = mysql_fetch_array($result))
			{

			if($row["PassWord"] == $password)
{
			$_SESSION["k_username"] = $row['Username'];
			$_SESSION["k_name"] = $row['Nombre'];
			$_SESSION["k_IdSupervisor"] = $row['IdSupervisor'];
			 $_SESSION["k_email"] = $row['email'];
			$_SESSION["k_Deptoid"] = $row['Deptoid'];
			$_SESSION["k_IdUsuario"] = $row['IdUsuario'];
			 //enlace
}
else
{
			echo 'Password incorrecto';	
			?>
			 <SCRIPT LANGUAGE="javascript">
		       location.href = "index.php";
			</SCRIPT>
		        <?php		
}
}
else
{
  		      echo 'Usuario no existente en la base de datos';
?> 
			<SCRIPT LANGUAGE="javascript">
			        location.href = "index.php";
			</SCRIPT>
<?php

}
			mysql_free_result($result);
}
else
{			
?>
			<SCRIPT LANGUAGE="javascript">
		       location.href = "index.php";
			</SCRIPT>


<?php
			echo 'Debe especificar un usuario y password';
				}
			$resultado = mysql_query('SELECT Nom_Depto  FROM departamentos WHERE DeptoId=\''.$_SESSION["k_Deptoid"].'\'');	
			if($row = mysql_fetch_array($resultado))
			{
			$_SESSION["nom_depto"] = $row['Nom_Depto'];

			}
			//echo $_SESSION["k_username"];
			//echo $_SESSION["k_Deptoid"];
			$depto=$_SESSION["k_Deptoid"];
			$us=$_SESSION["k_username"];		
?>
