@extends('layouts.app')

@section('title', 'Fitur TeMan')

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
                <div class="inline-block mb-6 px-6 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-bold">
                    ✨ Sederhana, Cepat, Efektif
                </div>
                <h1
                    class="text-4xl lg:text-6xl font-bold mb-6 bg-gradient-to-r from-orange-600 to-orange-800 bg-clip-text text-transparent">
                    Kelola Travel dengan<br>Satu Platform Simpel
                </h1>
                <p class="text-md lg:text-xl text-gray-600 mb-8 leading-relaxed max-w-3xl mx-auto">
                    Lupakan sistem rumit dan spreadsheet tak berujung. TeMan hadir dengan solusi sederhana yang
                    <span class="font-semibold text-orange-600">Langsung Bisa Digunakan</span> untuk mengelola bisnis travel
                    Anda dari mana saja.
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
                        <img src="{{ asset('images/feature-1.png') }}" alt="Dashboard Preview"
                            class="relative w-full rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        📊 Dashboard Admin
                    </div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Memastikan Semua dalam Satu Tampilan</h2>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Tidak perlu buka banyak tab atau aplikasi. Dashboard Admin menampilkan
                        <span class="font-semibold text-gray-800">semua yang Anda butuhkan</span> - detail paket, data
                        Jamaah, data booking, hingga galeri kegiatan.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Daftar & Detail Paket</span>
                                <span class="text-gray-600 text-sm">Memudahkan memantau dan mengatur semuanya dalam satu
                                    tampilan</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Daftar Jamaah</span>
                                <span class="text-gray-600 text-sm">Langsung terdaftar secara real-time tanpa menunggu
                                    koordinasi & informasi terkait.</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Galeri Kegiatan
                                    Jamaah</span>
                                <span class="text-gray-600 text-sm">Tersimpan otomatis tanpa mengurangi memori handphone
                                    Anda. Tersedia fitur share & download saat dibutuhkan.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Feature 2: Jamaah Management -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20 scroll-reveal">
                <div>
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        🎫 Dashboard Sales
                    </div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Daftarkan Jamaah Cukup 2 Menit</h2>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Input Jamaah baru? Cukup pilih paket, isi data Jamaah, dan selesai! Sistem otomatis
                        terintegrasi dengan Admin, kirim konfirmasi ke Jamaah, dan share detail paket melalui WhatsApp.
                        <span class="font-semibold text-gray-800">Tidak ada manual entry berulang-ulang.</span>
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Lihat Daftar Paket Tersedia</span>
                                <span class="text-gray-600 text-sm">Mudah dan menarik melihat tampilan daftar paket
                                    membuatnya menyenangkan</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Share Paket Melalui WhatsApp</span>
                                <span class="text-gray-600 text-sm">Memudahkan Anda yang ingin mengajak orang lain melihat
                                    paket yang tesedia</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Buat Manifest Paket Sekejap
                                    Mata</span>
                                <span class="text-gray-600 text-sm">Mudah dalam memantau data manifest Jamaah pada
                                    setiap paketnya</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity">
                        </div>
                        <img src="{{ asset('images/feature-2.png') }}" alt="Booking Management"
                            class="relative w-full rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
            </div>

            <!-- Feature 3: Payment Tracking -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20 scroll-reveal">
                <div class="order-2 md:order-1">
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity">
                        </div>
                        <img src="{{ asset('images/feature-3.png') }}" alt="Payment Tracking"
                            class="relative w-full rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        💰 Dashboard Jamaah
                    </div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Nggak Ada Lagi Momen Terlewat</h2>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Sistem kami otomatis menampilkan setiap kegiatan yang dilaksanakan dan mengabadikan momen tanpa
                        memikirkan tempat penyimpanan. <span class="font-semibold text-gray-800">Langsung cek saja,
                            semua tersimpan rapih dan aman.</span>
                        Bahkan bukti pembayaran pun tersedia setiap saat.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Intip Langsung Riwayat
                                    Pembayaran</span>
                                <span class="text-gray-600 text-sm">Ingin melihat riwayat pembayaran, cukup sekali
                                    klik semuanya tersaji hangat</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Lihat Agenda Kegiatan Lebih
                                    Menyenangkan</span>
                                <span class="text-gray-600 text-sm">Memantau agenda kegiatan kini dapat lebih mudah dan
                                    menyenangkan</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Simpan Setiap Momen tanpa Memikirkan
                                    Penyimpanan</span>
                                <span class="text-gray-600 text-sm">Semua dokumentasi kegiatan tersimpan tanpa membebani
                                    penyimpanan Anda</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Feature 4: Mobile Access -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20 scroll-reveal">
                <div>
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        📱 Dashboard Tour Leader & Muthowif
                    </div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Saat Perjalanan, Tetap Terkendali</h2>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Sedang di luar kota tapi ada booking urgent? Tenang! Buka dari HP, tablet, atau laptop -
                        datanya sama dan selalu sinkron. <span class="font-semibold text-gray-800">Bisnis travel Anda tidak
                            akan berhenti
                            hanya karena Anda sedang mobile.</span>
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Cari Arah Kiblat dan Waktu Sholat
                                    dengan Mudah</span>
                                <span class="text-gray-600 text-sm">Jadwal sholat dan Kompas langsung muncul
                                    saat pertama membuka aplikasi</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Perubahan Agenda Mendadak Bukan
                                    Masalah</span>
                                <span class="text-gray-600 text-sm">Update kegiatan kapanpun dan dimanapun dengan
                                    simpel dan mudah</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Abadikan Setiap Momen dalam
                                    Tampilan Menarik</span>
                                <span class="text-gray-600 text-sm">Abadikan setiap momen kegiatan bersama jamaah dengan
                                    mudah dan menyenangkan</span>
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

            <!-- Why TeMan Section -->
            <div class="mt-32 mb-20 scroll-reveal">
                <div
                    class="bg-gradient-to-br from-orange-50 to-white rounded-3xl px-4 py-8 lg:p-12 border border-orange-100">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl font-bold text-gray-800 mb-4">Kenapa TeMan Beda?</h2>
                        <p class="text-xl text-gray-600">Bukan cuma aplikasi, tapi partner bisnis travel Anda</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div
                            class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-orange-100">
                            <div class="text-4xl mb-4">⚡</div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Setup 5 Menit</h3>
                            <p class="text-gray-600">
                                Tidak perlu training berhari-hari. Interface yang intuitif membuat Anda langsung paham cara
                                pakainya.
                                Daftar hari ini, besok sudah bisa dipakai untuk bisnis.
                            </p>
                        </div>

                        <div
                            class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-orange-100">
                            <div class="text-4xl mb-4">🎯</div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Fokus Travel, Bukan Lainnya</h3>
                            <p class="text-gray-600">
                                Kami tahu bisnis travel itu seperti apa. Makanya fitur-fitur dibuat spesifik untuk kebutuhan
                                travel agent - bukan copy-paste dari aplikasi lain.
                            </p>
                        </div>

                        <div
                            class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-orange-100">
                            <div class="text-4xl mb-4">💪</div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Support yang Responsif</h3>
                            <p class="text-gray-600">
                                Ada masalah atau butuh bantuan? Tim kami siap membantu via chat atau telepon.
                                Tidak akan dibiarkan bingung sendiri.
                            </p>
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
