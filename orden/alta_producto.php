<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?PHP
$n=$_GET[n];
$d=$_GET[d];
?>
<head>
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
	z-index:1;
	left: 252px;
	top: 263px;
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
	left: 27px;
	top: 4px;
	visibility: visible;
}
#Layer5 {
	position:absolute;
	width:100;
	height:20;
	z-index:12;
	left: 161px;
	top: 4px;
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
	width:142px;
	height:19px;
	z-index:14;
	visibility: visible;
	top: 4px;
	left: 260px;
}
#Layer8 {
	position:absolute;
	width:63px;
	height:19px;
	z-index:15;
	visibility: visible;
	left: 506px;
	top: 5px;
}
#Layer9 {
	position:absolute;
	width:75px;
	height:19px;
	z-index:16;
	visibility: visible;
	left: 414px;
	top: 5px;
}
#Layer10 {
	position:absolute;
	width:182px;
	height:67px;
	z-index:1;
	top: 24px;
	left: -3px;
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
	z-index:9;
	left: 71px;
	top: 508px;
}
#Layer14 {
	position:absolute;
	width:195px;
	height:35px;
	z-index:5;
	left: 781px;
	top: 204px;
}
</style>

 
<script src="ac_activex.js" type="text/javascript"></script>
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<script language="javascript" src="js/jquery-1.2.6.min.js"></script>
<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.autocomplete.js"></script>
<script type="text/JavaScript">

$(document).ready(function(){
 $("#codproducto").autocomplete("autocomplete2.php", {
		selectFirst: true
	});
});
 
 function check(codproducto)
    {
  	 var elCampo = document.getElementById('codproducto');
	 var elCampo2 = document.getElementById('flagname');  
location.href="alta_producto.php?codproducto="+elCampo.value+"&nombre="+ elCampo2.value  +"&n=<?php echo $n; ?>&d=<?php echo $d; ?>" ;     
	}	
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

function contador (campo, cuentacampo, limite)
  {
if (campo.value.length > limite) campo.value = campo.value.substring(0, limite);
else cuentacampo.value = limite - campo.value.length;
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
	width:117px;
	height:63px;
	z-index:17;
	left: 400px;
	top: 30px;
	visibility: hidden;
}
.Estilo4 {font-size: 14px}
-->
</style>
</head>
<body>
<div id="container">
  <div id="g_image3" style="position:absolute; overflow:hidden; left:230px; top:192px; width:20px; height:45px; z-index:0; visibility: visible;"><img src="images/topmenu_img1.gif" alt="" border=0 width=20 height=45></div>
  <div id="g_image5" style="position:absolute; overflow:hidden; left:44px; top:238px; width:187px; height:85px; z-index:1; visibility: visible;"><img src="images/users_feedback_bg.gif" alt="" border=0 width=187 height=85></div>
  <div id="g_image2" style="position:absolute; overflow:hidden; left:44px; top:192px; width:187px; height:47px; z-index:2; visibility: visible;"><img src="images/users_feedback_s.gif" alt="" border=0 width=187 height=47></div>
  <div id="g_image9" style="position:absolute; overflow:hidden; left:253px; top:710px; width:782px; height:47px; z-index:3; visibility: visible;"><img src="images/botmenu_bg.gif" alt="" border=0 width=772 height=47></div>
  <div id="g_image10" style="position:absolute; overflow:hidden; left:52px; top:710px; width:187px; height:47px; z-index:7; visibility: visible;"><img src="images/bot1.gif" alt="" border=0 width=187 height=47></div>
  <div id="g_image8" style="position:absolute; overflow:hidden; left:235px; top:710px; width:28px; height:47px; z-index:10; visibility: visible;"><img src="images/bot2.gif" alt="" border=0 width=28 height=47></div>
  <div id="g_image4" style="position:absolute; overflow:hidden; left:235px; top:191px; width:809px; height:43px; z-index:4; visibility: visible;"><img src="images/products_b.gif" alt="" border=0 width=780 height=46></div>
  <div id="g_image6" style="position:absolute; overflow:hidden; left:48px; top:441px; width:193px; height:25px; z-index:11; visibility: visible;"><img src="images/new_releases_s.gif" alt="" border=0 width=193 height=25></div>
  <div id="g_image7" style="position:absolute; overflow:hidden; left:46px; top:466px; width:196px; height:236px; z-index:8; visibility: visible;"><img src="images/new_releases_bg.gif" alt="" border=0 width=196 height=236></div>
  <div id="g_shape1" style="position:absolute; overflow:hidden; left:51px; top:761px; width:984px; height:15px; z-index:12; visibility: visible;"><img border=0 width="100%" height="100%" alt="" src="images/shape8198781.gif"></div>
  <div id="text2" style="position:absolute; overflow:hidden; left:51px; top:448px; width:159px; height:25px; z-index:13; visibility: visible;">
    <div class="wpmd">
      <div><font color="#666699"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; EQUIPO</b></font></div>
      <div><font class="ws9" color="#666699"><br>
      </font></div>
    </div>
  </div>
  <div id="g_text4" style="position:absolute; overflow:hidden; left:42px; top:206px; width:165px; height:27px; z-index:14; visibility: visible;">
    <div class="wpmd">
      <div><font color="#666699"><b> INFORMACION</b></font></div>
      <div><font color="#666699"><b><br>
      </b></font></div>
      <div><font class="ws9" color="#666699"><b> </b></font></div>
    </div>
  </div>
  <div id="g_flash1" style="position:absolute; overflow:hidden; left:261px; top:10px; width:632px; height:182px; z-index:15; visibility: visible;">
    <script type="text/javascript">
