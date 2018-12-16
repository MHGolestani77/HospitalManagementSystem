<?php include "header.php"; ?>
<?php 
	echo $_POST['name']."<br>";
	echo $_POST['lastName']."<br>";
	echo $_POST['fatherName']."<br>";
	echo $_POST['nationalCode']."<br>";
	echo $_POST['address']."<br>";
	echo $_POST['birthDate']."<br>";
	echo $_POST['sex']."<br>";
	addUser($_POST['name'], $_POST['lastName'], $_POST['fatherName'], $_POST['sex'], $_POST['nationalCode'], "", $_POST['birthDate'], $_POST['address'], 1, "", "123");
?>
<?php include "footer.php"; ?>