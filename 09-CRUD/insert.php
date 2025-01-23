<?php
// Database connection
$host = 'localhost';
$db_users = 'root';
$db_password = '';
$db_name = 'crud';

$connection = mysqli_connect($host, $db_users, $db_password, $db_name);

if(!$connection){
	echo "Database connection error!";
}

// Inser Data

$username = $_REQUEST['username'];
$useremail = $_REQUEST['email'];
$userpass = $_REQUEST['password'];

$sql = "INSERT INTO users (name, email, password) VALUES ('$username', '$useremail', '$userpass')";

$insert_data =mysqli_query($connection, $sql);

if($insert_data){
	echo "Data inserted";
}