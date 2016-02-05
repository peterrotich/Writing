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
            <small>New Client</span></small></h1>
        </div>

         <div class="col-lg-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Add Client
                </div>
                <div class="panel-body">
            <form id="newClient" name="newClient" method="POST" action="processNewClient.php">    
            <table class = "table" align="center" style="width:100%;">
            <tr>
                <td>Room Type: </td>
                <td>
                <select name="roomType" id="roomType" style="width:100%" onchange="calculator('#roomType')">
                <option value="2000">Single</option>
                <option value="4000">Double</option>
                <option value="6000">Superior</option>
                <option value="8000">Luxury</option>
                </select>
                </td>
                <td>Arrival Date: </td>
                <td><input type="text" id="datetimepicker_dark" class = "txtBox" name="arrivalDate" value="<?php $date = new DateTime(); $date->modify('+1 hour'); print $date->format('Y/m/d H:i:s'); ?> " onchange="calculator('#datetimepicker_dark')" /></td>
            </tr>
            <tr>
                <td>Room Number: </td>
                <td>
                <select name="roomNumber" id="roomNumber" style="width:100%">
                <?php
                $sql = "SELECT * FROM rooms WHERE roomStatus != 'booked'";
                $result = mysql_query($sql);
                while ($row = mysql_fetch_array($result)) {
                echo "<option value=\"" . $row['roomNumber'] ."\">" . $row['roomNumber'];"</option>";
                }
                echo "</select>";
                ?></td>
                <td>Departure Date: </td>
                <td><input type="text" id="datetimepicker9" class = "txtBox" name="departureDate" value="<?php $date = new DateTime(); $date->modify('+1 day'); print $date->format('Y/m/d H:i:s'); ?> " onchange="calculator('#datetimepicker9')" />
                </td>
            </tr>
            <tr>
                <td colspan="4"></td>
            </tr>
            <tr>
                <td>First Name: </td>
                <td>
                <input type="text" name="firstName" id="firstName" placeholder = "First Name" required pattern = "[A-Za-z]*" onblur ="randomString();">
                </td>
                <td>Last Name: </td>
                <td>
                <input type="text" name="lastName" id="lastName" placeholder = "Last Name" required pattern = "[A-Za-z]*">
                </td>
            </tr>
            <tr>
                <td>Phone Number: </td>
                <td>
                <input type="text" name="phoneNumber" id="phoneNumber" placeholder = "Phone Number" required pattern = "[+ 0-9]*">
                </td>
                <td>ID Number: </td>
                <td>
                <input type="text" name="idNumber" id="idNumber" placeholder = "Id Number/Passport" required pattern = "[0-9]*">
                </td>
            </tr>   
            <tr><input type="hidden" name="recieptCode" id="recieptCode">
                <td>Card Number: </td>
                <td>
                <input type="text" name="bankAccount" value="" placeholder = "5854 4414 6965 1121" style = "width:100%;"   required pattern = "[ 0-9]*" maxlength="19" >    
                </td>
                <td>Secret Code: </td>
                <td>
                <input type="text" name="secretCode" value=""  placeholder = "421" required pattern = "[ 0-9]*" maxlength="3">    
                </td>
            </tr>
            <tr>
                <td>Currency: </td>
                <td>
                <select name="currency" id="currency" style = "width:100%;" onchange="calculator('#currency')">
                  <option value="1">KES</option>
                  <option value="0.0090">EUR</option>
                  <option value="0.0098">USD</option>
                  <option value="0.013">CAD</option>
                  <option value="32.41">UGS</option>      
                  <option value="0.5">GBP</option>
                  <option value="1.20">JPY</option>
                  <option value="21.15">TSH</option>
                  <option value="0.0135">AUD</option>
                  <option value="0.0065">BRP</option>                  
                </select>
                </td>
                <td>Amount:</td>
                <td><input type="text" name="amount" id="amount" value="2000" readonly="readonly" style="border:none; font-size:18px; font-weight:bold; color:red;"></td>
            </tr>                                    

            </table>
                </div>
                <div class="panel-footer">
                <button type="submit" name="submit" id="submit" class="btn btn-outline btn-primary btn-lg btn-block">Add Client</button>
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

function dateCal(id){

var arr="";
var dep="";

arr=$("#datetimepicker_dark").val();
dep=$("#datetimepicker9").val();


var d = Date.parse(arr);
var y = Date.parse(dep);


var m = (parseInt(y) - parseInt(d))/(1000*60*60*24);
// var n = (6);
// var p = n/m;
return m;

}


function calculator(idseli){

    var rmtyp="";    //roomType
    var crr ="";      //currency
    var dec = "";  

if(idseli=="#currency"){
    crr  =$(idseli + " option:selected").val();
    rmtyp =$("#roomType").val();  
    dec = dateCal(idseli);    

}if(idseli=="#roomType"){
    rmtyp  =$(idseli + " option:selected").val();
    crr =$("#currency").val(); 
    dec = dateCal(idseli);

}if(idseli=="#datetimepicker_dark"){
    dec = dateCal(idseli);
    rmtyp  =$("#roomType").val();
    crr =$("#currency").val();

}if(idseli=="#datetimepicker9"){
    dec = dateCal(idseli);
    rmtyp  =$("#roomType").val();
    crr =$("#currency").val();
   
}
   result1=parseFloat(rmtyp)*parseFloat(crr)*parseFloat(dec);

    result = parseFloat(result1).toFixed(0);
    
    $("#amount").attr("value",result);

}
</script>
</body>
</html>
