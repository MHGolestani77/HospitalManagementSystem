<?php
include "config.php";

function connection(){
	$con = mysqli_connect(Localhost, Username, Password);
    mysqli_set_charset($con,"utf8");
    mysqli_select_db($con, DBname);
    return $con;
}

//users
function addUser($name, $lastName, $fatherName, $sex, $nationalCode, $phoneNumber, $birthDate, $address, $userLevelId, $insuranceEndTime, $password){
	$Insert = "INSERT INTO ".UserTable." (name, lastName, fatherName, sex, nationalCode, phoneNumber, birthDate, address, userLevelId, insuranceEndTime, password) 
	VALUES ('$name', '$lastName', '$fatherName', $sex, '$nationalCode', '$phoneNumber', '$birthDate', '$address', $userLevelId, '$insuranceEndTime', '$password');";
	mysqli_query(connection(), $Insert);
}

function editUser($var, $value, $id){
	$Update = "UPDATE ".UserTable." SET $var = '$value' WHERE id = $id;";
	mysqli_query(connection(), $Update);
}

function deleteUser($id){
	$Delete = "DELETE FROM ".UserTable." WHERE id = $id;";
	mysqli_query(connection(), $Delete);
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
