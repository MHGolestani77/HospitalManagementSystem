<?php 
	$id = $_POST['id'];
	$illnessId = $_POST['illnessId'];
	setIllness($id, $illnessId);
?>
		<div class="row">
			<div class="col-md-5" style="margin: 0 auto;   padding: 0;">
				<select id="select-user-type" class="form-control" data-toggle="dropdown" name="process[]" placeholder="فرآیند مورد نظر را وارد کنید ..." required>
					
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
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input type="hidden" name="illnessId" value="<?php echo $illnessId; ?>">
			<input type="hidden" name="step" value="SM">