<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Baja Proveedores. </title>
<script type="text/javascript">
//Creamos una funci�n y le damos el nombre de cambiarImagen
function cambiarImagen(){ 
//Creamos una variable que recoja el id de la imagen 
var lugar = document.getElementById("img_selecc");
//Creamos una variable que recoja el id de la selecci�n 
var campo = document.getElementById("seleccionar");
/*Indicamos la direcci�n donde se encuentra la imagen,
indicando la carpeta (fotos) y la variable de la selecci�n*/
lugar.src = "images/" + campo.value; }
//Cerramos el script 
</script>
<style type="text/css">
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<meta name="description" content="Web Page Maker help you make your own web page without having to know HTML.">
<meta name="keywords" content="web page maker,make your own web page,make web page,easy">
<meta name="generator" content="Web Page Maker">
<title>Web Page Maker : Make your own web page easy!</title>
<style type="text/css">
/*----------Text Styles----------*/
.ws6 {font-size: 8px;}
.ws7 {font-size: 9.3px;}
.ws8 {font-size: 11px;}
.ws9 {font-size: 12px;}
.ws10 {font-size: 13px;}
.ws11 {font-size: 15px;}
.ws12 {font-size: 16px;}
.ws14 {font-size: 19px;}
.ws16 {font-size: 21px;}
.ws18 {font-size: 24px;}
.ws20 {font-size: 27px;}
.ws22 {font-size: 29px;}
.ws24 {font-size: 32px;}
.ws26 {font-size: 35px;}
.ws28 {font-size: 37px;}
.ws36 {font-size: 48px;}
.ws48 {font-size: 64px;}
.ws72 {font-size: 96px;}
.wpmd {font-size: 13px;font-family: 'Arial';font-style: normal;font-weight: normal;}
/*----------Para Styles----------*/
DIV,UL,OL /* Left */
{
 margin-top: 0px;
 margin-bottom: 0px;
}
</style>

<style type="text/css">
a.style2:link{color:#FF6600;text-decoration: none;}
a.style2:visited{color:#FF6600;text-decoration: none;}
a.style2:active{text-decoration: none;}
a.style2:hover{color:#99CC00;background:#ECFFEC;text-decoration: none;}
a.style1:link{color:#333399;text-decoration: none;}
a.style1:visited{color:#333399;text-decoration: none;}
a.style1:active{color:#333399;text-decoration: none;}
a.style1:hover{color:#333399;text-decoration: none;}
a.style3:link{color:#FF6600;text-decoration: none;}
a.style3:visited{color:#FF6600;text-decoration: none;}
a.style3:active{text-decoration: none;}
a.style3:hover{color:#99CC00;background:#ECFFEC;text-decoration: none;}
</style>
<style type="text/css">
 
body {text-align:center;margin:0}
#Layer1 {
	position:absolute;
	width:702px;
	height:405px;
	z-index:4;
	left: 236px;
	top: 296px;
	visibility: visible;
}
#Layer2 {
	position:absolute;
	width:193px;
	height:243px;
	z-index:2;
	left: 48px;
	top: 472px;
	overflow: visible;
}
#Layer3 {
	position:absolute;
	width:583px;
	height:50px;
	z-index:6;
	left: 249px;
	top: 201px;
	visibility: visible;
}
#Layer4 {
	position:absolute;
	width:100px;
	height:20px;
	z-index:13;
	left: -23px;
	top: 7px;
	visibility: visible;
}
#Layer5 {
	position:absolute;
	width:100;
	height:20;
	z-index:12;
	left: 111px;
	top: 7px;
	visibility: visible;
}
#Layer6 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 104px;
	top: 7px;
}
#Layer7 {
	position:absolute;
	width:124px;
	height:20px;
	z-index:14;
	visibility: visible;
	left: 223px;
	top: 7px;
}
#Layer8 {
	position:absolute;
	width:46px;
	height:19px;
	z-index:15;
	visibility: visible;
	left: 470px;
	top: 5px;
}
#Layer9 {
	position:absolute;
	width:73px;
	height:19px;
	z-index:16;
	visibility: visible;
	left: 373px;
	top: 5px;
}
#Layer10 {
	position:absolute;
	width:135px;
	height:67px;
	z-index:1;
	top: 26px;
	left: 2px;
	visibility: hidden;
}
.Estilo1 {color: #333399}
#Layer11 {
	position:absolute;
	width:116px;
	height:72px;
	z-index:2;
	left: -6px;
	top: 26px;
	visibility: hidden;
}
#Layer12 {
	position:absolute;
	width:274px;
	height:34px;
	z-index:3;
	left: 624px;
	top: 726px;
}
#Layer13 {
	position:absolute;
	width:141px;
	height:70px;
	z-index:11;
	left: 40px;
	top: 509px;
}
#Layer14 {	position:absolute;
	width:227px;
	height:22px;
	z-index:7;
	left: 770px;
	top: 205px;
}
</style>

 <?php
  $n=$_GET['n'];
  $d=$_GET['d'];
  echo $name; 
 
  ?>
 
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<script language="javascript" src="js/jquery-1.2.6.min.js"></script>
<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.autocomplete.js"></script>
 
