<?php include "../../functions.php"; ?>

<?php $ref = rand()*rand(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HospitalManagementSystem</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="http://hms.com/assets/css/styles.css?<?php echo $ref; ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
	<div id="header">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  	<a class="navbar-brand" href="#">
				    <img src="assets/img/logo.png" width="40" height="40" class="" alt="">
		  		بسیج دانشجویی</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>

		  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    	<ul class="navbar-nav ml-auto rtl">
		      		<li class="nav-item text-right active">
		        		<a class="nav-link" href="#">صفحه نخست<span class="sr-only">(current)</span></a>
		      		</li>

		      		<!-- <li class="nav-item text-right">
		        		<a class="nav-link" href="#"></a>
		      		</li> -->

		      		<li class="nav-item dropdown">
		        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		        			مدیریت پزشک
		        		</a>
		        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          				<a class="dropdown-item" href="#">افزودن پزشک</a>
		          				<a class="dropdown-item" href="#">لیست پزشک</a>
		        			</div>
		      		</li>
		      	
		      		<li class="nav-item dropdown">
		        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		        			مدیریت پذیرش
		        		</a>
		        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          				<a class="dropdown-item" href="#">افزودن پذیرش</a>
		          				<a class="dropdown-item" href="#">لیست پذیرش</a>
		        			</div>
		      		</li>
		      	
		      		<li class="nav-item dropdown">
		        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		        			مدیریت بیمار
		        		</a>
		        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          				<a class="dropdown-item" href="#">افزودن بیمار</a>
		          				<a class="dropdown-item" href="#">لیست بیمار</a>
		        			</div>
		      		</li>
		    	</ul>
		    	<form class="form-inline my-2 my-lg-0">
		    		<div class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			        		مدیر بیمارستان
			        	</a>
			        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          		<a class="dropdown-item" href="account.php">اطلاعات کاربری</a>
			          		<a class="dropdown-item" href="#">تنظیمات</a>
			          		<div class="dropdown-divider"></div>
			          		<a class="dropdown-item" href="#">خروج</a>
			        	</div>
		    		</div>
		      		<img src="assets/img/memberId.jpg" alt="" class="my-2 my-sm-0">
		    	</form>
		  	</div>
		</nav>
	</div>