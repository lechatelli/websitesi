<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = ""; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$selectedDate = $_POST['selectedDate']; 
$time = $_POST['time']; 


$sql = "SELECT COUNT(*) as count FROM isler1 WHERE tarih = ? AND saat = ?"; 

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $selectedDate, $time); 
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();


if ($row['count'] >= 3) {
    echo json_encode(['available' => false]); 
} else {
    echo json_encode(['available' => true]); 
}

$stmt->close();
$conn->close();
?>
