@extends('layouts.app')

@section('title', 'Harga TeMan')

@section('content')
    <!-- Animated Background -->
    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div id="particles-bg" class="absolute inset-0 bg-gradient-to-br from-orange-50 via-white to-orange-50"></div>
        <canvas id="particlesCanvas" class="absolute inset-0 w-full min-h-screen"></canvas>
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

    <!-- Feature Section -->
    <section class="pt-20 pb-2 bg-white/80 backdrop-blur-sm relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section 1: Kelola Booking & Pembayaran Otomatis -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
                <div class="order-2 md:order-1">
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity">
                        </div>
                        <img src="{{ asset('images/feature-1.png') }}" alt="Dashboard & Booking Management"
                            class="relative w-full rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        🎯 Kelola Paket & Jamaah
                    </div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Semua dalam Satu Platform</h2>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Dashboard lengkap yang menampilkan <span class="font-semibold text-gray-800">semua data
                            penting</span> - dari daftar paket, jamaah, detail booking,galeri kegiatan dan <span
                            class="font-semibold text-gray-800">laporan mainfest otomatis</span> tanpa harus membuatnya
                        manual.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Dashboard Real-Time & Update
                                    Instant</span>
                                <span class="text-gray-600 text-sm">Semua data penting di satu layar, update otomatis,
                                    galeri baru langsung muncul dan tersimpan dengan aman</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Daftarkan Jamaah Cepat
                                    dengan konfirmasi WhatsApp</span>
                                <span class="text-gray-600 text-sm">Input sekali, langsung terhubunga, data
                                    Jamaah tersimpan untuk laporan manifest</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Tracking Pembayaran &
                                    Perlengkapan</span>
                                <span class="text-gray-600 text-sm">Memudahkan dalam memantau pembayaran Jamaah & memantau
                                    distribusi perlengkapan Jamaah</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Section 2: Akses Mobile & Kenapa TeMan -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
                <div>
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        📱 Fleksibel & Mudah Digunakan
                    </div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Di Mana Pun, Bisnis Tetap Jalan</h2>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Akses dari manapun dan kapanpun - data selalu terhubung langsung. <span
                            class="font-semibold text-gray-800">Di luar negeri? Tenang, fitur lokasi siap membantu.</span>
                        Tampilan interaktif dan kaya akan fitur memudahkan setiap kegiatan Anda dimanapun.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Multi-User dengan Sinkronisasi
                                    Instan</span>
                                <span class="text-gray-600 text-sm">Perubahan pada Admin akan langsung terupdate pada Sales,
                                    Jamaah, dan dashboard petugas lainnya</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Setup Master Cukup 5 Menit, Langsung
                                    Bisa Dipakai</span>
                                <span class="text-gray-600 text-sm">Interface intuitif, tidak perlu memahami berhari-hari,
                                    siapkan sekarang, besok langsung dapat dipakai</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Dibuat Spesifik untuk Bisnis
                                    Travel</span>
                                <span class="text-gray-600 text-sm">Fitur fokus kebutuhan travel, bukan copy-paste aplikasi
                                    lain, serta support responsif via chat/whatsapp</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity">
                        </div>
                        <img src="{{ asset('images/feature-4.png') }}" alt="Mobile Access"
                            class="relative w-full rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Pricing Plans Section -->
    <section class="py-20 bg-white/80 backdrop-blur-sm relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Heading Section with Glow Effect -->
            <div class="flex flex-col items-center justify-center text-center mb-16">
                <div class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                    💎 Paket dengan Harga Terbaik
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-800 mb-6 relative inline-block">
                    Jadilah yang
                    <span class="relative inline-block">
                        <span
                            class="relative z-10 bg-gradient-to-r from-orange-500 to-orange-600 bg-clip-text text-transparent">Pertama</span>
                        <span
                            class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 blur-2xl opacity-30 animate-pulse"></span>
                    </span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Mulai gratis, upgrade kapan saja. Tidak ada biaya tersembunyi, tidak ada aturan yang ribet.
                </p>
            </div>
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
                    <div class=text-center>
                        <a href="{{ route('register') }}"
                            class="inline-block bg-gradient-to-r from-orange-600 to-orange-700 text-white px-8 py-4 rounded-xl font-bold hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1">
                            Mulai Gratis
                        </a>
                    </div>
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
                    <div class="text-4xl font-bold text-orange-600 mb-2">Rp 2.500.000</div>
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
                    <div class=text-center>
                        <a href="{{ route('register') }}"
                            class="inline-block bg-gradient-to-r from-orange-600 to-orange-700 text-white px-8 py-4 rounded-xl font-bold hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1">
                            Pilih Professional
                        </a>
                    </div>
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
                    <div class=text-center>
                        {{-- 6282231488584 --}}
                        <a href="https://wa.me/6282231488584/?text=Hai%2C%20Admin.%20Saya%20ingin%20mencoba%20Custom%20langganan"
                            target="_blank" rel="noopener noreferrer"
                            class="inline-block border-2 border-orange-600 text-orange-600 px-8 py-4 rounded-xl font-bold hover:bg-orange-600 hover:text-white transition-all duration-300">
                            Hubungi Kami
                        </a>
                    </div>
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

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Main CTA -->
            <div class="text-center mb-14">
                <div class="inline-block mb-4 px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-semibold">
                    🎯 Siap Meningkatkan Bisnis Travel Anda?
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 fade-in-up">
                    Bergabung dengan TeMan Sekarang!
                </h2>
                <p class="text-xl md:text-2xl mb-4 text-orange-100 fade-in-up delay-1 max-w-3xl mx-auto">
                    Platform manajemen travel yang simpel dan mudah digunakan
                </p>
            </div>

            <!-- Info Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Untuk Siapa -->
                <div
                    class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 hover:bg-white/20 transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-center">Untuk Siapa?</h3>
                    <ul class="space-y-2 text-orange-50">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Pemilik Travel & Tour</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Agen Umrah & Haji</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Bisnis Travel PPIU</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Organizer Perjalanan</span>
                        </li>
                    </ul>
                </div>

                <!-- Layanan -->
                <div
                    class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 hover:bg-white/20 transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-center">Layanan Kami</h3>
                    <ul class="space-y-2 text-orange-50">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Manajemen Paket, Jamaah, Kegiatan</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Pencatatan Pembayaran</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Laporan Otomatis</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Manifest Digital</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Tracking Kegiatan</span>
                        </li>
                    </ul>
                </div>

                <!-- Cara Daftar -->
                <div
                    class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 hover:bg-white/20 transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-center">Cara Daftar</h3>
                    <ol class="space-y-3 text-orange-50">
                        <li class="flex items-start">
                            <span
                                class="flex-shrink-0 w-6 h-6 bg-white/30 rounded-full flex items-center justify-center text-xs font-bold mr-3 mt-0.5">1</span>
                            <span>Isi form registrasi</span>
                        </li>
                        <li class="flex items-start">
                            <span
                                class="flex-shrink-0 w-6 h-6 bg-white/30 rounded-full flex items-center justify-center text-xs font-bold mr-3 mt-0.5">2</span>
                            <span>Upload dokumen legalitas</span>
                        </li>
                        <li class="flex items-start">
                            <span
                                class="flex-shrink-0 w-6 h-6 bg-white/30 rounded-full flex items-center justify-center text-xs font-bold mr-3 mt-0.5">3</span>
                            <span>Dapatkan akun & password via email</span>
                        </li>
                        <li class="flex items-start">
                            <span
                                class="flex-shrink-0 w-6 h-6 bg-white/30 rounded-full flex items-center justify-center text-xs font-bold mr-3 mt-0.5">4</span>
                            <span>Login dan mulai kelola bisnis Anda!</span>
                        </li>
                    </ol>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="text-center">
                <div class="inline-flex flex-col items-center">
                    <a href="{{ route('register') }}"
                        class="relative  text-white px-8 py-3 mb-6 rounded-full font-black text-2xl shadow-2xl animate-neon-glow hover:scale-105 transform transition-all duration-500 ease-in-out">
                        <span>⚡</span>
                        <span>Try for FREE</span>
                        <span>⚡</span>
                    </a>
                    <p class="text-orange-100 text-sm">
                        ✓ Gratis untuk memulai ✓ Tidak perlu ribet ✓ Setup 5 menit
                    </p>
                </div>
            </div>

            <!-- Trust Indicators -->
            <div class="mt-12 pt-8 border-t border-white/20">
                <div class="flex flex-wrap justify-center items-center gap-8 text-center">
                    <div>
                        <p class="text-3xl font-bold">100+</p>
                        <p class="text-sm text-orange-100">Travel Terafiliasi</p>
                    </div>
                    <div class="hidden sm:block w-px h-12 bg-white/30"></div>
                    <div>
                        <p class="text-3xl font-bold">24/7</p>
                        <p class="text-sm text-orange-100">Support Tersedia</p>
                    </div>
                    <div class="hidden sm:block w-px h-12 bg-white/30"></div>
                    <div>
                        <p class="text-3xl font-bold">99%</p>
                        <p class="text-sm text-orange-100">Keamanan Data</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
