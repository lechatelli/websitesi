<?php

$servername = "localhost"; 
$username = "";        
$password = "";            
$dbname = "";        


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$conn->set_charset("utf8");



?>
