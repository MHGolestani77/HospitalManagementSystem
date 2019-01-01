<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body style="background: #dadada;">
<?php include '../login/session.php'; ?>
<form action="http://localhost/HospitalManagementSystem/massage/" method="POST" id="send">
	<input type="hidden" name="page" value="<?php echo $_POST['page']; ?>">
	<input type="hidden" name="group" value="<?php echo $_POST['group']; ?>">
</form>

<?php
	if (isset($_POST['send'])) {
		createMassage($_POST['mainText'],$_POST['group'],$_SESSION['userId']);
	}

	echo "<script>document.getElementById('send').submit();</script>";
?>
	
</body>
</html>