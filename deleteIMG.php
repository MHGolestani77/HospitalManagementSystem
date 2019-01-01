<?php
	unlink("uploads/".$_GET['userId'].".jpg");
	echo "<script>window.location.href = 'http://localhost/HospitalManagementSystem/profile/';</script>";
?>