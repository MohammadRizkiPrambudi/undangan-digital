<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nikah Kuy</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes slide {

            0%,
            30% {
                transform: translateX(0);
                opacity: 1;
            }

            33.33%,
            100% {
                transform: translateX(-100%);
                opacity: 0;
            }
        }

        .carousel-item {
            opacity: 0;
            width: 100%;
            animation: slide 15s infinite;
        }

        .carousel-item:nth-child(2) {
            animation-delay: 5s;
        }

        .carousel-item:nth-child(3) {
            animation-delay: 10s;
        }

        .carousel-container {
            position: relative;
            height: 320px;
            /* Tinggi tetap agar semua kartu sejajar */
        }

        .carousel {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        html {
            scroll-behavior: smooth;
        }

        #carousel .flex {
            transition: transform 0.8s ease-in-out;
            will-change: transform;
        }

        .nav-link {
            color: white;
            transition: color 0.3s ease;
        }

        .scrolled .nav-link {
            color: #1f2937;
            /* text-base-content (tw gray-800) */
        }
    </style>
</head>

<body class="bg-base-100 text-base-content">

    <!-- Navbar -->
    <div id="navbar" class="navbar fixed top-0 z-50 w-full transition-all duration-300 bg-transparent text-white">

        <div class="flex-1">
            <a class="btn btn-ghost text-xl font-bold"><span>Nikah</span><span class="text-sky-600">Kuy</span></a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 hidden md:flex">
                <li><a href="#hero" class="nav-link">Beranda</a></li>
                <li><a href="#katalog" class="nav-link">Tema</a></li>
                <li><a href="#harga" class="nav-link">Harga</a></li>
                <li><a href="#testimoni" class="nav-link">Testimoni</a></li>
                <li><a href="#footer" class="nav-link">Kontak</a></li>
            </ul>

            <div class="flex gap-2 ml-2">
                <a href="{{ route('login') }}"
                    class="btn btn-outline btn-xs border-purple-600 text-purple-600 hover:bg-purple-600 hover:text-white">
                    <i class="fa-solid fa-right-to-bracket mr-1 text-sm"></i> Login
                </a>
                <a href="{{ route('register') }}"
                    class="btn btn-outline btn-xs border-purple-600 text-purple-600 hover:bg-purple-600 hover:text-white">
                    <i class="fa-solid fa-user-plus mr-1 text-sm"></i> Register
                </a>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section id="hero" class="hero min-h-screen pt-20 bg-cover opacity-70 bg-center"
        style="background-image: url('/images/hero.jpg');">
        <div class="hero-content text-center text-white bg-black/50 backdrop-blur-sm rounded-xl p-8">
            <div class="max-w-2xl">
                <h1 class="text-5xl font-bold">Undangan Digital Pernikahan</h1>
                <p class="py-6">Buat momen sakralmu lebih berkesan dan praktis dengan undangan digital dari NikahKuy.
                </p>
                <a href="#katalog" class="btn bg-purple-600 text-white">Pesan Sekarang</a>
            </div>
        </div>
    </section>

    <!-- Katalog Tema -->
    <section id="katalog" class="py-16 bg-white">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-sky-400">Pilih Tema Undangan</h2>
            <p class="text-gray-500">Berbagai tema cantik untuk gaya pernikahanmu</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto px-4">
            <div class="card bg-base-100 shadow-md">
                <figure><img src="https://via.placeholder.com/300x180" alt="Tema 1" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Tema Elegant</h2>
                    <p>Kesan mewah dan klasik</p>
                </div>
            </div>
            <div class="card bg-base-100 shadow-md">
                <figure><img src="https://via.placeholder.com/300x180" alt="Tema 2" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Tema Floral</h2>
                    <p>Romantis dan penuh warna</p>
                </div>
            </div>
            <div class="card bg-base-100 shadow-md">
                <figure><img src="https://via.placeholder.com/300x180" alt="Tema 3" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Tema Minimalis</h2>
                    <p>Sederhana dan modern</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Harga Paket -->
    <section id="harga" class="py-16 bg-base-200">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-sky-400">Paket Harga</h2>
            <p class="text-gray-500">Sesuaikan dengan kebutuhan dan budgetmu</p>
        </div>
        <div class="flex flex-col md:flex-row justify-center gap-6 max-w-5xl mx-auto px-4">
            <div class="card bg-white shadow-md">
                <div class="card-body">
                    <h2 class="card-title">Paket Basic</h2>
                    <p>Undangan standar dengan 1 tema</p>
                    <p class="text-2xl font-bold mt-4">Rp 150.000</p>
                    <div class="card-actions justify-end">
                        <button class="btn bg-purple-600 text-white">Pesan</button>
                    </div>
                </div>
            </div>
            <div class="card bg-white shadow-md">
                <div class="card-body">
                    <h2 class="card-title">Paket Premium</h2>
                    <p>Semua tema + musik + RSVP</p>
                    <p class="text-2xl font-bold mt-4">Rp 300.000</p>
                    <div class="card-actions justify-end">
                        <button class="btn bg-purple-600 text-white">Pesan</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimoni" class="py-16 bg-white">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-sky-400">Apa Kata Mereka?</h2>
            <p class="text-gray-500">Cerita bahagia dari mereka yang sudah pakai NikahKuy</p>
        </div>

        <!-- Carousel Container -->
        <div id="carousel" class="max-w-5xl mx-auto overflow-hidden">
            <div class="flex w-max">
                <!-- Item 1 -->
                <div class="w-80 shrink-0 p-4">
                    <div
                        class="card bg-base-100 shadow-md text-center p-6 rounded-xl flex flex-col items-center h-full">
                        <img src="https://i.pravatar.cc/100?img=32" class="w-16 h-16 rounded-full mb-4" />
                        <p class="italic">“Undangannya cantik dan mudah dikirim ke semua tamu. Sangat puas!”</p>
                        <p class="font-bold mt-2">– Rina & Dimas</p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="w-80 shrink-0 p-4">
                    <div
                        class="card bg-base-100 shadow-md text-center p-6 rounded-xl flex flex-col items-center h-full">
                        <img src="https://i.pravatar.cc/100?img=33" class="w-16 h-16 rounded-full mb-4" />
                        <p class="italic">“Simple, elegan, dan banyak pilihan tema. Recommended!”</p>
                        <p class="font-bold mt-2">– Andi & Sari</p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="w-80 shrink-0 p-4">
                    <div
                        class="card bg-base-100 shadow-md text-center p-6 rounded-xl flex flex-col items-center h-full">
                        <img src="https://i.pravatar.cc/100?img=34" class="w-16 h-16 rounded-full mb-4" />
                        <p class="italic">“Bikin undangan digital gak ribet, tinggal kirim link aja.”</p>
                        <p class="font-bold mt-2">– Fajar & Indah</p>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="w-80 shrink-0 p-4">
                    <div
                        class="card bg-base-100 shadow-md text-center p-6 rounded-xl flex flex-col items-center h-full">
                        <img src="https://i.pravatar.cc/100?img=35" class="w-16 h-16 rounded-full mb-4" />
                        <p class="italic">“Pelayanan cepat dan responsif. Saya puas sekali!”</p>
                        <p class="font-bold mt-2">– Lia & Budi</p>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="w-80 shrink-0 p-4">
                    <div
                        class="card bg-base-100 shadow-md text-center p-6 rounded-xl flex flex-col items-center h-full">
                        <img src="https://i.pravatar.cc/100?img=36" class="w-16 h-16 rounded-full mb-4" />
                        <p class="italic">“Tema-tema undangan sangat variatif dan menarik!”</p>
                        <p class="font-bold mt-2">– Riko & Maya</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Kontak -->
    <section id="kontak" class="bg-gradient-to-r from-pink-100 to-purple-200 py-12">
        <div class="text-center mb-8">
            <h2 class="text-2xl md:text-3xl font-bold text-sky-400">Hubungi Kami</h2>
            <p class="text-gray-500 text-sm md:text-base">Punya pertanyaan atau mau custom undangan? Kirim pesanmu di
                sini!</p>
        </div>
        <div class="max-w-xl mx-auto px-4">
            <div class="card bg-white shadow-md p-6 md:p-8">
                <form>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-semibold text-gray-600">Nama Lengkap</label>
                        <input type="text" placeholder="Nama Kamu" class="input input-bordered w-full text-sm" />
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-semibold text-gray-600">Email</label>
                        <input type="email" placeholder="email@example.com"
                            class="input input-bordered w-full text-sm" />
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-semibold text-gray-600">Pesan</label>
                        <textarea class="textarea textarea-bordered w-full text-sm" rows="3" placeholder="Tulis pesan kamu di sini..."></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn bg-purple-600 text-white btn-sm md:btn-md">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="footer p-10 bg-base-200 text-base-content">
        <aside>
            <h3 class="font-bold text-xl">NikahKuy</h3>
            <p>Undangan digital yang simple, elegan, dan berkesan.</p>
        </aside>
        <nav>
            <h6 class="footer-title">Navigasi</h6>
            <a href="#hero" class="link link-hover">Beranda</a>
            <a href="#katalog" class="link link-hover">Tema</a>
            <a href="#harga" class="link link-hover">Harga</a>
            <a href="#testimoni" class="link link-hover">Testimoni</a>
        </nav>
        <nav>
            <h6 class="footer-title">Kontak</h6>
            <a class="link link-hover">Email: info@nikahkuy.com</a>
            <a class="link link-hover">WhatsApp: +62 857-2727-2944</a>
        </nav>
    </footer>

    <script>
        const carousel = document.getElementById('carousel');
        const track = carousel.querySelector('.flex');
        const items = track.querySelectorAll('.w-80');
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
            currentIndex = (currentIndex + 1) > maxIndex ? 0 : currentIndex + 1;

            const offset = currentIndex * getItemWidth() * itemsPerSlide;
            track.style.transform = `translateX(-${offset}px)`;
            track.style.transition = 'transform 0.8s ease-in-out';
        }

        // Update itemsPerSlide on resize
        window.addEventListener('resize', () => {
            itemsPerSlide = getItemsPerSlide();
            currentIndex = 0; // reset ke awal
            track.style.transform = `translateX(0px)`;
        });

        setInterval(slideCarousel, 3000);


        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('bg-base-100', 'text-base-content', 'shadow-md', 'scrolled');
                navbar.classList.remove('bg-transparent', 'text-white');
            } else {
                navbar.classList.add('bg-transparent', 'text-white');
                navbar.classList.remove('bg-base-100', 'text-base-content', 'shadow-md', 'scrolled');
            }
        });
    </script>


</body>

</html>
