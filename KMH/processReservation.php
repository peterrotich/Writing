<?php
include('connect.php');
session_start();
if (isset($_POST['submit'])) {
	$roomType 		= $_POST['roomType'];
	$arrivalDate 	= $_POST['arrivalDate'];	
	$roomNumber 	= $_POST['roomNumber'];
	$departureDate 	= $_POST['departureDate'];
	$amount 		= $_POST['amount'];		
	$firstName 		= $_POST['firstName'];		
	$lastName 		= $_POST['lastName'];
	$phoneNumber	= $_POST['phoneNumber'];
	$idNumber 		= $_POST['idNumber'];
	$recieptCode 	= $_POST['recieptCode'];
	$reservationDate= date('Y/M/d h:i');


	if ($roomType =="2000") {
	$roomType = "Single";
	}
	if ($roomType =="4000") {
		$roomType = "Double";
	}
	if ($roomType =="6000") {
		$roomType = "Superior";
	}
	if ($roomType =="8000") {
		$roomType = "Luxury";
	}

  $sql = ("INSERT INTO `kmh`.`tbl_reservation_request` (`roomType`,`arrivalDate`, `roomNumber`, `departureDate`,`amount`, `firstName`, `lastName`, `phoneNumber`, `idNumber`, `recieptCode`, `reservationDate`) 
  VALUES ('$roomType', '$arrivalDate', '$roomNumber', '$departureDate', '$amount', '$firstName', '$lastName', '$phoneNumber', '$idNumber', '$recieptCode', '$reservationDate')");

  $query=mysql_query($sql) or mysql_error();
  if (!$query) {
        echo "error" . mysql_error();
    }
	$sql1 = ("UPDATE `rooms` SET `rooms`.roomStatus = 'booked',
								 `rooms`.recieptCode = '$recieptCode'  
							WHERE `rooms`.roomNumber = '$roomNumber'");
	$query1=mysql_query($sql1) or mysql_error();  

	if (!$query1) {
	    echo "error" . mysql_error();
	}    

   else{
   	$_SESSION['id']=$_POST['recieptCode'];
  	$session_id = $_SESSION['id'];

  	header('Location:payment.php');
   }

}


?>