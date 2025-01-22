<?php
session_start(); // Oturumu başlatıyoruz
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="logo/1.png" type="image/png">
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

    </header>
    <body>
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
    <div class="discekim-header">
    <h2>Dış Çekim</h2>
</div>

<div class="sunset-text-container-discekim">
    <h1 class="sunset-highlight-text-discekim">Gün Batımında,</h1>
    <h2 class="sunset-sub-text-discekim">Her Karede Bir Hikâye.</h2>
    <p class="sunset-description-text-discekim">
        Doğanın büyüsünü anılarınıza taşıyan renkler ve eşsiz atmosferle, unutulmaz dış çekim deneyimleri sizlerle.
    </p>
</div>

<section class="video-photo-section-discekim">
    <div class="video-container-discekim">
        <video class="highlight-video-discekim" autoplay muted loop controls>
            <source src="instagram1/uğur ecem dış çekim-.mp4" type="video/mp4">
            Tarayıcınız video oynatmayı desteklemiyor.
        </video>
    </div>
    <div class="photo-groups-discekim">
        <div class="photo-card-discekim" onclick="openGallery('kumsal')">
            <img src="fotolar/kumsal/10.jpg" alt="Kumsal">
            <p>Kumsal</p>
        </div>
        <div class="photo-card-discekim" onclick="openGallery('dogayla-ic-ice')">
            <img src="logo/anasayfa7.jpg" alt="Doğa ile İç İçe">
            <p>Doğa ile İç İçe</p>
        </div>
        <div class="photo-card-discekim" onclick="openGallery('tarihi-mekanlar')">
            <img src="instagram1/DSC01178.JPG" alt="Tarihi Mekanlar">
            <p>Tarihi Mekanlar</p>
        </div>
        <div class="photo-card-discekim" onclick="openGallery('istanbul-sokaklari')">
            <img src="logo/anasayfa5.jpg" alt="İstanbul Sokakları">
            <p>İstanbul Sokakları</p>
        </div>
    </div>
</section>

<div class="view-more-section-discekim">
    <button class="view-more-btn-discekim" onclick="openMorePhotosGallery()">Daha Fazla Fotoğraf +</button>
</div>

<div class="process-section-discekim">
    <h1 class="process-title-discekim">Süreç Nasıl İşliyor?</h1>
    <h3 class="process-subtitle-discekim">Hayal ettiğiniz fotoğraflar, zamana meydan okuyor.</h3>
    <div class="process-container-discekim">
        <div class="process-step-discekim">
            <div class="process-icon-discekim">📅</div>
            <h4>Tarih Netleştirme</h4>
            <p>Çekim günümüzü ve saatimizi belirliyoruz.</p>
        </div>
        <div class="process-step-discekim">
            <div class="process-icon-discekim">📍</div>
            <h4>Çekim Alanı Belirleme</h4>
            <p>Dış çekimimizi nerede gerçekleştireceğimizi planlıyoruz. Örnek olarak Şile, Fenerbahçe Parkı, platolar, sizin istediğiniz mekanlar.</p>
        </div>
        <div class="process-step-discekim">
            <div class="process-icon-discekim">💄</div>
            <h4>Hazırlık Süreci</h4>
            <p>Eğer dış çekimimizde klibimiz de varsa, istek olarak kuaförde çekime başlıyoruz.</p>
        </div>
        <div class="process-step-discekim">
            <div class="process-icon-discekim">📸</div>
            <h4>Çekim Başlangıcı</h4>
            <p>Ekipmanlar hazır olduğunda çekime geçilir.</p>
        </div>
        <div class="process-step-discekim">
            <div class="process-icon-discekim">🤵📷</div>
            <h4>Profesyonel Yönlendirme</h4>
            <p>Poz veremiyorum diyorsanız, Weddnight ailesi profesyonel fotoğrafçılarla çalışır.</p>
        </div>
        <div class="process-step-discekim">
            <div class="process-icon-discekim">⏳</div>
            <h4>Çekim Saati</h4>
            <p>Ortalama çekimlerimiz 1-1,5 saat arası sürüyor.</p>
        </div>
        <div class="process-step-discekim">
            <div class="process-icon-discekim">📷✨</div>
            <h4>Poz Sayısı</h4>
            <p>Ortalama 600-1000 kare arası değişiyor.</p>
        </div>
        <div class="process-step-discekim">
            <div class="process-icon-discekim">📦📩</div>
            <h4>Teslimat Süresi ve Çeşitleri</h4>
            <p>Çekimlerimizden sonra en geç 2 hafta içerisinde dijital olarak teslim ediyoruz. İsterseniz ajansımıza gelip bellek yöntemiyle de teslim alabilirsiniz.</p>
        </div>
    </div>
</div>




    <!-- Script -->
    <script src="scripts2024.js"></script>
  



</body>



        
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