<script language="javascript">
 
$(document).ready(function(){
 $("#codproveedor").autocomplete("autocomplete.php", {
		selectFirst: true
	});
});

<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}

function check(tipopase)
    {
  	 var elCampo = document.getElementById('codproveedor');
	 var elCampo2 = document.getElementById('flagname');  
location.href="baja_proveedor.php?codproveedor="+elCampo.value+"&nombre="+ elCampo2.value  +"&n=<?php echo $n; ?>&d=<?php echo $d; ?>" ;     
	}	
	
	function funcion( th, thF ){
    var elementosArray = [ "rfc", "nombre" , "tel", "fax", "correo", "contacto", "credito", "moneda", "domicilio"];
     
        for(var i=0;i<elementosArray.length;i++)
		
		thF[ elementosArray[i] ].disabled = !thF[ elementosArray[i] ].disabled;
}
	
	
//-->
</script>
<style type="text/css">
<!--
#Layer15 {
	position:absolute;
	width:121px;
	height:74px;
	z-index:14;
	left: -2px;
	top: 26px;
	visibility: hidden;
}
#Layer16 {
	position:absolute;
	width:78px;
	height:71px;
	z-index:1;
	left: -8px;
	top: 25px;
	visibility: hidden;
}
.Estilo3 {font-size: 16}
#Layer17 {
	position:absolute;
	width:333px;
	height:26px;
	z-index:3;
	left: 238px;
	top: 262px;
}
#Layer18 {
	position:absolute;
	width:326px;
	height:37px;
	z-index:22;
	left: 689px;
	top: 256px;
}
-->
</style>
</head>
<body>
<div id="container">
  <div id="g_image3" style="position:absolute; overflow:hidden; left:200px; top:192px; width:20px; height:45px; z-index:0; visibility: visible;"><img src="images/topmenu_img1.gif" alt="" border=0 width=20 height=45></div>
  <div id="g_image5" style="position:absolute; overflow:hidden; left:14px; top:238px; width:187px; height:85px; z-index:2; visibility: visible;"><img src="images/users_feedback_bg.gif" alt="" border=0 width=187 height=85></div>
  <div id="g_image2" style="position:absolute; overflow:hidden; left:14px; top:192px; width:187px; height:47px; z-index:5; visibility: visible;"><img src="images/users_feedback_s.gif" alt="" border=0 width=187 height=47></div>
  <div id="g_image9" style="position:absolute; overflow:hidden; left:163px; top:710px; width:862px; height:47px; z-index:8; visibility: visible;"><img src="images/botmenu_bg.gif" alt="" border=0 width=799 height=47></div>
  <div id="g_image10" style="position:absolute; overflow:hidden; left:12px; top:710px; width:187px; height:47px; z-index:9; visibility: visible;"><img src="images/bot1.gif" alt="" border=0 width=187 height=47></div>
  <div id="g_image8" style="position:absolute; overflow:hidden; left:195px; top:710px; width:28px; height:47px; z-index:12; visibility: visible;"><img src="images/bot2.gif" alt="" border=0 width=28 height=47></div>
  <div id="g_image4" style="position:absolute; overflow:hidden; left:206px; top:191px; width:807px; height:56px; z-index:1; visibility: visible;"><img src="images/products_b.gif" alt="" border=0 width=782 height=45></div>
  <div id="g_image6" style="position:absolute; overflow:hidden; left:18px; top:441px; width:193px; height:25px; z-index:13; visibility: visible;"><img src="images/new_releases_s.gif" alt="" border=0 width=193 height=25></div>
  <div id="g_image7" style="position:absolute; overflow:hidden; left:16px; top:466px; width:196px; height:236px; z-index:10; visibility: visible;"><img src="images/new_releases_bg.gif" alt="" border=0 width=196 height=236></div>
  <div id="g_shape1" style="position:absolute; overflow:hidden; left:11px; top:762px; width:983px; height:16px; z-index:14; visibility: visible;"><img border=0 width="100%" height="100%" alt="" src="images/shape8198781.gif"></div>
  <div id="text2" style="position:absolute; overflow:hidden; left:21px; top:448px; width:159px; height:25px; z-index:15; visibility: visible;">
    <div class="wpmd">
      <div><font color="#666699"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; EQUIPO</b></font></div>
      <div><font class="ws9" color="#666699"><br>
      </font></div>
    </div>
  </div>
  <div id="g_text4" style="position:absolute; overflow:hidden; left:9px; top:206px; width:165px; height:27px; z-index:16;">
    <div class="wpmd">
      <div><font color="#666699"><b> INFORMACION</b></font></div>
      <div><font color="#666699"><b><br>
      </b></font></div>
      <div><font class="ws9" color="#666699"><b> </b></font></div>
    </div>
  </div>
  <div id="g_flash1" style="position:absolute; overflow:hidden; left:261px; top:10px; width:632px; height:182px; z-index:17; visibility: visible;">
    <script type="text/javascript">
