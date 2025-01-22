
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeddNight</title>
    
    <link rel="icon" href="logo/1.png" type="image/png">
    <link rel="stylesheet" href="uyeol.css">
</head>
<body>
    <div class="container">
        <div class="register-form">
            <h2>Üye Ol</h2>
            <form action="kayit.php" method="POST">
                <div class="input-group">
                    <label for="first_name">İsim:</label>
                    <input type="text" id="first_name" name="first_name" required placeholder="İsminizi girin">
                </div>
                <div class="input-group">
                    <label for="last_name">Soyisim:</label>
                    <input type="text" id="last_name" name="last_name" required placeholder="Soyisminizi girin">
                </div>
                <div class="input-group">
                    <label for="phone">Telefon Numarası:</label>
                    <input type="text" id="phone" name="phone" required placeholder="Telefon numaranızı girin">
                </div>
                <div class="input-group">
                    <label for="email">E-posta:</label>
                    <input type="email" id="email" name="email" required placeholder="E-posta adresinizi girin">
                </div>
                <div class="input-group">
                    <label for="password">Şifre:</label>
                    <input type="password" id="password" name="password" required placeholder="Şifrenizi girin">
                </div>
                <div class="input-group">
                    <label for="confirm_password">Şifre Tekrarı:</label>
                    <input type="password" id="confirm_password" name="confirm_password" required placeholder="Şifrenizi tekrar girin">
                </div>
                <button type="submit">Üye Ol</button>
                <?php
$servername = "localhost";
$username = ""; 
$db_password = ""; 
$dbname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        die("Şifreler uyuşmuyor!");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $conn = new mysqli($servername, $username, $db_password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT id FROM uyeol WHERE email = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare hatası (email kontrolü): " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        die("Bu e-posta adresi zaten kayıtlı!");
    }

    $stmt->close();

   
    $sql = "INSERT INTO uyeol (first_name, last_name, phone, email, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare hatası (kullanıcı ekleme): " . $conn->error);
    }

    $stmt->bind_param("sssss", $first_name, $last_name, $phone, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "Kayıt başarılı! <a href='girisyap.php'>Giriş yap</a>";
    } else {
        die("Kayıt sırasında bir hata oluştu: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>

                
            </form>
            <div class="account-info">
                <p>Zaten üyeliğiniz var mı? <a href="girisyap.php">Giriş yap</a></p>
            </div>
        </div>
    </div>
</body>
</html>
