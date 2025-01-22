<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeddNight</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="logo/1.png" type="image/png">
    <script src="https://kit.fontawesome.com/15c5495921.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <header>
        <div class="logo">
        <a href="index.php" ><img src="logo/1.png" alt="Logo"></a>
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
   

    

 

    <div class="slider">
        <div class="slides">
            <a href="https://wa.me/905437924343" target="_blank"><img src="fotolar/anasayfa/1.jpg" alt="Fotoğraf 1" class="active"></a>
            <a href="https://wa.me/905437924343" target="_blank"><img src="fotolar/anasayfa/2.jpg" alt="Fotoğraf 1" class="active"></a>
            <a href="https://wa.me/905437924343" target="_blank"><img src="fotolar/anasayfa/3.jpg" alt="Fotoğraf 1" class="active"></a>
           
            
            <div class="buton1">
                <i class="fa-solid fa-arrow-left fa-2x" onclick="prevSlide()"></i>
                <i class="fa-solid fa-arrow-right fa-2x" onclick="nextSlide()"></i>
            </div>
        </div>
    </div>

  
   

    <script>




       
        const slides = document.querySelectorAll('.slides img');
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                if (i === index) {
                    slide.classList.add('active');
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        setInterval(nextSlide, 7000); 

        
        showSlide(currentSlide);
    </script>
    <script src="https://kit.fontawesome.com/15c5495921.js" crossorigin="anonymous"></script>
    <div class="wedding-message">
        <h2>"Birlikte bir rüya yaratıyoruz; sadece bugüne değil, bir ömre hitap ediyoruz." </h2>
        <p>Lenslerimizle değil kalbimizle çekiyoruz.</p>
        <p></p>
        <div class="photo-carousel">
            <div class="carousel-track">
                <div class="carousel-row">
                    <img src="fotolar/anasayfa/4.jpg" alt="Düğün Fotoğrafı 1">
                    <img src="fotolar/anasayfa/5.jpg" alt="Düğün Fotoğrafı 2">
                    <img src="fotolar/anasayfa/6.jpg" alt="Düğün Fotoğrafı 3">
                    <img src="fotolar/anasayfa/7.jpg" alt="Düğün Fotoğrafı 4">
                    <img src="fotolar/anasayfa/8.jpg" alt="Düğün Fotoğrafı 5">
                    <img src="fotolar/anasayfa/9.jpg" alt="Düğün Fotoğrafı 6">
                </div>
                <div class="carousel-row">
                    <img src="fotolar/anasayfa/10.jpg" alt="Düğün Fotoğrafı 7">
                    <img src="fotolar/anasayfa/11.jpg" alt="Düğün Fotoğrafı 8">
                    <img src="fotolar/anasayfa/12.jpg" alt="Düğün Fotoğrafı 9">
                    <img src="fotolar/anasayfa/13.jpg" alt="Düğün Fotoğrafı 10">
                    <img src="fotolar/anasayfa/14.jpg" alt="Düğün Fotoğrafı 11">
                    <img src="fotolar/anasayfa/15.jpg" alt="Düğün Fotoğrafı 12">
                </div>
            </div>
        </div>
    </div>
    <div class="special-couples">
        <h2>Özel Çiftlerimiz</h2>
        <p>Hayatınızın en unutulmaz anı için bize güvenen çiftlerimizin yorumlarını keşfedin.</p>
        <div class="couples-grid">
            <div class="couple-card">
                <img src="fotolar/anasayfa/16.jpg" alt="Çift 1">
                <p class="comment">“Organizasyonunuz sayesinde her şey kusursuzdu. Unutulmaz bir gün yaşadık, teşekkürler!”</p>
                <p class="name">Ahmet & Zeynep</p>
            </div>
            <div class="couple-card">
                <img src="fotolar/anasayfa/17.jpg" alt="Çift 2">
                <p class="comment">“Ekip o kadar ilgili ve profesyoneldi ki kendimizi çok özel hissettik!”</p>
                <p class="name">Adem & Ayşe</p>
            </div>
            <div class="couple-card">
                <img src="fotolar/anasayfa/18.jpg" alt="Çift 3">
                <p class="comment">“Düğünümüzü rüya gibi yaşadık. Herkese tavsiye ediyoruz!”</p>
                <p class="name">Mehmet & Elif</p>
            </div>
            <div class="couple-card">
                <img src="fotolar/anasayfa/19.jpg" alt="Çift 4">
                <p class="comment">“Hayatımızın en mutlu gününü sizinle planladığımız için çok mutluyuz!”</p>
                <p class="name">Burak & Nazlı</p>
            </div>
            <div class="couple-card">
                <img src="fotolar/anasayfa/20.jpg" alt="Çift 5">
                <p class="comment">“Profesyonellik ve güler yüzün bir araya geldiği harika bir deneyim yaşadık.”</p>
                <p class="name">Can & Ece</p>
            </div>
            <div class="couple-card">
                <img src="fotolar/anasayfa/21.jpg" alt="Çift 6">
                <p class="comment">“Her şey hayallerimizin ötesindeydi. Sonsuz teşekkürler!”</p>
                <p class="name">Kemal & Selin</p>
            </div>
            <div class="couple-card">
                <img src="fotolar/anasayfa/22.jpg" alt="Çift 7">
                <p class="comment">“Her şey hayallerimizin ötesindeydi. Sonsuz teşekkürler!”</p>
                <p class="name">Murat & Sıla</p>
            </div>
            <div class="couple-card">
                <img src="fotolar/anasayfa/23.jpg" alt="Çift 8">
                <p class="comment">“Her şey hayallerimizin ötesindeydi. Sonsuz teşekkürler!”</p>
                <p class="name">Mert & Ece</p>
            </div>
            <div class="couple-card">
                <img src="fotolar/anasayfa/24.jpg" alt="Çift 8">
                <p class="comment">“Her şey hayallerimizin ötesindeydi. Sonsuz teşekkürler!”</p>
                <p class="name">Emre & Merve</p>
            </div>
            <div class="couple-card">
                <img src="fotolar/anasayfa/25.jpg" alt="Çift 8">
                <p class="comment">“Her şey hayallerimizin ötesindeydi. Sonsuz teşekkürler!”</p>
                <p class="name">Furkan & Eda</p>
            </div>
        
        </div>
    </div>
    <div class="faq-section">
        <h2>Sıkça Sorulan Sorular</h2>
        <div class="faq-item">
            <h3>Dış çekim sırasında hangi mekanlar tercih ediliyor?</h3>
            <p>Fotoğraf çekimleri için doğal, tarihi veya modern mekanları öneriyoruz. Müşterilerimizin tercihlerine göre birlikte karar veriyoruz.</p>
        </div>
        <div class="faq-item">
            <h3>Dış çekim ne kadar sürüyor?</h3>
            <p>Genellikle dış çekimler 1,5 ila 2 saat arasında sürüyor. Çekimin detaylarına ve mekanlara bağlı olarak süre değişebilir.</p>
        </div>
        <div class="faq-item">
            <h3>Dış çekim için özel kıyafet öneriyor musunuz?</h3>
            <p>Evet! Gelin ve damat için çekimin konseptine uygun kıyafet önerilerimiz oluyor. Ayrıca aksesuar seçimlerinde de destek sağlıyoruz.</p>
        </div>
        <div class="faq-more">
            <a href="sss.php">Devamı</a>
        </div>
    </div>
    
    
    
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
