document.addEventListener("DOMContentLoaded", function() {
    const sliders = document.querySelectorAll(".slider");

    sliders.forEach(slider => {
        const slides = slider.querySelectorAll(".slide");
        let index = 0;

        setInterval(() => {
            slides[index].style.transform = "translateY(-100%)";
            index = (index + 1) % slides.length;
            slides[index].style.transform = "translateY(0)";
        }, 5000); 
    });
});
