<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_confail = "localhost";
$database_confail = "kibar";
$username_confail = "root";
$password_confail = "";
$confail = mysql_pconnect($hostname_confail, $username_confail, $password_confail) or trigger_error(mysql_error(),E_USER_ERROR); 
?>