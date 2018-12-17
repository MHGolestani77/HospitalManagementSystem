<?php include "header.php" ?>

<div class="inser-user">
	<nav aria-label="breadcrumb">
	  	<ol class="breadcrumb col-10">
	    	<li class="breadcrumb-item"><a href="#">افزودن کاربر</a></li>
	    	<li class="breadcrumb-item active" aria-current="page">اطلاعات شناسایی</li>
	    	<li class="breadcrumb-item"><a href="#">تعیین نوع کاربر</a></li>
	    	<li class="breadcrumb-item"><a href="#">اتمام</a></li>
	  	</ol>
	</nav>
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