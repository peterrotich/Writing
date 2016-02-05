<?php
include('connect.php');
//single room
$sql = "SELECT * FROM `rooms` WHERE roomNumber = 'GA'";
$result = mysql_query($sql);
$rows = mysql_fetch_array($result);
$roomStatus = $rows['roomStatus'];
//double room
$sql1 = "SELECT * FROM `rooms` WHERE roomNumber = '1A'";
$result1 = mysql_query($sql1);
$rows1 = mysql_fetch_array($result1);
$roomStatus1 = $rows1['roomStatus'];
//superior room
$sql2 = "SELECT * FROM `rooms` WHERE roomNumber = '2A'";
$result2 = mysql_query($sql2);
$rows2 = mysql_fetch_array($result2);
$roomStatus2 = $rows2['roomStatus'];
//luxury room
$sql3 = "SELECT * FROM `rooms` WHERE roomNumber = '3A'";
$result3 = mysql_query($sql3);
$rows3 = mysql_fetch_array($result3);
$roomStatus3 = $rows3['roomStatus'];
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
<!-- start page -->
<div id="wrapper">
<div id="page">
<!-- start content -->
<div id="content">
<div class="post">
<h2 class="title">We offer several kinds of rooms.</h2>
<div class="entry">

<table width="100%" border="0">
  <tr valign="top">
    <td><h4>Single</td>
    <td width="175px" align="center" rowspan="6">
    <a href="" title="Click for more information">
    <img src="img2/luxury-hotel-bedding-sets-1.jpg" width="165px" alt="icon" /></a> </td>
  </tr>
    
  <tr>
    <td>
      <p>Rooms measuring 15 m² equipped with all the details expected of a superior 
      4 star hotel. Services: Wake up call service, Customer service, Laundry service and 
      express laundry, Concierge service, Pillow menu.
      </p>
    </td>
  </tr>
  <tr>
    <td><b>Room Number:</b> GA</td>
  </tr>
  <tr>
    <td><b>Max Adults:</b> 1</td>
  </tr>
  <tr>
    <td><b>Max Children:</b> 0</td>
  </tr>
  <tr>
    <td><b>Availability:</b> <?php 
    if ($roomStatus == "empty") {
      echo "Available";
    }else{
      echo "Booked";
    }
    ?></td>
  </tr>
    <tr>
    <td><b><a href="single.php">View More</a>&nbsp;&nbsp;&nbsp;</b><?php 
    if ($roomStatus == "empty") {
      echo "<a href = 'book.php'>Book</a>";
    }else{
      echo "Check Later";
    }
    ?></td>
  </tr>
  	</table>
          
      <div class="line-hor"></div>
      		<table width="100%" border="0"><tr valign="top"></tr></table>
              
<table width="100%" border="0"><tr valign="top">			
					<td><h4>Double</h4></td>
                      
			<td width="175px" align="center" rowspan="6">
<a href="" title="Click for more information">
              
              <img src="img2/Hotel-Bed-Skirt.jpg" width="165px" alt="icon" /></a>
			
                          </td></tr>
               
               <tr><td><p>Modern and functional rooms measuring approximately 20-25 m² equipped with all the details expected of the hotel. The rooms have a king or queen size bed or two single beds, in addition to beds measuring 1 by 2.2 metres ideal for sports teams.</p>
               </td></tr>
               
               <tr><td><b>Room Number:</b> 1A</td></tr>
               <tr><td><b>Max Adults:</b> 2</td>
               </tr><tr><td><b>Max Children:</b> 1</td></tr>
               <tr><td><b>Maximum Extra Beds:</b> 1</td></tr>
               <tr><td><b>Availability:</b> <?php 
                if ($roomStatus1 == "empty") {
                  echo "Available";
                }else{
                  echo "Booked";
                }
                ?></td></tr>
               <tr><td><b><a href="double.php">View More</a>&nbsp;&nbsp;&nbsp;</b><?php 
                if ($roomStatus1 == "empty") {
                  echo "<a href = 'book.php'>Book</a>";
                }else{
                  echo "Check Later";
                }
                ?></td></tr>               
                </table>
          
  <div class="line-hor"></div>
  
          <table width="100%" border="0"><tr valign="top">
