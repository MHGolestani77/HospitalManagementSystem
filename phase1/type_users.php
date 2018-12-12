<?php include "header.php" ?>

<div class="personal-info">
	<nav aria-label="breadcrumb">
	  	<ol class="breadcrumb col-10">
	    	<li class="breadcrumb-item"><a href="#">افزودن کاربر</a></li>
	    	<li class="breadcrumb-item active" aria-current="page">اطلاعات شناسایی</li>
	    	<li class="breadcrumb-item"><a href="#">تعیین نوع کاربر</a></li>
	    	<li class="breadcrumb-item"><a href="#">اتمام</a></li>
	  	</ol>
	</nav>
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