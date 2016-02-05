<?php
include('connect.php');
//single room
$sql = "SELECT * FROM `rooms` WHERE roomNumber = 'GB'";
$result = mysql_query($sql);
$rows = mysql_fetch_array($result);
$roomStatus = $rows['roomStatus'];
//single room
$sql1 = "SELECT * FROM `rooms` WHERE roomNumber = 'GC'";
$result1 = mysql_query($sql1);
$rows1 = mysql_fetch_array($result1);
$roomStatus1 = $rows1['roomStatus'];
//single room
$sql2 = "SELECT * FROM `rooms` WHERE roomNumber = 'GD'";
$result2 = mysql_query($sql2);
$rows2 = mysql_fetch_array($result2);
$roomStatus2 = $rows2['roomStatus'];
//single room
$sql3 = "SELECT * FROM `rooms` WHERE roomNumber = 'GE'";
$result3 = mysql_query($sql3);
$rows3 = mysql_fetch_array($result3);
$roomStatus3 = $rows3['roomStatus'];
//single room
$sql4 = "SELECT * FROM `rooms` WHERE roomNumber = 'GF'";
$result4 = mysql_query($sql4);
$rows4 = mysql_fetch_array($result4);
$roomStatus4 = $rows['roomStatus'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rooms</title>
<link rel="stylesheet" type="text/css" href="css2/rooms.css" />
</head>

<body>

<div id="header">
  <div id="logo"></div>
	<div id="splash"></div>
	<div id="menu">
		<ul>
		  <li ><a href="index.php" accesskey="1" title="home">Home</a></li>
			<li><a href="single.php" title="">SINGLE </a></li>
			<li><a href="double.php" accesskey="3" title="">DOUBLE</a></li>
			<li><a href="superior.php" accesskey="4" title="">SUPERIOR</a></li>
			<li><a href="luxury.php" accesskey="5" title="">LUXURY</a></li>
			<li></li>
		</ul>
	</div>
</div>
<hr />
<div style="padding-left:25%;">
			<h2 class="title">Single Rooms</h2>
   <table>
   	<tr style="padding-top:0px">
   		<td>
      Rooms measuring 15 m² equipped<br>
      with all the details expected<br>
      of a superior 4 star hotel. <br>
      Services: Wake up call service,<br>
      Customer service, Laundry service <br>
      and express laundry, Concierge<br>
       service, Pillow menu.<br>
      </td>
   		<td><img src="img2/Rooms/single2.jpg" width="165px" height="140px" alt="icon" /></td>
   		<td>
      <b>Room Numer:</b>GB<br>
      <b>Max Adults:</b>2<br>
      <b>Max Children:</b>3<br>
      </td>
      <td><b>Availability:</b><br> <?php 
      if ($roomStatus == "empty") {
        echo "Available"."<br>".
        "<a href = 'book.php'>Book</a>";
      }else{
        echo "Booked";
      }
      ?></td>
   	</tr>
   	<tr>
   		<td>
      Rooms measuring 15 m² equipped<br>
      with all the details expected<br>
      of a superior 4 star hotel. <br>
      Services: Wake up call service,<br>
      Customer service, Laundry service <br>
      and express laundry, Concierge<br>
       service, Pillow menu.<br>
      </td>
   		<td><img  src="img2/Rooms/single1.jpg" width="165px" height="140px" alt="icon" /></td>
      <td>
      <b>Room Numer:</b>GC<br>
      <b>Max Adults:</b>2<br>
      <b>Max Children:</b>3<br>
      </td>
      <td><b>Availability:</b><br> <?php 
      if ($roomStatus1 == "empty") {
        echo "Available"."<br>".
        "<a href = 'book.php'>Book</a>";
      }else{
        echo "Booked";
      }
      ?></td>
   	</tr>
   	<tr>
      <td>
      Rooms measuring 15 m² equipped<br>
      with all the details expected<br>
      of a superior 4 star hotel. <br>
      Services: Wake up call service,<br>
      Customer service, Laundry service <br>
      and express laundry, Concierge<br>
       service, Pillow menu.<br>
      </td>
   		<td><img src="img2/Rooms/single3.jpg" width="165px" height="140px" alt="icon" /></td>
      <td>
      <b>Room Numer:</b>GD<br>
      <b>Max Adults:</b>2<br>
      <b>Max Children:</b>3<br>
      </td>
      <td><b>Availability:</b><br> <?php 
      if ($roomStatus2 == "empty") {
        echo "Available"."<br>".
        "<a href = 'book.php'>Book</a>";
      }else{
        echo "Booked";
      }
      ?></td>
   	</tr>
   	<tr>
      <td>
      Rooms measuring 15 m² equipped<br>
      with all the details expected<br>
      of a superior 4 star hotel. <br>
      Services: Wake up call service,<br>
      Customer service, Laundry service <br>
      and express laundry, Concierge<br>
       service, Pillow menu.<br>
      </td>
   		<td><img  src="img2/Rooms/single4.jpg" width="165px" height="140px" alt="icon" /></td>
      <td>
      <b>Room Numer:</b>GE<br>
      <b>Max Adults:</b>2<br>
      <b>Max Children:</b>3<br>
      </td>
      <td><b>Availability:</b><br> <?php 
      if ($roomStatus3 == "empty") {
        echo "Available"."<br>".
        "<a href = 'book.php'>Book</a>";
      }else{
        echo "Booked";
      }
      ?></td>
   	</tr>
   	<tr>
      <td>
      Rooms measuring 15 m² equipped<br>
      with all the details expected<br>
      of a superior 4 star hotel. <br>
      Services: Wake up call service,<br>
      Customer service, Laundry service <br>
      and express laundry, Concierge<br>
       service, Pillow menu.<br>
      </td>
   		<td><img src="img2/Rooms/single5.jpg" width="165px" height="140px" alt="icon" /></td>
      <td>
      <b>Room Numer:</b>GF<br>
      <b>Max Adults:</b>2<br>
      <b>Max Children:</b>3<br>
      </td>
      <td><b>Availability:</b><br> <?php 
      if ($roomStatus4 == "empty") {
        echo "Available"."<br>".
        "<a href = 'book.php'>Book</a>";
      }else{
        echo "Booked";
      }
      ?></td>
   	</tr>   	
   </table>
    
    <div id="sidebar">
    
		<ul>
			
						<ul>
      							<p> <strong>QUICK CONTACT<br /></strong></p>
										Tel: +254 700-266-112<br />
										Fax: 6247-30200<br />
										Email: kibarmoshotel@gmail.com 
     				 </ul>
    </ul>
    </div>
    
			<div style="clear: both;"></div>
							<!-- end page -->
						<div id="footer">
								<p align="center">
     		 <strong>Copyright &copy; 2014 kibarmoshotel
    </strong></p>	
</div>
</body>
</html>