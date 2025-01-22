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
    <title>WeddNight-Drone</title>
    
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
    <section class="drone-highlights">
        <div class="highlight-box">
            <img src="fotolar/drone/1.png" alt="Manzara Çekimi">
            <h3>Dış Çekim </h3>
            <p>Drone ile doğanın büyüsünü yükseklerden yakalayın.</p>
        </div>
        <div class="highlight-box">
            <img src="fotolar/drone/2.png" alt="Düğün Drone Çekimi">
            <h3>Düğün Drone Çekimi</h3>
            <p>Mutluluğunuzu farklı bir açıdan ölümsüzleştiriyoruz.</p>
        </div>
        <div class="highlight-box">
            <img src="fotolar/drone/3.png" alt="Havadan Organizasyon">
            <h3>Havadan Organizasyon</h3>
            <p>Büyük etkinliklerinizi detaylı ve geniş açıyla kayıt altına alın.</p>
        </div>
    </section>
    <div id="video-gallery-modal" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close" onclick="closeGallery()">&times;</span>
        <button class="prev" onclick="changeVideo(-1)">&#8249;</button>
        <video id="gallery-video" controls>
            <source id="video-source" src="videos/drone1.mp4" type="video/mp4">
            Tarayıcınız bu videoyu desteklemiyor.
        </video>
        <button class="next" onclick="changeVideo(1)">&#8250;</button>
    </div>
</div>
    

    <section class="drone-about">
        <h2>Drone Çekimi Hakkında</h2>
        <p>
            Drone teknolojisi sayesinde anılarınızı havadan çekimle daha etkileyici hale getiriyoruz. 
            Profesyonel ekipman ve uzman pilotlarla hizmetinizdeyiz. Hem iç mekan hem de dış mekan çekimleri için 
            özel çözümler sunuyoruz.
        </p>
    </section>
    <section class="drone-gallery">
    <button class="gallery-button" onclick="openGallery()">Drone Çekimi Örnekleri</button>
</section>
<script>
    let currentVideoIndex = 0; // Aktif videonun indeksini takip eder
const videos = [
    "fotolar/drone/drone1.mp4",
    "fotolar/drone/drone2.mp4",
    "fotolar/drone/drone3.mp4",
    "fotolar/drone/drone4.mp4",
    "fotolar/drone/drone5.mp4"
];

function openGallery() {
    document.getElementById("video-gallery-modal").style.display = "flex";
    document.getElementById("video-source").src = videos[currentVideoIndex];
    document.getElementById("gallery-video").load();
}

function closeGallery() {
    document.getElementById("video-gallery-modal").style.display = "none";
}

function changeVideo(direction) {
    currentVideoIndex += direction;

    // Döngüsel geçiş
    if (currentVideoIndex < 0) {
        currentVideoIndex = videos.length - 1;
    } else if (currentVideoIndex >= videos.length) {
        currentVideoIndex = 0;
    }

    document.getElementById("video-source").src = videos[currentVideoIndex];
    document.getElementById("gallery-video").load();
}


</script>
    
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