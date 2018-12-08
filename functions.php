<?php
include "config.php";

function connection(){
	$con = mysqli_connect("127.0.0.1","root","");
    mysqli_set_charset($con,"utf8");
    mysqli_select_db($con, DBname);
    return $con;
}

//users
function addUser(){

}

function editUser(){

}

function deleteUser(){

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
