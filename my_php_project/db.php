<?php
$host = '192.168.1.150'; 
$username = 'root'; 
$password = 'root_password'; 
$database = 'test';
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
?>
