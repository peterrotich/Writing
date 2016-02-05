<?php
include("connect.php");
include("session.php");
$id = $_GET['id'];

$sql = ("UPDATE `tbl_reservation_request` SET `tbl_reservation_request`.roomStatus = 'deleted' WHERE `tbl_reservation_request`.id = '$id'");
$query=mysql_query($sql) or mysql_error();  

if (!$query) {
    echo "error" . mysql_error();
} 

else {
header('location:booked.php');        
            }
?>