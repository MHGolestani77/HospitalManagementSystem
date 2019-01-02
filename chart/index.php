<?php include '../header.php'; ?>
<?php 
if(!checkURL($_SESSION['userId'], 1, "<="))
	echo "<script>window.location.href = 'http://localhost/HospitalManagementSystem/index/?error=access&id=ch';</script>";
?>

<div class="insert-user col-md-11">
	<div class="row col-md-11" style="margin: 0 auto;padding: 20px;">
		<ul class="nav nav-pills col-md-10 p-2 rounded">
		  	<li class="nav-item">
		    	<a class="nav-link active" data-toggle="pill" href="#section1">فعالیت کاربران</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" data-toggle="pill" href="#section2">پذیرش بیمار</a>
		  	</li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content col-md-10">
		  	<div class="tab-pane container active" id="section1" style="background: none; box-shadow: none;">
		    	<h4>#فعالیت کاربران</h4>
		    	<div class="row">
		    		<iframe src="actions.php" frameborder="0" style="height: 540px;margin: 0 auto;border: none;"></iframe>
		    	</div>
		  	</div>
		  	<div class="tab-pane container fade" id="section2" style="background: none; box-shadow: none;">
		    	<h4>#پذیرش بیمار</h4>
		    	<div class="row">
		    		<iframe src="ills.php" frameborder="0" style="height: 540px;margin: 0 auto;border: none;"></iframe>
		    	</div>
		  	</div>
		</div>
	</div>
</div>
<?php include '../footer.php'; ?>