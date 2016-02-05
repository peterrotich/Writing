<?php
include("connect.php");
include("session.php");
$id = $_GET['id'];

$sql = "SELECT * FROM `tbl_reservation_request`  WHERE recieptCode = '$id' ";
$result = mysql_query($sql);
$row=mysql_fetch_assoc($result);

$recieptCode        = $row['recieptCode'];
$firstName          = $row['firstName'];
$lastName           = $row['lastName'];
$phoneNumber        = $row['phoneNumber'];
$idNumber           = $row['idNumber'];
$arrivalDate        = $row['arrivalDate'];
$departureDate      = $row['departureDate'];
$reservationDate    = $row['reservationDate'];
$today              = date('Y/m/d h:i:s');

if (isset($_POST['checkOut'])) {
    $sql = ("DELETE FROM tbl_reservation_request WHERE `tbl_reservation_request`.recieptCode = '$id'");
    $query=mysql_query($sql) or mysql_error();  

    $sql2 = ("DELETE FROM tbl_reserved WHERE `tbl_reserved`.recieptCode = '$id'");
    $query2=mysql_query($sql2) or mysql_error(); 

    $result = mysql_query("UPDATE rooms SET roomStatus = 'empty' WHERE recieptCode = '$id'"); 

    if (!$query) {
        echo "error" . mysql_error();
    }else
    if (!$query2) {
        echo "error" . mysql_error();
    } 

    else {
    header('location:taken.php');        
                }
}elseif (isset($_POST['refund'])) {
    header("location:refundrequest.php?id=$recieptCode");
}elseif (isset($_POST['additionalPayment'])) {
    echo "Additional Payment";
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
            <h1 class="page-header">Admin Panel - 
            <span class="label label-success">
            <small>Client Check Out</span></small></h1>
        </div>

         <div class="col-lg-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Reciept Code: <b><?php echo $recieptCode;?></b>
                </div>
                <div class="panel-body">
            <form id="newClient" name="newClient" method="POST" action="">    
            <table class = "table" align="center" style="width:100%;">
            <tr>
                <td>First Name: </td>
                <td><b><?php echo $firstName;?></b></td>
                <td>Last Name: </td>
                <td><b><?php echo $lastName;?></b></td>
            </tr>
            <tr>
                <td>Phone Number: </td>
                <td><b><?php echo $phoneNumber;?></b></td>
                <td>ID Number: </td>
                <td><b><?php echo $idNumber;?></b></td>
            </td>
            </tr>
            <tr>
                <td colspan="4"></td>
            </tr>
            <tr>
                <td>Arrival Date: </td>
                <td><b><?php echo $arrivalDate;?></b></td>
                <td>Departure Date: </td>
                <td><b><?php echo $departureDate;?></b></td>
            </tr>
            <tr>
                <td>Reservation Date: </td>
                <td><b><?php echo $reservationDate;?></b></td>
                <td>Today: </td>
                <td><b><?php echo $today;?></b></td>
            </tr>   
            <tr><input type="hidden" name="recieptCode" id="recieptCode">
                <td colspan="4" style="text-align:center">
                <button type="submit" name="checkOut" class="btn btn-success">Check Out</button>
                <button type="submit" name="refund" class="btn btn-danger">Refund Client</button>
                </td>
            </tr>
            </table>
                </div>
                <div class="panel-footer">
                Client Check Out
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
<script src="../js/jquery.datetimepicker.full.js"></script>
<script>
$('#datetimepicker_dark').datetimepicker({theme:'dark',"minDate": "currentDate",});
$('#datetimepicker9').datetimepicker({theme:'dark',"minDate": "currentDate",});
</script>
<script type="text/javascript">
    function randomString() {
    var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    //abcdefghiklmnopqrstuvwxyz
    //ABCDEFGHIJKLMNOPQRSTUVWXYZ
    var string_length = 5;
    var randomstring = '';
    for (var i=0; i<string_length; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        randomstring += chars.substring(rnum,rnum+1);
    }
    document.newClient.recieptCode.value = randomstring;
}

function calculator(idseli){

    var rmtyp="";    //roomType
    var crr ="";      //currency

if(idseli=="#currency"){
    crr  =$(idseli + " option:selected").val();
    rmtyp =$("#roomType").val();    

}if(idseli=="#roomType"){
    rmtyp  =$(idseli + " option:selected").val();
    crr =$("#currency").val();    

}
   result1=parseFloat(rmtyp)*parseFloat(crr);

    result = parseFloat(result1).toFixed(2);
    
    $("#amount").attr("value",result);

}
</script>
</body>
</html>