AC_RunFlashContent('id','g_flash1','width','632','height','182','quality','high','autoplay','false','loop','true','wmode','transparent','codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab','pluginspage','http://www.macromedia.com/go/getflashplayer','src','images/swf7GGFB.swf');
</script>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="527" height="170">
      <param name="movie" value="images/swf7GGFB.swf">
      <param name="quality" value="high">
      <embed src="images/swf7GGFB.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="527" height="170"></embed>
    </object>
  </div>
  <div id="g_text3" style="position:absolute; overflow:hidden; left:547px; top:762px; width:428px; height:30px; z-index:18; visibility: visible;">
    <div class="wpmd">
      <div><font class="ws8" face="Tahoma">Copyright </font><font class="ws8">&copy;</font><font class="ws8" face="Tahoma"> 2011 Merrytech International S. A. de C. V.&nbsp;&nbsp; Autor:Ing. Ramses Tamayo.</font></div>
    </div>
  </div>
  <div id="marquee1" style="position:absolute; overflow:hidden; left:14px; top:226px; width:210px; height:209px; z-index:19; visibility: visible;">
    <marquee width="210" height="209" behavior="alternate" direction="Down" loop="2">
      <div class="wpmd">
        <div>
          <div align="center"><font color="#666699"><b><br>
          </b></font></div>
        </div>
        <div>
          <div align="center"><font color="#666699"><b>SISTEMA DE</b></font></div>
        </div>
        <div>
          <div align="center"><font color="#666699"><b>ORDEN DE COMPRA</b></font></div>
        </div>
        <div>
          <div align="center"><font color="#666699"><b>MARZO DEL 2013</b></font></div>
        </div>
        <div>
          <div align="center"><font color="#666699"><b><br>
          </b></font></div>
        </div>
        <div>
          <div align="center"><font color="#666699"><b>REINVENTADO</b></font></div>
        </div>
      </div>
    </marquee>
  </div>


<?php
$nombre= $_GET[nombre];
$codproveedor= $_GET['codproveedor'];
$folio=$_POST['folio'];


?>
   
<div id="image1" style="position:absolute; overflow:hidden; left:31px; top:685px; width:140px; height:47px; z-index:20; visibility: visible;"><img src="images/Mytek.png" alt="" border=0 width=140 height=47></div>
  <div id="image2" style="position:absolute; overflow:hidden; left:6px; top:60px; width:184px; height:102px; z-index:21; visibility: visible;"><img src="images/ITMIS_LOGO.png" alt="" border=0 width=184 height=102></div>
