<?php 
	$id = $_POST['id'];
	$illnessId = $_POST['illnessId'];
	$process = $_POST['process'];
	$illId = getIllnessId($id, $illnessId);

	$i = 0;
	foreach ($process as $key) {
		addProcess($illId, $key, $i);
		$i++;
	}
?>
	<div class="row">
			<div class="col-md-5" style="margin: 0 auto;   padding: 0;">
				<select id="select-user-type" class="form-control" data-toggle="dropdown" name="medicine[]" required>
					<?php
						$sql = "select * from ".medicineDetailsTable;
						$result = mysqli_query(connection(), $sql);
						while($feild = mysqli_fetch_array($result)):
					?>
					<option value="<?php echo $feild['title']; ?>"><?php echo $feild['title']; ?></option>
					<?php
						endwhile;
					?>
				</select>
			</div>
			<script>
				$('#select-user-type').selectize({
					create: true,
					maxItems: 30
				});
			</script>
		</div>
		<div class="row">
			<input type="submit" name="submit" value="مرحله بعدی" class="btn col-md-5 w-100">
		</div>
			<input type="hidden" name="illnessId" value="<?php echo $illId; ?>">
			<input type="hidden" name="step" value="CO">
