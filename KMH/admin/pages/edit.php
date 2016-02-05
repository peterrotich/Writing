<?php
include("connect.php");
include("session.php");
$id = $_GET['id'];

$sql = "SELECT * FROM `tbl_users` WHERE uniqueId = '$id';";
$result = mysql_query($sql);
$rows = mysql_fetch_array($result);
$email      = $rows['email'];
$userType   = $rows['userType'];

if (isset($_POST['submit'])) {

$email          = $_POST['email'];
$userType       = $_POST['userType'];

$sql2 = ("UPDATE `tbl_users` SET `tbl_users`.email = '$email',`tbl_users`.userType = '$userType' WHERE `tbl_users`.uniqueId = '$id'");
$query2=mysql_query($sql2) or mysql_error();
if (!$query2) {
      echo "error" . mysql_error();
  }else{

    echo "<script> if(confirm('User Successfully Updated')==true){window.location='users.php';} </script>";  

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
            <h1 class="page-header">Admin Panel </h1>
        </div>
        <div id="posted_orders" style = "float:left;width:100%;">
        <form name="addUser" id="addUser" method="POST" action="">
        	<table class = "table" align="center" style="table-layout:fixed; width:100%;">
        <tr>
        <tr>
            <td colspan="3">
            <span class="label label-success">
            <small>Edit User</span>    
            </small>
            </td>
        </tr>
        <th >Email</th>
        <th>User Type</th>
        <th>Action</th>
        </tr>
        <tr>
        <td><input type = "email" name="email" id="email" style="width:100%;" value="<?php echo $email;?>" required></td>
        <td><input type = "userType" name="userType" id="userType" style="width:100%;" maxlength="5" pattern = "[UserAdmin]*" value="<?php echo $userType;?>" required ></td>
        <td>
        <button type="submit" name="submit" class="btn btn-outline btn-success">Update User</button>
        </td>
        </tr>
        <tr>
            <td colspan="3">
                &nbsp;
            </td>
        </tr>
        </table>
        </form>
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
