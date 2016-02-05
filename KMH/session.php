<?php
	//Start session
	session_start();
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {

    echo "<script> if(confirm('an unexpected error occured')==true){window.location='book.php';} </script>";       
		exit();
	}
        $session_id=$_SESSION['id'];
?>