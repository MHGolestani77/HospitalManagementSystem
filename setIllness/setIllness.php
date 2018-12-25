		<div class="row">
			<div class="col-md-5" style="margin: 0 auto;   padding: 0;">
				<select id="select-user-type" class="form-control" data-toggle="dropdown" name="illnessId" required>
					<?php
						$sql = "select * from ".illnessDetails;
						$result = mysqli_query(connection(), $sql);
						while($feild = mysqli_fetch_array($result)):
					?>
					<option value="<?php echo $feild['id']; ?>"><?php echo $feild['title']; ?></option>
					<?php
						endwhile;
					?>
				</select>
			</div>
			<script>
				$('#select-user-type').selectize({
				    sortField: {
				        field: 'text',
				        direction: 'asc'
				    },
				    dropdownParent: 'body'
				});
			</script>
		</div>
		<div class="row">
			<input type="submit" name="submit" value="مرحله بعدی" class="btn col-md-5 w-100">
		</div>
			<input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
			<input type="hidden" name="step" value="DP">