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
div#container
{
	position:relative;
	width: 856px;
	margin-top: 0px;
	margin-left: auto;
	margin-right: auto;
	text-align:left; 
}
body {text-align:center;margin:0}
#Layer1 {
	position:absolute;
	width:702px;
	height:405px;
	z-index:1;
	left: 251px;
	top: 256px;
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
	z-index:2;
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
	top: 7px;
	visibility: visible;
}
#Layer5 {
	position:absolute;
	width:100;
	height:20;
	z-index:12;
	left: 161px;
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
	width:125px;
	height:19px;
	z-index:14;
	visibility: visible;
	left: 265px;
	top: 8px;
}
#Layer8 {
	position:absolute;
	width:101px;
	height:19px;
	z-index:15;
	visibility: visible;
	left: 399px;
	top: 8px;
}
#Layer9 {
	position:absolute;
	width:104px;
	height:19px;
	z-index:16;
	visibility: visible;
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
	z-index:4;
	left: 38px;
	top: 480px;
}
#Layer14 {	position:absolute;
	width:195px;
	height:35px;
	z-index:2;
	left: 692px;
	top: 208px;
}
</style>

 <?php echo $name; ?>
 
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
location.href="baja_proveedor.php?codproveedor="+elCampo.value+"&nombre="+ elCampo2.value  +"" ;     
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
	top: 23px;
	visibility: hidden;
}
-->
</style>
	  
</head>
<?php
$nombre= $_GET[nombre];
$codproveedor= $_GET['codproveedor'];
?>
<body>
<div id="container">
  <div id="g_image3" style="position:absolute; overflow:hidden; left:130px; top:192px; width:20px; height:45px; z-index:0; visibility: visible;"><img src="images/topmenu_img1.gif" alt="" border=0 width=20 height=45></div>
  <div id="g_image5" style="position:absolute; overflow:hidden; left:-56px; top:238px; width:187px; height:85px; z-index:1; visibility: visible;"><img src="images/users_feedback_bg.gif" alt="" border=0 width=187 height=85></div>
  <div id="g_image2" style="position:absolute; overflow:hidden; left:-56px; top:192px; width:187px; height:47px; z-index:2; visibility: visible;"><img src="images/users_feedback_s.gif" alt="" border=0 width=187 height=47></div>
  <div id="g_image9" style="position:absolute; overflow:hidden; left:163px; top:710px; width:674px; height:47px; z-index:3; visibility: visible;"><img src="images/botmenu_bg.gif" alt="" border=0 width=673 height=47></div>
  <div id="g_image10" style="position:absolute; overflow:hidden; left:-48px; top:710px; width:187px; height:47px; z-index:4; visibility: visible;"><img src="images/bot1.gif" alt="" border=0 width=187 height=47></div>
  <div id="g_image8" style="position:absolute; overflow:hidden; left:135px; top:710px; width:28px; height:47px; z-index:5; visibility: visible;"><img src="images/bot2.gif" alt="" border=0 width=28 height=47></div>
  <div id="g_image4" style="position:absolute; overflow:hidden; left:149px; top:192px; width:756px; height:45px; z-index:6; visibility: visible;"><img src="images/products_b.gif" alt="" border=0 width=684 height=45></div>
  <div id="g_image6" style="position:absolute; overflow:hidden; left:-52px; top:441px; width:193px; height:25px; z-index:7; visibility: visible;"><img src="images/new_releases_s.gif" alt="" border=0 width=193 height=25></div>
  <div id="g_image7" style="position:absolute; overflow:hidden; left:-54px; top:466px; width:196px; height:236px; z-index:8; visibility: visible;"><img src="images/new_releases_bg.gif" alt="" border=0 width=196 height=236></div>
  <div id="g_shape1" style="position:absolute; overflow:hidden; left:-49px; top:761px; width:887px; height:15px; z-index:9; visibility: visible;"><img border=0 width="100%" height="100%" alt="" src="images/shape8198781.gif"></div>
  <div id="text2" style="position:absolute; overflow:hidden; left:-49px; top:448px; width:159px; height:25px; z-index:10; visibility: visible;">
    <div class="wpmd">
      <div><font color="#666699"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; EQUIPO</b></font></div>
      <div><font class="ws9" color="#666699"><br>
      </font></div>
    </div>
  </div>
  <div id="g_text4" style="position:absolute; overflow:hidden; left:-18px; top:206px; width:165px; height:27px; z-index:11; visibility: visible;">
    <div class="wpmd">
      <div><font color="#666699"><b> INFORMACION</b></font></div>
      <div><font color="#666699"><b><br>
      </b></font></div>
      <div><font class="ws9" color="#666699"><b> </b></font></div>
    </div>
  </div>
  <div id="g_flash1" style="position:absolute; overflow:hidden; left:261px; top:10px; width:632px; height:182px; z-index:12; visibility: visible;">
    <script type="text/javascript">
