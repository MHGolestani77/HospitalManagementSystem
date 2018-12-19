			
		<?php 
			editUser("userLevelId", $_POST['userType'], $_POST['nationalCode']);
		?>

		<div class="row">
			<div class="col-md-5" style="margin: 0 auto;   padding: 0;">
				<?php if (isset($_POST['userType'])) {
					echo  $_POST['userType'];
				} ?>
			</div>
		</div>
		<div class="row">
			<input type="submit" name="submit" value="مرحله بعدی" class="btn col-md-5 w-100">
		</div>