<?php
include('connect.php');
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
  
<div class="header_01 border_bottom">Fill The Details To Reserve A Room</div>
<form name="reserve" id="reserve" method="POST" action="processReservation.php">
<table width="100%">
  <tr>
    <td>Room Type:</td>
    <td>
        <select name="roomType" id="roomType" style="width:100%" onchange="calculator('#roomType')">
        <option value="0">--</option>
        <option value="2000">Single</option>
        <option value="4000">Double</option>
        <option value="6000">Superior</option>
        <option value="8000">Luxury</option>
        </select>
    </td>
    <td>&nbsp;</td>
    <td>Arrival Date: </td>
    <td>
    <input type="text" id="datetimepicker_dark" class = "txtBox" name="arrivalDate" value="<?php $date = new DateTime(); $date->modify('+1 hour'); print $date->format('Y/m/d H:i:s'); ?> " onchange="calculator('#datetimepicker_dark')"/>    
    </td>    
  </tr>
  <tr>
    <td>Room Number:</td>
    <td>
    <select name="roomNumber" id="roomNumber" style="width:100%">
        <?php
      $sql = "SELECT * FROM rooms WHERE roomStatus != 'booked'";
      $result = mysql_query($sql);
       while ($row = mysql_fetch_array($result)) {
       echo "<option value=\"" . $row['roomNumber'] ."\">" . $row['roomNumber'];"</option>";
      }
      echo "</select>";
       ?>
    </td>
    <td>&nbsp;</td>
    <td>Departure Date:</td>
    <td>
    <input type="text" id="datetimepicker9" class = "txtBox" name="departureDate" value="<?php $date = new DateTime(); $date->modify('+5 day'); print $date->format('Y/m/d H:i:s'); ?> " onchange="calculator('#datetimepicker9')"/>
    </td>    
  </tr>

  <tr>
      <td>Amount</td>
    <td colspan="4"><input type="text" name="amount" id="amount" placeholder="500" value = "" readonly="readonly" style="border:none; font-size:18px; font-weight:bold; color:red;"></td>
  </tr>

  <tr>
    <td>First Name:</td>
    <td><input type="text" name="firstName" id="firstName" placeholder = "First Name" required pattern = "[A-Za-z]*" onblur ="randomString();"></td>
    <td>&nbsp;</td>
    <td>Last Name</td>
    <td><input type="text" name="lastName" id="lastName" placeholder = "Last Name" required pattern = "[A-Za-z]*"></td>    
  </tr>

  <tr>
    <td>Phone Number:</td>
    <td><input type="text" name="phoneNumber" id="phoneNumber" placeholder = "Phone Number" required pattern = "[+ 0-9]*" maxlength="14"></td>
    <td>&nbsp;</td>
    <td>Id Number</td>
    <td><input type="text" name="idNumber" id="idNumber" placeholder = "Id Number/Passport" required pattern = "[0-9]*" maxlength="10"></td>    
  </tr>

    <tr>
    <td colspan="5">
    <input type="hidden" name="recieptCode" id="recieptCode">
    <input type="hidden" name="values" id="values" value="1" onmousemove ="calculator('#values')"></td>
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
<script src="js/jquery.datetimepicker.full.js"></script>
<script>
$('#datetimepicker_dark').datetimepicker({theme:'dark',"minDate": "currentDate",});
$('#datetimepicker9').datetimepicker({theme:'dark',"minDate": "currentDate",});
</script>
<script type="text/javascript">
    function randomString() {
    var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    //abcdefghiklmnopqrstuvwxyz
    //ABCDEFGHIJKLMNOPQRSTUVWXYZ
    var string_length = 5;
    var randomstring = '';
    for (var i=0; i<string_length; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        randomstring += chars.substring(rnum,rnum+1);
    }
    document.reserve.recieptCode.value = randomstring;
}

function dateCal(id){

var arr="";
var dep="";

arr=$("#datetimepicker_dark").val();
dep=$("#datetimepicker9").val();


var d = Date.parse(arr);
var y = Date.parse(dep);


var m = (parseInt(y) - parseInt(d))/(1000*60*60*24);
// var n = (6);
// var p = n/m;
return m;

}

function calculator(idseli){

    var rmtyp="";    //total
    var valu ="";
    var dec = "";      //currency

if(idseli=="#roomType"){
    rmtyp  =$(idseli + " option:selected").val();
    valu =$("#values").val();
    dec = dateCal(idseli);    

}if(idseli=="#values"){
    rmtyp  =$("#roomType").val();
    valu =$("#values").val();
    dec = dateCal(idseli);     
}if(idseli=="#datetimepicker_dark"){
    dec = dateCal(idseli);
    rmtyp  =$("#roomType").val();
    valu =$("#values").val();
}if(idseli=="#datetimepicker9"){
    dec = dateCal(idseli);
    rmtyp  =$("#roomType").val();
    valu =$("#values").val();
}

   result1=parseFloat(valu)*parseFloat(rmtyp)*parseFloat(dec);

    result = parseFloat(result1).toFixed(0);
    
    $("#amount").attr("value",result);

}
</script>
</body>
</html>
