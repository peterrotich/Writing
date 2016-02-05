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
$cr = "SELECT * FROM `tbl_users` WHERE userType = 'user'";
$tl = mysql_query($cr);
$np = mysql_num_rows($tl);


if (isset($_POST['submit'])) {

$uniqueId    = $_POST['uniqueId'];
$email      = $_POST['email'];
$userType   = $_POST['userType'];
$pass       = $_POST['password'];
$password   = sha1($pass);

$sql2 = ("INSERT INTO `kmh`.`tbl_users` (`uniqueId`,`email`, `userType`, `password`) 
VALUES ('$uniqueId','$email', '$userType', '$password')");

$query2=mysql_query($sql2) or mysql_error();
if (!$query2) {
      echo "error" . mysql_error();
  }else{

    echo "<script> if(confirm('User Has Been Successfully Added')==true){window.location='users.php';} </script>";  

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
            <small>Users
            (<?php echo $np;?>)</span>    
            </small></h1>
        </div>
        <div id="posted_orders" style = "float:left;width:100%;">
        <form name="addUser" id="addUser" method="POST" action="">
        	<table class = "table" align="center" style="table-layout:fixed; width:100%;">
        <tr>
        <tr>
            <td colspan="4">
            <span class="label label-success">
            <small>Add New User</span>    
            </small>
            </td>
        </tr>
        <th >Email</th>
        <th >User Type</th>
        <th>Password</th>
        <th>Action</th>
        </tr>
        <tr>
        <input type="hidden" name="uniqueId" id="uniqueId">
        <td><input type = "email" name="email" id="email" placeholder = "user@gmail.com" style="width:100%;" onblur ="randomString();" required></td>
        <td><select name="userType" id="userType" style="width:100%;">
            <optgroup>Select User</optgroup>
            <option>User</option>
        </select></td>
        <td><input type = "password" name="password" id="password" placeholder = "Password" style="width:100%;" required></td>
        <td>
        <button type="submit" name="submit" class="btn btn-outline btn-success">Add User</button>
        </td>
        </tr>
        <tr>
            <td colspan="4">
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
<script type="text/javascript">
    function randomString() {
    var chars = "0123456789abcdefghiklmnopqrstuvwxyz";
    //abcdefghiklmnopqrstuvwxyz
    //ABCDEFGHIJKLMNOPQRSTUVWXYZ
    var string_length = 8;
    var randomstring = '';
    for (var i=0; i<string_length; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        randomstring += chars.substring(rnum,rnum+1);
    }
    document.addUser.uniqueId.value = randomstring;
}
</script>
</body>
</html>
