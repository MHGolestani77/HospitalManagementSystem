<?php include "header.php" ?>

<div class="personal-info">
	<ul class="nav info-nav col-10">
		<a href="#">
			<li>افزودن کاربر</li>
		</a>
		<a href="#">
			<li class="active">اطلاعات شناسایی</li>
		</a>
		<a href="#">
			<li>تعیین نوع کاربر</li>
		</a>
		<a href="#">
			<li>اتمام</li>
		</a>
	</ul>
	<h4 class="col-10">#اطلاعات شناسایی</h4>
	<form action="">
		<div class="row">
			<input type="text" placeholder="نام" class="col-5">
		</div>
		<div class="row">
			<input type="text" placeholder="نام خانوادگی" class="col-5">
		</div>
		<div class="row">
			<input type="text" placeholder="نام پدر" class="col-5">
		</div>
		<div class="row">
			<input type="text" placeholder="کد ملی" class="col-5">
		</div>
		<div class="row">
			<input type="submit" class="btn" name="ذخیره" value="ذخیره" class="col-5">
		</div>
	</form>
</div>

<?php include "footer.php" ?>