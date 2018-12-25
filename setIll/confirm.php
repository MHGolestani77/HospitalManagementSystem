			
		
 		<?php 
			editIll("doctorId", $_POST['doctorId'], $_POST['nationalCode']);
		?>

		<div class="row">
			<div class="col-md-5" style="margin: 0 auto;   padding: 0;">ِ
				<div class="row">
					<label class="col bg-white rounded p-2">اطلاعات بیمه بیمار</label>
				</div>
				<div class="row">
					<label for="item03" class="col-6 p-1">تاریخ پایان اعتبار :</label>
					<span class="col-6" id="item03"><?php echo getUserData($_POST['nationalCode'], "insuranceEndTime"); ?></span>
				</div>
				<div class="row">
					<label class="col bg-white rounded p-2">اطلاعات پزشک</label>
				</div>
				<div class="row">
					<label for="item06" class="col-6 p-1">نام:</label>
					<span class="col-6" id="item06"><?php echo getUserData(getNationalCode(getDoctorData($_POST['doctorId'], "userId")), "name"); ?></span>
				</div>
				<div class="row">
					<label for="item07" class="col-6 p-1">نام خانوادگی:</label>
					<span class="col-6" id="item07"><?php echo getUserData(getNationalCode(getDoctorData($_POST['doctorId'], "userId")), "lastName"); ?></span>
				</div>
				<div class="row">
					<label for="item07" class="col-6 p-1">تخصص:</label>
					<span class="col-6" id="item07"><?php echo getDoctorData($_POST['doctorId'], "expert"); ?></span>
				</div>
			</div>
		</div>
		<div class="row">
			<input type="submit" name="submit" value="مرحله بعدی" class="btn col-md-5 w-100">
		</div>
			<input type="hidden" name="step" value="FI">