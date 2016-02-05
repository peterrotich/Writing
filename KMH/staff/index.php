<?php
session_start();
include("pages/connect.php");
if(isset($_POST["submit"]))
{
$email      =$_POST["email"];
$pass       = $_POST["password"];
$password   = sha1($pass);
    
$exe=mysql_query("select  * from tbl_users where password='$password' and email='$email'");
$row= mysql_fetch_array($exe);
if(mysql_num_rows(mysql_query("select  * from tbl_users where password='$password' and email='$email'" ))>0)
{
$_SESSION['id']=$row["uniqueId"];

if ($row["userType"] == 'User') {
  header("location:pages/home.php");
}else
if ($row["userType"] == 'Admin') {
  header("location:../admin/pages/home.php");
}else
{
echo "<center>login failled, username or password is incorrect</center>";
}
}
else
{
echo "<center>login failled, username or password is incorrect</center>";
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

    <title>kibarmos</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="">
                            <fieldset>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="E-mail" name="email" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" value="" required>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" id="submit" name="submit" class="btn btn-lg btn-success btn-block">Log In</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
