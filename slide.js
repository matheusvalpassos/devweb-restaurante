const slider = document.querySelector(".slider");
let translateX = 0;

function nextSlide() {
    translateX -= 50;
    if (translateX < -50) {
        translateX = 0;
    }
    slider.style.transform = `translateX(${translateX}%)`;
}

setInterval(nextSlide, 3000);
