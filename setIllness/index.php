<?php 
include "../header.php";

$error = isset($_GET['result']) ? "display: block;" : "display: none;";
$step = isset($_POST['step'])? $_POST['step']: "SSI";
$url = $step == "SI" ? "http://localhost/insurance/api/": "";

$title = array("SSI" => "تعیین وضعیت بیمار",
			   "SIN" => "تعیین بیماری",
			   "DP" => "تعریف فرآیند",
			   "SM" => "تجویز دارو",
			   "CO" => "تائید اطلاعات",
			   "FI" => "اتمام");
?>

<div class="insert-user col-md-11">
	<nav aria-label="breadcrumb">
	  	<ol class="breadcrumb col-10">
	    	<li id="itemSSI" class="breadcrumb-item">تعیین وضعیت بیمار</li>
	    	<li id="itemSIN" class="breadcrumb-item">تعیین بیماری</li>
	    	<li id="itemDP" class="breadcrumb-item">تعریف فرآیند</li>
	    	<li id="itemSM" class="breadcrumb-item">تجویز دارو</li>
	    	<li id="itemCO"  class="breadcrumb-item">تائید اطلاعات</li>
	    	<li id="itemFI"  class="breadcrumb-item">اتمام</li>
	  	</ol>
	</nav>
	<h4 class="col-10">#<?php echo $title[$step]; ?></h4>
	<form action="<?php echo $url; ?>" method="post">
		<?php 
			if($step == "SSI") include "getNationalCode.php"; 
			else if($step == "SIN") include "setIllness.php"; 
			else if($step == "DP") include "defineProcess.php"; 
			else if($step == "SM") include "setMedisine.php"; 
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