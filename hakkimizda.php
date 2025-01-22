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
    <title>WeddNight-Hakkımızda</title>
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
    <main class="about-page">
        <section class="about-us-section">
            <div class="about-text">
                <h1>Weddnight</h1>
                <h2>"Anılarınızın sonsuza dek parlaması için buradayız."</h2>
                <p>
                    Weddnight, sevginizi ve hikayenizi en estetik ve doğal karelerle anlatmak için burada. 
                    Her bir çekimde, sizin için masalsı bir atmosfer yaratıyor, eşsiz mekanlarla anılarınızı büyülü bir hikayeye dönüştürüyoruz.
                </p>
                <p>
                    Düğün gününüz, yalnızca bir tarih değil; aşkınızın yansımasıdır. Weddnight, bu özel gününüzde hayallerinizi gerçeğe dönüştürmek için en küçük ayrıntıya bile değer verir.
                </p>
            </div>
            <div class="about-gallery">
                <div class="gallery-grid">
                    <img src="fotolar/anasayfa/4.jpg" alt="Dış Çekim 1">
                    <img src="fotolar/anasayfa/5.jpg" alt="Dış Çekim 2">
                    <img src="fotolar/anasayfa/16.jpg" alt="Dış Çekim 3">
                    <img src="fotolar/anasayfa/7.jpg" alt="Dış Çekim 4">
                    <img src="fotolar/anasayfa/8.jpg" alt="Dış Çekim 5">
                    <img src="fotolar/anasayfa/9.jpg" alt="Dış Çekim 6">
                    <img src="fotolar/anasayfa/10.jpg" alt="Dış Çekim 7">
                    <img src="fotolar/anasayfa/11.jpg" alt="Dış Çekim 8">
                    <img src="fotolar/anasayfa/12.jpg" alt="Dış Çekim 9">
                   
                </div>
            </div>
        </section>
        
        

        <section class="video-section">
            <h2>Ajans Ruby Tanıtım Filmi</h2>
            <video controls>
                <source src="ajans-ruby-tanitim-filmi.mp4" type="video/mp4">
                Tarayıcınız bu videoyu desteklemiyor.
            </video>
        </section>

        <section class="photo-gallery">
            <h2>Hizmetlerimizden Örnekler</h2>
            <div class="gallery">
                <img src="fotolar/doga/1.jpg" alt="Çift Fotoğrafı 1">
                <img src="fotolar/istanbul/2.jpg" alt="Çift Fotoğrafı 2">
                <img src="fotolar/istanbul/3.jpg" alt="Çift Fotoğrafı 3">
                <img src="fotolar/doga/4.jpg" alt="Çift Fotoğrafı 4">
                <img src="fotolar/doga/5.jpg" alt="Çift Fotoğrafı 5">
                <img src="fotolar/doga/6.jpg" alt="Çift Fotoğrafı 6">
                
            </div>
            <div class="services-link">
                <a href="hizmetlerimiz.php">Hizmetlerimizin Devamı</a>
            </div>
        </section>
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
            <a href="" target="_blank">
                <i class="fa-brands fa-instagram"></i> @weddnight
            </a> <!-- Instagram linki ve simgesi -->
        </div>
    </div>
    <div class="footer-copyright">
        <p>Copyright 2024 WEDDNIGHT. Tüm hakları saklıdır.</p> <!-- Telif hakkı metni -->
    </div>
</footer>
<script>
    document.addEventListener('scroll', () => {
        const gallery = document.querySelector('.gallery-grid');
        const scrollPosition = window.scrollY;

        // Sayfa aşağı kaydırıldığında aşağı, yukarı kaydırıldığında yukarı hareket eder
        gallery.style.transform = `translateY(${-scrollPosition / 2}px)`;
    });
</script>
    
</body>
</html>