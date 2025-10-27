@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Animated Background -->
    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div id="particles-bg" class="absolute inset-0 bg-gradient-to-br from-orange-50 via-white to-orange-50"></div>
        <canvas id="particlesCanvas" class="absolute inset-0 w-full min-h-screen"></canvas>
    </div>

    <!-- Hero Section -->
    <section class="relative text-gray-800 py-20 overflow-hidden">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-orange-500/10 via-transparent to-orange-600/10"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
                <div class="fade-in-up text-center md:text-left">
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        🌟 Kelola Bisnis Travel dengan Teknologi 6.0 secara Autopilot
                    </div>
                    <h1
                        class="text-6xl font-sans font-bold mb-6 bg-gradient-to-r from-orange-600 to-orange-800 bg-clip-text text-transparent">
                        Selamat Datang di TeMan
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-3xl mx-auto">
                        Saatnya kerja lebih santai, dengan hasil yang maksimal. TeMan hadir lebih dari
                        <span class="font-semibold text-orange-600">Teman Setia</span> yang siap membantu Anda mengelola
                        bisnis travel dengan cara yang lebih santai, namun profitable.
                    </p>

                    <div class="grid grid-cols-2 gap-12 items-center mb-20 scroll-reveal">
                        <div class="order-2 md:order-1">
                            <div class="relative group">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity">
                                </div>
                                <img src="{{ asset('images/feature-1.png') }}" alt="Dashboard Preview"
                                    class="relative w-full rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
                            </div>
                        </div>
                        <div class="order-1 md:order-2">
                            <div
                                class="inline-block mb-4 px-3 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                                📊 Dashboard Sekali Lihat
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 mb-2">Semua dalam Satu Tampilan</h2>
                            <p class="text-gray-600 mb-2 text-sm leading-relaxed">
                                Tidak perlu buka banyak tab atau aplikasi. Dashboard kami menampilkan
                                <span class="font-semibold text-gray-800">semua yang Anda butuhkan</span>.
                            </p>
                            <a href="{{ route('features') }}"
                                class="flex items-center text-primary-700 text-lg hover:-translate-1 transition ease-in font-semibold">
                                Selengkapnya
                                <svg class="w-5 h-5 ms-2 text-orange-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="fade-in-up delay-1">
                    <div class="relative">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-2xl blur-2xl opacity-30 animate-pulse-slow">
                        </div>
                        <div
                            class="relative bg-white/80 backdrop-blur-xl rounded-2xl p-8 shadow-2xl border border-orange-100 hover:scale-105 transition-transform duration-500">
                            <video autoplay loop muted playsinline class="rounded-2xl shadow-lg w-full h-auto object-cover">
                                <source src="{{ asset('video/overview-apps.mp4') }}" type="video/mp4">
                                <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=800&auto=format&fit=crop"
                                    alt="Travel Registration" class="rounded-2xl shadow-lg w-full h-auto object-cover">
                            </video>
                            <!-- Floating Stats -->
                            <div class="absolute -top-6 -right-6 bg-white rounded-xl shadow-xl p-4 animate-float">
                                <div class="flex items-center space-x-2">
                                    <div class="text-3xl">😊</div>
                                    <div>
                                        <div class="text-2xl font-bold text-orange-600">Kerja</div>
                                        <div class="text-xs text-gray-600">Santai</div>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute -bottom-6 -left-6 bg-white rounded-xl shadow-xl p-4 animate-float-delayed">
                                <div class="flex items-center space-x-2">
                                    <div class="text-3xl">💚</div>
                                    <div>
                                        <div class="text-2xl font-bold text-orange-600">Hasil</div>
                                        <div class="text-xs text-gray-600">Maksimal</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Preview -->
    <section class="py-20 bg-white/80 backdrop-blur-sm relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2
                    class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-orange-600 to-orange-800 bg-clip-text text-transparent">
                    Yang Membuat TeMan Istimewa</h2>
                <p class="text-lg md:text-xl text-gray-600">Dirancang dengan fokus pada kemajuan bisnis travel Anda secara
                    <strong>Praktis</strong> dan
                    <strong>Aman</strong>
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="feature-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 cursor-pointer">
                    <div
                        class="text-5xl mb-6 group-hover:scale-110 group-hover:rotate-12 transition-transform duration-500">
                        ✨</div>
                    <h3 class="text-2xl font-bold mb-3 text-orange-600">Antarmuka Intuitif</h3>
                    <p class="text-gray-600 leading-relaxed">Desain yang ramah pengguna membuat siapa pun bisa langsung
                        paham tanpa perlu panduan rumit</p>
                    <div
                        class="mt-6 flex items-center text-orange-600 font-semibold group-hover:translate-x-2 transition-transform">
                        Selengkapnya →
                    </div>
                </div>
                <div
                    class="feature-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 cursor-pointer">
                    <div
                        class="text-5xl mb-6 group-hover:scale-110 group-hover:rotate-12 transition-transform duration-500">
                        🛡️</div>
                    <h3 class="text-2xl font-bold mb-3 text-orange-600">Data Aman Terlindungi</h3>
                    <p class="text-gray-600 leading-relaxed">Tidur nyenyak karena data bisnis Anda tersimpan dengan aman dan
                        terpusat dalam database Kami</p>
                    <a href="{{ route('features') }}"
                        class="mt-6 flex items-center text-orange-600 font-semibold group-hover:translate-x-2 transition-transform">
                        Selengkapnya →
                    </a>
                </div>
                <div
                    class="feature-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 cursor-pointer">
                    <div
                        class="text-5xl mb-6 group-hover:scale-110 group-hover:rotate-12 transition-transform duration-500">
                        📱</div>
                    <h3 class="text-2xl font-bold mb-3 text-orange-600">Akses Kapan Saja</h3>
                    <p class="text-gray-600 leading-relaxed">Kelola bisnis dari laptop, tablet, atau smartphone - di mana
                        pun Anda berada dan akses kapanpun tanpa ribet</p>
                    <div
                        class="mt-6 flex items-center text-orange-600 font-semibold group-hover:translate-x-2 transition-transform">
                        Selengkapnya →
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Features Section -->
    <section class="py-20 bg-gradient-to-b from-white to-gray-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-5xl font-bold text-gray-800 mb-4">Fitur yang Memudahkan Pekerjaan Anda</h2>
                <p class="text-xl text-gray-600">Semua yang Anda butuhkan, tanpa yang tidak perlu</p>
            </div>

            <!-- Feature 1 -->
            <div class="absolute right-0 lg:w-1/4 md:w-1/4 lg:h-2/4 md:h-1/3 bg-cover bg-center opacity-10"
                style="background-image: url('https://plus.unsplash.com/premium_photo-1671863658889-a1b6781bdbca?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=627');">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20 scroll-reveal z-50">
                <div class="order-2 md:order-1">
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity">
                        </div>
                        <img src="{{ asset('images/banner-1.webp') }}" alt="Dashboard"
                            class="relative w-full rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        Dashboard
                    </div>
                    <h3 class="text-4xl font-bold text-gray-800 mb-4">Lihat Semuanya dalam Satu Layar</h3>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Dashboard sederhana yang menampilkan informasi penting bisnis Anda. Tidak ada data yang
                        membingungkan, hanya yang benar-benar Anda butuhkan.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Tampilan simpel dan mudah dipahami</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Atur sesuai kebutuhan Anda</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Data selalu terupdate dan terintegrasi</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20 scroll-reveal">
                <div>
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        Manajemen Data
                    </div>
                    <h3 class="text-4xl font-bold text-gray-800 mb-4">Atur Data Tanpa Ribet</h3>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Simpan dan kelola semua data bisnis dengan cara yang terorganisir. Tidak perlu khawatir
                        kehilangan data atau mencari file yang hilang.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Semua tersimpan rapi di satu tempat</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Semua terjaga dalam pengawasan Kami</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Akses dari perangkat mana pun</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity">
                        </div>
                        <img src="{{ asset('images/banner-2.webp') }}"
                            class="relative w-full rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="absolute left-0 bottom-0 lg:w-1/3 md:w-1/4 lg:h-2/4 md:h-1/3 bg-cover bg-center opacity-15 z-10"
                style="background-image: url('https://plus.unsplash.com/premium_photo-1671863658886-bc049efeeb5b?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=627')">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center scroll-reveal relative z-10">
                <div class="order-2 md:order-1">
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity">
                        </div>
                        <img src="{{ asset('images/banner-3.webp') }}" alt="Analytics"
                            class="relative w-full rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        Laporan
                    </div>
                    <h3 class="text-4xl font-bold text-gray-800 mb-4">Laporan Otomatis, Keputusan Lebih Mudah</h3>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Dapatkan insight bisnis tanpa perlu mengolah data manual. TeMan membantu Anda memahami
                        performa bisnis dengan cara yang sederhana.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Laporan siap pakai tanpa ribet</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Download dalam format yang Anda butuhkan</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Pahami kondisi bisnis dengan mudah</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-50/50 via-transparent to-orange-50/50"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-4">Kenapa Memilih TeMan?</h2>
                <p class="text-lg md:text-xl text-gray-600">Lebih dari sekedar aplikasi manajemen bisnis travel</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="advantage-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-l-4 border-orange-600 cursor-pointer transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-500">🎯</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Cocok untuk Semua Skala</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Baik Anda baru memulai atau sudah besar, TeMan tumbuh bersama bisnis travel Anda
                    </p>
                </div>

                <div
                    class="advantage-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-l-4 border-orange-600 cursor-pointer transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-500">⚡</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Mulai Pakai Langsung</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Tidak perlu training berhari-hari. Daftar, login, dan langsung bisa digunakan
                    </p>
                </div>

                <div
                    class="advantage-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-l-4 border-orange-600 cursor-pointer transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-500">🤝</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Bantuan Selalu Ada</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Tim kami siap membantu kapan pun Anda butuh, karena kesuksesan Anda adalah prioritas kami
                    </p>
                </div>

                <div
                    class="advantage-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-l-4 border-orange-600 cursor-pointer transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-500">🔗</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Saling Terintegrasi</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Mengintegrasikan dengan setiap lini pada bisnis Anda, semuanya saling terhubung
                    </p>
                </div>

                <div
                    class="advantage-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-l-4 border-orange-600 cursor-pointer transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-500">💡</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Hemat Waktu & Tenaga</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Fokus pada bisnis Anda, biarkan TeMan yang mengurus hal-hal administratif
                    </p>
                </div>

                <div
                    class="advantage-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-l-4 border-orange-600 cursor-pointer transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-500">📚</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Panduan Lengkap Tersedia</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Dokumentasi, video tutorial, dan tips praktis untuk memaksimalkan penggunaan
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Section -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white relative">
        <div class="absolute right-25 lg:w-1/4 md:w-1/4 lg:h-5/6 md:h-1/3 bg-cover bg-center opacity-25"
            style="background-image: url('https://plus.unsplash.com/premium_photo-1671863658769-723e2ba3cdf9?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=627');">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-4">Perbandingan Fitur</h2>
                <p class="text-lg md:text-xl text-gray-600">Lihat apa yang membuat TeMan berbeda</p>
            </div>

            <div class="overflow-x-auto scroll-reveal">
                <table class="w-full bg-white rounded-2xl shadow-2xl overflow-hidden">
                    <thead class="bg-gradient-to-r from-orange-600 to-orange-700 text-white">
                        <tr>
                            <th class="px-8 py-6 text-left font-bold text-lg">Fitur</th>
                            <th class="px-8 py-6 text-center font-bold text-lg">TeMan</th>
                            <th class="px-8 py-6 text-center font-bold text-lg">Platform Lain</th>
                            <th class="px-8 py-6 text-center font-bold text-lg">Cara Manual</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Mudah Digunakan</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">-</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">-</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Ramah Pengguna</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">-</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">-</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Sesuai Kebutuhan</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">-</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">-</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Optimasi Pencatatan</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">-</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">-</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Atur Sesuka Hati</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">-</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div class="absolute left-0 -bottom-25 lg:w-1/3 md:w-1/5 lg:h-11/12 md:h-1/3 bg-cover bg-center opacity-25"
            style="background-image: url('https://plus.unsplash.com/premium_photo-1671863658772-00e6f046928c?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1632');">
        </div>
        <div class="absolute inset-0 bg-gradient-to-br from-orange-50/30 via-transparent to-orange-50/30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-4">Cerita dari Pengguna TeMan</h2>
                <p class="text-lg md:text-xl text-gray-600">Pengalaman nyata dari mereka yang sudah terbantu</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="testimonial-card group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <div class="text-yellow-400 text-xl">⭐⭐⭐⭐⭐</div>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed text-lg">
                        "Sebagai Owner travel , sebelumnya Tim Admin dan lainnya pakai excel. Saat ada kebutuhan mendadak
                        atau diwaktu malam app TeMan ini tanpa ribet dapat membantu pembuatan laporan, jadi dapat
                        lebih efisien dibanding harus menunggu jeda waktu Tim Admin ke kantor."
                    </p>
                    <div class="border-t border-gray-200 pt-6 flex items-center space-x-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            C
                        </div>
                        <div>
                            <p class="font-bold text-gray-800">Duta Mulia</p>
                            <p class="text-sm text-gray-600">Owner, PT. Duta Mulia Iswana Ekapratama</p>
                        </div>
                    </div>
                </div>

                <div
                    class="testimonial-card group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <div class="text-yellow-400 text-xl">⭐⭐⭐⭐⭐</div>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed text-lg">
                        "Aplikasi ini Saya rasa sudah paling tepat dan mudah digunakan, maka akan Saya gunakan terus
                        kedepannya. Beda kalau aplikasi itu susah yaa Saya taruh, Saya akan cari
                        yang lain apalagi usia-usia 40-an seperti Saya mestinya cari aplikasi yang mudah seperti ini."
                    </p>
                    <div class="border-t border-gray-200 pt-6 flex items-center space-x-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            A
                        </div>
                        <div>
                            <p class="font-bold text-gray-800">UGTMAS Tour & Travel</p>
                            <p class="text-sm text-gray-600">Owner, UGTMAS Tour & Travel</p>
                        </div>
                    </div>
                </div>

                <div
                    class="testimonial-card group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <div class="text-yellow-400 text-xl">⭐⭐⭐⭐⭐</div>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed text-lg">
                        "Awalnya ragu, tapi ternyata gampang banget dipakainya. Simpel tanpa melibatkan banyak Tim sehingga
                        bisa lebih efisien secara biaya operasional, cocok seperti Saya yang baru memulai bisnis travel dan
                        belum memiliki banyak tim."
                    </p>
                    <div class="border-t border-gray-200 pt-6 flex items-center space-x-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            D
                        </div>
                        <div>
                            <p class="font-bold text-gray-800">Maali Wisata</p>
                            <p class="text-sm text-gray-600">Owner, PT. Ma'ali Wisata Tour and Travel</p>
                        </div>
                    </div>
                </div>
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
