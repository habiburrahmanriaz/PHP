<?php

// Connect Database
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "testdb";

$conn = mysqli_connect($servername, $db_username, $db_password);

if($conn){
  echo "Database connected!";
}

// Insert data to database

$sql = "INSERT INTO users (name, email, password) VALUES ('Habib', 'habib@gmail.com', '1234')";


$insert_user = mysqli_query($conn, $sql);

if($insert_user){
  echo "User Created!";
}
