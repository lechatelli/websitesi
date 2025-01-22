function openGallery(category) {
    const basePaths = {
        kumsal: "fotolar/kumsal/",
        "dogayla-ic-ice": "fotolar/doga/",
        "tarihi-mekanlar": "fotolar/tarihi/",
        "istanbul-sokaklari": "fotolar/istanbul/",
    };

    const galleryPath = basePaths[category];
    if (galleryPath) {
        let galleryHtml = `
            <div class='gallery-overlay2024'>
                <div class='gallery-container2024'>
                    <button class='close-gallery2024' onclick="closeGallery()">✖</button>
                    <div class='gallery-images-wrapper2024'>
        `;

        for (let i = 1; i <= 15; i++) {
            const imgPath = `${galleryPath}${i}.jpg`;
            galleryHtml += `
                <div class='gallery-image2024'>
                    <img src="${imgPath}" alt="Gallery Image ${i}">
                </div>
            `;
        }

        galleryHtml += `
                    </div>
                    <div class="gallery-navigation2024">
                        <button class="prev-image2024" onclick="navigateGallery(-1)">❮</button>
                        <button class="next-image2024" onclick="navigateGallery(1)">❯</button>
                    </div>
                </div>
            </div>
        `;

        document.body.insertAdjacentHTML("beforeend", galleryHtml);
        showGalleryImage(0); 
    }
}
function openMorePhotosGallery() {
    const galleryPath = "fotolar/fotolar/"; 
    const photoCount = 20; 

    let galleryHtml = `
        <div class="gallery-overlay2024">
            <div class="gallery-container2024">
                <button class="close-gallery2024" onclick="closeGallery()">✖</button>
                <div class="gallery-images-wrapper2024">
    `;

    for (let i = 1; i <= photoCount; i++) {
        galleryHtml += `
            <div class="gallery-image2024" style="display: ${i === 1 ? 'block' : 'none'};">
                <img src="${galleryPath}${i}.jpg" alt="Gallery Image ${i}">
            </div>
        `;
    }

    galleryHtml += `
                </div>
                <div class="gallery-navigation2024">
                    <button class="prev-image2024" onclick="navigateGallery(-1)">❮</button>
                    <button class="next-image2024" onclick="navigateGallery(1)">❯</button>
                </div>
            </div>
        </div>
    `;

    document.body.insertAdjacentHTML("beforeend", galleryHtml);
    showGalleryImage(0); 
}

let currentImageIndex = 0;


function showGalleryImage(index) {
    const images = document.querySelectorAll(".gallery-image2024");
    if (images.length > 0) {
        images.forEach((img, i) => {
            img.style.display = i === index ? "block" : "none";
        });
        currentImageIndex = index;
    }
}

function navigateGallery(direction) {
    const images = document.querySelectorAll(".gallery-image2024");
    if (images.length > 0) {
        let newIndex = currentImageIndex + direction;
        if (newIndex < 0) newIndex = images.length - 1;
        if (newIndex >= images.length) newIndex = 0;
        showGalleryImage(newIndex);
    }
}

function closeGallery() {
    const overlay = document.querySelector(".gallery-overlay2024");
    if (overlay) overlay.remove();
}





