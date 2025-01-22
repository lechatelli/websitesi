<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require 'phpmailer/PHPMailer-master/src/Exception.php';
require 'phpmailer/PHPMailer-master/src/PHPMailer.php';
require 'phpmailer/PHPMailer-master/src/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

 
    $servername = "localhost";
    $username = "root";
    $db_password = "";
    $dbname = "";  

   
    $conn = new mysqli($servername, $username, $db_password, $dbname);

   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "SELECT id, email FROM uyeol WHERE email = ?";  
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Sorgu hazırlama hatası: " . $conn->error);
    }

    
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

  
    if ($stmt->num_rows > 0) {
       
        $token = bin2hex(random_bytes(50)); 
        $stmt->close();  

       
        $sql = "UPDATE uyeol SET reset_token = ? WHERE email = ?";  
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            die("Sorgu hazırlama hatası: " . $conn->error);
        }

        $stmt->bind_param("ss", $token, $email);
        $stmt->execute();

        
        $reset_link = "http://localhost/reset_password.php?token=" . $token;

        
        $mail = new PHPMailer(true);
        try {
           
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io'; 
            $mail->SMTPAuth = true;
            $mail->Username = 'your_username'; 
            $mail->Password = 'your_password';  
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

           
            $mail->setFrom('no-reply@example.com', '');
            $mail->addAddress($email);
            $mail->addReplyTo('no-reply@example.com', '');

           
            $mail->isHTML(true);
            $mail->Subject = 'Şifre Sıfırlama Talebi';
            $mail->Body    = 'Şifrenizi sıfırlamak için aşağıdaki bağlantıyı tıklayın:<br><a href="http://localhost/reset_password.php?token=' . $token . '">Şifre Sıfırlama Linki</a>';

            
            $mail->send();
            echo 'E-posta adresinize şifre sıfırlama bağlantısı gönderildi.';
        } catch (Exception $e) {
            echo "E-posta gönderilemedi. Hata: {$mail->ErrorInfo}";
        }
    } else {
        
        echo "Bu e-posta adresine ait bir hesap bulunamadı.";
    }

   
    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <link rel="icon" href="logo/1.png" type="image/png">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-size: 16px;
            margin-bottom: 10px;
            display: block;
        }
        input[type="email"] {
            width: 100%;
            padding: 5px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            justify-items: center;
            
        }
        button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Şifre Sıfırlama</h2>
        <form action="" method="POST">
            <label for="email">E-posta Adresiniz:</label>
            <input type="email" name="email" id="email" required>
            <button type="submit">Şifreyi Sıfırla</button>
        </form>
    </div>

</body>
</html>


