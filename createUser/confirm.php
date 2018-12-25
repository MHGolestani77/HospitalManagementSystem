			
		
 		<?php 
			editUser("userLevelId", $_POST['userType'], $_POST['nationalCode']);
 			$nationalCode = $_POST['nationalCode'];
			if($_POST['userType'] == 1){
				setAdmin(getUserData($nationalCode, "id"));
			}elseif($_POST['userType'] == 2){
				setClerk(getUserData($nationalCode, "id"));
			}elseif ($_POST['userType'] == 3) {
				setDoctor(getUserData($nationalCode, "id"), "");
			}elseif ($_POST['userType'] == 4) {
				require_once dirname(__FILE__) . '/jdatetime.class.php';
				$date = new jDateTime(); //Creates a new instance
				$date = new jDateTime(true, true, 'Asia/Tehran');
				setIll($nationalCode, 0, $date->date("r")."");
			}
		?>

		<div class="row">
			<div class="col-md-5" style="margin: 0 auto;   padding: 0;">ِ
				<div class="row">
					<label class="col bg-white rounded p-2">اطلاعات شناسایی</label>
				</div>
				<div class="row">
					<label for="item03" class="col-6 p-1">نام  :</label>
					<span class="col-6" id="item03"><?php echo getUserData($_POST['nationalCode'], "name"); ?></span>
				</div>
				<div class="row">
					<label for="item03" class="col-6 p-1">نام  خانوادگی :</label>
					<span class="col-6" id="item03"><?php echo getUserData($_POST['nationalCode'], "lastName"); ?></span>
				</div>
				<div class="row">
					<label for="item03" class="col-6 p-1">نام پدر :</label>
					<span class="col-6" id="item03"><?php echo getUserData($_POST['nationalCode'], "fatherName"); ?></span>
				</div>
				<div class="row">
					<label for="item09" class="col-6 p-1">جنسیت :</label>
					<span class="col-6" id="item09"><?php echo getUserData($_POST['nationalCode'], "sex") == 0 ? "آقا" : "خانم"; ?></span>
				</div>
				<div class="row">
					<label for="item04" class="col-6 p-1">کد ملی :</label>
					<span class="col-6" id="item04"><?php echo $_POST['nationalCode']; ?></span>
				</div>
				<div class="row">
					<label for="item05" class="col-6 p-1">تاریخ تولد :</label>
					<span class="col-6" id="item05"><?php echo getUserData($_POST['nationalCode'], "birthDate"); ?></span>
				</div>
				<div class="row">
					<label class="col bg-white rounded p-2">اطلاعات تماس</label>
				</div>
				<div class="row">
					<label for="item06" class="col-6 p-1">آدرس :</label>
					<span class="col-6" id="item06"><?php echo getUserData($_POST['nationalCode'], "address"); ?></span>
				</div>
				<div class="row">
					<label for="item07" class="col-6 p-1">شماره تماس :</label>
					<span class="col-6" id="item07"><?php echo getUserData($_POST['nationalCode'], "phoneNumber"); ?></span>
				</div>
				<div class="row">
					<label class="col bg-white rounded p-2">اطلاعات کاربری</label>
				</div>
				<div class="row">
					<label for="item10" class="col-6 p-1">سطح کاربری :</label>
					<span class="col-6" id="item10"><?php echo getUserLevelData($_POST['userType']); ?></span>
				</div>
			</div>
		</div>
		<div class="row">
			<input type="submit" name="submit" value="مرحله بعدی" class="btn col-md-5 w-100">
		</div>
			<input type="hidden" name="step" value="FI">