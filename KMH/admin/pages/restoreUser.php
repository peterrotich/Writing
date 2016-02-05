<?php
include("connect.php");
include("session.php");
$id = $_GET['id'];

$sql = ("UPDATE `tbl_users` SET `tbl_users`.status = 'active' WHERE `tbl_users`.uniqueId = '$id'");
$query=mysql_query($sql) or mysql_error();  

if (!$query) {
    echo "error" . mysql_error();
} 

else {
header('location:deletedUsers.php');        
            }
?>