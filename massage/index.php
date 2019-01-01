<?php include '../login/session.php'; ?>
<?php $t=rand()*rand(); ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HospitalManagementSystem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://localhost/HospitalManagementSystem/assets/css/styles.css?t=<?php echo $t; ?>">
    <link rel="stylesheet" type="text/css" href="http://localhost/HospitalManagementSystem/assets/js/select/dist/css/selectize.css">
	<script src="http://localhost/HospitalManagementSystem/assets/js/select/examples/js/jquery.min.js"></script>
	<script src="http://localhost/HospitalManagementSystem/assets/js/select/dist/js/standalone/selectize.js"></script>
	<script src="http://localhost/HospitalManagementSystem/assets/js/select/examples/js/index.js"></script>
 </head>

<?php 
	$url = "";
	$page = isset($_POST['page']) ? $_POST['page'] : "selectGroup";
	if(isset($_POST['group'])){
		$group = $_POST['group'];
		$url = "sendMassage.php";
		$sql = "select * from ".massage." where subject ='$group' ORDER BY date DESC";
		$result = mysqli_query(connection(), $sql);
	}
?>

<body style="background: #e7f2ff;">
	<div id="main">
		<div id="massenger">
			<form action="<?php echo $url; ?>" method="POST">
				<?php include $page.'.php'; ?>
			</form>
		</div>
	</div>
    <script src="http://localhost/HospitalManagementSystem/assets/anime-master/anime.min.js"></script>
    <script src="http://localhost/HospitalManagementSystem/main.js?t=<?php echo rand(); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </body>
 </html>