AC_RunFlashContent('id','g_flash1','width','632','height','182','quality','high','autoplay','false','loop','true','wmode','transparent','codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab','pluginspage','http://www.macromedia.com/go/getflashplayer','src','images/swf7GGFB.swf');
</script>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="527" height="170">
      <param name="movie" value="images/swf7GGFB.swf">
      <param name="quality" value="high">
      <embed src="images/swf7GGFB.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="527" height="170"></embed>
    </object>
  </div>
  <div id="g_text3" style="position:absolute; overflow:hidden; left:516px; top:762px; width:428px; height:30px; z-index:16; visibility: visible;">
    <div class="wpmd">
      <div><font class="ws8" face="Tahoma">Copyright </font><font class="ws8">&copy;</font><font class="ws8" face="Tahoma"> 2011 Merrytech International S. A. de C. V.&nbsp;&nbsp; Autor:Ing. Ramses Tamayo.</font></div>
    </div>
  </div>
  <div id="marquee1" style="position:absolute; overflow:hidden; left:44px; top:226px; width:210px; height:209px; z-index:17; visibility: visible;">
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
?>




   
<div id="image1" style="position:absolute; overflow:hidden; left:-9px; top:685px; width:140px; height:47px; z-index:18; visibility: visible;"><img src="images/Mytek.png" alt="" border=0 width=140 height=47></div>
  <div id="image2" style="position:absolute; overflow:hidden; left:6px; top:60px; width:184px; height:102px; z-index:19; visibility: visible;"><img src="images/ITMIS_LOGO.png" alt="" border=0 width=184 height=102></div>
