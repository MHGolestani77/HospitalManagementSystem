<?php
   include('../functions.php');

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
   
   if(isset($_SESSION) && !isset($_SESSION['login_user'])) {
		echo "<script> window.location.href = 'http://localhost/HospitalManagementSystem/login/'; </script>";
   } else {
	   $user_check = $_SESSION['login_user'];
	   $ses_sql = mysqli_query(connection(), "select nationalCode from ".UserTable." where nationalCode = '$user_check' ");
	   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	   $login_session = $row['nationalCode'];
	}
?>