AC_RunFlashContent('id','g_flash1','width','632','height','182','quality','high','autoplay','false','loop','true','wmode','transparent','codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab','pluginspage','http://www.macromedia.com/go/getflashplayer','src','images/swf7GGFB.swf');
</script>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="527" height="170">
      <param name="movie" value="images/swf7GGFB.swf">
      <param name="quality" value="high">
      <embed src="images/swf7GGFB.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="527" height="170"></embed>
    </object>
  </div>
  <div id="g_text3" style="position:absolute; overflow:hidden; left:391px; top:762px; width:428px; height:30px; z-index:13; visibility: visible;">
    <div class="wpmd">
      <div><font class="ws8" face="Tahoma">Copyright </font><font class="ws8">&copy;</font><font class="ws8" face="Tahoma"> 2011 Merrytech International S. A. de C. V.&nbsp;&nbsp; Autor:Ing. Ramses Tamayo.</font></div>
    </div>
  </div>
  <div id="marquee1" style="position:absolute; overflow:hidden; left:-56px; top:226px; width:210px; height:209px; z-index:15; visibility: visible;">
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
          <div align="center"><font color="#666699"><b>21 DE NOVIEMBRE 2012</b></font></div>
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
     <div id="image1" style="position:absolute; overflow:hidden; left:-39px; top:685px; width:140px; height:47px; z-index:16; visibility: visible;"><img src="images/Mytek.png" alt="" border=0 width=140 height=47></div>
  <div id="image2" style="position:absolute; overflow:hidden; left:6px; top:60px; width:184px; height:102px; z-index:17; visibility: visible;"><img src="images/ITMIS_LOGO.png" alt="" border=0 width=184 height=102></div>
</div><div id="Layer3" onClick="MM_showHideLayers('Layer10','','hide','Layer11','','hide','Layer15','','hide')">
  <div id="Layer4" onMouseOver="MM_showHideLayers('Layer10','','show','Layer11','','hide','Layer15','','hide','Layer1','','show')">
    <div id="Layer10">
      <table width="117" height="74" border="0" background="images/new_releases_s.gif">
        <tr>
          <th background="ALTA.php" class="ws10" scope="row"><div align="left"> <a href="alta_proveedor.php?nombre=<?php echo  $nombre; ?>" class="style1" >ALTA_PRO</a></div></th>
        </tr>
        <tr>
          <th background="file:///C|/Program Files/Apache Software Foundation/Apache2.2/htdocs/Copy of test/pasesmuestra/index2.php" class="ws10" scope="row"><div align="left" class="style1 Estilo1"><a href="baja_proveedor.php?nombre=<?php echo  $nombre; ?>" >BAJA_PRO</a></div></th>
        </tr>
        <tr>
          <th class="ws10" scope="row"><div align="left" class="style1 Estilo1"><a href="consulta_proveedor.php?nombre=<?php echo  $nombre; ?>" >CONSULTA_PRO</a></div></th>
        </tr>
      </table>
    </div>
  <font face="Tahoma"><b><a href="alta_proveedor.php?nombre=<?php echo  $nombre; ?>" title="PROVEEDOR" target="_top" class="style1 ws9 ws10">PROVEEDOR</a></b></font> </div>
  <table width="537" height="25" border="0">
    <tr>
      <th width="280" height="20" scope="row">&nbsp;</th>
      <td width="280" height="20"><div class="style1 ws10 Estilo1" id="Layer5" onMouseOver="MM_showHideLayers('Layer10','','hide','Layer11','','show','Layer15','','hide')">
        <div id="Layer11">
          <table width="117" height="74" border="0" background="images/new_releases_s.gif">
            <tr>
              <th background="ALTA.php" class="ws10" scope="row"><div align="left"> <a href="alta_producto.php?nombre=<?php echo  $nombre; ?>"	 class="style1" >ALTA_ART</a></div></th>
            </tr>
            <tr>
              <th background="file:///C|/Program Files/Apache Software Foundation/Apache2.2/htdocs/Copy of test/pasesmuestra/index2.php" class="ws10" scope="row"><div align="left" class="style1 Estilo1"><a href="baja_producto.php?nombre=<?php echo  $nombre; ?>"	 class="style1" > BAJA_ART</a></div></th>
            </tr>
            <tr>
              <th class="ws10" scope="row"><div align="left" class="style1 Estilo1"><a href="consulta_producto.php?nombre=<?php echo  $nombre; ?>"	 class="style1" >CONSULTA_ART</a></div></th>
            </tr>
          </table>
        </div>
        <strong><font face="Tahoma"><a href="alta_producto.php?nombre=<?php echo  $nombre; ?>" title="PROVEEDOR" target="_top" class="style1 ws9 ws10">ARTICULOS</a></font></strong></div></td>
      <td width="280" height="20"><div class="Estilo1 ws10" id="Layer7">
        <div id="Layer15">
          <table width="105" height="71" border="0" background="images/new_releases_s.gif">
            <tr>
              <th class="style1" scope="row"><div align="left"><span class="style1"><a href="crear_orden.php?nombre=<?php echo  $nombre; ?>"	 class="style1" >Crear_Orden</a></span></div></th>
            </tr>
            <tr>
              <th class="style1" scope="row"><div align="left"><span class="style1"><a href="modificar_orden.php?nombre=<?php echo  $nombre; ?>"	 class="style1" >Modificar_Orden</a></span></div></th>
            </tr>
            <tr>
              <th class="style1" scope="row"><div align="left"><span class="style1"><a href="consulta_orden.php?nombre=<?php echo  $nombre; ?>"	 class="style1" >Consulta_Orden</a></span></div></th>
            </tr>
          </table>
        </div>
        <strong><a href="crear_orden.php?nombre=<?php echo  $nombre; ?>" title="PROVEEDOR" target="_top" class="style1 ws9 ws10" onMouseMove="MM_showHideLayers('Layer10','','hide','Layer11','','hide','Layer15','','show')">ORDEN DE COMPRA </a></strong></div></td>
      <td width="280" height="20"><div class="ws10 Estilo1 Estilo2" id="Layer8"><strong><a href="index.php" title="PROVEEDOR" target="_top" class="style1 ws9 ws10">SALIR</a></strong></div></td>
      <td width="280" height="20"><div id="Layer9"></div></td>
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
<div class="ws10 style1" id="Layer14"><strong><font face="Tahoma">Baja de proveedores. </font></strong></div>
<div id="Layer1">
  <label></label>
  <form    action="procesa_baja.php?nombre=<?php echo $nombre;?>&codproveedor=<?php echo $codproveedor;?>" id="selector" name="form1" method="post" enctype="multipart/form-data" onChange=" funcion(this, this.form);" >
    <table width="661" height="411" border="0">
      <tr>
        <td width="166" height="30">CodProveedor:</td>
        <td width="173"><label>RFC:</label></td>
        <td width="156">Nombre:</td>
        <td width="148">&nbsp;</td>
      </tr>  
      <tr>
	 <?php
	  
	   $codproveedor= $_GET['codproveedor'];
	   include("conectarse.php");
	$link=Conectarse();
