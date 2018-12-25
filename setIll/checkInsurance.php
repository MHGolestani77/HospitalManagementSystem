		<div class="row">
			<input type="text" class="col-md-5" placeholder="شماره قرارداد" name="contractsId" value="<?php echo $_POST['contractsId']; ?>">
		</div>
		<div class="row">
			<input type="text" class="col-md-5" placeholder="شروع اعتبار" name="beginDate" value="<?php echo $_POST['beginDate']; ?>">
		</div>
		<div class="row">
			<input type="text" class="col-md-5" placeholder="پایان اعتبار" name="endDate" value="<?php echo $_POST['endDate']; ?>">
		</div>
		<div class="row">
			<input type="submit" name="submit" value="مرحله بعدی" class="btn col-md-5 w-100">
		</div>
		<input type="hidden" class="col-md-5" name="nationalCode" value="<?php echo $_POST['nationalCode']; ?>">
		<input type="hidden" name="step" value="SD">
