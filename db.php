<?php
$mysql_hostname = "localhost:8080";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "liveedit";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) 
or die("This went wrong");
mysql_select_db($mysql_database, $bd) or die("This went wrong");

?>