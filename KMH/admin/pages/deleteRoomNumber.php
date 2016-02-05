<?php
include("connect.php");
include("session.php");
$id = $_GET['id'];

$sql = ("UPDATE `rooms` SET `rooms`.roomStatus = 'deleted' WHERE `rooms`.uniqueId = '$id'");
$query=mysql_query($sql) or mysql_error();  

if (!$query) {
    echo "error" . mysql_error();
} 

else {
header('location:roomNumber.php');        
            }
?>