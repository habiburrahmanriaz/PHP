<?php
$host = 'localhost';
$db_user = 'root';
$db_password = 'password';
$db_table_name = 'users';


$connection = mysqli_connect($host, $db_user, $db_password, $db_table_name);

if(!$connection){
  echo "Database connection is error";
}