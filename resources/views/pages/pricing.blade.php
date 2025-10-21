@extends('layouts.app')

@section('title', 'Harga TeMan')

@section('content')
    <!-- Animated Background -->
    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div id="particles-bg" class="absolute inset-0 bg-gradient-to-br from-orange-50 via-white to-orange-50"></div>
        <canvas id="particlesCanvas" class="absolute inset-0 w-full h-full"></canvas>
    </div>

    <!-- Hero Section -->
    <section class="relative text-gray-800 py-20 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-500/10 via-transparent to-orange-600/10"></div>
        <div class="absolute top-20 right-20 w-72 h-72 bg-orange-500/20 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 left-20 w-96 h-96 bg-orange-600/15 rounded-full blur-3xl animate-float-delayed"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center fade-in-up">
                <h1
                    class="text-5xl font-bold mb-6 bg-gradient-to-r from-orange-600 to-orange-800 bg-clip-text text-transparent">
                    Pilih Paket yang Sesuai untuk Anda
                </h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-3xl mx-auto">
                    Mulai dengan gratis, upgrade kapan saja sesuai kebutuhan. Tidak ada biaya tersembunyi,
                    semua transparan dan fleksibel.
                </p>
            </div>
        </div>
    </section>

    <!-- Pricing Plans Section -->
    <section class="py-20 bg-white/80 backdrop-blur-sm relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic Plan -->
                <div
                    class="pricing-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 cursor-pointer transform hover:-translate-y-2 scroll-reveal">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Starter</h3>
                    <p class="text-gray-600 mb-6">Sempurna untuk mencoba dan memulai</p>
                    <div class="text-4xl font-bold text-orange-600 mb-6">Gratis</div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Dashboard sederhana dan mudah</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Penyimpanan 1 GB (cukup untuk memulai)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Bantuan via email</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Fitur dasar manajemen travel</span>
                        </li>
                    </ul>
                    <a href="#"
                        class="inline-block bg-gradient-to-r from-orange-600 to-orange-700 text-white px-8 py-4 rounded-xl font-bold hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1">
                        Mulai Gratis
                    </a>
                    <p class="text-sm text-gray-500 mt-4 text-center">Tidak perlu kartu kredit</p>
                </div>

                <!-- Pro Plan -->
                <div
                    class="pricing-card group bg-gradient-to-br from-orange-100 to-orange-200 p-10 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border-2 border-orange-300 cursor-pointer transform hover:-translate-y-2 scroll-reveal relative">
                    <div
                        class="absolute top-4 right-4 bg-orange-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
                        Paling Populer</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Professional</h3>
                    <p class="text-gray-600 mb-6">Untuk bisnis yang mulai berkembang</p>
                    <div class="text-4xl font-bold text-orange-600 mb-2">Rp 299K</div>
                    <p class="text-gray-600 mb-6">/bulan</p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Semua fitur Starter</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Penyimpanan 10 GB</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Bantuan kapan saja via chat & email</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Laporan otomatis & analisis</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Bisa atur sesuai kebutuhan Anda</span>
                        </li>
                    </ul>
                    <a href="#"
                        class="inline-block bg-gradient-to-r from-orange-600 to-orange-700 text-white px-8 py-4 rounded-xl font-bold hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1">
                        Pilih Professional
                    </a>
                    <p class="text-sm text-gray-600 mt-4 text-center">Bisa dibatalkan kapan saja</p>
                </div>

                <!-- Enterprise Plan -->
                <div
                    class="pricing-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 cursor-pointer transform hover:-translate-y-2 scroll-reveal">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Business</h3>
                    <p class="text-gray-600 mb-6">Untuk bisnis dengan kebutuhan khusus</p>
                    <div class="text-4xl font-bold text-orange-600 mb-6">Custom</div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Semua fitur Professional</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Penyimpanan sesuai kebutuhan</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Tim support khusus untuk Anda</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Integrasi dengan sistem Anda</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Pelatihan khusus tim Anda</span>
                        </li>
                    </ul>
                    <a href="#"
                        class="inline-block border-2 border-orange-600 text-orange-600 px-8 py-4 rounded-xl font-bold hover:bg-orange-600 hover:text-white transition-all duration-300">
                        Hubungi Kami
                    </a>
                    <p class="text-sm text-gray-500 mt-4 text-center">Solusi disesuaikan kebutuhan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gradient-to-b from-white to-gray-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-5xl font-bold text-gray-800 mb-4">Pertanyaan yang Sering Ditanyakan</h2>
                <p class="text-xl text-gray-600">Kami bantu jawab keraguan Anda</p>
            </div>
            <div class="space-y-6 scroll-reveal max-w-4xl mx-auto">
                <div
                    class="bg-white p-6 rounded-2xl shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Bagaimana jika ingin ganti paket?</h3>
                    <p class="text-gray-600 leading-relaxed">Sangat mudah! Anda bisa upgrade atau downgrade kapan saja
                        dengan sekali klik.
                        Tidak ada penalti atau biaya tambahan. Perubahan akan berlaku di bulan berikutnya.</p>
                </div>
                <div
                    class="bg-white p-6 rounded-2xl shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Apa yang dimaksud dengan bantuan kapan saja?</h3>
                    <p class="text-gray-600 leading-relaxed">Untuk paket Professional dan Business, tim kami siap membantu
                        melalui chat dan email setiap saat. Kami biasanya merespons dalam hitungan menit, bukan jam.</p>
                </div>
                <div
                    class="bg-white p-6 rounded-2xl shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Bagaimana jika saya ingin berhenti berlangganan?</h3>
                    <p class="text-gray-600 leading-relaxed">Tidak ada kontrak jangka panjang. Anda bebas berhenti kapan
                        saja
                        dengan sekali klik. Data Anda tetap aman dan bisa diambil kapan pun Anda butuhkan.</p>
                </div>
                <div
                    class="bg-white p-6 rounded-2xl shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Apakah data saya aman?</h3>
                    <p class="text-gray-600 leading-relaxed">Sangat aman. Semua data ter-enkripsi dan di-backup otomatis
                        setiap hari.
                        Kami menggunakan standar keamanan yang sama dengan bank untuk melindungi informasi Anda.</p>
                </div>
                <div
                    class="bg-white p-6 rounded-2xl shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Apakah ada diskon untuk pembayaran tahunan?</h3>
                    <p class="text-gray-600 leading-relaxed">Ya! Jika Anda memilih pembayaran tahunan, kami berikan diskon
                        20%.
                        Itu artinya Anda hemat setara 2-3 bulan berlangganan. Hubungi kami untuk info lebih lanjut.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Section -->
    <section class="py-20 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-5xl font-bold text-gray-800 mb-4">Perbandingan Paket</h2>
                <p class="text-xl text-gray-600">Lihat detail fitur di setiap paket</p>
            </div>

            <div class="overflow-x-auto scroll-reveal">
                <table class="w-full bg-white rounded-2xl shadow-2xl overflow-hidden">
                    <thead class="bg-gradient-to-r from-orange-600 to-orange-700 text-white">
                        <tr>
                            <th class="px-8 py-6 text-left font-bold text-lg">Fitur</th>
                            <th class="px-8 py-6 text-center font-bold text-lg">Starter</th>
                            <th class="px-8 py-6 text-center font-bold text-lg">Professional</th>
                            <th class="px-8 py-6 text-center font-bold text-lg">Business</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Dashboard Sederhana</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Penyimpanan Cloud</td>
                            <td class="px-8 py-5 text-center text-gray-700">1 GB</td>
                            <td class="px-8 py-5 text-center text-gray-700">10 GB</td>
                            <td class="px-8 py-5 text-center text-gray-700">Unlimited</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Bantuan Tim</td>
                            <td class="px-8 py-5 text-center text-gray-700">Email</td>
                            <td class="px-8 py-5 text-center text-gray-700">Chat & Email</td>
                            <td class="px-8 py-5 text-center text-gray-700">Prioritas</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Laporan Otomatis</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Kustomisasi</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Integrasi API</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Pelatihan Tim</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative bg-gradient-to-r from-orange-600 to-orange-700 text-white py-20 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl animate-float-delayed"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-5xl font-bold mb-6 fade-in-up">Siap Mencoba TeMan?</h2>
            <p class="text-2xl mb-10 text-orange-100 fade-in-up delay-1">
                Mulai gratis hari ini. Tidak perlu kartu kredit. Tidak ada risiko.
            </p>
            <a href="#"
                class="inline-block bg-white text-orange-600 px-10 py-5 rounded-xl font-bold text-lg hover:bg-gray-100 hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1 fade-in-up delay-2">
                Coba Gratis Sekarang
            </a>
            <p class="mt-6 text-orange-100 text-base fade-in-up delay-2">
                Punya pertanyaan? <a href="#" class="underline hover:text-white transition-colors">Ngobrol dengan
                    kami</a>
            </p>
        </div>
    </section>
@endsection
