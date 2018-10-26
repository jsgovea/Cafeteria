<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?php
  include("conectarse.php"); 
  $link=Conectarse(); 
  
?>	


<html dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Combos dependientes</title>
<script language="javascript" src="js/jquery-1.2.6.min.js"></script>
<script language="javascript">
 function check(depto)
    {
   
	
 var elCampo = document.getElementById('depto');
	
 location.href="consulta_depto.php?variable="+elCampo.value+"";
	    
	}
	 
</script>


<?php
 //include("conectarse.php");
	$link2=Conectarse();
	 $depto =$_GET[variable];
	 
?>



	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="CSS3 Menu_files/css3menu1/style.css" type="text/css" /><style>
	._css3m{display:none}#Layer1 {
	position:absolute;
	width:662px;
	height:47px;
	z-index:1005;
	top: 77px;
	left: 617px;
	visibility: visible;
}
    body {
	background-image: url(images/shape6029859.gif);
}
#Layer2 {
	position:absolute;
	width:200px;
	height:61px;
	z-index:1001;
	left: 46px;
	top: 9px;
	visibility: visible;
}
    #Layer3 {
	position:absolute;
	width:1038px;
	height:715px;
	z-index:1002;
	left: 2px;
	top: 125px;
	visibility: visible;
}
    #Layer4 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1004;
	left: 83px;
	top: 184px;
}
    .ws14 {font-size: 19px;}
    #Layer5 {
	position:absolute;
	width:208px;
	height:29px;
	z-index:1007;
	left: 19px;
	top: 86px;
}
    #Layer6 {
	position:absolute;
	width:231px;
	height:67px;
	z-index:1006;
	left: 8px;
	top: 68px;
}
    #Layer7 {
	position:absolute;
	width:892px;
	height:580px;
	z-index:1;
	left: 20px;
	top: 86px;
	visibility: visible;
}
    #Layer8 {
	position:absolute;
	width:203px;
	height:37px;
	z-index:1007;
	left: 44px;
	top: 77px;
	background-color: #FFFFFF;
	visibility: visible;
}
    #Layer9 {
	position:absolute;
	width:413px;
	height:100px;
	z-index:2;
	left: 275px;
	top: -1px;
}
    </style>
	<!-- End css3menu.com HEAD section -->
</head>
<body style="background-color:#EBEBEB">
<!-- Start css3menu.com BODY section -->
<p class="_css3m"><a href="http://css3menu.com/">Horizontal CSS3 Menus Css3Menu.com</a></p>
<div id="Layer1">
  <ul id="css3menu1" class="topmenu">
    <li class="topfirst"><a href="INDEX.PHP" style="height:15px;line-height:15px;"><span>PASE MUESTRA			      </span></a>
        <ul>
          <li class="subfirst"><a href="index2.php">NUEVO</a></li>
          <li><a href="cerrar.php">CERRAR PASE</a></li>
          <li><a href="cancelar.php">CANCELAR</a></li>
          <li><a href="consulta.php">REIMPRIMIR</a></li>
        </ul>
    </li>
    <li class="topmenu"><a href="index.php" style="height:15px;line-height:15px;"><span>CATALOGOS</span></a>
        <ul>
          <li class="subfirst"><a href="consulta_depto.php">DEPARTAMENTOS</a></li>
          <li><a href="index.php">CATALOGOS 0TIPOS DE PASE</a></li>
        </ul>
    </li>
    <li class="topmenu"><a href="index.php" style="height:15px;line-height:15px;"><span>REPORTES</span></a>
        <ul>
          <li class="subfirst"><a href="index.php">PASES SIN CERRAR</a></li>
          <li><a href="index.php">POR DEPARTAMENTO</a></li>
          <li><a href="index.php">POR TIPO DE PASE</a></li>
          <li><a href="index.php">PASES CANCELADOS</a></li>
      </ul>
    </li>
    <li class="toplast"><a href="#" style="height:15px;line-height:15px;">SALIR</a></li>
  </ul>
</div>

<div id="Layer2">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="1000" height="60">
    <param name="movie" value="BANNER/banner_01.swf">
    <param name="quality" value="high">
    <embed src="BANNER/banner_01.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="1000" height="60" ></embed>
  </object>
</div>

<div id="Layer3"><img src="images/shape21911453.gif" width="989" height="653">
  <div id="Layer9">
    <blockquote>&nbsp;</blockquote>
    <table width="372" height="69" border="0">
      <tr>
	  
        <th height="36" colspan="2" scope="row"><div align="center"></div></th>
        <td width="314"><form name="form2" method="post" action="consulta_depto.php">
		
          <label for="select"></label>
          <strong>Departamento:</strong>
          <select name="depto" id="depto" title="Departamento que solicita." onChange="check()">
            <option>SELECCIONAR</option>
            <option value="COM">COMPRAS</option>
            <option value="CON">CONTABILIDAD</option>
            <option value="CTM">CTRL. MATERIALES</option>
            <option value="ENS">ENSAMBLE</option>
            <option value="ING">INGENIERIA</option>
            <option value="LOG">LOGISCIA</option>
            <option value="PRO">PRODUCCION</option>
            <option value="RHM">RECURSO HUMANOS</option>
            <option value="MIS">SISTEMAS</option>
            <option value="TRF">TRAFICO</option>
            <option value="VTS">VENTAS</option>
                    </select>
        </form>        </td>
      </tr>
      <tr>
        <th width="111" scope="row">&nbsp;</th>
        <td width="10">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </div>

  <div id="Layer7">
  <?php
  
  
  
  
  
