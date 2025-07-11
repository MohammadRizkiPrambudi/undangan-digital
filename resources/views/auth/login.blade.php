<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - NikahKuy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('/images/bglogin.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
    <body class="min-h-screen flex items-center justify-center px-4">
        <div class="w-full max-w-md bg-white/30 backdrop-blur-sm p-8 rounded-xl shadow-md">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" class="h-12">
            </div>
            <h2 class="text-2xl font-bold text-center text-sky-500 mb-2">Selamat Datang</h2>
            <p class="text-center text-gray-800 text-sm mb-6">Silahkan Login Terlebih Dahulu</p>
            @if (session('error'))
                <div class="bg-red-100 text-red-700 p-2 rounded mb-4 text-center text-sm">
                    {{ session('error') }}
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <input type="email" name="email" placeholder="Email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-400 text-sm">
                </div>
                <div class="mb-4">
                    <input type="password" name="password" placeholder="Password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-400 text-sm">
                </div>
                <div class="flex items-center justify-between mb-4">
                    <label class="flex items-center text-sm text-gray-800">
                        <input type="checkbox" name="remember" class="mr-2">
                        Keep Sign In
                    </label>
                    <a href="#" class="text-sky-500 text-sm hover:underline">Lupa Password?</a>
                </div>
                <button type="submit"
                    class="w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-2 rounded transition">
                    SIGN IN
                </button>
            </form>
            <div class="mt-6 text-center text-sm text-white">
                Belum punya akun? <a href="/register" class="text-purple-600 hover:underline">Buat Akun</a>
            </div>
        </div>
    </body>
</html>
