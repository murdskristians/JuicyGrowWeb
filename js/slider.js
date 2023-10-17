let currentSlideIndex = 0;
const slides = document.querySelectorAll(".slide-containers");
const transitionDuration = 2000; // 2 seconds

function showSlide(index) {
    slides[currentSlideIndex].style.display = "none";
    currentSlideIndex = index;
    slides[currentSlideIndex].style.display = "block";
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