			
		<?php 
			editUser("userLevelId", $_POST['userType'], $_POST['nationalCode']);
		?>

		<div class="row">
			<div class="col-md-5" style="margin: 0 auto;   padding: 0;">ِ
				<row>
					<label class="col bg-white rounded p-2">اطلاعات شناسایی</label>
				</row>
				<row>
					<label for="item03" class="col-6 p-1">نام  :</label>
					<span class="col-6" id="item03"><?php echo getUserDate($_POST['nationalCode'], "name"); ?></span>
				</row>
				<row>
					<label for="item03" class="col-6 p-1">نام  خانوادگی :</label>
					<span class="col-6" id="item03"><?php echo getUserDate($_POST['nationalCode'], "lastName"); ?></span>
				</row>
				<row>
					<label for="item03" class="col-6 p-1">نام پدر :</label>
					<span class="col-6" id="item03"><?php echo getUserDate($_POST['nationalCode'], "fatherName"); ?></span>
				</row>
				<row>
					<label for="item09" class="col-6 p-1">جنسیت :</label>
					<span class="col-6" id="item09"><?php echo getUserDate($_POST['nationalCode'], "sex") == 0 ? "آقا" : "خانم"; ?></span>
				</row>
				<row>
					<label for="item04" class="col-6 p-1">کد ملی :</label>
					<span class="col-6" id="item04"><?php echo $_POST['nationalCode']; ?></span>
				</row>
				<row>
					<label for="item05" class="col-6 p-1">تاریخ تولد :</label>
					<span class="col-6" id="item05"><?php echo getUserDate($_POST['nationalCode'], "birthDate"); ?></span>
				</row>
				<row>
					<label class="col bg-white rounded p-2">اطلاعات تماس</label>
				</row>
				<row>
					<label for="item06" class="col-6 p-1">آدرس :</label>
					<span class="col-6" id="item06"><?php echo getUserDate($_POST['nationalCode'], "address"); ?></span>
				</row>
				<row>
					<label for="item07" class="col-6 p-1">شماره تماس :</label>
					<span class="col-6" id="item07"><?php echo getUserDate($_POST['nationalCode'], "phoneNumber"); ?></span>
				</row>
				<row>
					<label class="col bg-white rounded p-2">اطلاعات بیمه</label>
				</row>
				<row>
					<label for="item08" class="col-6 p-1">اطلاعات بیمه :</label>
					<span class="col-6" id="item08"><?php echo getUserDate($_POST['nationalCode'], "insuranceEndTime"); ?></span>
				</row>
				<row>
					<label class="col bg-white rounded p-2">اطلاعات کاربری</label>
				</row>
				<row>
					<label for="item10" class="col-6 p-1">سطح کاربری :</label>
					<span class="col-6" id="item10"><?php echo getUserLevelData($_POST['userType']); ?></span>
				</row>
			</div>
		</div>
		<div class="row">
			<input type="submit" name="submit" value="مرحله بعدی" class="btn col-md-5 w-100">
		</div>
			<input type="hidden" name="step" value="FI">