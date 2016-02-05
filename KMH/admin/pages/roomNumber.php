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
$cr = "SELECT * FROM `rooms`";
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
            <h1 class="page-header">Admin Panel - 
            <span class="label label-success">
            <small>Manage Rooms (<?php echo $np;?>)</span></small></h1>
        </div>

        
       <!-- /.col-lg-4 -->
        <div class="col-lg-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Room Number
                </div>
                <div class="panel-body">
        <table class = "table" align="center" style="table-layout:fixed; width:100%;">
            <tr>
                <th>Id</th>
                <th>Room Number</th>
                <th>Room Status</th>
                <th>Action</th>
            </tr>
        <?php
        $sql1 = "SELECT * FROM rooms LIMIT $page,7;";
        $result1 = mysql_query($sql1);
        while($row1=mysql_fetch_assoc($result1)){
        ?>
            <tr>
                <td><?php echo $row1['uniqueId'];?></td>
                <td><?php echo $row1['roomNumber'];?></td>
                <td><?php echo $row1['roomStatus'];?></td>
                <td>

                <a href="editRoomNumber.php?id=<?=$row1["uniqueId"];?>">
                <i class="fa fa-edit fa-fw" style="font-size:20px;" data-toggle="tooltip" data-placement="left" title="Edit Room"></i></a>

                <a href="deleteRoomNumber.php?id=<?=$row1["uniqueId"];?>">
                <i class="fa fa-trash-o fa-fw" style="font-size:20px;" data-toggle="tooltip" data-placement="left" title="Delete Room"></i></a>
                
                </td>
            </tr>
        <?php
        }
        ?>
        <tr>
        <td colspan = "4" style = "text-align:center;">
        <?php
        $check1 = mysql_num_rows($result1);
        if ($check1<1) {
            echo "There are no room numbers at the monent";
        }
        ?>
        </td>
        </tr>
         <tr>
        <td colspan = "4" style = "text-align:left; font-size:20px">
        <?php
        $cou = "SELECT * FROM `rooms`";
        $resu = mysql_query($cou);
        $chec = mysql_num_rows($resu);
        $a = $chec/7;
        $a = ceil($a);
        echo "<span class='label label-success'>Total Records:".$chec." "."Page</span>";                 
        for ($b=1; $b <=$a ; $b++) { 
            ?>    
         <span class='label label-info'><a href = "roomNumber.php?page=<?php echo $b;?>"style = "text-decoration:none;"><?php echo $b," "; ?></a></span>
        <?php
        }
        ?>        
        </td>
        </tr>        
        </table>
                </div>
                <div class="panel-footer">
                <a href="addRoomNumber.php">
                <button type="button" class="btn btn-outline btn-success btn-lg btn-block">Add Room Number</button>
                </a>
                </div>
            </div>
        </div>
        <!-- /.col-lg-4 -->   


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
