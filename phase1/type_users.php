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
	<h4 class="col-10">#تعیین نوع کاربر</h4>
	<form>
		<select class="form-control col-5" data-toggle="dropdown" id="sel1">
			<option value="doctor">پزشک</option>
			<option value="ill">بیمار</option>
			<option value="manager">مدیر</option>
		</select>
	</form>
</div>

<?php include "footer.php" ?>