</div><div id="Layer3" onClick="MM_showHideLayers('Layer10','','hide','Layer11','','hide','Layer15','','hide')">
  <div id="Layer4" onMouseOver="MM_showHideLayers('Layer10','','show','Layer11','','hide','Layer15','','hide','Layer16','','hide','Layer1','','show')">
    <div id="Layer10">
	
	 <table width="173" height="74" border="0" background="images/new_releases_s.gif">
            <tr>
              <th width="167" background="ALTA.php" scope="row"><div align="left"> <a href="alta_proveedor.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>"	 class="Estilo2 style1 " ><em>Alta de proveedores </em></a></div></th>
            </tr>
            <tr>
              <th background="file:///C|/Program Files/Apache Software Foundation/Apache2.2/htdocs/Copy of test/pasesmuestra/index2.php" scope="row"><div align="left" class="style1 Estilo1"><a href="baja_proveedor.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>"	 class="style1 Estilo2 " ><em>Baja de proveedores </em></a></div></th>
            </tr>
            <tr>
              <th scope="row"><div align="left" class="style1 Estilo1"><a href="consulta_proveedor.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>"	 class="Estilo2 style1 " ><em>Consulta de proveedores </em></a></div></th>
            </tr>
      </table>
    </div>
  <b><a href="alta_proveedor.php?nombre=<?php echo  $nombre; ?>&n=<?php echo $n; ?>&d=<?php echo $d; ?>" title="PROVEEDOR" target="_top" class="style1 ws9 ws10 ws12">Proveedor</a></b> </div>
  <table width="537" height="25" border="0">
    <tr>
      <th width="280" height="20" scope="row">&nbsp;</th>
      <td width="280" height="20"><div class="style1 ws10 Estilo1" id="Layer5" onMouseOver="MM_showHideLayers('Layer10','','hide','Layer11','','show','Layer15','','hide','Layer16','','hide')">
        <div id="Layer11">
          <table width="132" height="74" border="0" background="images/new_releases_s.gif">
            <tr>
              <th background="ALTA.php" class="ws10" scope="row"><div align="left"> <a href="alta_producto.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>"	 class="Estilo2 style1 Estilo4" ><em>Alta de articulos </em></a></div></th>
            </tr>
            <tr>
              <th background="file:///C|/Program Files/Apache Software Foundation/Apache2.2/htdocs/Copy of test/pasesmuestra/index2.php" class="ws10" scope="row"><div align="left" class="style1 Estilo1"><a href="baja_producto.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>"	 class="style1 Estilo2 Estilo4" ><em>Baja de articulos </em></a></div></th>
            </tr>
            <tr>
              <th class="ws10" scope="row"><div align="left" class="style1 Estilo1"><a href="consulta_producto.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>"	 class="style1 Estilo4" ><em>Consulta de articulos </em></a></div></th>
            </tr>
          </table>
        </div>
        <strong><a href="alta_producto.php?nombre=<?php echo  $nombre; ?>&n=<?php echo $n; ?>&d=<?php echo $d; ?>" title="PROVEEDOR" target="_top" class="style1 ws9 ws10 ws12">Articulos</a></strong></div></td>
      <td width="280" height="20"><div class="Estilo1 ws10" id="Layer7">
        <div id="Layer15">
          <table width="187" height="71" border="0" background="images/new_releases_s.gif">
            <tr>
              <th class="style1" scope="row"><div align="left"><a href="crear_orden.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>"	 class="Estilo2 style1" ><em>Crear orden de compra </em></a></div></th>
            </tr>
            <tr>
              <th class="style1" scope="row"><div align="left"><a href="modificar_orden.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>"	 class="style1" ><em>Modificar orden de compra </em></a></div></th>
            </tr>
            <tr>
              <th class="style1" scope="row"><div align="left"><a href="consulta_orden.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>"	 class="style1" ><em>Consulta orden de compra </em></a></div></th>
            </tr>
          </table>
        </div>
        <strong><a href="crear_orden.php?nombre=<?php echo  $nombre; ?>&n=<?php echo $n; ?>&d=<?php echo $d; ?>" title="PROVEEDOR" target="_top" class="style1 ws9 ws10 ws12" onMouseMove="MM_showHideLayers('Layer10','','hide','Layer11','','hide','Layer15','','show','Layer16','','hide')">Orden de compra </a></strong></div></td>
      <td width="280" height="20"><div class="ws10 Estilo1 Estilo2" id="Layer8"><strong><a href="index.php" title="PROVEEDOR" target="_top" class="style1 ws9 ws10 ws12">Salir</a></strong></div></td>
      <td width="280" height="20"><div id="Layer9"><strong><a href="crear_orden.php?nombre=<?php echo  $nombre; ?>&n=<?php echo $n; ?>&d=<?php echo $d; ?>" title="PROVEEDOR" target="_top" class="style1 ws9 ws10 ws12" onMouseOver="MM_showHideLayers('Layer10','','hide','Layer11','','hide','Layer15','','hide','Layer16','','show')">Reportes</a></strong>
          <div id="Layer16">
		  
		  <table width="113" border="0" background="images/new_releases_s.gif">
      <tr>
        
        <th background="ALTA.php" class="ws10" scope="row"><div align="left"> <a href="Rep_depto.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>" class="ws12 style1 Estilo2" ><em>Departamento</em></a></div></th>
		
		
      </tr>
      <tr>
        
		
 <th background="ALTA.php" class="ws10" scope="row"><div align="left"> <a href="Rep_proveedor.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>" class="Estilo2 ws12 ws12 style1" ><em>Proveedor</em></a></div></th>
		
		
      </tr>
      <tr>
         
		 
        <th background="ALTA.php" class="ws10" scope="row"><div align="left"> <a href="Rep_productos.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>" class="ws12 style1 Estilo2" ><em>Articulos</em></a></div></th>
		 
		 
      </tr>
    </table>
	
		  
		  
		  
        </div>
      </div></td>
    </tr>
  </table>
