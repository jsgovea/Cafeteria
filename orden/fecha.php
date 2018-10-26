<?php
$fechainicio= $_POST[inputField];
  $fechafinal= $_POST[inputField2];
   $dia= substr($fecharegresa,0,2);
  $mes= substr($fecharegresa,3,3);
  $year= substr($fecharegresa,7,8);

  $dia1= substr($fechainicio,0,2);
  $mes1= substr($fechainicio,3,3);
  $year1= substr($fechainicio,7,8);
  
    $dia2= substr($fechafinal,0,2);
  $mes2= substr($fechafinal,3,3);
  $year2= substr($fechafinal,7,8);

switch ($mes) {
    case "ENE":
    $mes="01/";
        break; 
	case "FEB":
    $mes="02/";
        break; 
	case "MAR":
    $mes="03/";
        break;
	case "ABR":
    $mes="04/";
        break;  
case "MAY":
    $mes="05/";
        break;  

case "JUN":
    $mes="06/";
        break;
case "JUL":
    $mes="07/";
        break;
case "AGO":
    $mes="08/";
        break;
case "SEP":
    $mes="09/";
        break; 
case "OCT":
    $mes="10/";
        break;
case "NOV":
    $mes="11/";
        break;
case "DIC":
    $mes="12/";
        break;             
}
switch ($mes1) {
    case "ENE":
    $mes1="01/";
        break; 
	case "FEB":
    $mes1="02/";
        break; 
	case "MAR":
    $mes1="03/";
        break;
	case "ABR":
    $mes1="04/";
        break;  
case "MAY":
    $mes1="05/";
        break;  

case "JUN":
    $mes1="06/";
        break;
case "JUL":
    $mes1="07/";
        break;
case "AGO":
    $mes1="08/";
        break;
case "SEP":
    $mes1="09/";
        break; 
case "OCT":
    $mes1="10/";
        break;
case "NOV":
    $mes1="11/";
        break;
case "DIC":
    $mes1="12/";
        break;             
		
		
		
}

switch ($mes2) {
    case "ENE":
    $mes2="01/";
        break; 
	case "FEB":
    $mes2="02/";
        break; 
	case "MAR":
    $mes2="03/";
        break;
	case "ABR":
    $mes2="04/";
        break;  
case "MAY":
    $mes2="05/";
        break;  

case "JUN":
    $mes2="06/";
        break;
case "JUL":
    $mes2="07/";
        break;
case "AGO":
    $mes2="08/";
        break;
case "SEP":
    $mes2="09/";
        break; 
case "OCT":
    $mes2="10/";
        break;
case "NOV":
    $mes2="11/";
        break;
case "DIC":
    $mes2="12/";
        break;             
		
		
		
}
//echo $dia;
//echo $mes;
//echo $year;

$fecharegresa=$year."/".$mes.$dia;

$fechainicio=$year1."/".$mes1.$dia1;

$fechafinal=$year2."/".$mes2.$dia2;

?>