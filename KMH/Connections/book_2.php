<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_book = "localhost";
$database_book = "kibar";
$username_book = "root";
$password_book = "";
$book = mysql_pconnect($hostname_book, $username_book, $password_book) or trigger_error(mysql_error(),E_USER_ERROR); 
?>