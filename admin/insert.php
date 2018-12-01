<?php include "../header.php"; ?>
<?php
$type = isset($_GET['ins']) ? $_GET['ins'] : "sick"; 
$doctorDis = $type == "doctor" ? "display: block;" : "display: none;";
$clerkDis = $type == "clerk" ? "display: block;" : "display: none;";
$sickDis = $type == "sick" ? "display: block;" : "display: none;";
?>

	<div id="main">
		<div class="container" id="insert">
			<div class="row">
				<div class="col-lg-4 col-md-4" id="right">
					<ul class="insert">
						<a href="?ins=doctor">
							<li>
								<p>افزودن پزشک</p>
							</li>
						</a> 
						<a href="?ins=clerk">
							<li>
								<p>افزودن پذیرش</p>
							</li>
						</a> 
						<a href="?ins=sick">
							<li>
								<p>افزودن بیمار</p>
							</li>
						</a> 
					</ul>
				</div>

				<!-- add doctor -->
				<div class="col-lg-7 col-md-8" id="add-doctor" style="<?php echo $doctorDis; ?>">
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

			<!-- end of adding doctor -->


			<!-- add clerk -->
				<div class="col-lg-7 col-md-8" id="add-clerk" style="<?php echo $clerkDis; ?>">
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
					</form>
				</div>
				<!-- end of adding clerk -->

				<!-- add illness -->
				<div class="col-lg-7 col-md-8" id="add-ill" style="<?php echo $sickDis; ?>">
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
					</form>
				</div>
				<!-- end of adding illness -->
			</div>
		</div>
	</div>

<?php include "../footer.php"; ?>