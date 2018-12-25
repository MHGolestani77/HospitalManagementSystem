<?php
include "config.php";

function connection(){
	$con = mysqli_connect(Localhost, Username, Password);
    mysqli_set_charset($con,"utf8");
    mysqli_select_db($con, DBname);
    return $con;
}

//check char
function check($str){
	$cchar = "<>'';";
	for($i=0;$i<strlen($str);$i++){
		for($j=0;$j<strlen($cchar);$j++)
			if ($str[$i] == $cchar[$j]){
				$str[$i] = " ";
				break;
			}
	}
	return $str;
}

//users
function addUser($name, $lastName, $fatherName, $sex, $nationalCode, $phoneNumber, $birthDate, $address, $userLevelId, $insuranceEndTime, $password){
	$Insert = "INSERT INTO ".UserTable." (name, lastName, fatherName, sex, nationalCode, phoneNumber, birthDate, address, userLevelId, insuranceEndTime, password) 
	VALUES ('$name', '$lastName', '$fatherName', $sex, '$nationalCode', '$phoneNumber', '$birthDate', '$address', $userLevelId, '$insuranceEndTime', '".createPassWord($password, $nationalCode)."');";
	if (!checkUser($nationalCode))
		mysqli_query(connection(), $Insert);
	else
		echo "<script>window.location.href = 'http://localhost/HospitalManagementSystem/createUser/?result=error';</script>";
}

function editUser($var, $value, $nationalCode){
	$Update = "UPDATE ".UserTable." SET $var = '$value' WHERE nationalCode = $nationalCode;";
	mysqli_query(connection(), $Update);
}

function deleteUser($id){
	$Delete = "DELETE FROM ".UserTable." WHERE id = $id;";
	mysqli_query(connection(), $Delete);
}

function getUserData($nationalCode, $var){
	$sql = "select * from ".UserTable." where nationalCode = '$nationalCode'";
	$result = mysqli_query(connection(), $sql);
	$row = mysqli_fetch_assoc($result);
	return $row[$var];
}

function getNationalCode($id){
	$sql = "select * from ".UserTable." where id = '$id'";
	$result = mysqli_query(connection(), $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['nationalCode'];
}

function checkUser($nationalCode){
	$sql = "select * from ".UserTable." where nationalCode = '$nationalCode'";
	$result = mysqli_query(connection(), $sql);
	return mysqli_num_rows($result) > 0 ? 1 : 0;
}

//create & check password
function createPassWord($pw, $hash){
	return hash("sha384", $hash[0].$pw.$hash[strlen($hash)-1]);
}

function checkPassWord($un, $pw){
	$sql = "select * from ".UserTable." where nationalCode = '$un' AND password = '".createPassWord($pw, $un)."'";
	$result = mysqli_query(connection(), $sql);
	$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result))
		return $row['id'];
	else
		return 0;
}

function getUserLevelData($id){
	$sql = "select * from ".userLevelTable." where id = '$id'";
	$result = mysqli_query(connection(), $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['name'];
}

//ills
function setIll($nationalCode, $doctorId, $loginDate){
	$Insert = "INSERT INTO ".illsTable." (userId, doctorId, loginDate) 
	VALUES ('".getUserData($nationalCode, "id")."', '$doctorId', '$loginDate');";
	mysqli_query(connection(), $Insert);
}

function editIll($var, $value, $nationalCode){
	$Update = "UPDATE ".illsTable." SET $var = '$value' WHERE userId = ".getUserData($nationalCode, "id");
	mysqli_query(connection(), $Update);
}

function deleteIll($id){
	$Delete = "DELETE FROM ".illsTable." WHERE id = $id;";
	mysqli_query(connection(), $Delete);
}

function getIllData($id, $var){
	$sql = "select * from ".illsTable." where id = '$id'";
	$result = mysqli_query(connection(), $sql);
	$row = mysqli_fetch_assoc($result);
	return $row[$var];
}

//illness
function setIllness($id, $illnessId){
	$Insert = "INSERT INTO ".illnessTable." (illId, illnessId) 
	VALUES ('$id', '$illnessId');";
	mysqli_query(connection(), $Insert);
}

function getIllnessData($id, $var){
	$sql = "select * from ".illnessTable." where id = $id";
	$result = mysqli_query(connection(), $sql);
	$row = mysqli_fetch_assoc($result);
	return $row[$var];
}

function getIllnessId($illId, $illnessId){
	$sql = "select * from ".illnessTable." where illId = $illId AND illnessId = $illnessId";
	$result = mysqli_query(connection(), $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['id'];
}

function getIllnessDetail($id){
	$sql = "select * from ".illnessDetailsTable." where id = $id";
	$result = mysqli_query(connection(), $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['title'];
}


//admins
function setAdmin($userId){
	$Insert = "INSERT INTO ".adminsTable." (userId) 
	VALUES ('$userId');";
	mysqli_query(connection(), $Insert);
}

function deleteAdmin($id){
	$Delete = "DELETE FROM ".adminsTable." WHERE id = $id;";
	mysqli_query(connection(), $Delete);
}

function getAdminData($id, $var){
	$Delete = "select * from ".adminsTable." WHERE id = $id;";
	$result = mysqli_query(connection(), $Delete);
	$row = mysqli_fetch_assoc($result);
	return $row[$var];
}

//clerks
function setClerk($userId){
	$Insert = "INSERT INTO ".clerksTable." (userId) 
	VALUES ('$userId');";
	mysqli_query(connection(), $Insert);
}

function deleteClerk($id){
	$Delete = "DELETE FROM ".clerksTable." WHERE id = $id;";
	mysqli_query(connection(), $Delete);
}

function getClerkData($id, $var){
	$sql = "select * from ".clerksTable." WHERE id = $id;";
	$result = mysqli_query(connection(), $sql);
	$row = mysqli_fetch_assoc($result);
	return $row[$var];
}

//doctors
function setDoctor($userId, $expert){
	$Insert = "INSERT INTO ".doctorsTable." (userId, expert, specialId) 
	VALUES ('$userId', '$expert', '".rand(12345,99999)."');";
	mysqli_query(connection(), $Insert);
} 

function setDoctorExpert($expert, $id){
	$Update = "UPDATE ".doctorsTable." SET expert = '$expert', specialId = '".$expert[0]."-".getDoctorData($id, "specialId")."' where id = $id;";
	mysqli_query(connection(), $Update);
} 

function deleteDoctor($id){
	$Delete = "DELETE FROM ".doctorsTable." WHERE id = $id;";
	mysqli_query(connection(), $Delete);
}

function getDoctorData($id, $var){
	$sql = "select * from ".doctorsTable." WHERE id = $id;";
	$result = mysqli_query(connection(), $sql);
	$row = mysqli_fetch_assoc($result);
	return $row[$var];
}

function getDoctorId($userId){
	$sql = "select * from ".doctorsTable." WHERE userId = $userId;";
	$result = mysqli_query(connection(), $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['id'];
}

//massages
function createMassage(){

}

function editMassage(){

}

function deleteMassage(){

}

//process
function addProcess($illnessId, $title, $rank){
	$Insert = "INSERT INTO ".processTable." (illnessId, title, rank) 
	VALUES ($illnessId, '$title', $rank);";
	mysqli_query(connection(), $Insert);
}

function editProcess(){

}

function deleteProcess(){

}

//medicine
function setMedicine($illnessId, $title){
	$Insert = "INSERT INTO ".medicineTable." (illnessId, title) 
	VALUES ($illnessId, '$title');";
	mysqli_query(connection(), $Insert);
}

function editMedicine(){

}

function deleteMedicine(){

}
