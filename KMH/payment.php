<?php
include('connect.php');
include('session.php');
$sql = "SELECT * FROM `tbl_reservation_request` WHERE recieptCode = '$session_id';";
$result = mysql_query($sql);
$rows = mysql_fetch_array($result);
$fName = $rows['firstName'];
$lName = $rows['lastName'];
$recieptCode = $rows['recieptCode'];
$names = $fName." ".$lName;
$phoneNumber = $rows['phoneNumber'];
$amountPaid = $rows['amount'];
$roomt = $rows['roomType'];


// $sql7 = "SELECT * FROM `roomtype` WHERE roomType = '$roomt';";
// $result7 = mysql_query($sql7);
// $rows7 = mysql_fetch_array($result7);
// $ra = $rows7['valP'];
$amountP = $amountPaid/4;

if (isset($_POST['submit'])) {

$bankAccount    = $_POST['bankAccount'];
$secretCode     = $_POST['secretCode'];
$amount         = $_POST['amount'];
$currency         = $_POST['currency'];
$roomNumber     = $_POST['roomNumber'];

$totalAmount = $amount * 4;
$pendingAmount = $totalAmount - $amount;

$sql2 = ("INSERT INTO `kmh`.`tbl_reserved` (`recieptCode`, `names`, `phoneNumber`, `bankAccount`, `currency`, `amountPaid`, `pendingAmount`, `totalAmount`) 
VALUES ('$session_id', '$names', '$phoneNumber', '$bankAccount', '$currency', '$amount', '$pendingAmount', '0')");

$query2=mysql_query($sql2) or mysql_error();
if (!$query2) {
      echo "error" . mysql_error();
  }else{

    echo "<script> if(confirm('You Have Successfully Reserved Your Room')==true){window.location='index.php';} </script>";  

  }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>kibarmos</title>

<link href="css2/style.css" rel="stylesheet"type="text/css" />
<link rel="stylesheet" type="text/css" href="styles/jquery.datetimepicker.css"/>
</head>
<body>
<div id="home_container">

<div id="home_header">
<div id="site_logo">
</div>
</div> <!-- end of header -->

<div id="home_menu">
<ul>
  <li><a href="index.php" class="current">Home</a></li>
  <li><a href="rooms.php" class="current">Check Availability</a></li>  
  <li><a href="book.php" class="current">Book Room(s)</a></li>
  <li><a href="index.php">Services</a></li>
  <li><a href="index.php">About Us</a></li>
  <li><a href="index.php" class="last">Contact Us</a></li>
</ul>    	
</div> <!-- end of menu -->

<div id="home_content">

<div id="content_left">
  <div class="left_column_section">
  
<div class="header_01 border_bottom">Make 25% Deposit To Reserve A Room</div>
<form name="reserve" id="reserve" method="POST" action="">
<table width="100%">
  <tr>
    <td>Amount(25%):</td>
    <td>
      <input type="text" name="amount" id = "amount" value="<?php echo $amountP?>" style = "width:100%; border:none; font-size:16px; font-weight:bold; color:blue;" readOnly="readOnly">
      <input type="hidden" name="total" id = "total" value="<?php echo $amountP?>">
    </td>
    <td>&nbsp;</td>
    <td>Reciept Code</td>
    <td>
      <input type="text" name="recieptCode" value="<?php echo $rows['recieptCode'];?>" style = "width:100%; border:none; font-size:16px; font-weight:bold; color:blue;" readOnly="readOnly" >
    </td>    
  </tr>

  <tr>
    <td>Room Type:</td>
    <td><input type="text" name="roomType" value="<?php echo $rows['roomType'];?>" style = "width:100%; border:none; font-size:16px; font-weight:bold; color:blue;" readOnly="readOnly" ></td>
    <td>&nbsp;</td>
    <td>Arrival Date: </td>
    <td>
    <input type="text" name="arrivalDate" value="<?php echo $rows['arrivalDate'];?>" style = "width:100%; border:none; font-size:16px; font-weight:bold; color:blue;" readOnly="readOnly" >    
    </td>    
  </tr>

  <tr>
    <td>Room Number:</td>
    <td>
    <input type="text" name="roomNumber" value="<?php echo $rows['roomNumber'];?>" style = "width:100%; border:none; font-size:16px; font-weight:bold; color:blue;" readOnly="readOnly" >
    </td>
    <td>&nbsp;</td>
    <td>Departure Date:</td>
    <td>
    <input type="text" name="departureDate" value="<?php echo $rows['departureDate'];?>" style = "width:100%; border:none; font-size:16px; font-weight:bold; color:blue;" readOnly="readOnly" >
    </td>    
  </tr>

  <tr>
    <td>First Name:</td>
    <td>
      <input type="text" name="firstName" value="<?php echo $rows['firstName'];?>" style = "width:100%; border:none; font-size:16px; font-weight:bold; color:blue;" readOnly="readOnly" >
    </td>
    <td>&nbsp;</td>
    <td>Last Name</td>
    <td>
      <input type="text" name="lastName" value="<?php echo $rows['lastName'];?>" style = "width:100%; border:none; font-size:16px; font-weight:bold; color:blue;" readOnly="readOnly" >
    </td>    
  </tr>

  <tr>
    <td>Phone Number:</td>
    <td>
      <input type="text" name="phoneNumber" value="<?php echo $rows['phoneNumber'];?>" style = "width:100%; border:none; font-size:16px; font-weight:bold; color:blue;" readOnly="readOnly" >
    </td>
    <td>&nbsp;</td>
    <td>Id Number</td>
    <td>
      <input type="text" name="idNumber" value="<?php echo $rows['idNumber'];?>" style = "width:100%; border:none; font-size:16px; font-weight:bold; color:blue;" readOnly="readOnly" >
    </td>    
  </tr>

  <tr>
    <td>Card Number:</td>
    <td>
      <input type="text" name="bankAccount" value="" placeholder = "5854 4414 6965 1121" style = "width:100%;"   required pattern = "[ 0-9]*" maxlength="19" >
    </td>
    <td>&nbsp;</td>
    <td>Security Code</td>
    <td>
      <input type="text" name="secretCode" value="" style = "width:100%;" placeholder = "421" required pattern = "[ 0-9]*" maxlength="3">
    </td>    
  </tr>
    <tr>
    <td>Currency:</td>
    <td><select name="currency" id="currency" style = "width:100%;" onchange="calculator('#currency')">
      <option value="1">KES</option>
      <option value="0.0090">EUR</option>
      <option value="0.0098">USD</option>
      <option value="0.013">CAD</option>
      <option value="32.41">UGS</option>      
      <option value="0.5">GBP</option>
      <option value="1.20">JPY</option>
      <option value="21.15">TSH</option>
      <option value="0.0135">AUD</option>
      <option value="0.0065">BRP</option>                  
    </select></td>
  </tr>
  <tr>
    <td colspan="5" style="text-align:center"><input type="submit" name="submit" id="submit" value="Reserve Room"></td>
  </tr>

</table>  

</form>

</div>
  
</div> <!-- end of content left -->

<div class="cleaner"></div>

</div> <!-- end of container -->

<div id="home_bottom_panel">
<div class="content_panel_4_col">
<div class="header_01 border_bottom"></div>
  <div class="content_panel_section margin_right_50">
      <ul>
          <li>
<center>
<strong ><b>Free Ride Benefits</b></strong>
</center></li>
<li>
<span>Kibar Mos Hotel will not allow its guests go hungry... atleast every evening from 6:00 to 7:00 we will offer free hot food and beverages for our guests.</span>
        </li>
          <li>
          	<span>Everything that kids love. A pool and beds to jump on. Enjoy a dip in the pool to help you relax after a day of travel and work althrough.</span>
          </li>
          <li>
          	<span>It gives us peace of mind to know that your body and mind is at peace. Thus we supply a yoga mat in every room.</span>
          </li>
      </ul>
</div>

  <div class="content_panel_section">
     <ul>
          <li><center> Our Location</center>
            </a>
          </li>
          <li>
          	<span>We are located in Bungoma county, Sirisia constituency, a few metres from the Sirisia law courts.
         </span> </li>
          <li>
          	<a href="img2/googlemap.jpg"><span><img src="img2/googlemap.jpg" width="276" height="84" longdesc="img2/googlemap.jpg" /></span></a>
          </li>
    </ul>
</div>

<div class="cleaner"></div>
<div class="rc_btn_01"></div>
</div>
</div>

<div id="home_footer">
<center>
Copyright © 2014 Kibarmoshotel
</center>
<div class="margin_bottom_20"></div>
</div> <!-- end of footer -->

</div> <!-- end of container -->
<div align=center></div>
<script src="js/jquery-1.10.2.js"></script>

<script type="text/javascript">
function calculator(idseli){

    var amnt="";    //total
    var crr ="";      //currency

if(idseli=="#currency"){
    crr  =$(idseli + " option:selected").val();
    amnt =$("#total").val();    

}           
   result1=parseFloat(amnt)*parseFloat(crr);

    result = parseFloat(result1).toFixed(2);
    
    $("#amount").attr("value",result);

}
</script>
</script>
</body>
</html>
