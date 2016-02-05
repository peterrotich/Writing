<?php
include("connect.php");
include("session.php");
$id = $_GET['id'];

$sql = ("DELETE FROM roomtype WHERE `roomtype`.uniqueId = '$id'");
$query=mysql_query($sql) or mysql_error();  

if (!$query) {
    echo "error" . mysql_error();
} 

else {
header('location:roomType.php');        
            }
?>