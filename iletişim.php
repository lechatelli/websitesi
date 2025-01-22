<?php
session_start(); // Oturumu başlatıyoruz
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="logo/1.png" type="image/png">
    <script src="https://kit.fontawesome.com/15c5495921.js" crossorigin="anonymous"></script>
    <title>WeddNight-İletişim</title>
    
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
    <main class="contact-page">
        <h1>BİZİMLE İLETİŞİME GEÇİN</h1>
        <p>Her türlü soru, öneri ve talepleriniz için bize ulaşabilirsiniz.</p>

        <div class="contact-info">
            <div class="info-box">
                <i class="fa-solid fa-phone fa-2x"></i>
                <h3>Telefon</h3>
                <p></p>
            </div>
            <div class="info-box">
                <i class="fa-solid fa-location-dot fa-2x"></i>
                <h3>Adres</h3>
                <p></p>
            </div>
            <div class="info-box">
                <i class="fa-brands fa-instagram fa-2x"></i>
                <h3>Instagram</h3>
                <a href="" target="_blank"></a>
            </div>
            <div class="info-box">
                <i class="fa-brands fa-whatsapp fa-2x"></i>
                <h3>WhatsApp</h3>
                <a href="" target="_blank"></a>
            </div>
            
        </div>

        <h2>Bize Mesaj Gönderin</h2>
        <form action="send_mail.php" method="post" class="contact-form">
            <label for="name">Ad Soyad</label>
            <input type="text" id="name" name="name" placeholder="Adınızı ve soyadınızı girin" required>
            
            <label for="email">E-posta</label>
            <input type="email" id="email" name="email" placeholder="E-posta adresinizi girin" required>
            
            <label for="message">Mesaj</label>
            <textarea id="message" name="message" rows="5" placeholder="Mesajınızı buraya yazın" required></textarea>
            
            <button type="submit" class="submit-btn">Gönder</button>
        </form>
        <script>
            // Mesaj kutusunu seç ve otomatik boyutlandırmayı uygula
            document.querySelectorAll('textarea').forEach((textarea) => {
                textarea.addEventListener('input', function () {
                    this.style.height = 'auto'; // Önce yüksekliği sıfırla
                    this.style.height = this.scrollHeight + 'px'; // İçeriğe göre büyüt
                });
            });
        </script>
        
        
    </main>
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
                <a href="https://www.instagram.com/weddnight/" target="_blank">
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