mysql_connect("localhost", "root", "RootMySQL");
mysql_select_db("pasesmercancia");
$noRegistros =10; //Registros por página
$pagina = 1; //Por default, página = 1
if($_GET["pagina"]) //Si hay página por ?pagina=valor, lo asigna
    $pagina = $_GET["pagina"];
echo "Pagina: ".$pagina."<hr>";
$escape="N/A";
//Utilizo el comando LIMIT para seleccionar registros
$sSQL = "SELECT * FROM pasesmuestra where CanceladoPor='".$escape."' AND MotivoCancelado='".$escape."'  AND depto='".$depto."' ORDER BY GrupoCode LIMIT ".($pagina-1)*$noRegistros.",$noRegistros";
$result = mysql_query($sSQL) or die(mysql_error());
$color= "#CCCCCC";
$style="font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold;";
// Imprimiendo los resultado
	echo "<table width='100%' border='0px' cellspacing='1'>
        <tr>
        <td bgcolor='".$color."' style='".$style."'>Folio</td>
        <td bgcolor='".$color."' style='".$style."'>GrupoCode</td>
		<td bgcolor='".$color."' style='".$style."'>TipoPase</td>
        <td bgcolor='".$color."' style='".$style."'>Cliente</td>
        <td bgcolor='".$color."' style='".$style."'>Solicitante</td>
        <td bgcolor='".$color."' style='".$style."'>Autoriza</td>
        <td bgcolor='".$color."' style='".$style."'>depto</td>
	    <td bgcolor='".$color."' style='".$style."'>Empleado</td>
	 	<td bgcolor='".$color."' style='".$style."'>descripcion</td>
		<td bgcolor='".$color."' style='".$style."'>Concepto</td>
		<td bgcolor='".$color."' style='".$style."'>Cantidad</td>
		<td bgcolor='".$color."' style='".$style."'>Unidad</td>
	    <td bgcolor='".$color."' style='".$style."'>Fecha</td>
	    <td bgcolor='".$color."' style='".$style."'>Obsequio</td>
        </tr>";
		 $flag="Si";
 
while($row = mysql_fetch_array($result)) { //Exploracion comun de registros
 $grupo = $array['GrupoCode'];

 //echo $_SESSION["k_Status"];
 $status="RESID";
//echo $status;
if($grupo!=$status  )
   {
if ($colorfila==0)
	{
       $color= "#6AB5FF";
       $style="font-family:Arial, Helvetica, sans-serif; font-size:12px;";
       $colorfila=0;
    }
}
else
		{
       $color="#0099FF";
       $style="font-family:Arial, Helvetica, sans-serif; font-size:12px;";
       $colorfila=0;
        }
		echo "<tr bgcolor='".$color."' style='".$style."' onmouseover=\"this.style.background='#FFFFFF';this.style.color='#006F00'\" onmouseout=\"this.style.background='".$color."';this.style.color='#000000'\"> 
    <td>".$row['Folio']."</td>
	<td>".$row['GrupoCode']."</td>
	<td>".$row['tipopase']."</td>
    <td>".$row['Cliente']."</td>
    <td>".$row['Solicitante']."</td>
    <td>".$row['Autoriza']."</td>
    <td>".$row['depto']."</td>
	<td>".$row['Empleado']."</td>
	<td>".$row['descripcion']."</td>       
    <td>".$row['Concepto']."</td>
	<td>".$row['Cantidad']."</td>
	<td>".$row['Unidad']."</td>
	<td>".$row['Fecha']."</td>
	<td>".$row['obsequio']."</td>
	
	
	
    <td  bgcolor='#FFFFFF'><a href=\"consulta.php?grupo=".$row['GrupoCode']."&folio=".$row['Folio']." \" title='Cancelar Pase' > <img src ='images/cancelar.gif'> </a></td>
	
     <td  bgcolor='#FFFFFF'><a href=\"cerrar2.php?variable2=".$row['GrupoCode']."&variable=". $row['Folio']."&flag=".$flag." \" title='Cerrar Pase' > <img src ='images/bien.png'> </a></td>
		
	
    <td bgcolor='#FFFFFF' ><a href=\"tuto2.php?folio=".$row['Folio']."&GrupoCode=".$row['GrupoCode']."\"title='Imprimir Pase'><img src ='images/impresora.gif'>  </a></td>
	 </tr>";
	
	
}
 echo "</table>";
//Imprimiendo páginas
	//$grupo=$row['GrupoCode'];
$sSQL = "SELECT count(*) FROM pasesmuestra"; //Cuento el total de registros
$result = mysql_query($sSQL);
$row = mysql_fetch_array($result);
$totalRegistros = $row["count(*)"]; //Almaceno el total en una variable
echo "<hr>Total registros: ".$totalRegistros.", Pagina: "; 
$noPaginas = $totalRegistros/$noRegistros; //Determino la cantidad de páginas
for($i=1; $i<$noPaginas+1; $i++) { //Imprimo las páginas
    if($i == $pagina)
        echo "$i "; //A la página actual no le pongo link
    else
        echo "<a href=\"?pagina=".$i."\">".$i."</a> ";
}
?>
  
  
  
  
  
  </div>
</div>
<div id="Layer8">
  <table width="207" height="48" border="1" bordercolor="#FF6600">
    <tr>
      <th scope="row">IMPRESION-  </th>
    </tr>
  </table>
</div>
<div id="layer">
  <form name="form1" method="post" action="">
    <label for="textfield"></label>
    <label for="label"></label>
  </form>
</div>
<label for="textfield"></label>
<!-- End css3menu.com BODY section -->
<label for="label"></label>
</body>
</html>
