<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:346px;
	height:126px;
	z-index:1;
	left: 321px;
	top: 97px;
}
-->
</style>
<div id="Layer1">
  <table width="339" height="120" border="0">
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><?php  
	    $n=$_GET['n'];
		  $d=$_GET['d'];
	  $codproducto=$_GET['codproducto'];
	    $nombre=$_GET['nombre'];
		$flag=$_GET['flag'];
	  if($GrupoCode2!="")
	  {
	   echo  "<img src =\"images/procesando.gif\" width=300px height=200px border=0> ";
	   }
	   ?></td>
      
	  <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
	<?php
	  include("ip.php");
	  include("conectarse.php");
	  $link=Conectarse();     

		$result2 = mysql_query('SELECT * FROM producto WHERE CodProducto=\''.$codproducto.'\'AND Depto=\''.$d.'\'');		  
	
		  // SE OBTIENE EL IP DE LA PC
 		$ip=getIP();	
	     //SE OBTIENE EL NOMBRE DEL HOST 		 
		$host = gethostbyaddr($ip);
		$host;
	 if($row = mysql_fetch_array($result2 ))
		{
					//echo "Guardado";
					 $CodProducto= $row['CodProducto'];
	  				 $NombreProducto= $row['NombreProducto'];
					 $Modelo= $row['Modelo'];
					 $Descripcion= $row['Descripcion'];
					 $Marca= $row['Marca'];
					 $PrecioUni= $row['PrecioUni'];
					 $Moneda= $row['Moneda'];
					 $Unidad= $row['Unidad']; 
	 
$query = 'INSERT INTO producto_baja (CodProducto,NombreProducto,Modelo,Descripcion,Marca,PrecioUni,Moneda,Unidad,user,ip,host,fecha_baja) VALUES (\''.$CodProducto.'\',\''.$NombreProducto.'\',\''.$Modelo.'\',\''.$Descripcion.'\',\''.$Marca.'\',\''.$PrecioUni.'\',\''.$Moneda.'\',\''.$Unidad.'\',\''.$nombre.'\',\''.$ip.'\',\''.$host.'\',\''.date("Y-m-d G:i").'\')';	
	
	mysql_query("delete from producto where  CodProducto='$codproducto' AND  Depto='$d' ",$link);
	
 if($flag==1)
 {
  echo "<script language=\"javascript\">
	   alert('Se elimino el registro','');
	   	window.location.href=\"consulta_producto.php?nombre=$nombre&n=$n&d=$d\";
		</script>";	
	
 }
 else
 {
  echo "<script language=\"javascript\">
	   alert('Se elimino el registro','');
	   	window.location.href=\"baja_producto.php?nombre=$nombre&n=$n&d=$d\";
		</script>";	
	
 }
	
	 
		
	 mysql_query($query) or die(mysql_error());		  
	}
		else
	{
	echo  "<img src =\"images/error404.png\"> ";
	 }


?>








