<?php include "functions.php"; ?>
<?php $t=rand()*rand(); ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HospitalManagementSystem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css?t=<?php echo $t; ?>">
 </head>
 <body>
 	<div id="main">
 		<div class="container">
 			<div class="row">
 				<div class="navbar">
 					<div class="col-md-10">
 						<a href="#">
 							<img src="assets/img/logo.png" alt="">
 							<p>سیستم مدیریت بیمارستان</p>
 						</a>
 					</div>
 					<div class="col-md-2">
 						<a href="">
 							<button type="button" class="btn btn-light">تنظیمات</button>
 						</a>
 					</div>
 				</div>
 			</div>