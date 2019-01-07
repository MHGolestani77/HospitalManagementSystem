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
							<li class="nav-item"><a href="#explain-project">توضیحات پروژه</a></li>
							<li class="nav-item"><a href="#features">ویژگی های سامانه</a></li>
							<li class="nav-item"><a href="#comunicate">ارتباط با ما</a></li>
						</ul>
						<a href="#"><button>ورود</button></a>
					</div>
				</nav>
			</div>
			<div class="second_item">
				<div class="container">
					<a name="explain-project"></a>
					<h4>توضیحات پروژه</h4>
					<div class="row">
						<div class="col-lg-6 explain">توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.توضیحات پروژه به شرح زیر می باشد.</div>
						<div class="col-lg-6 brand"><img src="../assets/img/logo.jpg" alt="hms" class="col"></div>
					</div>
				</div>
			</div>
			<div class="third_item">
				<div class="container">
					<a name="features"></a>
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
					<a name="comunicate"></a>
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
	<footer>
		<div class="container">
			<div class="row items">
				<div class="col-lg-4">
					<h6>درباره ما</h6>
					<p>شرکت دانش بنیان ............در سال 1397 آغاز به کار کرد و فعالیت هایی در زمینه توسعه فعالیت های دیجیتال فعالیت می کند.</p>
				</div>
				<div class="col-lg-4">
					<h6>راه های ارتباطی</h6>
					<ol class="comunication">
						<li>
							<div class="row">
								<div class="label col-lg-5">شماره تماس:</div>
								<div class="item col-lg-7">+989300000000</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="label col-lg-5">ایمیل:</div>
								<div class="item col-lg-7">info@hms.com</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="label col-lg-5">آدرس:</div>
								<div class="item col-lg-7">شاهرود - دانشگاه صنعتی شاهرود</div>
							</div>
						</li>
					</ol>
				</div>
				<div class="col-lg-4">
					<h6>مشتریان</h6>
					<ol class="customers">
						<li><span>بیمارستان رضوی - مشهد</span></li>
						<li><span>بیمارستان قائم - مشهد</span></li>
						<li><span>بیمارستان امام حسین - مشهد</span></li>
						<li><span>بیمارستان اقبال - تهران</span></li>
						<li><span>بیمارستان بیمارستان بقیة الله - تهران</span></li>
					</ol>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-lg-10"><p>کلیه حقوق این سایت برای HMS محفوظ است.</p></div>
				<div class="row col-lg-2 tells">
					<a class="col" style="padding: 0;" href="#"><img class="col" src="../assets/img/instagram.png" alt="instagram"></a>
					<a class="col" style="padding: 0;" href="#"><img class="col" src="../assets/img/telegram.png" alt="telegram"></a>
					<a class="col" style="padding: 0;" href="#"><img class="col" src="../assets/img/soroush.png" alt="soroush"></a>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>