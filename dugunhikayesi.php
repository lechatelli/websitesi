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
    <title>WeddNight-Düğün Hikayesi</title>
    
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
    <div class="wedding-story988">
    <h2>Düğün Hikayesi</h2>
</div>

<div class="sunset-text-container-988">
    <h1 class="sunset-highlight-text-988">Hayallerinizdeki Anılar</h1>
    <h2 class="sunset-sub-text-988">Gerçekleştiriyoruz. <span class="gimbal-emoji">🎥</span></h2>
    <p class="sunset-description-text-988">
        Profesyonel ekip ve eşsiz mekanlarla, en özel günlerinizi ölümsüzleştiriyoruz.
    </p>
</div>

<div class="video-photo-section988">
    <div class="video-container988">
        <video class="highlight-video988" autoplay muted loop controls>
            <source src="burak zehra düğün.mp4" type="video/mp4">
            Tarayıcınız video oynatmayı desteklemiyor.
        </video>
    </div>
    <div class="video-groups988">
        <div class="video-card988" onclick="openVideoGallery988('discekimvideo988')">
            <p>Dış Çekim Hikayesi 🎥</p>
        </div>
        <div class="video-card988" onclick="openVideoGallery988('teaser988')">
            <p>Teaser 🎬</p>
        </div>
        <div class="video-card988" onclick="openVideoGallery988('doludoluklip988')">
            <p>Dolu Dolu Klip 📸</p>
        </div>
        <div class="video-card988" onclick="openReelsGallery988('reels/1.mp4', 1)">
    <p>Reels 🎞</p>
</div>


    </div>
</div>

<!-- Daha Fazla Klip -->
<div class="view-more-section988">
    <button class="view-more-btn988" onclick="openMoreVideosGallery988()">Daha Fazla Klip +</button>
</div>
<div id="gallery-overlay-new" class="gallery-overlay-new" style="display:none;">
    <div class="gallery-container-new">
        <button class="close-gallery-new" onclick="closeGallery988()">✖</button>
        <div class="gallery-video-wrapper-new">
            <video id="gallery-video-new" controls autoplay></video>
        </div>
        <div class="gallery-navigation-new">
            <button class="prev-video-new" onclick="navigateGallery988(-1)">❮</button>
            <button class="next-video-new" onclick="navigateGallery988(1)">❯</button>
        </div>
    </div>
</div>




<script>let currentVideoIndex988 = 1;

function openVideoGallery988(category) {
    const basePaths = {
        discekimvideo988: "discekimvideo/",
        teaser988: "teaser/",
        doludoluklip988: "doludoluklip/",
        reels988: "reels/"
    };

    const videoPath = basePaths[category];
    if (videoPath) {
        currentVideoIndex988 = 1; // İlk videoyu ayarla
        const galleryVideo = document.getElementById("gallery-video-new");
        galleryVideo.src = `${videoPath}${currentVideoIndex988}.mp4`;

        const overlay = document.getElementById("gallery-overlay-new");
        overlay.style.display = "flex"; // Galeriyi göster
    }
}

function navigateGallery988(direction) {
    const maxVideos = 3; // Video sayısı
    currentVideoIndex988 += direction;

    if (currentVideoIndex988 < 1) currentVideoIndex988 = maxVideos;
    if (currentVideoIndex988 > maxVideos) currentVideoIndex988 = 1;

    const galleryVideo = document.getElementById("gallery-video-new");
    const currentPath = galleryVideo.src.split("/").slice(0, -1).join("/");
    galleryVideo.src = `${currentPath}/${currentVideoIndex988}.mp4`;
}

function closeGallery988() {
    const overlay = document.getElementById("gallery-overlay-new");
    overlay.style.display = "none"; // Galeriyi gizle
}
let currentReelsIndex988 = 1; // Başlangıç videosu

function openReelsGallery988(videoUrl, index) {
    currentReelsIndex988 = index; // Geçerli videoyu takip etmek için
    const maxReelsVideos988 = 3; // Toplam Reels videosu sayısı

    const reelsHtml = `
        <div class="reels-gallery-overlay-988">
            <div class="reels-gallery-container-988">
                <button class="close-reels-gallery-988" onclick="closeReelsGallery988()">✖</button>
                <div class="reels-video-wrapper-988">
                    <video id="reels-video-player-988" src="${videoUrl}" controls autoplay class="reels-video-player-988"></video>
                </div>
                <div class="reels-navigation-988">
                    <button class="prev-reels-video-988" onclick="navigateReelsGallery988(-1, ${maxReelsVideos988})">❮</button>
                    <button class="next-reels-video-988" onclick="navigateReelsGallery988(1, ${maxReelsVideos988})">❯</button>
                </div>
            </div>
        </div>
    `;

    document.body.insertAdjacentHTML("beforeend", reelsHtml);
}

