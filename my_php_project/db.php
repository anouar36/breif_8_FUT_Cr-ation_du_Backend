<?php
$host = '192.168.1.205'; 
$username = 'user'; 
$password = 'user_password'; 
$database = 'test';
$con =  mysqli_connect($host, $username, $password, $database);
if (!$con) {
    die("Failed to connect to MySQL: ");
    
  }

   
?>
