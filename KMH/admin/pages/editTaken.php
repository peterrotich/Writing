<?php
include("connect.php");
include("session.php");
$_SESSION["editR"]=$_GET["id"];
$id = $_SESSION["editR"];

$sql = "SELECT * FROM `tbl_reserved` WHERE id = '$id' AND roomStatus = 'active';";
$result = mysql_query($sql);
$rows = mysql_fetch_array($result);
$recieptCode    = $rows['recieptCode'];
$names          = $rows['names'];
$phoneNumber    = $rows['phoneNumber'];
$bankAccount    = $rows['bankAccount'];
$currency       = $rows['currency'];
$amountPaid     = $rows['amountPaid'];
$pendingAmount  = $rows['pendingAmount'];
$totalAmount    = $rows['totalAmount'];


if (isset($_POST['submit'])) {
    $names          = $_POST['names'];
    $phoneNumber    = $_POST['phoneNumber'];
    $bankAccount    = $_POST['bankAccount'];
    // $currency       = $_POST['currency'];
    $amountPaid     = $_POST['amountPaid'];
    $pendingAmount  = $_POST['pendingAmount'];
    $totalAmount    = $_POST['totalAmount'];


$sql2 = ("UPDATE `tbl_reserved` SET 
    `tbl_reserved`.names        = '$names',
    `tbl_reserved`.phoneNumber  = '$phoneNumber',
    `tbl_reserved`.bankAccount  = '$bankAccount',
    -- `tbl_reserved`.currency     = '$currency',
    `tbl_reserved`.amountPaid   = '$amountPaid',
    `tbl_reserved`.pendingAmount= '$pendingAmount',
    `tbl_reserved`.totalAmount  = '$totalAmount'

    WHERE `tbl_reserved`.id = '$id'");

$query2=mysql_query($sql2) or mysql_error();
if (!$query2) {
      echo "error" . mysql_error();
  }else{

    echo "<script> if(confirm('Room Successfully Updated')==true){window.location='taken.php';} </script>";  

  }
}
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
            <h1 class="page-header">Admin Panel - 
            <span class="label label-success">
            <small>Edit Room</span></small></h1>
        </div>

         <div class="col-lg-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Reciept Code:  <b><?php echo $recieptCode;?></b>
                </div>
                <div class="panel-body">
        <form id="editRoom" name="editRoom" method="POST" action="">
        <table class = "table" align="center" style="table-layout:fixed; width:100%;">
        <tr>
        <th>Names: </th>
        <th><input type = "text" name="names" id="names" value="<?php echo $names?>" style = "width:100%" ></th>
        </tr>

        <tr>
        <th>Phone Number: </th>
        <th><input type = "text" name="phoneNumber" id="phoneNumber" value="<?php echo $phoneNumber?>" style = "width:100%" ></th>
        </tr>
        
        <tr>
        <th>Bank Account: </th>
        <th><input type = "text" name="bankAccount" id="bankAccount" value="<?php echo $bankAccount?>" style = "width:100%" ></th>
        </tr>
        
        <tr>
        <th>Currency: </th>
        <th><input type = "text" name="currency" id="currency" value="<?php 
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

        ?>" style = "width:100%" readonly = "readonly" ></th>
        </tr>
        
        <tr>
        <th>Amount Paid: </th>
        <th><input type = "text" name="amountPaid" id="amountPaid" value="<?php echo $amountPaid?>" style = "width:100%" ></th>
        </tr>
        
        <tr>
        <th>Pending Amount: </th>
        <th><input type = "text" name="pendingAmount" id="pendingAmount" value="<?php echo $pendingAmount?>" style = "width:100%" ></th>
        </tr>
        
        <tr>
        <th>Total Amount: </th>
        <th><input type = "text" name="totalAmount" id="totalAmount" value="<?php echo $totalAmount?>" style = "width:100%" ></th>
        </tr>
        
        <tr>
        <td colspan = "2" style = "text-align:center;">
        <?php
        $check = mysql_num_rows($result);
        if ($check<1) {
            echo "There are no room to edit at the monent";
        }
        ?>
        </td>
        </tr>
        </table>
                </div>
                <div class="panel-footer">
                <button type="submit" name="submit" class="btn btn-outline btn-primary btn-lg btn-block">Update Room</button>
                </div>
            </div>
        </div>
</form>

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
