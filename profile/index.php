<?php include '../header.php'; ?>

<div class="insert-user col-md-11">
	<div class="row col-md-10" style="margin: 0 auto;padding: 20px;">
		<div class="col col-md-3 img">
			<img src="../assets/img/back.jpg">
			<div class="personal_code">
				<?php echo $_SESSION['userId']; ?>
			</div>
		</div>
		<div class="col col-md-4">
			<div class="row">
				<span class="label">
					نام:
				</span>
				<span>
					<?php echo getUserData($_SESSION['login_user'], "name"); ?>
				</span>
			</div>
			<div class="row">
				<span class="label">
					نام خانوادگی:
				</span>
				<span>
					<?php echo getUserData($_SESSION['login_user'], "lastName"); ?>
				</span>
			</div>
			<div class="row">
				<span class="label">
					نام پدر:
				</span>
				<span>
					<?php echo getUserData($_SESSION['login_user'], "fatherName"); ?>
				</span>
			</div>
			<div class="row">
				<span class="label">
					کد ملی:
				</span>
				<span>
					<?php echo $_SESSION['login_user']; ?>
				</span>
			</div>
		</div>
		<div class="col col-md-4">
			<div class="row">
				<span class="label">
					جنسیت:
				</span>
				<span>
					<?php echo getUserData($_SESSION['login_user'], "sex") == 0 ? "آقا" : "خانم"; ?>
				</span>
			</div>
			<div class="row">
				<span class="label">
					شماره تماس:
				</span>
				<span>
					<?php echo getUserData($_SESSION['login_user'], "phoneNumber"); ?>
				</span>
			</div>
			<div class="row">
				<span class="label">
					آدرس:
				</span>
				<span>
					<?php echo getUserData($_SESSION['login_user'], "address"); ?>
				</span>
			</div>
			<div class="row">
				<span class="label">
					تاریخ تولد:
				</span>
				<span>
					<?php echo getUserData($_SESSION['login_user'], "birthDate"); ?>
				</span>
			</div>
		</div>
	</div>
	<nav aria-label="breadcrumb" class="nav-process">
		  	<ol class="breadcrumb col-md-10">
		    	<li class="breadcrumb-item"><a href="#">افزودن کاربر</a></li>
		    	<li class="breadcrumb-item active" aria-current="page">اطلاعات شناسایی</li>
		    	<li class="breadcrumb-item"><a href="#">تعیین نوع کاربر</a></li>
		    	<li class="breadcrumb-item"><a href="#">اتمام</a></li>
		  	</ol>
	</nav>
	<h4 class="col-md-10">#داروها</h4>
	<div class="items">
		<div class="col-md-5 item medicine">
			<a href="#">
				<div class="row">
					<div class="col col-md-1 num">1</div>
					<div class="col col-md-10 ">
						<span class="label">
							<h5>عنوان دارو (مدت زمان مصرف)</h5>
							توضیحات دارو
						</span>
					</div>
				</div>
			</a>
		</div>
		<div class="col-5 item medicine">
			<a href="#">
				<div class="row">
					<div class="col col-md-1 num">2</div>
					<div class="col col-md-10 text-center w-100">
						<span class="label">
							<h5>عنوان دارو (مدت زمان مصرف)</h5>
							<span>توضیحات دارو</span>
						</span>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<?php include '../footer.php'; ?>