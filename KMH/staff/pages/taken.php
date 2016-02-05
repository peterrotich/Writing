<?php
include("connect.php");
include("session.php");
 if (isset($_GET["page"])) {
  $_SESSION["page"]=$_GET["page"];
  $page = $_SESSION["page"];
  $page = ($page*7)-7;
} else{
$page = "0";  
}
$cr = "SELECT * FROM `tbl_reserved` WHERE pendingAmount = '0' AND totalAmount != '0' AND roomStatus = 'active'";
$tl = mysql_query($cr);
$np = mysql_num_rows($tl);
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Admin || kibarmos</title>

<!-- Bootstrap Core CSS -->
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
<!-- /.navbar-header -->

<?php include('includes/nav.php'); ?>
<!-- /.navbar-top-links -->
</nav>

<!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Staff Panel - 
            <span class="label label-success">
            <small>Taken Rooms
            (<?php echo $np;?>)</span>    
            </small></h1>
        </div>
        <div id="posted_orders" style = "float:left;width:100%;">
        	<table class = "table" align="center" style="table-layout:fixed; width:100%;">
        <tr>
        <th>Reciept Code</th>
        <th>Names</th>
        <th>Phone Number</th>
        <th>Currency</th>        
        <th>Bank Account</th>
        <th>Amount Paid</th>
        <th>Pending Amount</th>
        <th>Check Out</th>
        </tr>
        <?php
        $sql = "SELECT * FROM `tbl_reserved`  WHERE pendingAmount = '0' AND totalAmount != '0' AND roomStatus = 'active' LIMIT $page,7;";
        $result = mysql_query($sql);
        while($row=mysql_fetch_assoc($result)){
        ?>
        <tr>
        <td><?php echo $row['recieptCode'];?></td>
        <td><?php echo $row['names'];?></td>
        <td><?php echo $row['phoneNumber'];?></td>
        <td>
        <?php 
        $currency =  $row['currency'];
        if ($currency == "1") {
            echo "KES";
        }elseif ($currency == "0.0090") {
            echo "EUR";
        }if ($currency == "0.0098") {
            echo "USD";
        }elseif ($currency == "0.013") {
            echo "CAD";
        }        if ($currency == "32.41") {
            echo "UGS";
        }elseif ($currency == "0.5") {
            echo "GBP";
        }        if ($currency == "1.20") {
            echo "JPY";
        }elseif ($currency == "21.15") {
            echo "TZH";
        }        if ($currency == "0.0135") {
            echo "AUD";
        }elseif ($currency == "0.0065") {
            echo "BRP";
        }

        ?>
        </td>        
        <td><?php echo $row['bankAccount'];?></td>
        <td><?php echo $row['totalAmount'];?></td>
        <td><?php echo "0"?></td>
        <td>
        <a href="clientCheckOut.php?id=<?=$row["recieptCode"];?>">
        <i class="fa fa-sign-out fa-fw" style="font-size:20px;" data-toggle="tooltip" data-placement="left" title="Check Out"></i></a>
        </td>
        </tr>
        <?php
        }
        ?>
        <tr>
        <td colspan = "8" style = "text-align:center;">
        <?php
        $check = mysql_num_rows($result);
        if ($check<1) {
            echo "There are no taken rooms at the monent";
        }
        ?>
        </td>
        </tr>
         <tr>
        <td colspan = "8" style = "text-align:left; font-size:20px">
        <?php
        $cou = "SELECT * FROM `tbl_reserved` WHERE pendingAmount = '0' AND totalAmount != '0' AND roomStatus = 'active'";
        $resu = mysql_query($cou);
        $chec = mysql_num_rows($resu);
        $a = $chec/7;
        $a = ceil($a);
        echo "<span class='label label-success'>Total Records:".$chec." "."Page</span>";                 
        for ($b=1; $b <=$a ; $b++) { 
            ?>    
         <span class='label label-info'><a href = "taken.php?page=<?php echo $b;?>"style = "text-decoration:none;"><?php echo $b," "; ?></a></span>
        <?php
        }
        ?>        
        </td>
        </tr>
        </table>
        </div>                    
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
<script src="js/jquery.js" type="text/javascript"></script>
<!-- Processing Posted Orders
<script type="text/javascript">
var resreshId = setInterval(function()
{
$('#posted_orders').show().load('process/postedOrders.php');

}, 500
    );
</script>-->
</body>
</html>
