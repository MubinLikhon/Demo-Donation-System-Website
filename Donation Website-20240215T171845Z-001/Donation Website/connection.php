<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "16121212";
$dbname = "user_info_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
	die("failed to connect!");
}