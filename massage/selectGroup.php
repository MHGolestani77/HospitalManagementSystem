	<div class="select">
		<diw class="row">
			<label for="selectExpert" class="col">گروه(تخصص) :</label>
		</diw>
		<div class="row">
			<select id="selectExpert" class="form-control col" data-toggle="dropdown" name="group" required>
				<?php 
					$sql = "SELECT DISTINCT expert FROM ".doctorsTable.";";
					$result = mysqli_query(connection(), $sql);
					while ($feild = mysqli_fetch_array($result)) :
				?>
				<option><?php echo $feild['expert'] ?></option>
				<?php endwhile; ?>
			</select>
			<script>
				$('#selectExpert').selectize();
			</script>
		</div>
		<div class="row">
			<input type="submit" class="col btn btn-primary" name="subSelect" value="مرحله بعدی">
		</div>
		<input type="hidden" name="page" value="massenger">
	</div>