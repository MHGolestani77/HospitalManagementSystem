		
		<?php 
			addUser($_POST['name'], $_POST['lastName'], $_POST['fatherName'], $_POST['sex'], $_POST['nationalCode'], $_POST['phoneNumber'], $_POST['birthDate'], $_POST['address'], -1, "", $_POST['nationalCode']);
		?>

		<div class="row">
			<div class="col-md-5" style="margin: 0 auto;   padding: 0;">
				<select id="select-user-type" class="form-control" data-toggle="dropdown" name="userType">
					<?php
						$sql = "select * from ".userLevelTable;
						$result = mysqli_query(connection(), $sql);
						while($feild = mysqli_fetch_array($result)):
					?>
					<option value="<?php echo $feild['id']; ?>"><?php echo $feild['name']; ?></option>
					<?php
						endwhile;
					?>
				</select>
			</div>
			<script>
				$('#select-user-type').selectize();
			</script>
		</div>
		<div class="row">
			<input type="submit" name="submit" value="مرحله بعدی" class="btn col-md-5 w-100">
		</div>
			<input type="hidden" name="step" value="FI">
			<input type="hidden" name="nationalCode" value="<?php echo $_POST['nationalCode']; ?>">