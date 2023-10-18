let currentSlideIndex = 0;
const slides = document.querySelectorAll(".slide-containers");
const slides2 = document.querySelectorAll(".slide-containers-2");
const slides3 = document.querySelectorAll(".slide-containers-3");
const slides4 = document.querySelectorAll(".slide-containers-4");


const transitionDuration = 2000; // 2 seconds

function showSlide(index) {
    slides[currentSlideIndex].style.display = "none";
    slides2[currentSlideIndex].style.display = "none";
    slides3[currentSlideIndex].style.display = "none";
    slides4[currentSlideIndex].style.display = "none";

    currentSlideIndex = index;
    slides[currentSlideIndex].style.display = "block";
    slides2[currentSlideIndex].style.display = "block";
    slides3[currentSlideIndex].style.display = "block";
    slides4[currentSlideIndex].style.display = "block";
}

function nextSlide() {
    const nextIndex = (currentSlideIndex + 1) % slides.length;
    showSlide(nextIndex);
}

function startSlider() {
    setInterval(nextSlide, transitionDuration);
}

// Show the first slide and start the slider
showSlide(currentSlideIndex);
startSlider();