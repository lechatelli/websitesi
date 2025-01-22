<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo/1.png" type="image/png">
    <title>WeddNight-SSS</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="logo/1.png" type="image/png">
    <script src="https://kit.fontawesome.com/15c5495921.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="announcement">
        <a href="randevu.php" class="blink-text">🎉 2025 Rezervasyonları Aralık'ta Başlıyor</a>
    </div>
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
    <main class="faq-page">
        <h1>Sıkça Sorulan Sorular</h1>
        <div class="faq-list">
            <div class="faq-item">
                <h3>Dış çekimlerde hava şartları nasıl yönetiliyor?</h3>
                <p>Çekim gününden önce hava durumunu kontrol ediyoruz. Yağış gibi durumlarda yedek plan yapıyoruz.</p>
            </div>
            <div class="faq-item">
                <h3>Hangi ekipmanlarla çekim yapıyorsunuz?</h3>
                <p>Profesyonel fotoğraf makineleri, drone ve ışık ekipmanları kullanıyoruz.</p>
            </div>
            <div class="faq-item">
                <h3>Dış çekim fiyatları nasıl belirleniyor?</h3>
                <p>Çekim süresi, mekanlar ve ekstra taleplere göre fiyatlandırma yapıyoruz.</p>
            </div>
            <div class="faq-item">
                <h3>Düğün hikayesi çekimi de yapıyor musunuz?</h3>
                <p>Evet, düğün gününüzü baştan sona hikaye şeklinde anlatan çekimler yapıyoruz.</p>
            </div>
            <div class="faq-item">
                <h3>Drone çekimide yapıyor musunuz?</h3>
                <p>Drone ile geniş açılı çekimler yaparak anılarınızı benzersiz hale getiriyoruz.</p>
            </div>
            <div class="faq-item">
                <h3>Çekim sonrasında kaç fotoğraf teslim ediyorsunuz?</h3>
                <p>Seçtiğiniz pakete bağlı olarak genellikle 20 ile 30 arası düzenlenmiş fotoğraf teslim ediyoruz.</p>
            </div>
            <div class="faq-item">
                <h3>Çekimler sırasında müzik desteği sağlanıyor mu?</h3>
                <p>Evet, çekimlerde rahatlamanız için istediğiniz tarzda müzik desteği sağlıyoruz.</p>
            </div>
            
            <div class="faq-item">
                <h3>Çekimlerden önce prova yapıyor musunuz?</h3>
                <p>Evet, çekimden önce mekan ve konsept provası yapıyoruz.</p>
            </div>
           
        </div>
        <div class="contact-redirect">
            <a href="iletişim.php">Daha fazla sorunuz mu var? Bize ulaşın</a>
        </div>
    </main>
    
    
    
    
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
</body>
</html>