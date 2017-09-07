<?php
$con = mysqli_connect('localhost', 'root', '', 'tvvilla');
//$s = mysql_select_db("tvvilla");
//if(!$s)
//echo "database not found";

if (mysqli_connect_errno() )
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>