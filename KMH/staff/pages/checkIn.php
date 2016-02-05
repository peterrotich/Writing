<?php
include("connect.php");
include("session.php");
$id = $_GET['id'];

  $sql = "SELECT * FROM `tbl_reserved`  WHERE recieptCode = '$id' ";
  $result = mysql_query($sql);
  $row=mysql_fetch_assoc($result);
  $amountPaid 		= $row['amountPaid'];
  $pendingAmount 	= $row['pendingAmount'];

  $totalAmount = $amountPaid+$pendingAmount;

  $counter = mysql_query("UPDATE tbl_reserved SET totalAmount = '$totalAmount',
  												  pendingAmount = '0'
  											  WHERE recieptCode = '$id'");
  if (!$counter) {
   	echo "Error";
   }else{
   	header('location:pending.php');
   } 

?>