<?php 
include "../header.php";

if(!(checkURL($_SESSION['userId'], 2, "=") || checkURL($_SESSION['userId'], 4, "=")))
	echo "<script>window.location.href = 'http://localhost/HospitalManagementSystem/index/?error=access&id=sdtu';</script>";

$error = isset($_GET['result']) ? "display: block;" : "display: none;";
$step = isset($_POST['step'])? $_POST['step']: "ST";
$step = isset($_GET['step'])? $_GET['step']: $step;
$url = $step == "CF" ? "../uploadTest.php": "";

$title = array("ST" => "ثبت آزمایش",
			   "CF" => "انتخاب فایل",
			   "FI" => "اتمام",);
?>



<div class="insert-user col-md-11">
	<nav aria-label="breadcrumb">
	  	<ol class="breadcrumb col-10">
	    	<li id="itemST" class="breadcrumb-item">ثبت آزمایش</li>
	    	<li id="itemCF" class="breadcrumb-item">انتخاب فایل</li>
	    	<li id="itemFI"  class="breadcrumb-item">اتمام</li>
	  	</ol>
	</nav>
	<h4 class="col-10">#<?php echo $title[$step]; ?></h4>
	<form action="<?php echo $url; ?>" method="post" enctype="multipart/form-data">
		<?php 
			if($step == "ST") include "getNationalCode.php"; 
			else if($step == "CF") include "chooseFile.php"; 
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