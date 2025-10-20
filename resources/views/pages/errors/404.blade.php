<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 - Halaman Tidak Ditemukan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-2xl w-full text-center">
            <!-- 404 Animation -->
            <div class="mb-8">
                <div class="text-9xl font-bold text-orange-600 mb-4 animate-bounce">
                    404
                </div>
                <div class="text-6xl mb-6">🔍</div>
            </div>

            <!-- Content -->
            <div class="bg-white rounded-lg shadow-lg p-8 md:p-12">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                    Oops! Halaman Tidak Ditemukan
                </h1>

                <p class="text-xl text-gray-600 mb-6">
                    Maaf, halaman yang Anda cari tidak ada atau telah dipindahkan.
                </p>

                <p class="text-gray-500 mb-8">
                    Kemungkinan masalah:
                </p>

                <ul class="text-left inline-block text-gray-600 mb-8 space-y-2">
                    <li class="flex items-center">
                        <span class="text-orange-600 mr-3">✓</span>
                        URL yang Anda masukkan tidak valid
                    </li>
                    <li class="flex items-center">
                        <span class="text-orange-600 mr-3">✓</span>
                        Halaman telah dihapus atau dipindahkan
                    </li>
                    <li class="flex items-center">
                        <span class="text-orange-600 mr-3">✓</span>
                        Terjadi kesalahan pada server kami
                    </li>
                </ul>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ url('/') }}"
                        class="bg-orange-600 text-white px-8 py-3 rounded-lg font-bold hover:bg-orange-700 transition inline-block">
                        Kembali ke Beranda
                    </a>
                    <a href="javascript:history.back()"
                        class="border-2 border-orange-600 text-orange-600 px-8 py-3 rounded-lg font-bold hover:bg-orange-50 transition inline-block">
                        Kembali ke Halaman Sebelumnya
                    </a>
                </div>

                <!-- Search Suggestion -->
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <p class="text-gray-600 mb-4">Atau coba navigasi melalui menu:</p>
                    <div class="flex flex-wrap justify-center gap-3">
                        <a href="{{ url('/') }}" class="text-orange-600 hover:text-orange-700 font-semibold">
                            Home
                        </a>
                        <span class="text-gray-400">•</span>
                        <a href="{{ url('/features') }}" class="text-orange-600 hover:text-orange-700 font-semibold">
                            Features
                        </a>
                        <span class="text-gray-400">•</span>
                        <a href="{{ url('/pricing') }}" class="text-orange-600 hover:text-orange-700 font-semibold">
                            Pricing
                        </a>
                        <span class="text-gray-400">•</span>
                        <a href="{{ url('/about') }}" class="text-orange-600 hover:text-orange-700 font-semibold">
                            About
                        </a>
                    </div>
                </div>
            </div>

            <!-- Footer Note -->
            <p class="text-gray-500 mt-8 text-sm">
                Kode Error: 404 |
                <span class="text-orange-600">MyApp</span> Company Profile
            </p>
        </div>
    </div>

    <style>
        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .animate-bounce {
            animation: bounce 1s infinite;
        }
    </style>
</body>

</html>
