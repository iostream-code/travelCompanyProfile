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
                <div class="fade-in-up">
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        🚀 Platform Bisnis Terpercaya
                    </div>
                    <h1
                        class="text-7xl font-sans font-bold mb-6 bg-gradient-to-r from-orange-600 to-orange-800 bg-clip-text text-transparent">
                        Welcome to TeMan
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Masih jaman Owner kerja di Kantor? Telah hadir platform terpadu untuk mengembangkan bisnis travel
                        Anda.
                    </p>
                    <div class="space-x-4">
                        <a href="#"
                            class="inline-block bg-gradient-to-r from-orange-600 to-orange-700 text-white px-8 py-4 rounded-xl font-bold hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1">
                            Mulai Sekarang
                        </a>
                        <a href="{{ route('features') }}"
                            class="inline-block border-2 border-orange-600 text-orange-600 px-8 py-4 rounded-xl font-bold hover:bg-orange-600 hover:text-white transition-all duration-300">
                            Pelajari Fitur
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
                            <img src="{{ asset('images/banner-1.webp') }}" alt="App Preview"
                                class="w-full rounded-xl shadow-lg">
                            <!-- Floating Stats -->
                            <div class="absolute -top-6 -right-6 bg-white rounded-xl shadow-xl p-4 animate-float">
                                <div class="flex items-center space-x-2">
                                    <div class="text-3xl">📊</div>
                                    <div>
                                        <div class="text-2xl font-bold text-orange-600">98%</div>
                                        <div class="text-xs text-gray-600">Satisfaction</div>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute -bottom-6 -left-6 bg-white rounded-xl shadow-xl p-4 animate-float-delayed">
                                <div class="flex items-center space-x-2">
                                    <div class="text-3xl">👥</div>
                                    <div>
                                        <div class="text-2xl font-bold text-orange-600">10K+</div>
                                        <div class="text-xs text-gray-600">Active Users</div>
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
                    class="text-5xl font-bold mb-4 bg-gradient-to-r from-orange-600 to-orange-800 bg-clip-text text-transparent">
                    Fitur Unggulan</h2>
                <p class="text-xl text-gray-600">Teknologi terdepan untuk bisnis Anda</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="feature-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 cursor-pointer">
                    <div
                        class="text-5xl mb-6 group-hover:scale-110 group-hover:rotate-12 transition-transform duration-500">
                        ⚡</div>
                    <h3 class="text-2xl font-bold mb-3 text-orange-600">Kecepatan Maksimal</h3>
                    <p class="text-gray-600 leading-relaxed">Performa optimal dengan loading time ultra cepat dan response
                        time minimal</p>
                    <div
                        class="mt-6 flex items-center text-orange-600 font-semibold group-hover:translate-x-2 transition-transform">
                        Pelajari lebih lanjut →
                    </div>
                </div>
                <div
                    class="feature-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 cursor-pointer">
                    <div
                        class="text-5xl mb-6 group-hover:scale-110 group-hover:rotate-12 transition-transform duration-500">
                        🔒</div>
                    <h3 class="text-2xl font-bold mb-3 text-orange-600">Keamanan Terjamin</h3>
                    <p class="text-gray-600 leading-relaxed">Enkripsi tingkat enterprise dengan standar keamanan
                        internasional</p>
                    <div
                        class="mt-6 flex items-center text-orange-600 font-semibold group-hover:translate-x-2 transition-transform">
                        Pelajari lebih lanjut →
                    </div>
                </div>
                <div
                    class="feature-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 cursor-pointer">
                    <div
                        class="text-5xl mb-6 group-hover:scale-110 group-hover:rotate-12 transition-transform duration-500">
                        📱</div>
                    <h3 class="text-2xl font-bold mb-3 text-orange-600">Full Responsive</h3>
                    <p class="text-gray-600 leading-relaxed">Sempurna di semua perangkat - desktop, tablet, hingga
                        smartphone</p>
                    <div
                        class="mt-6 flex items-center text-orange-600 font-semibold group-hover:translate-x-2 transition-transform">
                        Pelajari lebih lanjut →
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Features Section -->
    <section class="py-20 bg-gradient-to-b from-white to-gray-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-5xl font-bold text-gray-800 mb-4">Fitur Lengkap untuk Bisnis Anda</h2>
                <p class="text-xl text-gray-600">Semua yang Anda butuhkan dalam satu platform</p>
            </div>

            <!-- Feature 1 -->
            <div class="absolute right-0 lg:w-1/4 md:w-1/4 lg:h-2/4 md:h-1/3 bg-cover bg-center opacity-10"
                style="background-image: url('https://plus.unsplash.com/premium_photo-1661934725810-331b2befef66?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=880');">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20 scroll-reveal">
                <div class="order-2 md:order-1">
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity">
                        </div>
                        <img src="https://via.placeholder.com/500x400" alt="Dashboard"
                            class="relative w-full rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        Dashboard
                    </div>
                    <h3 class="text-4xl font-bold text-gray-800 mb-4">Dashboard Intuitif</h3>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Dashboard yang mudah digunakan dengan visualisasi data real-time. Pantau semua metrik penting bisnis
                        Anda dalam satu tempat.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Visualisasi data yang jelas dan informatif</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Widget yang dapat dikustomisasi sesuai kebutuhan</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Update data secara real-time tanpa refresh</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="absolute left-0 bottom-25 lg:w-1/3 md:w-1/4 lg:h-2/3 md:h-1/3 bg-cover bg-center opacity-15"
                style="background-image: url('https://plus.unsplash.com/premium_photo-1671863658886-bc049efeeb5b?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=627')">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20 scroll-reveal">
                <div>
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        Data Management
                    </div>
                    <h3 class="text-4xl font-bold text-gray-800 mb-4">Manajemen Data Terpadu</h3>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Kelola semua data bisnis Anda dengan sistem yang aman, terstruktur, dan mudah diakses dari mana
                        saja.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Penyimpanan cloud yang aman dan terpercaya</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Backup otomatis setiap hari</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Akses dari berbagai perangkat kapan saja</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity">
                        </div>
                        <img src="https://via.placeholder.com/500x400" alt="Data Management"
                            class="relative w-full rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center scroll-reveal">
                <div class="order-2 md:order-1">
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity">
                        </div>
                        <img src="https://via.placeholder.com/500x400" alt="Analytics"
                            class="relative w-full rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        Analytics
                    </div>
                    <h3 class="text-4xl font-bold text-gray-800 mb-4">Analytics & Reporting</h3>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Analisis mendalam dengan laporan komprehensif untuk membuat keputusan bisnis yang lebih baik dan
                        terukur.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Laporan otomatis yang dapat dijadwalkan</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Export data dalam berbagai format (PDF, Excel, CSV)</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Analisis prediktif untuk perencanaan strategis</span>
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
                <h2 class="text-5xl font-bold text-gray-800 mb-4">Keunggulan MyApp</h2>
                <p class="text-xl text-gray-600">Mengapa ribuan bisnis memilih MyApp</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="advantage-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-l-4 border-orange-600 cursor-pointer transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-500">💼</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Solusi Enterprise</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Dirancang untuk bisnis dari skala kecil hingga enterprise dengan fitur yang dapat disesuaikan
                    </p>
                </div>

                <div
                    class="advantage-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-l-4 border-orange-600 cursor-pointer transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-500">🚀</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Implementasi Cepat</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Setup mudah dalam hitungan menit, bukan hari. Tim Anda dapat langsung produktif
                    </p>
                </div>

                <div
                    class="advantage-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-l-4 border-orange-600 cursor-pointer transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-500">👥</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Support 24/7</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Tim customer success kami siap membantu Anda kapan saja melalui chat, email, atau phone
                    </p>
                </div>

                <div
                    class="advantage-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-l-4 border-orange-600 cursor-pointer transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-500">🔄</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Integrasi Mudah</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Terintegrasi dengan tools favorit Anda. API yang powerful untuk customisasi maksimal
                    </p>
                </div>

                <div
                    class="advantage-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-l-4 border-orange-600 cursor-pointer transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-500">📈</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">ROI Terbukti</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Tingkatkan efisiensi hingga 40% dan hemat biaya operasional secara signifikan
                    </p>
                </div>

                <div
                    class="advantage-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-l-4 border-orange-600 cursor-pointer transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-500">🎓</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Training & Resources</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Dokumentasi lengkap, video tutorial, dan webinar gratis untuk memaksimalkan penggunaan
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Section -->

    <section class="py-20 bg-gradient-to-b from-gray-50 to-white relative">
        <div class="absolute right-25 lg:w-1/4 md:w-1/4 lg:h-5/6 md:h-1/3 bg-cover bg-center opacity-25"
            style="background-image: url('https://plus.unsplash.com/premium_photo-1683122005364-d4a9a1ae8886?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=735');">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-5xl font-bold text-gray-800 mb-4">Bandingkan dengan Kompetitor</h2>
                <p class="text-xl text-gray-600">Lihat mengapa MyApp menjadi pilihan terbaik</p>
            </div>

            <div class="overflow-x-auto scroll-reveal">
                <table class="w-full bg-white rounded-2xl shadow-2xl overflow-hidden">
                    <thead class="bg-gradient-to-r from-orange-600 to-orange-700 text-white">
                        <tr>
                            <th class="px-8 py-6 text-left font-bold text-lg">Fitur</th>
                            <th class="px-8 py-6 text-center font-bold text-lg">MyApp</th>
                            <th class="px-8 py-6 text-center font-bold text-lg">Kompetitor A</th>
                            <th class="px-8 py-6 text-center font-bold text-lg">Kompetitor B</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Dashboard Real-time</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Support 24/7</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">API Lengkap</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Harga Kompetitif</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                        </tr>
                        <tr class="hover:bg-orange-50 transition-colors duration-300">
                            <td class="px-8 py-5 font-semibold text-gray-800">Customisasi Unlimited</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                            <td class="px-8 py-5 text-center text-gray-400 text-2xl">✗</td>
                            <td class="px-8 py-5 text-center text-green-600 text-2xl">✓</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div class="absolute left-0 -bottom-25 lg:w-1/3 md:w-1/5 lg:h-11/12 md:h-1/3 bg-cover bg-center opacity-10"
            style="background-image: url('https://plus.unsplash.com/premium_photo-1683133486351-2bceb03d9d0f?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=880');">
        </div>
        <div class="absolute inset-0 bg-gradient-to-br from-orange-50/30 via-transparent to-orange-50/30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-5xl font-bold text-gray-800 mb-4">Apa Kata Pengguna Kami?</h2>
                <p class="text-xl text-gray-600">Dengarkan pengalaman bisnis yang telah menggunakan MyApp</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="testimonial-card group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <div class="text-yellow-400 text-xl">⭐⭐⭐⭐⭐</div>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed text-lg">
                        "Implementasinya sangat mudah. Tim kami bisa langsung produktif tanpa memerlukan training yang
                        rumit."
                    </p>
                    <div class="border-t border-gray-200 pt-6 flex items-center space-x-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            A
                        </div>
                        <div>
                            <p class="font-bold text-gray-800">Ahmad Wijaya</p>
                            <p class="text-sm text-gray-600">Director, Startup Tech Inovatif</p>
                        </div>
                    </div>
                </div>

                <div
                    class="testimonial-card group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <div class="text-yellow-400 text-xl">⭐⭐⭐⭐⭐</div>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed text-lg">
                        "MyApp telah mengubah cara kami mengelola bisnis. Efisiensi meningkat drastis dan biaya operasional
                        turun signifikan!"
                    </p>
                    <div class="border-t border-gray-200 pt-6 flex items-center space-x-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            B
                        </div>
                        <div>
                            <p class="font-bold text-gray-800">Budi Santoso</p>
                            <p class="text-sm text-gray-600">CEO, PT Maju Jaya Indonesia</p>
                        </div>
                    </div>
                </div>

                <div
                    class="testimonial-card group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <div class="text-yellow-400 text-xl">⭐⭐⭐⭐⭐</div>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed text-lg">
                        "Support team mereka luar biasa responsif. Setiap pertanyaan kami dijawab dalam hitungan menit!"
                    </p>
                    <div class="border-t border-gray-200 pt-6 flex items-center space-x-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            S
                        </div>
                        <div>
                            <p class="font-bold text-gray-800">Siti Nurhaliza</p>
                            <p class="text-sm text-gray-600">Manager, CV Digital Solutions</p>
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
            <h2 class="text-5xl font-bold mb-6 fade-in-up">Siap untuk memulai?</h2>
            <p class="text-2xl mb-10 text-orange-100 fade-in-up delay-1">Bergabunglah dengan ribuan pengguna yang telah
                merasakan manfaatnya</p>
            <a href="#"
                class="inline-block bg-white text-orange-600 px-10 py-5 rounded-xl font-bold text-lg hover:bg-gray-100 hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1 fade-in-up delay-2">
                Daftar Gratis Sekarang
            </a>
        </div>
    </section>

    <!-- Custom CSS Animations -->
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) translateX(0px);
            }

            50% {
                transform: translateY(-20px) translateX(10px);
            }
        }

        @keyframes float-delayed {

            0%,
            100% {
                transform: translateY(0px) translateX(0px);
            }

            50% {
                transform: translateY(20px) translateX(-10px);
            }
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.3;
            }

            50% {
                opacity: 0.5;
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 8s ease-in-out infinite;
        }

        .animate-pulse-slow {
            animation: pulse-slow 4s ease-in-out infinite;
        }

        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .delay-1 {
            animation-delay: 0.2s;
        }

        .delay-2 {
            animation-delay: 0.4s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .scroll-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease-out;
        }

        .scroll-reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
@endsection
