<?php
include("connect.php");
include("session.php");
$id = $_GET['id'];

$sql = ("DELETE FROM tbl_reservation_request WHERE `tbl_reservation_request`.recieptCode = '$id'");
$query=mysql_query($sql) or mysql_error();  

$sql2 = ("DELETE FROM tbl_reserved WHERE `tbl_reserved`.recieptCode = '$id'");
$query2=mysql_query($sql2) or mysql_error();  

if (!$query) {
    echo "error" . mysql_error();
}else
if (!$query2) {
    echo "error" . mysql_error();
} 

else {
header('location:taken.php');        
            }
?>