const carousel = document.getElementById("carousel");
const track = carousel.querySelector(".flex");
const items = track.querySelectorAll(".w-80");
let itemsPerSlide = getItemsPerSlide();

function getItemsPerSlide() {
    return window.innerWidth < 768 ? 1 : 3; // 1 item di HP, 3 item di desktop
}

function getItemWidth() {
    return items[0].offsetWidth + 32; // w-80 (320px) + padding 2*16px = 352px
}

let currentIndex = 0;

function slideCarousel() {
    const maxIndex = Math.ceil(items.length / itemsPerSlide) - 1;
    currentIndex = currentIndex + 1 > maxIndex ? 0 : currentIndex + 1;

    const offset = currentIndex * getItemWidth() * itemsPerSlide;
    track.style.transform = `translateX(-${offset}px)`;
    track.style.transition = "transform 0.8s ease-in-out";
}

// Update itemsPerSlide on resize
window.addEventListener("resize", () => {
    itemsPerSlide = getItemsPerSlide();
    currentIndex = 0; // reset ke awal
    track.style.transform = `translateX(0px)`;
});

setInterval(slideCarousel, 3000);

const navbar = document.getElementById("navbar");

window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
        navbar.classList.add(
            "bg-base-100",
            "text-base-content",
            "shadow-md",
            "scrolled"
        );
        navbar.classList.remove("bg-transparent", "text-white");
    } else {
        navbar.classList.add("bg-transparent", "text-white");
        navbar.classList.remove(
            "bg-base-100",
            "text-base-content",
            "shadow-md",
            "scrolled"
        );
    }
});

const toggleBtn = document.getElementById("darkToggle");
const icon = document.getElementById("darkIcon");
const htmlTag = document.documentElement;

const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;

let theme = localStorage.getItem("theme") || (prefersDark ? "dark" : "light");
applyTheme(theme);

function applyTheme(mode) {
    if (mode === "dark") {
        htmlTag.setAttribute("data-theme", "dark");
        icon.classList.remove("fa-moon");
        icon.classList.add("fa-sun");
    } else {
        htmlTag.removeAttribute("data-theme");
        icon.classList.remove("fa-sun");
        icon.classList.add("fa-moon");
    }
}

// Klik togle
toggleBtn.addEventListener("click", () => {
    theme = htmlTag.getAttribute("data-theme") === "dark" ? "light" : "dark";
    localStorage.setItem("theme", theme);
    applyTheme(theme);
});
