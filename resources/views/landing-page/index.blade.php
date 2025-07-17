<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nikah Kuy</title>
    {{-- DaisyUI dan Tailwind CSS dari CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Font Awesome dari CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- Jika Anda memiliki CSS kustom, pastikan ini tidak dikomentari --}}
    <link rel="stylesheet" href="{{ asset('assets/css/mycss.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-base-100 text-base-content">
    <div id="navbar" class="navbar fixed top-0 z-50 w-full transition-all duration-300">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl font-bold flex items-center gap-2">
                <img src="/images/logokontak.png" alt="Logo NikahKuy" class="w-8 h-8 md:w-10 md:h-10 object-contain" />
                <span>Nikah</span><span class="text-purple-500">Kuy</span>
            </a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 hidden md:flex">
                <li><a href="#hero" class="nav-link">Beranda</a></li>
                <li><a href="#katalog" class="nav-link">Tema</a></li>
                <li><a href="#harga" class="nav-link">Harga</a></li>
                <li><a href="#testimoni" class="nav-link">Testimoni</a></li>
                <li><a href="#kontak" class="nav-link">Kontak</a></li>
            </ul>
            @auth
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-sm btn-primary normal-case">
                        <i class="fa-solid fa-user mr-1"></i> {{ Auth::user()->name }}
                    </label>
                    <ul tabindex="0"
                        class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52 mt-2 normal-case">
                        <li><a href="">Dashboard</a></li>
                        {{-- Sesuaikan dengan route dashboard Anda --}}
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="text-left w-full">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <div class="flex gap-2 ml-2">
                    <a href="{{ route('login') }}" class="btn btn-sm btn-primary normal-case">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-sm btn-primary normal-case">Register</a>
                </div>
            @endauth
        </div>
    </div>

    <section id="hero" class="hero min-h-screen pt-20 bg-cover bg-center relative"
        style="background-image: url('/images/hero.jpg');">
        <div class="hero-content text-center text-white bg-black/50 shadow-lg backdrop-blur-sm rounded-xl p-8">
            <div class="max-w-2xl">
                <h1 class="text-5xl font-bold">Undangan Digital Pernikahan</h1>
                <p class="py-6">Buat momen sakralmu lebih berkesan dan praktis dengan undangan digital dari NikahKuy.
                </p>
                <a href="#katalog" class="btn btn-primary">
                    <i class="fa-brands fa-whatsapp text-sm"></i> Pesan Sekarang
                </a>
            </div>
        </div>
    </section>

    <section id="katalog" class="py-16 bg-base-200"> {{-- Light mode: bg-base-200, Dark mode: custom CSS --}}
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-primary">Pilih Tema Undangan</h2>
            <p class="text-base-content/80">Berbagai tema cantik untuk gaya pernikahanmu</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto px-4">
            @foreach ($themes as $theme)
                <div class="card bg-base-100 shadow-md">
                    <figure>
                        <img src="{{ asset('storage/' . $theme->thumbnail) }}" alt="Thumbnail {{ $theme->name }}" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title text-base-content">{{ $theme->name }}</h2>
                        <p class="text-base-content/90">{{ $theme->description }}</p>
                        <div class="card-actions">
                            @if (!empty($theme->preview_url))
                                <a href="{{ $theme->preview_url }}" target="_blank" rel="noopener noreferrer"
                                    class="btn btn-sm btn-primary normal-case">
                                    <i class="fa-solid fa-eye"></i> Preview
                                </a>
                            @else
                                <span class="text-xs text-base-content/60 italic">Preview belum tersedia</span>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section id="harga" class="py-16 bg-white"> {{-- Light mode: bg-white, Dark mode: custom CSS --}}
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-primary">Paket Harga</h2>
            <p class="text-base-content/80">Sesuaikan dengan kebutuhan dan budgetmu</p>
        </div>
        <div class="flex flex-col md:flex-row justify-center gap-6 max-w-5xl mx-auto px-4">
            @foreach ($packages as $package)
                <div class="card bg-base-100 shadow-md w-full md:w-1/2">
                    <div class="card-body">
                        <h2 class="card-title text-xl text-base-content">Paket {{ $package->name }}</h2>
                        <ul class="list-disc list-inside text-sm text-base-content/90 mt-2 space-y-1">
                            @foreach ($package->features ?? [] as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        </ul>
                        <p class="text-2xl font-bold mt-4 text-primary">Rp
                            {{ number_format($package->price, 0, ',', '.') }}</p>
                        <div class="card-actions justify-end">
                            @auth
                                <button type="button" class="btn btn-primary normal-case btn-pesan"
                                    data-name="{{ $package->name }}"
                                    data-price="{{ number_format($package->price, 0, ',', '.') }}"
                                    data-features='@json($package->features)'
                                    data-action="{{ route('order.store', $package) }}">
                                    <i class="fa-solid fa-cart-shopping"></i> Pesan
                                </button>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-neutral normal-case">
                                    <i class="fa-solid fa-lock"></i> Login untuk Pesan
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Testimoni --}}
    <section id="testimoni" class="py-16 bg-base-200"> {{-- Light mode: bg-base-200, Dark mode: custom CSS --}}
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-primary">Apa Kata Mereka?</h2>
            <p class="text-base-content/80">Cerita bahagia dari mereka yang sudah pakai NikahKuy</p>
        </div>

        <div class="max-w-5xl mx-auto overflow-hidden">
            <div id="testimoni-carousel-track" class="flex w-max">
                <div class="w-80 shrink-0 p-4">
                    <div
                        class="card bg-base-100 shadow-md text-center p-6 rounded-xl flex flex-col items-center h-full">
                        <img src="https://i.pravatar.cc/100?img=32" class="w-16 h-16 rounded-full mb-4"
                            alt="Foto Rina & Dimas" />
                        <p class="italic text-base-content/90">“Undangannya cantik dan mudah dikirim ke semua tamu.
                            Sangat puas!”</p>
                        <p class="font-bold mt-2 text-base-content">– Rina & Dimas</p>
                    </div>
                </div>
                <div class="w-80 shrink-0 p-4">
                    <div
                        class="card bg-base-100 shadow-md text-center p-6 rounded-xl flex flex-col items-center h-full">
                        <img src="https://i.pravatar.cc/100?img=33" class="w-16 h-16 rounded-full mb-4"
                            alt="Foto Andi & Sari" />
                        <p class="italic text-base-content/90">“Simple, elegan, dan banyak pilihan tema. Recommended!”
                        </p>
                        <p class="font-bold mt-2 text-base-content">– Andi & Sari</p>
                    </div>
                </div>
                <div class="w-80 shrink-0 p-4">
                    <div
                        class="card bg-base-100 shadow-md text-center p-6 rounded-xl flex flex-col items-center h-full">
                        <img src="https://i.pravatar.cc/100?img=34" class="w-16 h-16 rounded-full mb-4"
                            alt="Foto Fajar & Indah" />
                        <p class="italic text-base-content/90">“Bikin undangan digital gak ribet, tinggal kirim link
                            aja.”</p>
                        <p class="font-bold mt-2 text-base-content">– Fajar & Indah</p>
                    </div>
                </div>
                <div class="w-80 shrink-0 p-4">
                    <div
                        class="card bg-base-100 shadow-md text-center p-6 rounded-xl flex flex-col items-center h-full">
                        <img src="https://i.pravatar.cc/100?img=35" class="w-16 h-16 rounded-full mb-4"
                            alt="Foto Lia & Budi" />
                        <p class="italic text-base-content/90">“Pelayanan cepat dan responsif. Saya puas sekali!”</p>
                        <p class="font-bold mt-2 text-base-content">– Lia & Budi</p>
                    </div>
                </div>
                <div class="w-80 shrink-0 p-4">
                    <div
                        class="card bg-base-100 shadow-md text-center p-6 rounded-xl flex flex-col items-center h-full">
                        <img src="https://i.pravatar.cc/100?img=36" class="w-16 h-16 rounded-full mb-4"
                            alt="Foto Riko & Maya" />
                        <p class="italic text-base-content/90">“Tema-tema undangan sangat variatif dan menarik!”</p>
                        <p class="font-bold mt-2 text-base-content">– Riko & Maya</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak" class="bg-gradient-to-r from-pink-100 to-purple-200 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-primary mb-6 text-center">Hubungi Kami</h2>
                    <p class="text-base-content/90 mb-8 text-sm md:text-base leading-relaxed">
                        Punya pertanyaan atau mau konsultasi undangan digital?
                        Kirimkan pesanmu lewat form berikut ini.
                    </p>
                    <form class="space-y-5 shadow-lg p-6 rounded-lg bg-base-100">
                        <div>
                            <label class="block mb-2 text-sm font-semibold text-base-content">Nama Lengkap</label>
                            <input type="text" placeholder="Nama Kamu"
                                class="input input-bordered w-full text-sm" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-semibold text-base-content">Email</label>
                            <input type="email" placeholder="email@example.com"
                                class="input input-bordered w-full text-sm" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-semibold text-base-content">Pesan</label>
                            <textarea rows="4" placeholder="Tulis pesan kamu di sini..." class="textarea textarea-bordered w-full text-sm"></textarea>
                        </div>
                        <button class="btn btn-primary w-full">
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
        class="fixed bottom-6 right-6 btn btn-primary w-14 h-14 rounded-full shadow-lg flex items-center justify-center z-50">
        <i id="darkIcon" class="fa-solid text-xl"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Jika Anda memiliki JS kustom, pastikan ini tidak dikomentari --}}
    <script src="{{ asset('assets/js/myjs.js') }}"></script>
</body>

</html>
