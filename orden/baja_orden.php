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
	   $n=$_GET[n];
	    $d=$_GET[d];
	  $id=$_GET['id'];
	  $nombre=$_GET['nombre'];
	  $numcompra=$_GET['numcompra'];
$autorizo=$_GET['autorizo'];
	  $iva=$_GET['iva'];
	  $codproveedor=$_GET['codproveedor'];
		$flag=$_GET['flag'];
		$flag2=$_GET['flag2'];
		$fecha=$_GET['fecha'];
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

		$result2 = mysql_query('SELECT * FROM orden_temp WHERE id=\''.$id.'\'');		  
	
		  // SE OBTIENE EL IP DE LA PC
 		$ip=getIP();	
	     //SE OBTIENE EL NOMBRE DEL HOST 		 
		$host = gethostbyaddr($ip);
		$host;
	 if($row = mysql_fetch_array($result2 ))
		{

			$status="M";
	

	
	 if($flag2==2)
 {
 
 
 
   $q = "UPDATE orden_temp set FechaModificacion='".date("Y-m-d ")."', Modificado=1, user='".$nombre."', ip='".$ip."', host='".$host."', status='".$status."' where id='".$id."'"
   ;
mysql_query($q, $link) or die ("problema con query1");
 
 
  echo "<script language=\"javascript\">
	   alert('Se elimino el registro','');
	      	window.location.href=\"modificar_orden.php?nombre=$nombre&numcompra=$numcompra&codproveedor=$codproveedor&iva=$iva&fecha=$fecha&n=$n&d=$d\";
		</script>";	
	

 }
 
 
	
 if($flag==1)
 {
 
 mysql_query("delete from orden_temp where  id='$id' ",$link);

  echo "<script language=\"javascript\">
	   alert('Se elimino el registro','');
	   	window.location.href=\"crear_orden.php?nombre=$nombre&codproveedor=$codproveedor&iva=$iva&fecha=$fecha&n=$n&d=$d&autorizo=$autorizo\";
		</script>";	
	
 }
 
 else
 {
  echo "<script language=\"javascript\">
	   alert('Se elimino el registro','');
	   	window.location.href=\"crear_orden.php?nombre=$nombre&codproveedor=$codproveedor&iva=$iva&fecha=$fecha&n=$n&d=$d\";
		</script>";	
	
 }
	
	 
		
	 mysql_query($query) or die(mysql_error());		  
	}
		else
	{
	echo  "<img src =\"images/error404.png\"> ";
	 }


?>








