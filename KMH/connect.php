<?php
//declare connection variables
$host = "localhost";
$user = "root";
$pass = "";

$db = "kmh";
//Connect to the database
mysql_connect($host,$user,$pass) or die(mysql_error());

// Check connection
mysql_select_db($db) or die(mysql_error());

?>