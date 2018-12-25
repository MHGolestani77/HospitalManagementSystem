		<div class="row">
			<div class="col-md-5" style="margin: 0 auto;   padding: 0;">
				<select id="select-user-type" class="form-control" data-toggle="dropdown" name="nationalCode" required>
					<?php
						$sql = "select * from ".illsTable." where doctorId = 0";
						$result = mysqli_query(connection(), $sql);
						while($feild = mysqli_fetch_array($result)):
					?>
					<option value="<?php echo getNationalCode($feild['userId']); ?>"><?php echo getUserData(getNationalCode($feild['userId']), 'lastName')." - ".getNationalCode($feild['userId']); ?></option>
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
			<input type="hidden" name="step" value="CI">
			<input type="hidden" name="accessID" value="hms1397">
			<input type="hidden" name="passWord" value="7af8abd0a14190b3b4ef119348201321e5dd93c41faaca89e8161f645e9180d449afb9f0d20e83932bf9e18f0068c950">