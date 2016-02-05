<?php
include("connect.php");
include("session.php");
$_SESSION["editR"]=$_GET["id"];
$id = $_SESSION["editR"];

$sql = "SELECT * FROM `tbl_reservation_request` WHERE id = '$id' AND roomStatus = 'active';";
$result = mysql_query($sql);
$rows = mysql_fetch_array($result);
$roomType       = $rows['roomType'];
$arrivalDate    = $rows['arrivalDate'];
$roomNumber     = $rows['roomNumber'];
$departureDate  = $rows['departureDate'];
$amount         = $rows['amount'];
$firstName      = $rows['firstName'];
$lastName       = $rows['lastName'];
$phoneNumber    = $rows['phoneNumber'];
$idNumber       = $rows['idNumber'];
$recieptCode    = $rows['recieptCode'];
$reservationDate= $rows['reservationDate'];

if (isset($_POST['submit'])) {
    $roomType       = $_POST['roomType'];
    $arrivalDate    = $_POST['arrivalDate'];
    $roomNumber     = $_POST['roomNumber'];
    $departureDate  = $_POST['departureDate'];
    $amount         = $_POST['amount'];
    $firstName      = $_POST['firstName'];
    $lastName       = $_POST['lastName'];
    $phoneNumber    = $_POST['phoneNumber'];
    $idNumber       = $_POST['idNumber'];
    $reservationDate= $_POST['reservationDate'];                                    

$sql2 = ("UPDATE `tbl_reservation_request` SET 
    `tbl_reservation_request`.roomType        = '$roomType',
    `tbl_reservation_request`.arrivalDate     = '$arrivalDate',
    `tbl_reservation_request`.roomNumber      = '$roomNumber',
    `tbl_reservation_request`.departureDate   = '$departureDate',
    `tbl_reservation_request`.amount          = '$amount',
    `tbl_reservation_request`.firstName       = '$firstName',
    `tbl_reservation_request`.lastName        = '$lastName',
    `tbl_reservation_request`.phoneNumber     = '$phoneNumber',
    `tbl_reservation_request`.idNumber        = '$idNumber',        
    `tbl_reservation_request`.reservationDate = '$reservationDate'

    WHERE id = $id");

$query2=mysql_query($sql2) or mysql_error();
if (!$query2) {
      echo "error" . mysql_error();
  }else{

    echo "<script> if(confirm('Room Successfully Updated')==true){window.location='booked.php';} </script>";  

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
        <th>Room Type: </th>
        <th><input type = "text" name="roomType" id="roomType" value="<?php echo $roomType?>" style = "width:100%" ></th>
        </tr>

        <tr>
        <th>Room Number: </th>
        <th><input type = "text" name="roomNumber" id="roomNumber" value="<?php echo $roomNumber?>" style = "width:100%" ></th>
        </tr>
        
        <tr>
        <th>Arrival Date: </th>
        <th><input type = "text" name="arrivalDate" id="arrivalDate" value="<?php echo $arrivalDate?>" style = "width:100%" ></th>
        </tr>
        
        <tr>
        <th>Departure Date: </th>
        <th><input type = "text" name="departureDate" id="departureDate" value="<?php echo $departureDate?>" style = "width:100%" ></th>
        </tr>
        
        <tr>
        <th>Amount: </th>
        <th><input type = "text" name="amount" id="amount" value="<?php echo $amount?>" readonly = "readonly" style = "width:100%" ></th>
        </tr>
        
        <tr>
        <th>First Name</th>
        <th><input type = "text" name="firstName" id="firstName" value="<?php echo $firstName?>" style = "width:100%" ></th>
        </tr>
        
        <tr>
        <th>Last Name</th>
        <th><input type = "text" name="lastName" id="lastName" value="<?php echo $lastName?>" style = "width:100%" ></th>
        </tr>
        
        <tr>
        <th>Phone Number</th>
        <th><input type = "text" name="phoneNumber" id="phoneNumber" value="<?php echo $phoneNumber?>" style = "width:100%" ></th>
        </tr>
        
        <tr>
        <th>ID Number</th>
        <th><input type = "text" name="idNumber" id="idNumber" value="<?php echo $idNumber?>" style = "width:100%" ></th>
        </tr>
        
        <tr>
        <th>Reservation Date</th>
        <th><input type = "text" name="reservationDate" id="reservationDate" value="<?php echo $reservationDate?>" readonly = "readonly" style = "width:100%" ></th>
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
