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
    <link rel="stylesheet" href="{{ asset('assets/css/mycss.css') }}">

</head>

<body class="bg-base-100 text-base-content">

    <!-- Navbar -->
    <div id="navbar" class="navbar fixed top-0 z-50 w-full transition-all duration-300 bg-transparent text-white">

        <div class="flex-1">
            <a class="btn btn-ghost text-xl font-bold flex items-center gap-2">
                <img src="/images/logokontak.png" alt="Logo" class="w-8 h-8 md:w-10 md:h-10 object-contain" />
                <span>Nikah</span><span class="text-purple-500">Kuy</span>
            </a>
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
                    class="btn btn-xs bg-purple-600 text-white hover:bg-purple-700 border-none">
                    <i class="fa-solid fa-right-to-bracket mr-1 text-sm"></i> Login
                </a>
                <a href="{{ route('register') }}"
                    class="btn btn-xs bg-purple-600 text-white hover:bg-purple-700 border-none">
                    <i class="fa-solid fa-user-plus mr-1 text-sm"></i> Register
                </a>

            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section id="hero" class="hero min-h-screen pt-20 bg-cover bg-center relative"
        style="background-image: url('/images/hero.jpg');">
        <div class="hero-content text-center text-white bg-black/50 shadow-lg backdrop-blur-sm rounded-xl p-8">
            <div class="max-w-2xl">
                <h1 class="text-5xl font-bold">Undangan Digital Pernikahan</h1>
                <p class="py-6">Buat momen sakralmu lebih berkesan dan praktis dengan undangan digital dari NikahKuy.
                </p>
                <a href="#katalog" class="btn bg-purple-600 text-white border-none">
                    <i class="fa-solid fa-brands fa-whatsapp text-sm"></i> Pesan Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Katalog Tema -->
    <section id="katalog" class="py-16 bg-amber-50">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-purple-600">Pilih Tema Undangan</h2>
            <p class="text-gray-500">Berbagai tema cantik untuk gaya pernikahanmu</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto px-4">
            <div class="card bg-base-100 shadow-md">
                <figure><img src="{{ asset('assets/images/undangan 1.png') }}" alt="Tema Elegant" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Tema Elegant</h2>
                    <p>Kesan mewah dan klasik</p>
                    <div class="card-actions">
                        <a href="" target="_blank"
                            class="btn btn-sm bg-purple-600 normal-case text-white hover:bg-purple-700 border-none">
                            <i class="fa-solid fa-eye"></i> Preview
                        </a>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-md">
                <figure><img src="{{ asset('assets/images/undangan 1.png') }}" alt="Tema Elegant" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Tema Elegant</h2>
                    <p>Kesan mewah dan klasik</p>
                    <div class="card-actions">
                        <a href="" target="_blank"
                            class="btn btn-sm bg-purple-600 normal-case text-white hover:bg-purple-700 border-none">
                            <i class="fa-solid fa-eye"></i> Preview
                        </a>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-md">
                <figure><img src="{{ asset('assets/images/undangan 1.png') }}" alt="Tema Elegant" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Tema Elegant</h2>
                    <p>Kesan mewah dan klasik</p>
                    <div class="card-actions">
                        <a href="" target="_blank"
                            class="btn btn-sm bg-purple-600 normal-case text-white hover:bg-purple-700">
                            <i class="fa-solid fa-eye"></i> Preview
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Harga Paket -->
    <section id="harga" class="py-16 bg-base-200">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-purple-600">Paket Harga</h2>
            <p class="text-gray-500">Sesuaikan dengan kebutuhan dan budgetmu</p>
        </div>
        <div class="flex flex-col md:flex-row justify-center gap-6 max-w-5xl mx-auto px-4">
            <!-- Paket Basic -->
            <div class="card bg-white shadow-md w-full md:w-1/2">
                <div class="card-body">
                    <h2 class="card-title text-xl">Paket Basic</h2>
                    <ul class="list-disc list-inside text-sm text-gray-700 mt-2 space-y-1">
                        <li>1 pilihan tema undangan</li>
                        <li>Desain responsive (bisa dibuka di HP & PC)</li>
                        <li>Tampilan galeri foto</li>
                        <li>Peta lokasi acara (Google Maps)</li>
                        <li>Link undangan yang mudah dibagikan</li>
                    </ul>
                    <p class="text-2xl font-bold mt-4 text-purple-600">Rp 150.000</p>
                    <div class="card-actions justify-end">
                        <button class="btn bg-purple-600 text-white normal-case"> <i
                                class="fa-solid fa-cart-shopping"></i> Pesan</button>
                    </div>
                </div>
            </div>

            <!-- Paket Premium -->
            <div class="card bg-white shadow-md w-full md:w-1/2">
                <div class="card-body">
                    <h2 class="card-title text-xl">Paket Premium</h2>
                    <ul class="list-disc list-inside text-sm text-gray-700 mt-2 space-y-1">
                        <li>Semua tema undangan (bebas pilih)</li>
                        <li>Desain responsive (HP & PC)</li>
                        <li>Galeri + Musik latar + Quotes</li>
                        <li>Fitur RSVP (konfirmasi kehadiran)</li>
                        <li>Hitung mundur hari H & Google Maps</li>
                        <li>Kustomisasi nama tamu otomatis</li>
                    </ul>
                    <p class="text-2xl font-bold mt-4 text-purple-600">Rp 300.000</p>
                    <div class="card-actions justify-end">
                        <button class="btn bg-purple-600 text-white normal-case"> <i
                                class="fa-solid fa-cart-shopping"></i> Pesan</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- testimoni --}}
    <section id="testimoni" class="py-16 bg-blue-50">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-purple-600">Apa Kata Mereka?</h2>
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
    <section id="kontak" class="bg-gradient-to-r from-pink-100 to-purple-200 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <!-- Form Kontak -->
                <div>
                    <h2 class="text-3xl font-bold text-purple-600 mb-6 text-center">Hubungi Kami</h2>
                    <p class="text-gray-700 mb-8 text-sm md:text-base leading-relaxed">
                        Punya pertanyaan atau mau konsultasi undangan digital?
                        Kirimkan pesanmu lewat form berikut ini.
                    </p>
                    <form class="space-y-5 shadow-lg p-6 rounded-lg">
                        <div>
                            <label class="block mb-2 text-sm font-semibold text-gray-700">Nama Lengkap</label>
                            <input type="text" placeholder="Nama Kamu"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 text-sm" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-semibold text-gray-700">Email</label>
                            <input type="email" placeholder="email@example.com"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 text-sm" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-semibold text-gray-700">Pesan</label>
                            <textarea rows="4" placeholder="Tulis pesan kamu di sini..."
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 text-sm"></textarea>
                        </div>
                        <button
                            class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition font-semibold w-full">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
                <div class="flex justify-center md:justify-end">
                    <img src="/images/logokontak.png" alt="Logo NikahKuy" class="w-64 md:w-80 h-auto">
                </div>
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
            <a href="#kontak" class="link link-hover">Kontak</a>
        </nav>
        <nav>
            <h6 class="footer-title">Kontak</h6>
            <a class="link link-hover">Email: info@nikahkuy.com</a>
            <a class="link link-hover">WhatsApp: +62 857-2727-2944</a>
        </nav>
    </footer>

    <button id="darkToggle"
        class="fixed bottom-6 right-6 bg-purple-600 text-white w-14 h-14 rounded-full shadow-lg flex items-center justify-center hover:bg-purple-700 transition z-50">
        <i id="darkIcon" class="fa-solid fa-moon text-xl"></i>
    </button>
    <script src="{{ asset('assets/js/myjs.js') }}"></script>

</body>

</html>
