
<?php

/* Incluimos el archivo de funciones */
require_once("includes/constantes.php");

$ServerConnectionStr = MSSQL_DBSERVER . "\\" . MSSQL_DBMTS2002DATA;
$SQLSentence = "select c_username,c_userpassword  from emp where c_username is not NULL order by 1";
 
  
$conectID = mssql_connect($ServerConnectionStr, MSSQL_DBUSER , MSSQL_DBPASSWORD );
if(!$conectID) {
	  die("Error de Conexion SQL Server : $ServerConnectionStr ")
}

mssql_select_db(MSSQL_DBMTS2002EMP);
$QResult   = mssql_query($SQLSentence,$conectID  );

if(!$QResult)   /* Declaramos un if en caso de que la consulta no se haya ejecutado bien, para que nos muestre el error */
	  die("Error al ejecutar consulta");
else{
 while ($row=mssql_fetch_array($QResult )) { 
    $UserName       = $row["c_username"];
    $PassWord       = $row["c_userpassword"];
    print " $UserName , $Password "."<br>";
 }

} 
mssql_close($conectID); 

?>
