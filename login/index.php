<?php 
include "../functions.php"; 

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
$error = "display:none;";

if (isset($_POST['submit'])) {
	$result = checkPassWord($_POST['un'], $_POST['pw']);
	if($result != 0 && isset($_SESSION)){
		$_SESSION['login_user'] = $_POST['un'];
		$_SESSION['userId'] = $result;
		echo "<script> window.location.href = 'http://localhost/HospitalManagementSystem/index/'; </script>";
	}else{
		$error = "display:block;";
	}
}
?>
<?php $t=rand()*rand(); ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HospitalManagementSystem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://localhost/HospitalManagementSystem/assets/css/styles.css"></script>
    <link rel="stylesheet" type="text/css" href="http://localhost/HospitalManagementSystem/assets/js/select/dist/css/selectize.css">
	<script src="http://localhost/HospitalManagementSystem/assets/js/select/examples/js/jquery.min.js"></script>
	<script src="http://localhost/HospitalManagementSystem/assets/js/select/dist/js/standalone/selectize.js"></script>
	<script src="http://localhost/HospitalManagementSystem/assets/js/select/examples/js/index.js"></script>
	<style type="text/css">
		
@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('../assets/img/back.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.input-group>.custom-select:not(:first-child), .input-group>.form-control:not(:first-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle), .input-group>.input-group-append:last-child>.input-group-text:not(:last-child), .input-group>.input-group-append:not(:last-child)>.btn, .input-group>.input-group-append:not(:last-child)>.input-group-text, .input-group>.input-group-prepend>.btn, .input-group>.input-group-prepend>.input-group-text {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #389686;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h4{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #389686;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #389686;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
	</style>
 </head>
 <body>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<img src="../assets/img/logo.png" alt="" class="col-8" style="margin: 5px auto;display: block;">
					<h4 class="text-center">سیستم مدیریت بیمارستان</h4>
				</div>
				<div class="card-body">
					<form method="post">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input name="un" type="text" class="form-control" placeholder="نام کاربری">
							
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input name="pw" type="password" class="form-control" placeholder="رمز عبور">
						</div>
						<div class="input-group form-group">
							<div class="alert alert-warning col" style="<?php echo $error; ?>">نام کاربری یا رمزعبور اشتباه است</div>
						</div>
						<!-- <div class="input-group form-group">
							<select name="userType" class="form-control" placeholder="رمز عبور">
								<option value="manager">مدیر</option>
								<option value="clerk">پذیرش</option>
								<option value="doctor">دکتر</option>
								<option value="ill">بیمار</option>
							</select>
							<input type="checkbox">Remember Me
						</div> -->
						<div class="form-group">
							<input type="submit" name="submit" value="ورود" class="btn float-left login_btn">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div> 
    <script src="http://localhost/HospitalManagementSystem/assets/anime-master/anime.min.js"></script>
    <script src="http://localhost/HospitalManagementSystem/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </body>
 </html>