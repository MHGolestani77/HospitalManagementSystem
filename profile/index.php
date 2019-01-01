<?php include '../header.php'; ?>
<?php 
	$id = 0;
	if(isset($_GET['id'])) $id = $_GET['id']; 
	else $id = $_SESSION['userId'];
	$nationalCode = getNationalCode($id);
?>

	<div class="modal fade" id="editIMGModal" role="dialog">
    	<div class="modal-dialog">
	      	<!-- Modal content-->
	      	<div class="modal-content">
	        	<div class="modal-header">
	          		<h4 class="modal-title">آپلود عکس</h4>
	        	</div>
	        	<div class="modal-body">
	          		<form action="../upload.php" method="post" enctype="multipart/form-data">
	          			<div class="row">
	          				<label for="chooseFile" class="btn">
	          					<i class="fas fa-cloud-upload-alt"></i>
	          					انتخاب عکس
	          				</label>
	          				<input id="chooseFile" class="btn" type="file" name="fileToUpload">
	          			</div>
	          			<div class="row">
	          				<input class="btn col-md-4" type="submit" name="submit" value="آپلود">
	          			</div>
	          			<input type="hidden" name="userId" value="<?php echo $id; ?>">
	          		</form>
	          			<div class="row">
	          				<a href="../deleteIMG.php?userId=<?php echo $id; ?>" class="col-md-4" style="padding: 0;">
	          					<button class="btn btn-danger col">حذف عکس</button>
	          				</a>
	          			</div>
	          		<button id="hideModal" class="float-left btn btn-light">پنهان کردن</button>
	        	</div>
	      	</div>
    	</div>
  	</div>

<?php if(isset($_GET['error'])) include 'error.php'; ?>

<?php 
	$path = "../uploads/".$id.".jpg";
	if (!file_exists($path)) {
		$path = "../assets/img/".getUserData(getNationalCode($id), "userLevelId").getUserData(getNationalCode($id), "sex").".jpg?t=<?php echo $t; ?>";
	}
?>

<div class="insert-user col-md-11">
	<div class="row col-md-11" style="margin: 0 auto;padding: 20px;">
		<div class="col col-md-3 img" id="editIMG" style="cursor: pointer;">
			<img src="<?php echo $path; ?>">
			<div class="personal_code">
				<?php echo $id; ?>
			</div>
		</div>
		<div class="col col-md-4">
			<div class="row">
				<div class="col">
					<span class="label">
						نام:
					</span>
				</div>
				<div class="col">
					<span>
						<?php echo getUserData($nationalCode, "name"); ?>
					</span>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<span class="label">
						نام خانوادگی:
					</span>
				</div>
				<div class="col">
					<span>
						<?php echo getUserData($nationalCode, "lastName"); ?>
					</span>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<span class="label">
						نام پدر:
					</span>
				</div>
				<div class="col">
					<span>
						<?php echo getUserData($nationalCode, "fatherName"); ?>
					</span>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<span class="label">
						کد ملی:
					</span>
				</div>
				<div class="col">
					<span>
						<?php echo $nationalCode; ?>
					</span>
				</div>
			</div>
		</div>
		<div class="col col-md-4">
			<div class="row">
				<div class="col">
					<span class="label">
						جنسیت:
					</span>
				</div>
				<div class="col">
					<span>
						<?php echo getUserData($nationalCode, "sex") == 0 ? "آقا" : "خانم"; ?>
					</span>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<span class="label">
						شماره تماس:
					</span>
				</div>
				<div class="col">
					<span>
						<?php echo getUserData($nationalCode, "phoneNumber"); ?>
					</span>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<span class="label">
						آدرس:
					</span>
				</div>
				<div class="col">
					<span>
						<?php echo getUserData($nationalCode, "address"); ?>
					</span>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<span class="label">
						تاریخ تولد:
					</span>
				</div>
				<div class="col">
					<span>
						<?php echo getUserData($nationalCode, "birthDate"); ?>
					</span>
				</div>
			</div>
		</div>
	</div>
	<?php 
		if (getUserData($nationalCode, "userLevelId") == 1) {
			include 'mabager.php';
		}elseif (getUserData($nationalCode, "userLevelId") == 2) {
			include 'clerk.php';
		}elseif (getUserData($nationalCode, "userLevelId") == 3) {
			include 'doctor.php';
		}elseif (getUserData($nationalCode, "userLevelId") == 4) {
			include 'ill.php';
		}
	?>
</div>


  	<script>
	$(document).ready(function(){
	<?php if($id == $_SESSION['userId']) : ?>	 
	  $("#editIMG").click(function(){
	    $("#editIMGModal").modal("show");
	  });
	  $("#hideModal").click(function(){
	    $("#editIMGModal").modal("hide");
	  });
	<?php endif; ?>
	});
	</script>

<?php include '../footer.php'; ?>