	
 		<?php 
			$illnessId = $_POST['illnessId'];
			$illId = getIllnessData($illnessId, "illId");
			$userId = getIllData($illId, "userId");
			$medicine = $_POST['medicine'];

			foreach ($medicine as $key) {
				setMedicine($illnessId, $key);
			}
		?>

		<div class="row">
			<div class="col-md-5" style="margin: 0 auto;   padding: 0;">ِ
				<div class="row">
					<label class="col bg-white rounded p-2">اطلاعات بیمار</label>
				</div>
				<div class="row">
					<label for="item03" class="col-6 p-1">نام بیمار:</label>
					<span class="col-6" id="item03"><?php echo getUserData(getNationalCode($userId), "name"); ?></span>
				</div>
				<div class="row">
					<label for="item03" class="col-6 p-1">نام خانوادگی بیمار:</label>
					<span class="col-6" id="item03"><?php echo getUserData(getNationalCode($userId), "lastName"); ?></span>
				</div>
				<div class="row">
					<label for="item03" class="col-6 p-1">کدملی بیمار:</label>
					<span class="col-6" id="item03"><?php echo getNationalCode($userId); ?></span>
				</div>
				<div class="row">
					<label class="col bg-white rounded p-2">اطلاعات بیماری</label>
				</div>
				<div class="row">
					<label for="item06" class="col-6 p-1">عنوان بیماری:</label>
					<span class="col-6" id="item06"><?php echo getIllnessDetail(getIllnessData($illnessId, "illnessId")); ?></span>
				</div>
				<div class="row">
					<label class="col bg-white rounded p-2">فرآیند درمان</label>
				</div>
				<?php 
					$sql = "select * from ".processTable." where illnessId = $illnessId";
					$result = mysqli_query(connection(), $sql);
					while($feild = mysqli_fetch_array($result)): 
				?>
				<div class="row">
					<label for="item06" class="col-6 p-1">عنوان فرآیند:</label>
					<span class="col-6" id="item06"><?php echo ($feild['rank']+1).". ".$feild['title']; ?></span>
				</div>
				<?php endwhile; ?>
				<div class="row">
					<label class="col bg-white rounded p-2">دارو های تجویز شده</label>
				</div>
				<?php 
					$sql = "select * from ".medicineTable." where illnessId = $illnessId";
					$result = mysqli_query(connection(), $sql);
					while($feild = mysqli_fetch_array($result)): 
				?>
				<div class="row">
					<label for="item06" class="col-6 p-1">عنوان دارو:</label>
					<span class="col-6" id="item06"><?php echo $feild['title']; ?></span>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
		<div class="row">
			<input type="submit" name="submit" value="مرحله بعدی" class="btn col-md-5 w-100">
		</div>
			<input type="hidden" name="step" value="FI">