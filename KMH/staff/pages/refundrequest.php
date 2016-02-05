<?php
include("connect.php");
include("session.php");
$id = $_GET['id'];
if (isset($_POST['cash'])) {
    header("location:cash.php?id=$id");
}elseif (isset($_POST['bankAccount'])) {
    header("location:bank.php?id=$id");    
}elseif (isset($_POST['MPesa'])) {
    header("location:MPesa.php?id=$id");     
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
            <small>Client Refund</span></small></h1>
        </div>

         <div class="col-lg-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Select Refund Type
                </div>
                <div class="panel-body">
            <form id="newClient" name="newClient" method="POST" action="">    
            <table class = "table" align="center" style="width:100%;">
            <tr><input type="hidden" name="recieptCode" id="recieptCode">
                <td colspan="4" style="text-align:center">
                <button type="submit" name="cash" class="btn btn-success">Cash</button>
                <button type="submit" name="bankAccount" class="btn btn-danger">Bank Account</button>
                <button type="submit" name="MPesa" class="btn btn-primary">M-Pesa</button>

                </td>
            </tr>
            </table>
                </div>
                <div class="panel-footer">
                Client Refund
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
