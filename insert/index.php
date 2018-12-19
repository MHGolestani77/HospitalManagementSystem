<?php 
include "../header.php";

$step = isset($_POST['step'])? $_POST['step']: "GNC";
$url = $step == "GNC" ? "http://localhost/sabtahval/api/": "";
?>

<div class="insert-user col-md-11">
	<nav aria-label="breadcrumb">
	  	<ol class="breadcrumb col-10">
	    	<li id="itemGNC" class="breadcrumb-item">افزودن کاربر</li>
	    	<li id="itemGPD" class="breadcrumb-item">اطلاعات شناسایی</li>
	    	<li id="itemSUT" class="breadcrumb-item">تعیین نوع کاربر</li>
	    	<li id="itemFI"  class="breadcrumb-item">اتمام</li>
	  	</ol>
	</nav>
	<h4 class="col-10">#اطلاعات شناسایی</h4>
	<form action="<?php echo $url; ?>" method="post">
		<?php 
			if($step == "GNC") include "getNationalCode.php"; 
			else if($step == "GPD") include "personalDataForm.php"; 
			else if($step == "SUT") include "setUserType.php"; 
			else if($step == "FI") include "finish.php"; 
		?>
	</form>
</div>


<script>
    document.getElementById("item<?php echo $step; ?>").classList.add("active");
</script>

<?php include "../footer.php"; ?>