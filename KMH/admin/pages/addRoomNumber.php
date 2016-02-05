<?php
include("connect.php");
include("session.php");

if (isset($_POST['submit'])) {
    $roomNumber       = $_POST['roomNumber'];                                    

$sql2 = ("INSERT INTO `kmh`.`rooms` (`roomNumber`) VALUES ('$roomNumber');");

$query2=mysql_query($sql2) or mysql_error();
if (!$query2) {
      echo "error" . mysql_error();
  }else{

    echo "<script> if(confirm('Room Successfully Updated')==true){window.location='roomNumber.php';} </script>";  

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
            <small>Add Room</span></small></h1>
        </div>

         <div class="col-lg-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Add Room
                </div>
                <div class="panel-body">
        <form id="editRoom" name="editRoom" method="POST" action="">
        <table class = "table" align="center" style="table-layout:fixed; width:100%;">
        <tr>
        <th>Room Number: </th>
        <th><input type = "text" name="roomNumber" id="roomNumber" maxlength="3" value="" placeholder = "3F" style = "width:100%" pattern = "[A-Z0-9]*"></th>
        </tr>

        <tr>
        <td colspan = "2" style = "text-align:center;">
        </td>
        </tr>
        </table>
                </div>
                <div class="panel-footer">
                <button type="submit" name="submit" class="btn btn-outline btn-primary btn-lg btn-block">Add Room Number</button>
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
