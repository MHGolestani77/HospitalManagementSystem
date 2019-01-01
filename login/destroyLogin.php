<?php
   include '../header.php';
   setAction("exu", $_SESSION['userId']);
   session_start();
   
   if(session_destroy()) {
      header("Location: http://localhost/HospitalManagementSystem/login");
   }
   include '../footer.php';
?>