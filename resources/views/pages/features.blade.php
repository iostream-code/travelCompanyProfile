@extends('layouts.app')

@section('title', 'Fitur MyApp')

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
                    Fitur Unggulan MyApp
                </h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-3xl mx-auto">
                    Temukan semua fitur canggih yang dirancang untuk membantu bisnis Anda berkembang dengan efisiensi dan
                    kemudahan.
                </p>
            </div>
        </div>
    </section>

    <!-- Feature List Section -->
    <section class="py-20 bg-white/80 backdrop-blur-sm relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Feature 1: Dashboard -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20 scroll-reveal">
                <div class="order-2 md:order-1">
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity">
                        </div>
                        <img src="https://via.placeholder.com/500x400" alt="Dashboard Preview"
                            class="relative w-full rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        Dashboard Intuitif
                    </div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Pantau Bisnis Anda Secara Real-Time</h2>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Dashboard MyApp memberikan visualisasi data yang jelas dan real-time, memungkinkan Anda untuk
                        memantau metrik bisnis penting dengan mudah.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Grafik interaktif untuk analisis cepat</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Widget yang dapat disesuaikan</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Integrasi dengan berbagai sumber data</span>
                        </li>
                    </ul>
                    <a href="#" class="mt-6 inline-block text-orange-600 font-semibold hover:underline">
                        Pelajari lebih lanjut →
                    </a>
                </div>
            </div>

            <!-- Feature 2: Data Management -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20 scroll-reveal">
                <div>
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        Manajemen Data
                    </div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Kelola Data dengan Aman dan Efisien</h2>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Sistem manajemen data kami memastikan data Anda aman, terorganisir, dan dapat diakses kapan saja
                        dari mana saja.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Penyimpanan cloud dengan enkripsi tingkat tinggi</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Backup otomatis harian</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Akses multi-perangkat yang seamless</span>
                        </li>
                    </ul>
                    <a href="#" class="mt-6 inline-block text-orange-600 font-semibold hover:underline">
                        Pelajari lebih lanjut →
                    </a>
                </div>
                <div>
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity">
                        </div>
                        <img src="https://via.placeholder.com/500x400" alt="Data Management Preview"
                            class="relative w-full rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
            </div>

            <!-- Feature 3: Analytics -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20 scroll-reveal">
                <div class="order-2 md:order-1">
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity">
                        </div>
                        <img src="https://via.placeholder.com/500x400" alt="Analytics Preview"
                            class="relative w-full rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        Analytics & Reporting
                    </div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Wawasan Bisnis yang Mendalam</h2>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Dapatkan laporan analitik yang kuat untuk membantu Anda membuat keputusan berbasis data dengan
                        percaya diri.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Laporan otomatis yang dapat dijadwalkan</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Export data dalam format PDF, Excel, CSV</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Analisis prediktif untuk strategi jangka panjang</span>
                        </li>
                    </ul>
                    <a href="#" class="mt-6 inline-block text-orange-600 font-semibold hover:underline">
                        Pelajari lebih lanjut →
                    </a>
                </div>
            </div>

            <!-- Feature 4: Integrations -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20 scroll-reveal">
                <div>
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        Integrasi
                    </div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Terhubung dengan Alat Favorit Anda</h2>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        MyApp terintegrasi dengan berbagai alat bisnis populer untuk memastikan alur kerja yang mulus.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">API kuat untuk integrasi kustom</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Kompatibel dengan CRM dan ERP populer</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Sinkronisasi data secara real-time</span>
                        </li>
                    </ul>
                    <a href="#" class="mt-6 inline-block text-orange-600 font-semibold hover:underline">
                        Pelajari lebih lanjut →
                    </a>
                </div>
                <div>
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity">
                        </div>
                        <img src="https://via.placeholder.com/500x400" alt="Integrations Preview"
                            class="relative w-full rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
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
            <h2 class="text-5xl font-bold mb-6 fade-in-up">Siap Mengoptimalkan Bisnis Anda?</h2>
            <p class="text-2xl mb-10 text-orange-100 fade-in-up delay-1">
                Mulai gunakan fitur-fitur canggih MyApp hari ini.
            </p>
            <a href="#"
                class="inline-block bg-white text-orange-600 px-10 py-5 rounded-xl font-bold text-lg hover:bg-gray-100 hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1 fade-in-up delay-2">
                Daftar Sekarang
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

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 8s ease-in-out infinite;
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
