<?php
  include("conectarse.php");
	$link=Conectarse();
	$q=$_GET['q'];
	$my_data=mysql_real_escape_string($q);
	//$mysqli=mysqli_connect('localhost','root','RootMySQL','ordendecompra') or die("Database Error");
	$sql="SELECT CodProveedor FROM proveedores WHERE CodProveedor LIKE '%$my_data%' ORDER BY CodProveedor";
	$result = mysql_query($sql,$link) or die(mysqli_error());
	
	if($result)
	{
		while($row=mysql_fetch_array($result))
		{
			echo $row['CodProveedor']."\n";
		}
	}
?>