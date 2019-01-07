<?php 
include "../header.php";

if(!(checkURL($_SESSION['userId'], 2, "=") || checkURL($_SESSION['userId'], 1, "=")))
	echo "<script>window.location.href = 'http://localhost/HospitalManagementSystem/index/?error=access&id=sdtu';</script>";


$error = isset($_GET['result']) ? "display: block;" : "display: none;";
$step = isset($_POST['step'])? $_POST['step']: "SI";
$url = $step == "SI" ? "http://localhost/insurance/api/": "";

$title = array("SI" => "ثبت بیمار",
			   "CI" => "بررسی بیمه",
			   "SD" => "تعیین پزشک",
			   "CO" => "تائید اطلاعات",
			   "FI" => "اتمام");
?>

<div class="insert-user col-md-11">
	<nav aria-label="breadcrumb">
	  	<ol class="breadcrumb col-10">
	    	<li id="itemSI" class="breadcrumb-item">ثبت بیمار</li>
	    	<li id="itemCI" class="breadcrumb-item">بررسی بیمه</li>
	    	<li id="itemSD" class="breadcrumb-item">تعیین پزشک</li>
	    	<li id="itemCO" class="breadcrumb-item">تائید اطلاعات</li>
	    	<li id="itemFI"  class="breadcrumb-item">اتمام</li>
	  	</ol>
	</nav>
	<h4 class="col-10">#<?php echo $title[$step]; ?></h4>
	<form action="<?php echo $url; ?>" method="post">
		<?php 
			if($step == "SI") include "getNationalCode.php"; 
			else if($step == "CI") include "checkInsurance.php"; 
			else if($step == "SD") include "setDoctor.php"; 
			else if($step == "CO") include "confirm.php"; 
			else if($step == "FI") include "finish.php"; 
		?>
		<div class="row" style="<?php echo $error; ?>">
			<div class="alert alert-danger col-md-5" style="margin: 10px auto; text-align: center;">این بیمار قبلا به سیستم افزوده شده است</div>
		</div>
	</form>
</div>


<script>
    document.getElementById("item<?php echo $step; ?>").classList.add("active");
</script>

<?php include "../footer.php"; ?>