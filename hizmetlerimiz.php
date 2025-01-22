
<?php
session_start(); 
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="logo/1.png" type="image/png">
    <script src="https://kit.fontawesome.com/15c5495921.js" crossorigin="anonymous"></script>
    <title>WeddNight-Hizmetlerimiz</title>
    <style>
        
        body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #000;
    margin: 0;
    padding: 0;
}

.container {
    text-align: center;
    padding: 20px;
}

.content-box {
    border: 2px solid #ccc;
    padding: 20px;
    margin: 20px auto;
    width: 80%;
    background-color: #f2f2f2;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.content-box h1 {
    font-size: 2.5rem;
    color: #000;
    margin-bottom: 20px;
}

.content-box p {
    font-size: 1.2rem;
    line-height: 1.8;
    color: #000;
}

.grid {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    padding: 20px;
}

.box {
    border: 2px solid #ccc;
    width: 250px;
    padding: 10px;
    text-align: center;
    background-color: #f2f2f2;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.box:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.box img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    margin-bottom: 10px;
}

.box a {
    text-decoration: none;
    color: #000;
    font-size: 1.1rem;
    font-weight: bold;
}

.box a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .grid {
        flex-direction: column;
        align-items: center;
    }
}

@media (max-width: 480px) {
    .grid {
        flex-direction: column;
        gap: 15px;
    }
}


    </style>
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
                <!-- Kullanıcı durumu kontrolü -->
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="profilim.php">Profilim</a></li>
                <?php else: ?>
                    <li><a href="girisyap.php">Üye Girişi</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <!-- Hamburger Menüsü -->
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
            <!-- Kullanıcı durumu kontrolü -->
            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="profilim.php">Profilim</a></li>
            <?php else: ?>
                <li><a href="girisyap.php">Üye Girişi</a></li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="container">
        <div class="content-box">
            <h1 >Weddnight ile Aşkınızın En Güzel Hikayesini Yazın</h1>
            <p>Hayatınızın en özel gününü, büyüleyici bir hikayeye dönüştürmek için buradayız. Her bir karede, sevginizi, tutkunuzu ve mutluluğunuzu ölümsüzleştiriyoruz. Biz sadece fotoğraflar çekmiyoruz; anılarınızı yakalıyor, rüyalarınızı gerçekleştiriyoruz. Weddnight ile o büyülü günü her baktığınızda yeniden yaşayacaksınız.</p>
        </div>

        <div class="grid">
            <div class="box">
                <a href="discekim.php">
                    <img src="fotolar/kumsal/9.jpg" alt="Dış Çekim">
                    <div>Dış Çekim</div>
                </a>
            </div>
            <div class="box">
                <a href="dugunhikayesi.php">
                    <img src="fotolar/hizmetlerimiz/dügünhikayesi.png" alt="Düğün Hikayesi">
                    <div>Düğün Hikayesi</div>
                </a>
            </div>
            <div class="box">
                <a href="drone.php">
                    <img src="fotolar/hizmetlerimiz/drone.png" alt="Video Çekimi">
                    <div>Drone Çekimi</div>
                </a>
            </div>
            
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h2>WN Hakkında</h2> <!-- Başlık 1 -->
                <a href="hakkimizda.php">Hakkımızda</a> <!-- Hakkımızda sayfasına link -->
                <a href="ajansruby.html">Ekip</a> <!-- Ekip sayfasına link -->
            </div>
            <div class="footer-divider"></div> <!-- Başlıklar arası çizgi -->
            <div class="footer-section">
                <h2>Rezervasyon</h2> <!-- Başlık 2 -->
                <a href="#">Rezervasyon Oluştur</a> <!-- Rezervasyon oluşturma linki -->
                <a href="#">Erken Rezervasyon</a> <!-- Erken rezervasyon linki -->
            </div>
            <div class="footer-divider"></div> <!-- Başlıklar arası çizgi -->
            <div class="footer-section">
                <h2>Sosyal Medya Hesaplarımız</h2> <!-- Başlık 3 -->
                <a href="" target="_blank">
                    <i class="fa-brands fa-instagram"></i> @weddnight
                </a> <!-- Instagram linki ve simgesi -->
            </div>
        </div>
        <div class="footer-copyright">
            <p>Copyright 2024 WEDDNIGHT. Tüm hakları saklıdır.</p> <!-- Telif hakkı metni -->
        </div>
    </footer>
</body>
</html>