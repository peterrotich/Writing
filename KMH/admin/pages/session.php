<?php
	//Start session
	session_start();
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {

    echo "<script> if(confirm('Log In Please To Access This Page')==true){window.location='../index.php';} </script>";       
		exit();
	}
        $session_id=$_SESSION['id'];
?>