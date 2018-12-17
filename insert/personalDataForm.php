		<div class="row">
			<input type="text" name="name" value="<?php echo $_POST['name']; ?>" placeholder="نام" class="col-md-5">
		</div>
		<div class="row">
			<input type="text" name="lastName" value="<?php echo $_POST['lastName']; ?>" placeholder="نام خانوادگی" class="col-md-5">
		</div>
		<div class="row">
			<input type="text" name="fatherName" value="<?php echo $_POST['fatherName']; ?>" placeholder="نام پدر" class="col-md-5">
		</div>
		<div class="row">
			<input type="text" name="nationalCode" value="<?php echo $_POST['nationalCode']; ?>" placeholder="کد ملی" class="col-md-5">
		</div>
		<div class="row">
			<input type="text" name="birthDate" value="<?php echo $_POST['birthDate']; ?>" placeholder="تاریخ تولد" class="col-md-5">
		</div>
		<div class="row">
			<input type="text" name="sex" value="<?php echo $_POST['sex']; ?>" placeholder="جنسیت" class="col-md-5">
		</div>
		<div class="row">
			<input type="text" name="address" value="<?php echo $_POST['address']; ?>" placeholder="آدرس" class="col-md-5">
		</div>
		<div class="row">
			<input type="submit" name="submit" value="مرحله بعدی" class="btn col-md-5 w-100">
		</div>
			<input type="hidden" name="step" value="SUT">