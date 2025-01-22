<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header("Location: uye_ol.php"); 
    exit();
}


$user_id = $_SESSION['user_id'];


$servername = "localhost";
$username = ""; 
$db_password = ""; 
$dbname = "";

$conn = new mysqli($servername, $username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT first_name, last_name FROM  * WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($first_name, $last_name);
$stmt->fetch();
$stmt->close();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo/1.png" type="image/png">
    <title>WeddNight-Profilim</title>
    
    <link rel="icon" href="logo/1.png" type="image/png">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/15c5495921.js" crossorigin="anonymous"></script>
</head>
<body>
   
    <script src="script.js"></script>

    <header>
    <div class="logo">
        <a href="index.php"><img src="logo/1.png" alt="Logo"></a>
        <a href="index.php" style="color: black; text-decoration: none; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold'; font-size: 1.5em; margin-top: -5px;">WeddNight</a>
        </div>
        <nav>
            <ul class="nav-links">
            <li><a href="index.php">Ana Sayfa</a></li>
                <li><a href="hizmetlerimiz.php">Hizmetlerimiz</a></li>
                <li><a href="hakkimizda.php">Hakkımızda</a></li>
                <li><a href="iletişim.php">İletişim</a></li>
                <li><a href="randevu.php">Rezervasyon Yap</a></li>
                
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="profilim.php">Profilim</a></li>
                <?php else: ?>
                    <li><a href="girisyap.php">Üye Girişi</a></li>
                <?php endif; ?>
            </ul>
        </nav>
       
        <div class="hamburger-menu">
            <a href="#menu-overlay" class="menu-icon">&#9776;</a>
        </div>
        </header>
        <div id="menu-overlay" class="menu-overlay">
        <a href="#" class="close-overlay">&times;</a>
        <ul class="overlay-links">
        <li><a href="index.php">Ana Sayfa</a></li>
            <li><a href="hizmetlerimiz.php">Hizmetlerimiz</a></li>
            <li><a href="hakkimizda.php">Hakkımızda</a></li>
            <li><a href="iletişim.php">İletişim</a></li>
            <li><a href="randevu.php">Rezervasyon Yap</a></li>
           
            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="profilim.php">Profilim</a></li>
            <?php else: ?>
                <li><a href="girisyap.php">Üye Girişi</a></li>
            <?php endif; ?>
        </ul>
    </div>
<body>
    <div class="container">
        <div class="profile-box">
            <h2>Hoş Geldin, <?php echo htmlspecialchars($first_name . " " . $last_name); ?>!</h2>
            <p>HALA GELİŞTİRİLME AŞAMASINDA SABRINIZ İÇİN TEŞEKKÜRLER</p>

            <div class="package-box">
                <h3>Satın Aldığım Paketler</h3>
                <!-- Şu an için boş bir alan -->
                <p>Henüz bir paket satın almadınız.</p>
            </div>

            <!-- Çıkış Yap Butonu -->
            <a href="logout.php" class="logout-button">Çıkış Yap</a>
        </div>
    </div>
</body>
</html>
