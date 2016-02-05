<?php
include("connect.php");
include("session.php");
$id = $_GET['id'];
if (isset($_POST['refund'])) {

$names          = $_POST['names'];
$idNumber       = $_POST['idNumber'];
$phoneNumber    = $_POST['phoneNumber'];
$recieptCode    = $_POST['recieptCode'];
$amount         = $_POST['amount'];
$accountNumber  = $_POST['accountNumber'];
$securityCode    = $_POST['securityCode'];


$sql2 = ("INSERT INTO `kmh`.`tbl_refund` (`id`, `refundType`, `names`, `IdNumber`, `phoneNumber`, `recieptCode`, `amount`, `accountNumber`, `securityCode`, `mpesaNumber`, `transactionCode`) 
        VALUES (NULL, 'Account Refund', '$names', '$idNumber', '$phoneNumber', '$recieptCode', '$amount', '$accountNumber','$securityCode', 'Null','Null')");

$query2=mysql_query($sql2) or mysql_error();
if (!$query2) {
      echo "error" . mysql_error();
  }else{

header("location:checkOut.php?id=$id");
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
<link rel="stylesheet" type="text/css" href="../styles/jquery.datetimepicker.css"/>
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
            <small>Refund To Account</span></small></h1>
        </div>

         <div class="col-lg-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Refund to Account
                </div>
                <div class="panel-body">
            <form method="POST" action="">    
            <table class = "table" align="center" style="width:100%;">
            <tr>
                <td>Names:</td>
                <td><input type = "text" name="names" id="names" placehoder="Kibar Moses" pattern = "[A-Z a-z]*" required></td>
                <td>ID Number:</td>
                <td><input type = "text" name="idNumber" id="idNumber" placehoder="27336582" maxlength="8" pattern = "[0-9]*" required></td>                
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type = "text" name="phoneNumber" id="phoneNumber" placehoder="+254713564852" maxlength="13" pattern = "[+0-9]*" required></td>
                <td>Reciept Code:</td>
                <td><input type = "text" name="recieptCode" id="recieptCode" value="<?php echo $id ?>" readonly = "readonly" maxlength="5" pattern = "[A-Z0-9]*" required></td>                
            </tr>
            <tr>
                <td>Amount:</td>
                <td><input type = "text" name="amount" id="amount" placehoder="5000" maxlength="6" pattern = "[0-9]*" required></td>
                <td>Today:</td>
                <td><?php echo date('Y/M/d');?></td>                
            </tr>
            <tr>
                <td>Card Number:</td>
                <td><input type = "text" name="accountNumber" id="accountNumber" maxlength="19" pattern = "[0-9]*" required></td>
                <td>Security Code:</td>
                <td><input type = "text" name="securityCode" id="securityCode" maxlength="3" pattern = "[0-9]*" required></td>
            </tr>                                      
            <tr>
                <td colspan="4" style="text-align:center">
                <button type="submit" name="refund" class="btn btn-danger">Account Refund</button>
                </td>
            </tr>
            </table>
                </div>
                <div class="panel-footer">
                Account Refund
                </div>
            </form>    
            </div>
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
<script src="../js/jquery.js" type="text/javascript"></script>
</body>
</html>
