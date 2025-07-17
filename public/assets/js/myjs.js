document.addEventListener("DOMContentLoaded", () => {
    // SweetAlert untuk tombol pesan
    document.querySelectorAll(".btn-pesan").forEach((button) => {
        button.addEventListener("click", function () {
            const name = this.dataset.name;
            const price = this.dataset.price;
            const features = JSON.parse(this.dataset.features || "[]");
            const action = this.dataset.action;

            let featureList = features.map((f) => `<li>${f}</li>`).join("");

            Swal.fire({
                title: `Pesan Paket ${name}?`,
                html: `
        <p class="text-lg font-semibold text-primary mb-2">Harga: Rp ${price}</p>
        <p class="font-medium">Fitur:</p>
        <ul class="text-left list-disc pl-6 text-base-content">${featureList}</ul>
    `,
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "hsl(var(--p))",
                cancelButtonColor: "#d33",
                confirmButtonText: "Selesaikan", // Ubah teks 'OK' menjadi 'Konfirmasi'
                cancelButtonText: "Batal",
                customClass: {
                    popup: "bg-base-100 text-base-content",
                    title: "text-base-content",
                    htmlContainer: "text-base-content",
                    // Tambahkan baris di bawah ini:
                    confirmButton: "btn btn-primary", // Menerapkan gaya tombol primary DaisyUI
                    cancelButton: "btn btn-error", // Menerapkan gaya tombol outline error DaisyUI
                },
            }).then((result) => {
                if (result.isConfirmed) {
                    const form = document.createElement("form");
                    form.action = action;
                    form.method = "POST";
                    const csrfToken = document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content");
                    const tokenInput = document.createElement("input");
                    tokenInput.type = "hidden";
                    tokenInput.name = "_token";
                    tokenInput.value = csrfToken;
                    form.appendChild(tokenInput);
                    document.body.appendChild(form);
                    form.submit();
                }
            });
        });
    });

    // Carousel Testimoni
    const carouselTrack = document.getElementById("testimoni-carousel-track");
    const items = carouselTrack.querySelectorAll(".w-80"); // Item-item carousel
    let itemsPerView; // Jumlah item yang terlihat
    let currentIndex = 0; // Indeks item pertama yang terlihat
    let carouselInterval; // Variabel untuk menyimpan interval

    function updateItemsPerView() {
        if (window.innerWidth >= 1024) {
            itemsPerView = 3;
        } else if (window.innerWidth >= 768) {
            itemsPerView = 2;
        } else {
            itemsPerView = 1;
        }
    }

    function slideCarousel() {
        if (items.length === 0) return;

        updateItemsPerView();
        const itemWidth = items[0].getBoundingClientRect().width;
        const totalItems = items.length;
        const maxIndex = Math.max(0, totalItems - itemsPerView);

        currentIndex = (currentIndex + 1) % (maxIndex + 1);

        const offset = currentIndex * itemWidth;
        carouselTrack.style.transform = `translateX(-${offset}px)`;
    }

    function startCarousel() {
        clearInterval(carouselInterval);
        carouselInterval = setInterval(slideCarousel, 3000);
    }

    updateItemsPerView();
    startCarousel();

    window.addEventListener("resize", () => {
        currentIndex = 0;
        carouselTrack.style.transform = `translateX(0px)`;
        updateItemsPerView();
        startCarousel();
    });

    // Navbar Scroll Effect
    const navbar = document.getElementById("navbar");
    const heroSection = document.getElementById("hero");

    function handleNavbarScroll() {
        const heroHeight = heroSection ? heroSection.offsetHeight : 0;
        const scrollThreshold = heroHeight * 0.2;

        if (window.scrollY > scrollThreshold) {
            navbar.classList.add("scrolled");
            navbar.classList.remove("bg-transparent", "text-white");
        } else {
            navbar.classList.remove("scrolled");
            navbar.classList.add("bg-transparent", "text-white");
        }
    }

    window.addEventListener("scroll", handleNavbarScroll);
    handleNavbarScroll();

    // Dark Mode Toggle
    const toggleBtn = document.getElementById("darkToggle");
    const icon = document.getElementById("darkIcon");
    const htmlTag = document.documentElement;

    const prefersDark = window.matchMedia(
        "(prefers-color-scheme: dark)"
    ).matches;
    let theme =
        localStorage.getItem("theme") || (prefersDark ? "dark" : "light");

    function applyTheme(mode) {
        htmlTag.setAttribute("data-theme", mode);
        if (mode === "dark") {
            icon.classList.remove("fa-moon");
            icon.classList.add("fa-sun");
        } else {
            icon.classList.remove("fa-sun");
            icon.classList.add("fa-moon");
        }
    }

    applyTheme(theme);

    toggleBtn.addEventListener("click", () => {
        theme =
            htmlTag.getAttribute("data-theme") === "dark" ? "light" : "dark";
        localStorage.setItem("theme", theme);
        applyTheme(theme);
    });
});