</div>

<div id="Layer13">
<?php
include("ip.php");
$nombre=$_GET['nombre'];
  $ip=getIP();		    
	     //SE OBTIENE EL NOMBRE DEL HOST 
		 $host = gethostbyaddr($ip);
		 $host;
		 
		 echo "Usuario: "."<br>".$nombre."<br>"."<br>"."IP: ".$ip."<br>"."<br>"."Host: ".$host;

?>
</div>
<div class="ws10 style1" id="Layer14"><strong><font face="Tahoma">Consulta de ordenes de compra </font></strong></div>
<div id="Layer1" onfocus="MM_showHideLayers('Layer10','','hide','Layer11','','hide','Layer15','','hide')">
  <?php
mysql_connect("localhost", "jorge", "noen");
mysql_select_db("ordendecompra");
$noRegistros =20; //Registros por p�gina
$pagina = 1; //Por default, p�gina = 1
if($_GET["pagina"]) //Si hay p�gina por ?pagina=valor, lo asigna

$pagina = $_GET["pagina"];

//echo "Pagina: ".$pagina."<hr>";

$escape="N/A";
//Utilizo el comando LIMIT para seleccionar registros

$numcompra2=substr($folio,4,9);
    $numcompra2=(string)(int)$numcompra2;
	$neworden= $numcompra2;

if( $folio=="")
{
if($n==2)
{
$sSQL = "SELECT * FROM orden_temp  ORDER BY NumOrden LIMIT ".(
$pagina-1)*$noRegistros.",$noRegistros";

}
else
{
$sSQL = "SELECT * FROM orden_temp WHERE Depto='$d' ORDER BY NumOrden LIMIT ".(
$pagina-1)*$noRegistros.",$noRegistros";

}

}
else
{
$sSQL = "SELECT * FROM orden_temp WHERE NumOrden='$neworden' and Depto='$d' ORDER BY NumOrden LIMIT ".(
$pagina-1)*$noRegistros.",$noRegistros";
}


$result = mysql_query($sSQL) or die(mysql_error());
$color= "#CCCCCC";
$style="font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold;";
// Imprimiendo los resultado
	echo "<table width='100%' border='0px' cellspacing='1'>
        <tr>
        <td bgcolor='".$color."' style='".$style."'>Folio</td>
        <td bgcolor='".$color."' style='".$style."'>Fecha de creaci�n</td>
	 	<td bgcolor='".$color."' style='".$style."'>Elaborado</td>
		<td bgcolor='".$color."' style='".$style."'>Autorizo</td>
		<td bgcolor='".$color."' style='".$style."'>Status</td>
	    
		 
		
        </tr>";
