<?php 
function Conectarse() 
{ 
   if (!($link=mysql_connect("localhost","jorge","noen"))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysql_select_db("ordendecompra",$link)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
} 
?>
