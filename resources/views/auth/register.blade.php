<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - NikahKuy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('/images/bgreg.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
    <body class="min-h-screen flex items-center justify-center px-4">
        <div class="w-full max-w-md bg-white/30 backdrop-blur-md p-8 rounded-xl shadow-md">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" class="h-12">
            </div>
            <h2 class="text-2xl font-bold text-center text-sky-500 mb-2">Buat Akun</h2>
            <p class="text-center text-white text-sm mb-6">Silahkan Lengkapi Form Berikut</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <input type="text" name="name" placeholder="Username" required
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-400 text-sm">
                </div>
                <div class="mb-4">
                    <input type="email" name="email" placeholder="Email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-400 text-sm">
                </div>
                <div class="mb-4">
                    <input type="password" name="password" placeholder="Password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-400 text-sm">
                </div>
                <div class="mb-4">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-400 text-sm">
                </div>
                <div class="mb-4 flex items-center">
                    <input type="checkbox" required class="mr-2">
                    <label class="text-sm text-white">Saya Setuju Semua Persyaratan</label>
                </div>
                <button type="submit"
                    class="w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-2 rounded transition">
                    Daftar
                </button>
            </form>
            <div class="mt-6 text-center text-sm text-white">
                Sudah Punya Akun? <a href="{{ route('login') }}" class="text-purple-600 hover:underline">Login</a>
            </div>
        </div>
    </body>
</html>
