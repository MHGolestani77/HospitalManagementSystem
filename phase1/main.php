<?php $t=rand()*rand(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
							<i class="col-md-6">
								<svg aria-hidden="true" data-prefix="far" data-icon="desktop" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-desktop fa-w-18 fa-5x"><path fill="currentColor" d="M528 0H48C21.5 0 0 21.5 0 48v288c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-6 336H54c-3.3 0-6-2.7-6-6V54c0-3.3 2.7-6 6-6h468c3.3 0 6 2.7 6 6v276c0 3.3-2.7 6-6 6zm-42 152c0 13.3-10.7 24-24 24H120c-13.3 0-24-10.7-24-24s10.7-24 24-24h98.7l18.6-55.8c1.6-4.9 6.2-8.2 11.4-8.2h78.7c5.2 0 9.8 3.3 11.4 8.2l18.6 55.8H456c13.3 0 24 10.7 24 24z" class=""></path></svg>
							</i>
							<p>رابط کاربری آسان</p>
							<p>کاربر می تواند به راحتی عملیات مورد نظر خود را انجام دهد.</p>
						</div>
						<div class="col-lg-3 item">
							<i class="col-md-6">
								<svg aria-hidden="true" data-prefix="fal" data-icon="bezier-curve" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-bezier-curve fa-w-20 fa-7x"><path fill="currentColor" d="M576 176c35.35 0 64-28.65 64-64s-28.65-64-64-64c-29.79 0-54.6 20.44-61.74 48H400V64c0-17.67-14.33-32-32-32h-96c-17.67 0-32 14.33-32 32v32H125.74C118.6 68.44 93.79 48 64 48 28.65 48 0 76.65 0 112s28.65 64 64 64c29.79 0 54.6-20.44 61.74-48h112.81c-80.61 31.51-135.13 105.79-141.27 192H64c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h96c17.67 0 32-14.33 32-32v-96c0-17.67-14.33-32-32-32h-30.73c5.76-69.41 48.06-129.54 111.08-158.25.96 16.81 14.6 30.25 31.65 30.25h96c17.05 0 30.69-13.44 31.65-30.25 63.02 28.72 105.32 88.84 111.08 158.25H480c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h96c17.67 0 32-14.33 32-32v-96c0-17.67-14.33-32-32-32h-33.27c-6.13-86.21-60.66-160.49-141.27-192h112.81c7.13 27.56 31.94 48 61.73 48zM160 448H64v-96h96v96zM64 144c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32zm304 16h-96V64h96v96zm208 288h-96v-96h96v96zm0-368c17.64 0 32 14.36 32 32s-14.36 32-32 32-32-14.36-32-32 14.36-32 32-32z" class=""></path></svg>
							</i>
							<p>دسترسی</p>
							<p>این سامانه از <abbr>API</abbr> ثبت احوال و بیمه استفاده میکند.</p>
						</div>
						<div class="col-lg-3 item">
							<i class="col-md-6">
								<svg aria-hidden="true" data-prefix="fal" data-icon="flask" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-flask fa-w-14 fa-3x"><path fill="currentColor" d="M434.9 410.7L288 218.6V32h26c3.3 0 6-2.7 6-6V6c0-3.3-2.7-6-6-6H134c-3.3 0-6 2.7-6 6v20c0 3.3 2.7 6 6 6h26v186.6L13.1 410.7C-18.6 452.2 11 512 63.1 512h321.8c52.2 0 81.7-59.8 50-101.3zm-50 69.3H63.1c-25.7 0-40.3-29.4-24.6-49.8l150.2-196.5c2.1-2.8 3.3-6.2 3.3-9.7V32h64v192c0 3.5 1.2 6.9 3.3 9.7l150.2 196.5c15.6 20.4 1.2 49.8-24.6 49.8z" class=""></path></svg>
							</i>
							<p>قابلیت ثبت نتایج آزمایش</p>
							<p>در این سامانه می توانید آزمایش های خود را دانلود و یا ارسال کرد.</p>
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