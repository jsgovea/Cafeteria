
<?php

/* Incluimos el archivo de funciones */
require_once("includes/constantes.php");

$ServerConnectionStr = MSSQL_DBSERVER . "\\" . MSSQL_DBACCOUNTING;

$SQLSentence = " Select c.Codigo as Cuenta,  sc.Ejercicio as EJE, sc.Tipo as Tipo, sc.saldoIni AS SaldoIni, " .
               "        sc.Importes1 as Imp1, sc.Importes2 as Imp2, sc.Importes3 as Imp3, sc.Importes4  as Imp4,  sc.Importes5  as Imp5,  sc.Importes6  as Imp6," .
               "        sc.Importes7 as Imp7, sc.Importes8 as Imp8, sc.Importes9 as Imp9, sc.Importes10 as Imp10, sc.Importes11 as Imp11, sc.Importes12 as Imp12," .
               "        (case when sc.Tipo=3 then -1 else 1 end) as Factor,  c.Nombre AS Nombre " .
               " From  Cuentas c,  SaldosCuentas sc" .
               " Where c.Id=sc.idCuenta and (c.codigo like '5%' or c.codigo like '6%')" .
               " Order by 1,2,3 ";

$conectID = mssql_connect($ServerConnectionStr, MSSQL_DBUSER , MSSQL_DBPASSWORD );
if(!$conectID) {
	  die("Error de Conexion SQL Server : $ServerConnectionStr ")
}

mssql_select_db(MSSQL_DBACC_2012);
$QResult   = mssql_query($SQLSentence,$conectID  );

if(!$QResult)   /* Declaramos un if en caso de que la consulta no se haya ejecutado bien, para que nos muestre el error */
  print $conectID->ErrorMsg( );
else{
 while ($row=mssql_fetch_array($QResult )) { 
    $Cuenta    = $row["Cuenta"];
    $Eje       = $row["EJE"];
    $Tipo      = $row["Tipo"];
    $SaldoIni  = $row["SaldoIni"];
    $NombreAcc = $row["Nombre"];
    print " $Cuenta , $Eje, $Tipo, $SaldoIni, $NombreAcc "."<br>";
 }

} 

mssql_close($conectID); 
$QResult->Close();

?>
