<?php 
	include "../header.php";
	$userType = getUserData($_SESSION['login_user'], "userLevelId");
	if($userType == 1){
		$userType = "manager";
	}elseif ($userType == 2) {
		$userType = "clerk";
	}elseif ($userType == 3) {
		$userType = "doctor";
	}elseif ($userType == 4) {
		$userType = "ill";
	}

	if(isset($_GET['error']))
		include "error.php";
?>	

 				<div class="main w-100">
 					<?php include $userType.".php"; ?>
 				</div>
<?php include "../footer.php"; ?>