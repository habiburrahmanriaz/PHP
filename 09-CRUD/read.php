<?php

// Database connection
$host = 'localhost';
$db_user = 'root';
$db_password = 'password';
$db_name = 'crud';

$connection = mysqli_connect($host, $db_user, $db_password, $db_name);

if(!$connection){
  echo "Database connection error";
}

// Read Data 
$sql = "SELECT * FROM users";

$result = mysqli_query($connection, $sql);