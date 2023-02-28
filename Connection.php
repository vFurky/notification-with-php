<?php

if(!isset($_SESSION)) { 
	session_start(); 
};

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "notification";

try {
	$db = new PDO("mysql:host=$db_host;dbname=$db_name", "$db_user", "$db_pass");
}

catch (PDOExpection $e) {
	echo "Bir hata oluştu.";
	die;
}