</div><div id="Layer3" onClick="MM_showHideLayers('Layer16','','hide','Layer10','','hide','Layer11','','hide','Layer15','','hide')">
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
  <div class="Estilo4" id="Layer4" onMouseOver="MM_showHideLayers('Layer16','','hide','Layer10','','show','Layer11','','hide','Layer15','','hide','Layer1','','show')">
   
   
   
    <div id="Layer10">
	
	 <table width="177" height="74" border="0" background="images/new_releases_s.gif">
            <tr>
              <th background="ALTA.php" scope="row"><div align="left"> <a href="alta_proveedor.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>"	 class="Estilo2 style1 " ><em>Alta de proveedores </em></a></div></th>
            </tr>
            <tr>
              <th background="file:///C|/Program Files/Apache Software Foundation/Apache2.2/htdocs/Copy of test/pasesmuestra/index2.php" scope="row"><div align="left" class="style1 Estilo1"><a href="baja_proveedor.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>"	 class="style1 Estilo2 " ><em>Baja de proveedores </em></a></div></th>
            </tr>
            <tr>
              <th scope="row"><div align="left" class="style1 Estilo1"><a href="consulta_proveedor.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>"	 class="Estilo2 style1 " ><em>Consulta de proveedores </em></a></div></th>
            </tr>
      </table>
    </div>
    <span class="ws12 Estilo1"><strong>Proveedor</strong></span> </div>
  <table width="537" height="25" border="0">
    <tr>
      <th width="280" height="20" scope="row">&nbsp;</th>
      <td width="280" height="20"><div class="style1 ws10 Estilo1" id="Layer5" onMouseOver="MM_showHideLayers('Layer16','','hide','Layer10','','hide','Layer11','','show','Layer15','','hide')">
        <div id="Layer11">
          <table width="132" height="74" border="0" background="images/new_releases_s.gif">
            <tr>
              <th background="ALTA.php" class="ws10" scope="row"><div align="left"> <a href="alta_producto.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>"	 class="Estilo2 style1 Estilo4" ><em>Alta de articulos </em></a></div></th>
            </tr>
            <tr>
              <th background="file:///C|/Program Files/Apache Software Foundation/Apache2.2/htdocs/Copy of test/pasesmuestra/index2.php" class="ws10" scope="row"><div align="left" class="style1 Estilo1"><a href="baja_producto.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>"	 class="style1 Estilo2 Estilo4" ><em>Baja de articulos </em></a></div></th>
            </tr>
            <tr>
              <th class="ws10" scope="row"><div align="left" class="style1 Estilo1"><a href="consulta_producto.php?nombre=<?php echo  $nombre; ?>&n=<?php echo  $n; ?>&d=<?php echo $d; ?>"	 class="Estilo2 style1 Estilo4" ><em>Consulta de articulos </em></a></div></th>
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
        <a href="crear_orden.php?nombre=<?php echo  $nombre; ?>&n=<?php echo $n; ?>&d=<?php echo $d; ?>" title="PROVEEDOR" target="_top" class="ws12 ws10 ws9 style1" onMouseMove="MM_showHideLayers('Layer16','','hide','Layer10','','hide','Layer11','','hide','Layer15','','show')"><strong>Ordene de compra </strong></a></div></td>
      <td width="280" height="20"><div class="ws10 Estilo1 Estilo2" id="Layer8"><strong><a href="index.php" title="PROVEEDOR" target="_top" class="style1 ws9 ws10 ws12">Salir</a></strong></div></td>
      <td width="280" height="20"><div class="ws12 ws12" id="Layer9" onMouseOver="MM_showHideLayers('Layer16','','show','Layer10','','hide','Layer11','','hide','Layer15','','hide')"><a href="crear_orden.php?nombre=<?php echo  $nombre; ?>&n=<?php echo $n; ?>&d=<?php echo $d; ?>" title="PROVEEDOR" target="_top" class="style1" onFocus="MM_showHideLayers('Layer10','','hide','Layer11','','hide','Layer15','','show')"><strong>Reportes</strong></a></div></td>
    </tr>
  </table>
</div>


<div id="Layer13">


<?php
 include("ip.php");
 $nombre=$_GET['nombre'];
 $codproducto=$_GET['codproducto'];
 include("conectarse.php");
 $link=Conectarse();
 if($n==2)
 {
 $result2 = mysql_query('SELECT * FROM producto WHERE CodProducto=\''.$codproducto.'\' '); 
 }
 else
 {
 $result2 = mysql_query('SELECT * FROM producto WHERE CodProducto=\''.$codproducto.'\' AND Depto=\''.$d.'\''); 

 }
 	  if($row = mysql_fetch_array($result2 ))
					{
					 $CodProducto= $row['CodProducto'];
	  				 $NombreProducto= $row['NombreProducto'];
					 $Modelo= $row['Modelo'];
					 $Descripcion= $row['Descripcion'];
					 $Marca= $row['Marca'];
					 $PrecioUni= $row['PrecioUni'];
					 $Moneda= $row['Moneda'];
					 $Unidad= $row['Unidad'];
					 
					}	  
  $ip=getIP();		    
	     //SE OBTIENE EL NOMBRE DEL HOST 
		 $host = gethostbyaddr($ip);
		 $host;
		 echo "Usuario: "."<br>".$nombre."<br>"."<br>"."IP: ".$ip."<br>"."<br>"."Host: ".$host;
