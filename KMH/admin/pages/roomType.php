<?php
include("connect.php");
include("session.php");
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
            <small>Manage Rooms</span></small></h1>
        </div>

         <div class="col-lg-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Room Type
                </div>
                <div class="panel-body">
<table class = "table" align="center" style="table-layout:fixed; width:100%;">
        <tr>
        <th>Id</th>
        <th>Room Type</th>
        <th>Price per day</th>
        <th>Action</th>
        </tr>
        <?php
        $sql = "SELECT * FROM roomtype";
        $result = mysql_query($sql);
        while($row=mysql_fetch_assoc($result)){
        ?>
        <tr>
        <td><?php echo $row['uniqueId'];?></td>
        <td><?php echo $row['roomType'];?></td>
        <td><?php echo $row['pricePerday'];?></td>
        <td>

        <a href="editRoomType.php?id=<?=$row["uniqueId"];?>">
        <i class="fa fa-edit fa-fw" style="font-size:20px;" data-toggle="tooltip" data-placement="left" title="Edit Room"></i></a>

        <a href="deleteRoomType.php?id=<?=$row["uniqueId"];?>">
        <i class="fa fa-trash-o fa-fw" style="font-size:20px;" data-toggle="tooltip" data-placement="left" title="Delete Room"></i></a>
        
        </td>
        </tr>
        <?php
        }
        ?>
        <tr>
        <td colspan = "4" style = "text-align:center;">
        <?php
        $check = mysql_num_rows($result);
        if ($check<1) {
            echo "There are no room types at the monent";
        }
        ?>
        </td>
        </tr>
        </table>
                </div>
                <div class="panel-footer">
                <a href="addRoomType.php">
                <button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Add Room Type</button>
                </a>
                </div>
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
