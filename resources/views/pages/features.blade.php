@extends('layouts.app')

@section('title', 'Fitur TeMan')

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
                <div class="inline-block mb-6 px-6 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-bold">
                    ✨ Sederhana, Cepat, Efektif
                </div>
                <h1
                    class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-orange-600 to-orange-800 bg-clip-text text-transparent">
                    Kelola Travel dengan<br>Satu Platform Simpel
                </h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-3xl mx-auto">
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
                        📊 Dashboard Sekali Lihat
                    </div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Lihat Semua dalam Satu Tampilan</h2>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Tidak perlu buka banyak tab atau aplikasi. Dashboard kami menampilkan
                        <span class="font-semibold text-gray-800">semua yang Anda butuhkan</span> - jumlah booking hari ini,
                        revenue minggu ini, hingga jadwal keberangkatan besok. Semuanya ada di satu halaman.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Angka Penting di Depan Mata</span>
                                <span class="text-gray-600 text-sm">Total booking, pendapatan, dan jadwal dalam satu
                                    layar</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Update Otomatis Real-Time</span>
                                <span class="text-gray-600 text-sm">Data selalu terbaru tanpa perlu refresh manual</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Notifikasi Penting Langsung</span>
                                <span class="text-gray-600 text-sm">Booking baru atau pembayaran masuk? Langsung
                                    ternotif</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Feature 2: Booking Management -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20 scroll-reveal">
                <div>
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        🎫 Manajemen Booking Mudah
                    </div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Proses Booking Cuma 2 Menit</h2>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Input booking baru? Cukup isi data customer, pilih paket, dan selesai! Sistem otomatis
                        mengatur seat, kirim konfirmasi ke customer, dan update jadwal keberangkatan.
                        <span class="font-semibold text-gray-800">Tidak ada manual entry berulang-ulang.</span>
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Input Sekali, Selesai Semua</span>
                                <span class="text-gray-600 text-sm">Data customer otomatis tersimpan untuk booking
                                    berikutnya</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">WhatsApp Otomatis ke Customer</span>
                                <span class="text-gray-600 text-sm">Konfirmasi booking langsung terkirim tanpa
                                    copy-paste</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Tracking Status Real-Time</span>
                                <span class="text-gray-600 text-sm">Pending, paid, atau selesai - semua tercatat
                                    jelas</span>
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
                        💰 Tracking Pembayaran Otomatis
                    </div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Nggak Ada Lagi Pembayaran Kelewat</h2>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Sistem kami otomatis mencatat setiap pembayaran yang masuk dan mengingatkan customer yang
                        belum bayar. <span class="font-semibold text-gray-800">Anda tinggal cek saja, follow-up nya sudah
                            otomatis.</span>
                        Bahkan laporan keuangan pun ter-generate sendiri setiap hari.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Reminder Otomatis ke Customer</span>
                                <span class="text-gray-600 text-sm">H-3 jatuh tempo, sistem otomatis kirim pengingat</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Laporan Keuangan Instan</span>
                                <span class="text-gray-600 text-sm">Mau lihat pendapatan bulan ini? Satu klik selesai</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Histori Lengkap Tersimpan</span>
                                <span class="text-gray-600 text-sm">Butuh cek transaksi 6 bulan lalu? Mudah dicari</span>
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
                        📱 Akses dari Mana Saja
                    </div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Di Kantor atau Di Jalan, Tetap Terkendali</h2>
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
                                <span class="text-gray-800 text-lg font-semibold block">Buka di Device Apa Pun</span>
                                <span class="text-gray-600 text-sm">HP, tablet, laptop - tampilan selalu nyaman</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Sinkronisasi Instant</span>
                                <span class="text-gray-600 text-sm">Update di HP, langsung terlihat di laptop kantor</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <div>
                                <span class="text-gray-800 text-lg font-semibold block">Offline Mode Siap Siaga</span>
                                <span class="text-gray-600 text-sm">Koneksi lemot? Tetap bisa input, sinkron nanti</span>
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
                <div class="bg-gradient-to-br from-orange-50 to-white rounded-3xl p-12 border border-orange-100">
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-5xl font-bold mb-6 fade-in-up">Coba Sekarang, Tunggu Apa Lagi!</h2>
            <p class="text-2xl mb-10 text-orange-100 fade-in-up delay-1">
                Rasakan sendiri bagaimana TeMan membuat bisnis travel Anda lebih efisien.<br>
                <span class="text-lg">Setup cuma 5 menit. Tidak ribet. Langsung bisa pakai.</span>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center fade-in-up delay-2">
                <a href="#"
                    class="inline-block bg-white text-orange-600 px-10 py-5 rounded-xl font-bold text-lg hover:bg-gray-100 hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1">
                    Mulai Coba Sekarang
                </a>
                {{-- <a href="#"
                    class="inline-block bg-transparent border-2 border-white text-white px-10 py-5 rounded-xl font-bold text-lg hover:bg-white hover:text-orange-600 transition-all duration-300">
                    Lihat Demo
                </a> --}}
            </div>
            <p class="mt-6 text-orange-100 text-sm fade-in-up delay-2">
                ✓ Tidak perlu bayar diawal ✓ Dapatkan kapan saja ✓ Setup dalam 5 menit
            </p>
        </div>
    </section>
@endsection
