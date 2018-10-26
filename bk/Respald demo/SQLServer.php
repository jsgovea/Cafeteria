<?php 

$myServer = "192.168.2.170\SQLEXPRESS,1269";
$myUser   = "sa"; 
$myPass   = "123456"; 
$myDB     = "MerryEMP";  
 
//connection to the database 
$dbhandle = mssql_connect($myServer, $myUser, $myPass) 
  or die("Couldn't connect to SQL Server on $myServer From " . $_SERVER["HTTP_HOST"] );  
 
//select a database to work with 
$selected = mssql_select_db($myDB, $dbhandle) 
  or die("Couldn't open database $myDB");  
 
//declare the SQL statement that will query the database 

$query = "select c_username,c_userpassword  from emp where c_username is not NULL order by 1";
 
//execute the SQL query and return records 
$result = mssql_query($query); 
 
$numRows = mssql_num_rows($result);  
echo "<h1>" . $numRows . " Row" . ($numRows == 1 ? "" : "s") . " Returned </h1>";  
 
//display the results  
while($row = mssql_fetch_array($result)) 
{ 
  echo "<li>" . $row["c_username"] . $row["c_userpassword"] . "</li>"; 
} 
//close the connection 
mssql_close($dbhandle); 

?> 
