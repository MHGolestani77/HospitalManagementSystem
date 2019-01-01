<div class="massenger">
	<div class="container-fluid">
		<div class="row massages">
			<?php
				while($feild = mysqli_fetch_array($result)):
					$type = $feild['senderId'] == $_SESSION['userId'] ? "sender" : "getter";
					$path = "../uploads/".$feild['senderId'].".jpg";
					if (!file_exists($path)) {
						$path = "../assets/img/".getUserData(getNationalCode($feild['senderId']), "userLevelId").getUserData(getNationalCode($feild['senderId']), "sex").".jpg";
					}
					?>
			<div class="col-12 <?php echo $type; ?>">
				<div class="row">
					<img class="col-3" src="<?php echo $path; ?>" alt="">
				</div>
				<div class="row">
					<p class="text-center"><?php echo $feild['mainText']; ?></p>
				</div>
				<div class="row">
					<p class="text-center"><?php echo $feild['date']; ?> - <?php echo $feild['time']; ?></p>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
		<div class="row">
			<div class="row form">
				<input type="text" class="col-10 btn" name="mainText" placeholder="متن پیام را وارد کنید">
				<input type="hidden" name="group" value="<?php echo $_POST['group']; ?>">
				<input type="hidden" name="page" value="massenger">
				<input type="submit" class="col-2 btn" name="send" value="ارسال">
			</div>
		</div>
	</div>
</div>