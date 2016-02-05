<?php
include('connect.php');

//luxury room
$sql = "SELECT * FROM `rooms` WHERE roomNumber = '3B'";
$result = mysql_query($sql);
$rows = mysql_fetch_array($result);
$roomStatus = $rows['roomStatus'];
//luxury room
$sql1 = "SELECT * FROM `rooms` WHERE roomNumber = '3C'";
$result1 = mysql_query($sql1);
$rows1 = mysql_fetch_array($result1);
$roomStatus1 = $rows1['roomStatus'];
//luxury room
$sql2 = "SELECT * FROM `rooms` WHERE roomNumber = '3D'";
$result2 = mysql_query($sql2);
$rows2 = mysql_fetch_array($result2);
$roomStatus2 = $rows2['roomStatus'];
//luxury room
$sql3 = "SELECT * FROM `rooms` WHERE roomNumber = '3E'";
$result3 = mysql_query($sql3);
$rows3 = mysql_fetch_array($result3);
$roomStatus3 = $rows3['roomStatus'];
//luxury room
$sql4 = "SELECT * FROM `rooms` WHERE roomNumber = '3F'";
$result4 = mysql_query($sql4);
$rows4 = mysql_fetch_array($result4);
$roomStatus4 = $rows4['roomStatus'];
//luxury room
$sql5 = "SELECT * FROM `rooms` WHERE roomNumber = '3G'";
$result5 = mysql_query($sql5);
$rows5 = mysql_fetch_array($result5);
$roomStatus5 = $rows5['roomStatus'];

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
            <h2 class="title">Luxury Rooms</h2>
   <table>
    <tr>
        <td>
        Spacious rooms with exquisite<br>
        decor measuring approximately <br>
        25-30 m² and equipped with all <br>
        the details expected of a <br>
        superior 4 star Hotel. The <br>
        rooms have a king or queen <br>
        size bed or two single beds, <br>
        and views of the streets.<br>
        </td>
        <td><img src="img2/Rooms/luxury1.jpg" width="165px" height="140px" alt="icon" /></td>
        <td>
        <b>Room Number: 3B</b><br>
        <b>Max Adults: 4</b><br>
        <b>Max Children: 2</b><br>
        <b>Maximum Extra Beds: 2</b><br>
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
        decor measuring approximately <br>
        25-30 m² and equipped with all <br>
        the details expected of a <br>
        superior 4 star Hotel. The <br>
        rooms have a king or queen <br>
        size bed or two single beds, <br>
        and views of the streets.<br>
        </td>
        <td><img  src="img2/luxury-hotel-bedding-sets-1.jpg" width="165px" height="140px" alt="icon" /></td>
        <td>
        <b>Room Number: 3C</b><br>
        <b>Max Adults: 4</b><br>
        <b>Max Children: 2</b><br>
        <b>Maximum Extra Beds: 2</b><br>
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
        decor measuring approximately <br>
        25-30 m² and equipped with all <br>
        the details expected of a <br>
        superior 4 star Hotel. The <br>
        rooms have a king or queen <br>
        size bed or two single beds, <br>
        and views of the streets.<br>
        </td>
        <td><img  src="img2/luxury-hotel-bedding-sets-4.jpg" width="165px" height="140px" alt="icon" /></td>
        <td>
        <b>Room Number: 3D</b><br>
        <b>Max Adults: 4</b><br>
        <b>Max Children: 2</b><br>
        <b>Maximum Extra Beds: 2</b><br>
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
        decor measuring approximately <br>
        25-30 m² and equipped with all <br>
        the details expected of a <br>
        superior 4 star Hotel. The <br>
        rooms have a king or queen <br>
        size bed or two single beds, <br>
        and views of the streets.<br>
        </td>
        <td><img src="img2/guest_room_bed.jpg" width="165px" height="140px" alt="icon" /></td>
        <td>
        <b>Room Number: 3E</b><br>
        <b>Max Adults: 4</b><br>
        <b>Max Children: 2</b><br>
        <b>Maximum Extra Beds: 2</b><br>
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
        decor measuring approximately <br>
        25-30 m² and equipped with all <br>
        the details expected of a <br>
        superior 4 star Hotel. The <br>
        rooms have a king or queen <br>
        size bed or two single beds, <br>
        and views of the streets.<br>
        </td>
        <td><img  src="img2/luxury-hotel-bedding-sets-2.jpg" width="165px" height="140px" alt="icon" /></td>
        <td>
        <b>Room Number: 3F</b><br>
        <b>Max Adults: 4</b><br>
        <b>Max Children: 2</b><br>
        <b>Maximum Extra Beds: 2</b><br>
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
    <tr>
        <td>
        Spacious rooms with exquisite<br>
        decor measuring approximately <br>
        25-30 m² and equipped with all <br>
        the details expected of a <br>
        superior 4 star Hotel. The <br>
        rooms have a king or queen <br>
        size bed or two single beds, <br>
        and views of the streets.<br>
        </td>
        <td><img  src="img2/10pc-hotel-bedding-pink-brown-chocolate-bed-in-a-bag-set.jpg" width="165px" height="140px" alt="icon" /></td>
        <td>
        <b>Room Number: 3G</b><br>
        <b>Max Adults: 4</b><br>
        <b>Max Children: 2</b><br>
        <b>Maximum Extra Beds: 2</b><br>
        </td>
      <td><b>Availability:</b><br> <?php 
      if ($roomStatus5 == "empty") {
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