?>
</div>
<div class="style1 ws10" id="Layer14"><strong><font face="Tahoma">Alta de productos. </font></strong></div>
<div id="Layer1" onMouseOver="MM_showHideLayers('Layer16','','hide','Layer10','','hide','Layer11','','hide','Layer15','','hide')">
  <label></label>
  <form action="insertar2.php?nombre=<?php echo $nombre;?>&n=<?php echo $n; ?>&d=<?php echo $d; ?>" id="selector" name="selector" method="post" enctype="multipart/form-data" >
    <table width="661" height="411" border="0">
      <tr>
        <td width="166" height="30">CodProducto:</td>
        <td width="173"><label>NombreProducto:</label></td>
        <td width="156">Modelo:</td>
        <td width="148">&nbsp;</td>
      </tr>
      <tr>
        <td height="32"><label for="textfield"></label>
        <input type="text" name="codproducto" id="codproducto" onChange="check();" value="<?php echo $codproducto;  ?>" ></td>
        <td><label for="label"></label>
        <label>
        <input type="text" name="nombreproducto" id="nombreproducto" value="<?php echo $NombreProducto;?>">
</label></td>
        <td> <label for="label2"></label>
          <label>
          <input type="text" name="modeloproducto" id="modeloproducto" value="<?php if($Modelo!=""){ echo $Modelo;} else { echo "N/A";}?>">
          </label></td>
        <td><label for="label3"></label></td>
      </tr>
      <tr>
        <td height="42"><label></label>
          <label>Descripcion:</label></td>
        <td><label></label></td>
        <td> <label></label></td>
        <td>&nbsp; </td>
      </tr>
      <tr>
        <td height="80" colspan="3"> 
 
 <textarea name="descripcionproducto" wrap=physical cols="45" rows="5" onKeyDown="contador(this.form.descripcionproducto,this.form.remLen,45);" onKeyUp="contador(this.form.descripcionproducto,this.form.remLen,45);"><?php echo  $Descripcion; ?></textarea> <input type="text" name="remLen" size="3" maxlength="3" value="45" readonly>  </td>
 
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="32">Marca:</td>
        <td>PrecioUni:</td>
        <td>Tipo de Cambio:</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="42"><input type="text" name="marcaproducto" id="marcaproducto" value="<?php if($Marca!=""){ echo $Marca;} else { echo "N/A";}?>"></td>
        <td><input type="text" name="preciouni" id="preciouni" value="<?php echo $PrecioUni;?>"></td>
        <td><label for="select"></label>
          <select name="moneda" id="moneda">
		  <option value="<?php echo $Moneda;?>"><?php echo $Moneda;?></option>
            <option value="M.N.">Moneda Nacional</option>
            <option value="M.A.">Moneda America</option>
            <option value="EURO">EURO</option>
          </select>        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="36">Unidad:</td>
        <td>&nbsp; </td>
        <td>&nbsp; </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="43"><label for="label"></label>
          <select name="unidad" id="unidad">
		  <option value="<?php echo $Unidad;?>"><?php echo $Unidad;?></option>
            <option value="PCS">PCS</option>
			<option value="PAQ">Paq</option>
			<option value="ROL">Rollos</option>
			<option value="CJA">Cajas</option>
			<option value="BLC">Block</option>
            <option value="KGS">kilogramos</option>
            <option value="GRS">Gramos</option>
            <option value="LTS">Litros</option>
            <option value="MTS">Metros</option>
            <option value="LBS">Libras</option>
			<option value="CON">Contenedor</option>
          </select>        </td>
        <td><label for="select"></label>        </td>
        <td><label for="label"></label>        </td>
        <td> <input type="hidden" name="flagname" id="flagname" value="<?php echo $nombre;?>"  ></td></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><label for="Submit"></label>
          <label for="label4"></label></td>
        <td><label for="label6"></label>
          <label for="label5"></label></td>
        <td><label for="select">
          <div align="right">
            <input name="Submit" type="submit" class="ws14" id="Submit" value="Guardar">
          </div>
        </label></td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;  </p>
  </form>
</div>
</body>
</html>

 