</tr></table> 
           
	<table width="100%" border="0"><tr valign="top">	   
					<td><h4>Superior
                    </h4></td>
		<td width="175px" align="center" rowspan="6">
		<a href="" title="Click for more information">
            <img src="img2/Rooms/luxury.jpeg" width="165px" alt="icon" /></a>

</td></tr>
          
          <tr><td><p>Spacious rooms with exquisite decor, measuring approximately 25-30 m&sup2; and equipped with all the details expected of the hotel hotel. The rooms have a king or queen size bed or two single beds, in addition to beds measuring 1 by 2.2 metres.</p></td></tr>
          
          <tr><td><b>Room Number:</b> 2A</td></tr>
          	<tr><td><b>Max Adults:</b> 3</td></tr>
          				<tr><td><b>Max Children:</b> 1</td></tr>
          		<tr><td><b>Maximum Extra Beds:</b> 1</td></tr>
          <tr><td><b>Availability:</b> available</td></tr>
          <tr>
          <td><b>Availability:</b> <?php 
          if ($roomStatus == "empty") {
            echo "Available";
          }else{
            echo "Booked";
          }
          ?></td>
        </tr>
          <tr>
          <td><b><a href="superior.php">View More</a>&nbsp;&nbsp;&nbsp;</b><?php 
          if ($roomStatus2 == "empty") {
            echo "<a href = 'book.php'>Book</a>";
          }else{
            echo "Check Later";
          }
          ?></td>
        </tr></table>

<div class="line-hor"></div>
          <table width="100%" border="0"><tr valign="top">
          </tr></table>

</div>
</div>
<div class="post">
					<table width="100%" border="0"><tr valign="top">	
				<p><td><h4><a href="luxury.php" title="Click to view">Luxury</a></h4></td>
			<td width="175px" align="center" rowspan="6">
									<a href="" title="Click for more information">
            <img src="img2/Rooms/superior.jpg" width="165px" alt="icon" /></a>

</td></tr>
          
          <tr><td><p>Spacious rooms with exquisite decor measuring approximately 25-30 m&sup2; and equipped with all the details expected of a superior 4 star Hotel. The rooms have a king or queen size bed or two single beds, and views of the streets.</p></td></tr>
          
          
          	<tr><td><b>Room Number:</b> 3A</td></tr>
          			<tr><td><b>Max Adults:</b> 4</td></tr>
         						 <tr><td><b>Max Children:</b> 2</td></tr>
         				 <tr><td><b>Maximum Extra Beds:</b> 2</td></tr>
         		 <tr><td><b>Availability:</b> <?php 
                if ($roomStatus3 == "empty") {
                  echo "Available";
                }else{
                  echo "Booked";
                }
                ?></td></tr>
               <tr><td><b><a href="luxury.php">View More</a>&nbsp;&nbsp;&nbsp;</b><?php 
                if ($roomStatus1 == "empty") {
                  echo "<a href = 'book.php'>Book</a>";
                }else{
                  echo "Check Later";
                }
                ?></td></tr>
          				<div class="line-hor"></div>
         					</tr>
          												</table>
</p>
</div>
</div>
              </div>
              <br />
              <br />
              <br />
              <br />
				<!-- end content -->
	<div id="sidebar">

<ul>


	<ul>
					 <p> <strong>QUICK CONTACT<br /></strong></p>
					Tel: +254 700-266-112<br />
					Fax: 6247-30200<br />
					Email: kibarmoshotel@gmail.com 
			 </ul>
</ul></div>


			<div style="clear: both;"></div>
                             
                              <!-- end page -->
                              <div id="footer">
                                  <p align="center">
                                    <strong>Copyright &copy; 2014 kibarmoshotel
                                  </strong></p>	
                              </div>
</body>
</html>