<?php
$host = '172.16.11.162'; 
$username = 'user'; 
$password = 'user_password'; 
$database = 'test';
$con =  mysqli_connect($host, $username, $password, $database);
if (!$con) {
    die("Failed to connect to MySQL: ");
    
  }

   
?>
