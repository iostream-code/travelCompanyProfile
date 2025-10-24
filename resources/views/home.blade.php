@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Animated Background -->
    <div class="fixed inset-0 -z-2 overflow-hidden">
        <div id="particles-bg" class="absolute inset-0 bg-gradient-to-br from-orange-50 via-white to-orange-50"></div>
        <canvas id="particlesCanvas" class="absolute inset-0 w-full h-full"></canvas>
    </div>

    <!-- Hero Section -->
    <section class="relative text-gray-800 py-20 overflow-hidden">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-orange-500/10 via-transparent to-orange-600/10"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="fade-in-up text-center md:text-left">
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        🌟 Kelola Bisnis Travel dengan Lebih Mudah
                    </div>
                    <h1
                        class="text-6xl font-sans font-bold mb-6 bg-gradient-to-r from-orange-600 to-orange-800 bg-clip-text text-transparent">
                        Selamat Datang di TeMan
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-3xl mx-auto">
                        Tidak perlu lagi pusing dengan sistem yang rumit. TeMan hadir lebih dari
                        <span class="font-semibold text-orange-600">Teman Setia</span> yang siap membantu Anda mengelola
                        bisnis travel dengan cara yang simpel dan mudah.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact') }}"
                            class="inline-block text-center bg-gradient-to-r from-orange-600 to-orange-700 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-xl font-bold hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1">
                            Coba Sekarang
                        </a>
                        <a href="{{ route('features') }}"
                            class="inline-block text-center border-2 border-orange-600 text-orange-600 px-6 sm:px-8 py-3 sm:py-4 rounded-xl font-bold hover:bg-orange-600 hover:text-white transition-all duration-300">
                            Jelajahi Fitur
                        </a>
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
                                        <div class="text-2xl font-bold text-orange-600">Mudah</div>
                                        <div class="text-xs text-gray-600">Digunakan</div>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute -bottom-6 -left-6 bg-white rounded-xl shadow-xl p-4 animate-float-delayed">
                                <div class="flex items-center space-x-2">
                                    <div class="text-3xl">💚</div>
                                    <div>
                                        <div class="text-2xl font-bold text-orange-600">Simpel</div>
                                        <div class="text-xs text-gray-600">& Praktis</div>
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
                <p class="text-lg md:text-xl text-gray-600">Dirancang dengan fokus pada <strong>kemudahan</strong> dan
                    <strong>kebutuhan</strong> Anda
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
                            <span class="text-gray-700 text-lg">Backup otomatis tanpa perlu repot</span>
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
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Ramah Pengguna</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Sesuai Kebutuhan</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Optimasi Pencatatan</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Atur Sesuka Hati</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
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
                        "Sebelumnya saya pakai Excel dan sering bingung. Sejak pakai TeMan, semua jadi lebih teratur.
                        Yang paling saya suka, saya bisa akses dari HP kapan pun."
                    </p>
                    <div class="border-t border-gray-200 pt-6 flex items-center space-x-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            C
                        </div>
                        <div>
                            <p class="font-bold text-gray-800">Crysna Wima Rangga</p>
                            <p class="text-sm text-gray-600">Pemilik Travel Nusantara Tour</p>
                        </div>
                    </div>
                </div>

                <div
                    class="testimonial-card group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <div class="text-yellow-400 text-xl">⭐⭐⭐⭐⭐</div>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed text-lg">
                        "Awalnya ragu, tapi ternyata gampang banget dipakainya. Karyawan baru pun langsung paham
                        tanpa perlu pelatihan lama. Sangat membantu!"
                    </p>
                    <div class="border-t border-gray-200 pt-6 flex items-center space-x-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            D
                        </div>
                        <div>
                            <p class="font-bold text-gray-800">Dewangga Putra</p>
                            <p class="text-sm text-gray-600">Owner, Jaya Travel & Tours</p>
                        </div>
                    </div>
                </div>

                <div
                    class="testimonial-card group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <div class="text-yellow-400 text-xl">⭐⭐⭐⭐⭐</div>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed text-lg">
                        "Aplikasinya mudah dimengerti dan simpel. Sebuah aplikasi itu jika Saya sudah merasa enak dan mudah
                        digunakan maka akan Saya gunakan terus. Beda kalau aplikasi itu susah yaa Saya taruh, Saya akan cari
                        yang lain apalagi usia-usia 40-an seperti Saya mestinya cari aplikasi yang mudah seperti ini."
                    </p>
                    <div class="border-t border-gray-200 pt-6 flex items-center space-x-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            A
                        </div>
                        <div>
                            <p class="font-bold text-gray-800">UGTMAS Tour & Travel</p>
                            <p class="text-sm text-gray-600">Owner, UGT MASTOUR & Travel</p>
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-5xl font-bold mb-6 fade-in-up">Yuk, Coba TeMan Sekarang</h2>
            <p class="text-2xl mb-10 text-orange-100 fade-in-up delay-1">Tunggu apalagi. Bisa langsung digunakan.</p>
            <a href="#"
                class="inline-block bg-white text-orange-600 px-10 py-5 rounded-xl font-bold text-lg hover:bg-gray-100 hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1 fade-in-up delay-2">
                Mulai Sekarang
            </a>
            <p class="mt-6 text-orange-100 text-sm fade-in-up delay-2">Tidak ada komitmen. Coba kapan saja.</p>
        </div>
    </section>
@endsection
