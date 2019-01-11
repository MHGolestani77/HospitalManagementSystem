	<?php 
		require_once dirname(__FILE__) . '/jdatetime.class.php';
		$date = new jDateTime(); //Creates a new instance
		$date = new jDateTime(true, true, 'Asia/Tehran');
	?>
	<div class="row">
		<input type="text" name="title" class="col-md-5" placeholder="عنوان آزمایش" required>
	</div>
	<div class="row">
		<input type="text" id="date" name="date" class="col-md-5" placeholder="تاریخ آزمایش: --/--/--13" value="<?php echo $date->date("Y/m/d"); ?>" required>
	</div>
	<div class="row">
	    <label for="chooseFile" class="btn col-md-5" style="margin: 10px auto;background: #fff;border: 2px solid #aeefe4;border-radius: 10px;color: #389686;">
	    	<i class="fas fa-cloud-upload-alt"></i>
	    	انتخاب فایل
	    </label>
	    <input id="chooseFile" class="btn" type="file" name="fileToUpload" style="display: none;" required>
	</div>
	<div class="row">
		<input type="submit" name="submit" value="مرحله بعدی" class="btn col-md-5 w-100">
	</div>
	<input type="hidden" name="illnessId" value="<?php echo $_POST['illnessId']; ?>">
	<input type="hidden" name="id" value="<?php echo rand(1000,9999); ?>">
