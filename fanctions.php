<?php
include "config.php";
global $con=mysql_connect("127.0.0.1","root","");
    mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
    mysql_select_db(DBname,$con);

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
