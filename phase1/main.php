<?php $t=rand()*rand(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HospitalManagementSystem</title>
	 <title>HospitalManagementSystem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css.css?t=<?php echo $t; ?>">
</head>
<body>
	<div class="main_page">
		<!-- <div class="row"> -->
			<div class="first_item">
				<nav class="navbar main_nav">
					<div class=" navbar container">
						<div class="navbar-header"><a href="#" class="navbar-header"><img src="../assets/img/logo.png" alt="hms"></a></div>
						<ul class="navbar">
							<li class="nav-item"><a href="#">توضیحات پروژه</a></li>
							<li class="nav-item"><a href="#">ویژگی های سامانه</a></li>
							<li class="nav-item"><a href="#">ارتباط با ما</a></li>
						</ul>
						<a href="#"><button>ورود</button></a>
					</div>
				</nav>
			</div>
			<div class="second_item">
				<div class="container">
					<h4>توضیحات پروژه</h4>
					<div class="row">
						<div class="col-lg-6 explain">توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.</div>
						<div class="col-lg-6 brand"><img src="" alt="hms"></div>
					</div>
				</div>
			</div>
			<div class="third_item">
				<div class="container">
					<h4>ویژگی های سامانه</h4>
					<div class="row">
						<div class="col-lg-3 item">
							<p>توضیحات ویژگی شماره یک به این شرح است.</p>
						</div>
						<div class="col-lg-3 item">
							<p>توضیحات ویژگی شماره دو به این شرح است.</p>
						</div>
						<div class="col-lg-3 item">
							<p>توضیحات ویژگی شماره دو به این شرح است.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="forth_item">
				<div class="container">
					<h4>ارتباط با ما</h4>
					<p>شما میتوانید از طریق فرم زیر با ما در ارتباط باشید.</p>
					<form action="">
						<input type="text" placeholder="نام و نام خانوادگی">
						<input type="email" placeholder="آدرس ایمیل">
						<input type="text" class="massage" placeholder="متن پیام">
						<input type="submit" value="ارسال">
					</form>
				</div>
			</div>
		<!-- </div> -->
	</div>
</body>
</html>