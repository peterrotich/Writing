<?php
include('connect.php');
//superior room
$sql = "SELECT * FROM `rooms` WHERE roomNumber = '2B'";
$result = mysql_query($sql);
$rows = mysql_fetch_array($result);
$roomStatus = $rows['roomStatus'];
//superior room
$sql1 = "SELECT * FROM `rooms` WHERE roomNumber = '2C'";
$result1 = mysql_query($sql1);
$rows1 = mysql_fetch_array($result1);
$roomStatus1 = $rows1['roomStatus'];
//superior room
$sql2 = "SELECT * FROM `rooms` WHERE roomNumber = '2D'";
$result2 = mysql_query($sql2);
$rows2 = mysql_fetch_array($result2);
$roomStatus2 = $rows2['roomStatus'];
//superior room
$sql3 = "SELECT * FROM `rooms` WHERE roomNumber = '2E'";
$result3 = mysql_query($sql3);
$rows3 = mysql_fetch_array($result3);
$roomStatus3 = $rows3['roomStatus'];
//superior room
$sql4 = "SELECT * FROM `rooms` WHERE roomNumber = '2F'";
$result4 = mysql_query($sql4);
$rows4 = mysql_fetch_array($result4);
$roomStatus4 = $rows4['roomStatus'];
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
            <h2 class="title">Superior Rooms</h2>
   <table>
    <tr>
        <td>
        Spacious rooms with exquisite<br> 
        decor, measuring approximately<br>
        25-30 m² and equipped with all<br>
        the details expected of the <br>
        hotel hotel. The rooms have a <br>
        king or queen size bed or two <br>
        single beds, in addition to <br>
        beds measuring 1 by 2.2 metres.<br>
        </td>
        <td><img src="img2/Rooms/superior1.jpg" width="165px" height="140px" alt="icon" /></td>
        <td>
        <b>Room Number: 2B</b><br>
        <b>Max Adults: 3</b><br>
        <b>Max Children: 1</b><br>
        <b>Maximum Extra Beds: 1</b><br>
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
        Spacious rooms with exquisite<br> 
        decor, measuring approximately<br>
        25-30 m² and equipped with all<br>
        the details expected of the <br>
        hotel hotel. The rooms have a <br>
        king or queen size bed or two <br>
        single beds, in addition to <br>
        beds measuring 1 by 2.2 metres.<br>
        </td>
        <td><img src="img2/Rooms/superior2.jpg" width="165px" height="140px" alt="icon" /></td>
        <td>
        <b>Room Number: 2C</b><br>
        <b>Max Adults: 3</b><br>
        <b>Max Children: 1</b><br>
        <b>Maximum Extra Beds: 1</b><br>
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
        Spacious rooms with exquisite<br> 
        decor, measuring approximately<br>
        25-30 m² and equipped with all<br>
        the details expected of the <br>
        hotel hotel. The rooms have a <br>
        king or queen size bed or two <br>
        single beds, in addition to <br>
        beds measuring 1 by 2.2 metres.<br>
        </td>
        <td><img src="img2/Rooms/superior3.jpg" width="165px" height="140px" alt="icon" /></td>
        <td>
        <b>Room Number: 2D</b><br>
        <b>Max Adults: 3</b><br>
        <b>Max Children: 1</b><br>
        <b>Maximum Extra Beds: 1</b><br>
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
        Spacious rooms with exquisite<br> 
        decor, measuring approximately<br>
        25-30 m² and equipped with all<br>
        the details expected of the <br>
        hotel hotel. The rooms have a <br>
        king or queen size bed or two <br>
        single beds, in addition to <br>
        beds measuring 1 by 2.2 metres.<br>
        </td>
        <td><img src="img2/luxury-hotel-bedding-sets-6.jpg" width="165px" height="140px" alt="icon" /></td>
        <td>
        <b>Room Number: 2E</b><br>
        <b>Max Adults: 3</b><br>
        <b>Max Children: 1</b><br>
        <b>Maximum Extra Beds: 1</b><br>
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
        Spacious rooms with exquisite<br> 
        decor, measuring approximately<br>
        25-30 m² and equipped with all<br>
        the details expected of the <br>
        hotel hotel. The rooms have a <br>
        king or queen size bed or two <br>
        single beds, in addition to <br>
        beds measuring 1 by 2.2 metres.<br>
        </td>
        <td><img src="img2/Hotel-Mattress1_0.png" width="165px" height="140px" alt="icon" /></td>
        <td>
        <b>Room Number: 2F</b><br>
        <b>Max Adults: 3</b><br>
        <b>Max Children: 1</b><br>
        <b>Maximum Extra Beds: 1</b><br>
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