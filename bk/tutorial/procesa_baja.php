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
	  $codproveedor=$_GET['codproveedor'];
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

		$result2 = mysql_query('SELECT * FROM proveedores WHERE CodProveedor=\''.$codproveedor.'\'');		  
	
		  // SE OBTIENE EL IP DE LA PC
 		$ip=getIP();	
	     //SE OBTIENE EL NOMBRE DEL HOST 		 
		$host = gethostbyaddr($ip);
		$host;
	 if($row = mysql_fetch_array($result2 ))
		{
					//echo "Guardado";
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
	 
$query = 'INSERT INTO proveedores_baja (CodProveedor,Nombre,Contacto,Domicilio,RFC,TEL,Fax,Correo,Credito,TipoCambio,user,ip,host,fecha_baja) VALUES (\''.$CodProveedor.'\',\''.$Nombre.'\',\''.$Contacto.'\',\''.$Domicilio.'\',\''.$RFC.'\',\''.$TEL.'\',\''.$Fax.'\',\''.$Correo.'\',\''.$Credito.'\',\''.$TipoCambio.'\',\''.$nombre.'\',\''.$ip.'\',\''.$host.'\',\''.date("Y-m-d G:i").'\')';	
	
	mysql_query("delete from proveedores where  CodProveedor='$codproveedor' ",$link);
	
 if($flag==1)
 {
  echo "<script language=\"javascript\">
	   alert('Se elimino el registro','');
	   	window.location.href=\"consulta_proveedor.php?nombre=$nombre\";
		</script>";	
	
 }
 else
 {
  echo "<script language=\"javascript\">
	   alert('Se elimino el registro','');
	   	window.location.href=\"baja_proveedor.php?nombre=$nombre\";
		</script>";	
	
 }
	
	 
		
	 mysql_query($query) or die(mysql_error());		  
	}
		else
	{
	echo  "<img src =\"images/error404.png\"> ";
	 }


?>








