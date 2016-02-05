<?php
include("connect.php");
include("session.php");
$id = $_GET['id'];

$sql = ("UPDATE `tbl_reserved` SET `tbl_reserved`.roomStatus = 'deleted' WHERE `tbl_reserved`.id = '$id'");
$query=mysql_query($sql) or mysql_error();  

if (!$query) {
    echo "error" . mysql_error();
} 

else {
header('location:pending.php');        
            }
?>