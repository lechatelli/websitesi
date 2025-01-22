<?php
session_start(); // Kullanıcı oturumunu başlatıyoruz.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen veriler
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Veritabanı bağlantısı
    $servername = "localhost";
    $username = ""; // Veritabanı kullanıcı adı
    $db_password = ""; // Veritabanı şifresi
    $dbname = "";

    // Veritabanına bağlanıyoruz
    $conn = new mysqli($servername, $username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // E-posta ile kullanıcıyı sorguluyoruz
    $sql = "SELECT id, password FROM  WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Kullanıcı var mı kontrolü
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();

        // Şifreyi kontrol ediyoruz
        if (password_verify($password, $hashed_password)) {
            // Başarılı giriş, oturumu başlatıyoruz
            $_SESSION['user_id'] = $user_id;
            header("Location: profilim.php"); // Profil sayfasına yönlendiriyoruz
        } else {
            $error = "Şifre hatalı.";
        }
    } else {
        $error = "E-posta adresi bulunamadı.";
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
    <title>WeddNight</title>
    
    <link rel="icon" href="logo/1.png" type="image/png">
    <link rel="stylesheet" href="uyegirisi.css">
</head>
<body >
    <div class="container">
        <div class="login-form">
            <h2>Üye Girişi</h2>
            <form action="girisyap.php" method="POST">
                <div class="input-group">
                    <label for="email">E-posta:</label>
                    <input type="email" id="email" name="email" required placeholder="E-posta adresinizi girin">
                </div>
                <div class="input-group">
                    <label for="password">Şifre:</label>
                    <input type="password" id="password" name="password" required placeholder="Şifrenizi girin">
                </div>
                <button type="submit">Giriş Yap</button>
            </form>
            <div class="account-info">
                <p>Hesabım yok? <a href="kayit.php">Hesap oluştur</a></p>
                <p><a href="config.php">Şifremi Unuttum</a></p> <!-- Şifremi Unuttum bağlantısı -->
            </div>
            <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
        </div>
    </div>
</body>
</html>
