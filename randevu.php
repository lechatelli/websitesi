<?php
session_start(); // Oturumu başlatıyoruz
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo/1.png" type="image/png">
    <title>WeddNight-Randevu</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/15c5495921.js" crossorigin="anonymous"></script>
</head>
<body>
    

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
    <section class="booking-section">
    <div class="booking-header">
        <h1>WeddNight</h1>
        <p>Unutulmaz bir düğün için erken gelen fırsatlar! Aralık kampanyamızla birlikte, rüya gibi bir düğün fotoğrafçılığı deneyimi sizi bekliyor. Paketlerimizi keşfedin ve sizin için en uygun olanı seçin. Şimdi randevunuzu oluşturun!</p>
    </div>
    
    <div class="packages">
        <div class="package">
            <h3>FOTOĞRAF ÇEKİMİ</h3>
            <img src="fotolar/kumsal/10.jpg" alt="Dış Çekim">
            <p>Dış çekim fotoğrafçılığı ile düğün gününüzü ölümsüzleştirin.</p>
            
        </div>
        <div class="package">
            <h3>VİDEO ÇEKİMİ</h3>
            <img src="fotolar/hizmetlerimiz/dügünhikayesi.png" alt="Video Çekim">
            <p>Video çekimi ile anılarınızı ölümsüzleştirin.</p>
            
        </div>
        <div class="package">
            <h3>DRONE ÇEKİMİ</h3>
            <img src="fotolar/hizmetlerimiz/drone.png" alt="Dış Çekim">
            <p>Mutluluğunuzu farklı bir açıdan ölümsüzleştiriyoruz.</p>
            
        </div>
       
    </div>
    
    <div class="booking-button">
        <a href="https://wa.me/905347924343" target="_blank" class="btn">Randevu Oluştur</a>
    </div>
</section>
 <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h2>WN Hakkında</h2>
                <a href="hakkimizda.php">Hakkımızda</a>
                <a href="ajansruby.html">Ekip</a>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-section">
                <h2>Rezervasyon</h2>
                <a href="#">Rezervasyon Oluştur</a>
                <a href="#">Erken Rezervasyon</a>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-section">
                <h2>Sosyal Medya Hesaplarımız</h2>
                <a href="" target="_blank">
                    <i class="fa-brands fa-instagram"></i> @weddnight
                </a>
            </div>
        </div>
        <div class="footer-copyright">
            <p>Copyright 2024 WEDDNIGHT. Tüm hakları saklıdır.</p>
        </div>
    </footer>
    <script>
      
        document.getElementById('menu-toggle').addEventListener('click', function() {
            
            document.getElementById('nav-links').classList.toggle('active');
          
            this.classList.toggle('active');
        });
    </script>
</body>
</html>
