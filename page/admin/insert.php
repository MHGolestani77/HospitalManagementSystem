<?php include "header.php"; ?>

	<div id="main">
		<dic class="container row">
			<div class="col-lg-5 col-md-4">
				<ul>
					<li>
						<p>افزودن پزشک</p>
					</li>
					<li>
						<p>افزودن پزشک</p>
					</li>
					<li>
						<p>افزودن بیمار</p>
					</li>
				</ul>
			</div>
			<div class="col-lg-7 col-md-8">
				<form class="form-horizontal">
					<div class="form-group row">
						<label class="control-label col-sm-4 col-lg-3" for="fname">نام</label>
						<input type="text" name="first-name" class="form-control col-lg-8" id="fname">
					</div>
					<div class="form-group row">
						<label class="control-label col-sm-4 col-lg-3" for="lname">نام خانوادگی</label>
						<input type="text" name="last-name" class="form-control col-lg-8" id="lname">
					</div>
					<div class="form-group row">
						<label class="control-label col-sm-4 col-lg-3" for="fa-name">نام پدر</label>
						<input type="text" name="father-name" class="form-control col-lg-8" id="fa-name">
					</div>
					<div class="form-group row">
						<label class="control-label col-sm-4 col-lg-3" for="ncode">کد ملی</label>
						<input type="text" name="nationalcode" class="form-control col-lg-8" id="ncode">
					</div>
					<div class="form-group row">
						<label class="control-label col-sm-4 col-lg-3" for="scode">شماره شناسنامه</label>
						<input type="text" name="id-number" class="form-control col-lg-8" id="scode">
					</div>
					<div class="form-group row">
						<label class="control-label col-sm-4 col-lg-3" for="mnumber">شماره همراه</label>
						<input type="text" name="mobile-no" class="form-control col-lg-8" id="mnumber">
					</div>
					<div class="form-group row">
						<label class="control-label col-sm-4 col-lg-3" for="expert">تخصص</label>
						<input type="text" name="expert" class="form-control col-lg-8" id="expert">
					</div>
				</form>
			</div>
		</dic>
	</div>

<?php include "footer.php"; ?>