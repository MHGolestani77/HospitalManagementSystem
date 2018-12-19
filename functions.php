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
	mysqli_query(connection(), $Insert);
}

function editUser($var, $value, $nationalCode){
	$Update = "UPDATE ".UserTable." SET $var = '$value' WHERE nationalCode = $nationalCode;";
	mysqli_query(connection(), $Update);
}

function deleteUser($id){
	$Delete = "DELETE FROM ".UserTable." WHERE id = $id;";
	mysqli_query(connection(), $Delete);
}
function getUserDate($nationalCode, $var){
	$sql = "select * from ".UserTable." where nationalCode = '$nationalCode'";
	$result = mysqli_query(connection(), $sql);
	$row = mysqli_fetch_assoc($result);
	return $row[$var];
}

//create & check password
function createPassWord($pw, $hash){
	return hash("sha384", $hash[0].$pw.$hash[strlen($hash)-1]);
}

function checkPassWord($us, $pw){
	return 1;
}

function getUserLevelData($id){
	$sql = "select * from ".userLevelTable." where id = '$id'";
	$result = mysqli_query(connection(), $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['name'];
}

//ills
function setIll(){

}

function editIll(){

}

function deleteIll(){

}


//clerks & doctors
function setEmploee(){

}

function editEmploee(){

}

function deleteEmploee(){

}

//massages
function createMassage(){

}

function editMassage(){

}

function deleteMassage(){

}

//process
function addProcess(){

}

function editProcess(){

}

function deleteProcess(){

}

//medicine
function setMedicine(){

}

function editMedicine(){

}

function deleteMedicine(){

}
