<?php
$host = 'localhost';      
$user = 'root';           
$password = '';           
$database = 'blog';       

$conn = new mysqli($host, $user, $password, $database);

$conn->set_charset('utf8mb4');
?>