while($row = mysql_fetch_array($result)) { //Exploracion comun de registros
  
if ($colorfila==0)
	{
       $color= "#6AB5FF";
       $style="font-family:Arial, Helvetica, sans-serif; font-size:12px;";
       $colorfila=1;
    }
 
else
		{
       $color="#0099FF";
       $style="font-family:Arial, Helvetica, sans-serif; font-size:12px;";
       $colorfila=0;
        }
	


switch($row["Facturar"] )
		  {
	case 1:
		 $var1="MTI-00";
	break;
	case 2:	
		 $var1="FMT-00";
	break;
	case 3:	
		 $var1="MTK-00";
	break;
		  }
	  
	$flag5=$_GET[flag6];
	 
  //echo 	$row["NumOrden"];	
	if($row["NumOrden"]<>$flag3 && $row["NumOrden"]<>$flag5)
	{
			$row['Username'];
			
			
			if($row['status']=="C")
			{
			$color="#FFCC00";
			}			
		echo "<tr bgcolor='".$color."' style='".$style."' onmouseover=\"this.style.background='#FFFFFF';this.style.color='#006F00'\" onmouseout=\"this.style.background='".$color."';this.style.color='#000000'\"> 
  
      <td>".$var1.$row['NumOrden']."</td>
	  <td>".$row['FechaOrden']."</td>
	  <td>".$row['user']."</td>
	  <td>".$row['autorizo']."</td>
      <td>".$row['status']."</td>
	 
    <td  bgcolor='#FFFFFF' ><a href=\"tuto2.php?nombre=".$nombre."&flag=1&numcompra=".$var1.$row['NumOrden']."&n=".$n."&d=".$d."\"   title='Consultar orden' > <img src ='images/Search.ico'   border=0> </a></td>
	 
	  <td  bgcolor='#FFFFFF' ><a href=\"cancelar.php?nombre=".$nombre."&flag=1&numcompra=".$var1.$row['NumOrden']."&n=".$n."&d=".$d."\"   title='Cancelar orden' > <img src ='images/Delete.ico'   border=0> </a></td>
	 
	 </tr>";
	}
	else
	{
	
	

}	
  $flag3=$row["NumOrden"] ;
	
	
	
	
}
 echo "</table>";
//Imprimiendo p�ginas
	//$grupo=$row['GrupoCode'];
$sSQL = "SELECT count(*) FROM orden_temp"; //Cuento el total de registros
$result = mysql_query($sSQL);
$row = mysql_fetch_array($result);
$totalRegistros = $row["count(*)"]; //Almaceno el total en una variable
echo "<hr>  Pagina: "; 
$noPaginas = $totalRegistros/$noRegistros; //Determino la cantidad de p�ginas




$pagdisplay=5;

$pagina2=$pagina-1;

	if($pagina2 > 0)
{

echo "<a href=\"?pagina=".($pagina-1)."&nombre=".$nombre."&n=".$n."&d=".$d." \">anterior</a> ";

}
$i=1;

for ($i; $i<=$pagdisplay; $i++)
{

if ($pagina >= $pagdisplay)
{
$pagdisplay=$pagdisplay+5;
$i=$i+4;
//echo "<b><p class='style1'>P�gina ".$i."</b>";
}
else
{
echo "<a href=\"?pagina=".$i."&nombre=".$nombre."&n=".$n."&d=".$d." \">".$i."</a> ";
}
}

if(($pagina + 1)<=$pagdisplay)
{
echo "<a href=\"?pagina=".($pagina+1)."&nombre=".$nombre."&n=".$n."&d=".$d." \">Siguiente</a> ";

//echo "<a href='lista-usuarios.php?pagina=<br>".($noPaginas+1)."'>Siguiente ></a>";
}






//for($i=1; $i<$noPaginas+1; $i++) { //Imprimo las p�ginas
  //  if($i == $pagina)
    //    echo "$i "; //A la p�gina actual no le pongo link
    //else
      //  echo "<a href=\"?pagina=".$i."&nombre=".$nombre."&flag6=".$flag3."&n=".$n."&d=".$d." \">".$i."</a> ";

?>
</div>
<div class="ws12 ws18" id="Layer17">Ordenes de compras elaboradas </div>
<div id="Layer18">

  <form name="form1"  action="consulta_orden.php?nombre=<?php echo $nombre;?>&n=<?php echo $n; ?>&d=<?php echo $d; ?>" method="post" enctype="multipart/form-data" >
    <label>Folio:
    <input type="text" name="folio">
    </label>
    <label>
    <input type="submit" name="Submit" value="Buscar">
    </label>
  </form>
</div>
</body>
</html>

 
