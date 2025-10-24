<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>500 - Server Error</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-2xl w-full text-center">
            <!-- 500 Animation -->
            <div class="mb-8">
                <div class="text-9xl font-bold text-orange-600 mb-4">
                    500
                </div>
                <div class="text-6xl mb-6">⚠️</div>
            </div>

            <!-- Content -->
            <div class="bg-white rounded-lg shadow-lg p-8 md:p-12">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                    Server Error
                </h1>

                <p class="text-xl text-gray-600 mb-6">
                    Maaf, terjadi kesalahan pada server kami. Tim kami sedang menangani masalah ini.
                </p>

                <p class="text-gray-500 mb-8">
                    Kami akan memperbaikinya sesegera mungkin. Silakan coba lagi dalam beberapa saat.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ url('/') }}"
                        class="bg-orange-600 text-white px-8 py-3 rounded-lg font-bold hover:bg-orange-700 transition inline-block">
                        Kembali ke Beranda
                    </a>
                    <a href="javascript:location.reload()"
                        class="border-2 border-orange-600 text-orange-600 px-8 py-3 rounded-lg font-bold hover:bg-orange-50 transition inline-block">
                        Refresh Halaman
                    </a>
                </div>

                <!-- Contact Support -->
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <p class="text-gray-600 mb-4">Butuh bantuan?</p>
                    <a href="mailto:itai.technology@travel.com"
                        class="text-orange-600 hover:text-orange-700 font-semibold">
                        Hubungi Tim Support Kami
                    </a>
                </div>
            </div>

            <!-- Footer Note -->
            <p class="text-gray-500 mt-8 text-sm">
                Kode Error: 500 |
                <span class="text-orange-600">TeMan</span> Company Profile
            </p>
        </div>
    </div>
</body>

</html>