function closeReelsGallery988() {
    const overlay = document.querySelector(".reels-gallery-overlay-988");
    if (overlay) overlay.remove();
}

function navigateReelsGallery988(direction, maxVideos) {
    currentReelsIndex988 += direction;
    if (currentReelsIndex988 < 1) currentReelsIndex988 = maxVideos; // İlk videodan önce son videoya geç
    if (currentReelsIndex988 > maxVideos) currentReelsIndex988 = 1; // Son videodan sonra ilk videoya geç

    const videoPlayer = document.getElementById("reels-video-player-988");
    if (videoPlayer) {
        videoPlayer.src = `reels/${currentReelsIndex988}.mp4`;
        videoPlayer.play();
    }
}
function openMoreVideosGallery988() {
    const moreVideos = [
        "klip/1.mp4",
        "klip/2.mp4",
        "klip/3.mp4"
    ]; // Daha fazla kliplerin dosya yolları

    let galleryHtml = `
        <div class="gallery-overlay-new">
            <div class="gallery-container-new">
                <button class="close-gallery-new" onclick="closeGallery()">✖</button>
                <div class="gallery-video-wrapper-new">
                    <video src="${moreVideos[0]}" controls autoplay></video>
                </div>
                <div class="gallery-navigation-new">
                    <button class="prev-video-new" onclick="navigateMoreGallery988(-1)">❮</button>
                    <button class="next-video-new" onclick="navigateMoreGallery988(1)">❯</button>
                </div>
            </div>
        </div>
    `;

    document.body.insertAdjacentHTML("beforeend", galleryHtml);

    // Varsayılan video indexi
    window.currentMoreVideoIndex = 0;
    window.moreVideos = moreVideos;
}

function navigateMoreGallery988(direction) {
    const videoElement = document.querySelector(".gallery-video-wrapper-new video");
    if (!videoElement) return;

    // Güncel video indeksini güncelle
    window.currentMoreVideoIndex += direction;
    if (window.currentMoreVideoIndex < 0) {
        window.currentMoreVideoIndex = window.moreVideos.length - 1;
    } else if (window.currentMoreVideoIndex >= window.moreVideos.length) {
        window.currentMoreVideoIndex = 0;
    }

    // Yeni video yolunu ata
    videoElement.src = window.moreVideos[window.currentMoreVideoIndex];
    videoElement.play();
}
function closeGallery() {
    const overlay = document.querySelector(".gallery-overlay-new");
    if (overlay) {
        overlay.remove(); // Galeri kapatılır
    }
}








</script>



<!-- Süreç Nasıl Gerçekleşiyor? -->
<div class="process-section2024">
    <h2 class="process-title2024">Süreç Nasıl İşliyor?</h2>
    <h3 class="process-subtitle2024">Hayal ettiğiniz hikaye, bizimle hayat buluyor.</h3>
    <div class="process-scroll-container2024">
        <div class="process-step2024">
            <div class="process-icon2024">📅</div>
            <h4>Tarih ve Saat Belirleme</h4>
            <p>Çekim gününüz ve saatiniz için en uygun planlamayı yapıyoruz.</p>
        </div>
        <div class="process-step2024">
            <div class="process-icon2024">🎥</div>
            <h4>Hikaye Türü Seçimi</h4>
            <p>İster sade bir teaser, ister dolu dolu bir klip! İhtiyacınıza göre hikaye türünü belirliyoruz.</p>
        </div>
        <div class="process-step2024">
            <div class="process-icon2024">💄</div>
            <h4>Hazırlık ve Başlangıç</h4>
            <p>Kuaförden itibaren başlayan çekim, anılarınızı özel kılacak detaylarla dolu.</p>
        </div>
        <div class="process-step2024">
            <div class="process-icon2024">📸</div>
            <h4>Çekim Süreci</h4>
            <p>Profesyonel ekipmanlarla, en doğal ve en özel anlarınızı kaydediyoruz.</p>
        </div>
        <div class="process-step2024">
            <div class="process-icon2024">🎬</div>
            <h4>Kurgu ve Montaj</h4>
            <p>Çekim sonrası montaj sürecimiz, en güzel anlarınızı kusursuz bir hikayeye dönüştürür.</p>
        </div>
        <div class="process-step2024">
            <div class="process-icon2024">📦</div>
            <h4>Hızlı Teslimat</h4>
            <p>Tüm hikayeler, dijital veya talep üzerine USB formatında teslim edilir.</p>
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