$result2 = mysql_query('SELECT * FROM proveedores WHERE CodProveedor=\''.$codproveedor.'\''); 
	  if($row = mysql_fetch_array($result2 ))
					{
					 $CodProveedor= $row['CodProveedor'];
	  				 $Nombre= $row['Nombre'];
					 $Contacto= $row['Contacto'];
					 $Domicilio= $row['Domicilio'];
					 $RFC= $row['RFC'];
					 $TEL= $row['TEL'];
					 $Fax= $row['Fax'];
					 $Correo= $row['Correo'];
					 $Credito= $row['Credito'];
					 $TipoCambio= $row['TipoCambio']; 
					}	  
	  

	  ?>
	 
        <td height="32"><label for="textfield"></label>
 <input type="text" name="codproveedor" id="codproveedor" onChange="check();"  ></td>
        <td><label for="label"></label>
        <label>
        <input type="text" name="rfc" id="rfc"  disabled="disabled" value="<?php echo $RFC;  ?>"  >
</label></td>
        <td> <label for="label2"></label>
          <label>
          <input type="text" name="nombre" id="nombre" disabled="disabled" value="<?php echo $Nombre;  ?>" >
          </label></td>
        <td><label for="label3"></label></td>
      </tr>
      <tr>
        <td height="42"><label></label>
          <label>Domicilio:</label></td>
        <td><label></label></td>
        <td> <label></label></td>
        <td>&nbsp; </td>
      </tr>
      <tr>
        <td height="80" colspan="2"><label></label>
          <label for="textarea"></label>
        <textarea name="domicilio" cols="50" rows="5" id="domicilio"  disabled="disabled"  > <?php echo $Domicilio;  ?></textarea>        <label>
           
        </label></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="32">Tel:</td>
        <td>Fax:</td>
        <td>Correo:</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="42"><input type="text" name="tel" id="tel" disabled="disabled" value="<?php echo $TEL;  ?>"></td>
        <td><input type="text" name="fax" id="fax" disabled="disabled" value="<?php echo $Fax;  ?>"></td>
        <td><input type="text" name="correo" id="correo" disabled="disabled" value="<?php echo $Correo;  ?>"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="36">Contacto:</td>
        <td>Condicion de Pago: </td>
        <td>Tipo de Cambio: </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="43"><input type="text" name="contacto" id="contacto" disabled="disabled" value="<?php echo $Contacto;  ?>"></td>
        <td><label for="select"></label>
          <select name="credito" id="credito" disabled="disabled">
		   <option value=" ">  <?php echo $Credito;?></option>
            <option value="N/A">Seleccionar</option>
            <option value="15">Credito de 15 dias</option>
            <option value="30">Credito de 1 mes</option>
            <option value="0">Decontado</option>
          </select>        </td>
        <td><label for="label"></label>
          <select name="moneda" id="moneda" disabled="disabled">
		   <option value=" ">  <?php echo $TipoCambio;?></option>
            <option value="N/A">Seleccionar</option>
            <option value="M.A.">Dollar</option>
            <option value="M.N.">Mexicana</option>
            <option value="E.U.">Europea</option>
          </select>        </td>
        <td><label for="textfield"></label>
        <input type="hidden" name="flagname" id="flagname" value="<?php echo $nombre;?>"  ></td>
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
            <input name="Submit" type="submit" class="ws14" id="Submit" value="Eliminar">
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

 
