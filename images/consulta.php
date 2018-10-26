<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?php
  include("conectarse.php"); 
  $link=Conectarse(); 
  
?>	


<html dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta de pases</title>
<script language="javascript" src="js/jquery-1.2.6.min.js"></script>
<script language="javascript">
$(document).ready(function(){
	// Parametros para e combo1
   $("#combo1").change(function () {
   		$("#combo1 option:selected").each(function () {
			//alert($(this).val());
				elegido=$(this).val();
				$.post("combo1.php", { elegido: elegido }, function(data){
				$("#combo2").html(data);
				$("#combo3").html("");
			});			
        });
   })
	// Parametros para el combo2
	$("#combo2").change(function () {
   		$("#combo2 option:selected").each(function () {
			//alert($(this).val());
				elegido=$(this).val();
				$.post("combo2.php", { elegido: elegido }, function(data){
				$("#combo3").html(data);
			});			
        });
   })
});
	 
</script>


<?php
 //include("conectarse.php");
	$link2=Conectarse();
	 $motivo =$_GET[motivo];
	 $nomcancela=$_GET[nombre];
     $grupo=$_GET[grupo];   
     $folio=$_GET[folio];
	
	if($grupo!="" && $folio!="" && $motivo=="")
	{
	echo "<script language=\"javascript\">
	 var motivo=prompt('Motivo De Cancelacion:','');  
	  var nombre=prompt('Nombre de la persona que cancela:','');  
			window.location.href=\"consulta.php?grupo=$grupo&folio=$folio&motivo=\"+escape(motivo)+\"&nombre=\"+escape(nombre);
			</script>";	  
	 }
	 
	 
	  if($motivo!="null" && $nomcancela!="null" && $motivo!="undefined" && $nomcancela!="undefined" && $motivo!="" && $nomcancela!="" && $motivo!="" && $grupo!="")
	 {  
	 
	 
	  
  $q = "UPDATE pasesmuestra set CanceladoPor='".$nomcancela."' where GrupoCode='".$grupo."' AND Folio='".$folio."'";
mysql_query($q, $link) or die ("problema con query1");



  $q2 = "UPDATE pasesmuestra set MotivoCancelado='".$motivo."' where GrupoCode='".$grupo."' AND Folio='".$folio."'";
mysql_query($q2, $link) or die ("problema con query2");

	 
  $q3 = "UPDATE pasesmuestra set FechaCancelado='".date("Y-m-d G:i")."' where GrupoCode='".$grupo."' AND Folio='".$folio."'";
mysql_query($q3, $link) or die ("problema con query3");

echo " <script language=JavaScript> 
                alert('Se Cancelo El Pase Correctamente'); 
                </script>";


	 }
	 
	 
	 
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
    .Estilo1 {font-size: 24px}
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
	height:582px;
	z-index:1;
	left: 29px;
	top: 27px;
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
    </style>
	<!-- End css3menu.com HEAD section -->
</head>
<body style="background-color:#EBEBEB">
<!-- Start css3menu.com BODY section -->
<p class="_css3m"><a href="http://css3menu.com/">Horizontal CSS3 Menus Css3Menu.com</a></p>
<div id="Layer1">
  <ul id="css3menu1" class="topmenu">
    <li class="topfirst"><a href="index2.php" style="height:15px;line-height:15px;"><span>PASE MUESTRA			      </span></a>
        <ul>
          <li class="subfirst"><a href="index2.php">NUEVO</a></li>
          <li><a href="cerrar.php">CERRAR PASE</a></li>
          <li><a href="cancelar.php">CANCELAR</a></li>
          <li><a href="consulta.php">REIMPRIMIR</a></li>
        </ul>
    </li>
    <li class="topmenu"><a href="consulta_depto.php" style="height:15px;line-height:15px;"><span>CATALOGOS</span></a>
        <ul>
          <li class="subfirst"><a href="consulta_depto.php">DEPARTAMENTOS</a></li>
          <li><a href="consulta_tipopase.php">CONSULTA X TIPOS DE PASE</a></li>
        </ul>
    </li>
    <li class="topmenu"><a href="index.php" style="height:15px;line-height:15px;"><span>REPORTES</span></a>
        <ul>
          <li class="subfirst"><a href="tuto3.php">PASES SIN CERRAR</a></li>
          <li><a href="Repdepto.php">POR DEPARTAMENTO</a></li>
          <li><a href="Reptipo.php">POR TIPO DE PASE</a></li>
          <li><a href="tuto6.php">PASES CANCELADOS</a></li>
      </ul>
    </li>
    <li class="toplast"><a href="index2.php" style="height:15px;line-height:15px;">SALIR</a></li>
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
$sSQL = "SELECT * FROM pasesmuestra where CanceladoPor='".$escape."' AND MotivoCancelado='".$escape."' ORDER BY GrupoCode LIMIT ".($pagina-1)*$noRegistros.",$noRegistros";
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
while($row = mysql_fetch_array($result)) { //Exploracion comun de registros
 $grupo = $array['GrupoCode'];
 $flag="Si";
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
	
	
	
    <td  bgcolor='#FFFFFF'><a href=\"consulta.php?grupo=".$row['GrupoCode']."&folio=".$row['Folio']."\" title='Cancelar Pase' > <img src ='images/cancelar.gif'> </a></td>
	
	    <td  bgcolor='#FFFFFF'><a href=\"cerrar2.php?variable2=".$row['GrupoCode']."&variable=".$row['Folio']."&flag=".$flag." \" title='Cerrar Pase' > <img src ='images/bien.png'> </a></td>
		
	
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
