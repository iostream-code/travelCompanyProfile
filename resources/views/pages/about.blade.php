@extends('layouts.app')

@section('title', 'Tentang TeMan')

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
                    Tentang TeMan
                </h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-3xl mx-auto">
                    Saatnya ubah bisnis secara otomatis dengan teknologi. TeMan hadir sebagai
                    <span class="font-semibold text-orange-600">Teman Setia</span> yang membantu Anda mengelola bisnis
                    travel dengan cara yang <span class="font-semibold text-orange-600">Santai</span> dan <span
                        class="font-semibold text-orange-600">Maksimal</span>.
                </p>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-20 bg-white/80 backdrop-blur-sm relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center scroll-reveal">
                <div>
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                        Misi Kami
                    </div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Menjadi Teman Setia Bisnis Travel Anda</h2>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Di TeMan, kami percaya bahwa mengelola bisnis travel harus mudah dan menyenangkan. Misi kami adalah
                        menyediakan platform yang intuitif dan kuat untuk membantu bisnis travel dari berbagai skala
                        mencapai
                        potensi maksimal mereka tanpa ribet.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Menyederhanakan proses manajemen travel</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Meningkatkan efisiensi operasional bisnis</span>
                        </li>
                        <li class="flex items-start group">
                            <span class="text-orange-600 mr-4 text-2xl group-hover:scale-125 transition-transform">✓</span>
                            <span class="text-gray-700 text-lg">Memberikan insight berbasis data yang mudah dipahami</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity">
                        </div>
                        <img src="https://images.unsplash.com/photo-1523287562758-66c7fc58967f?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1470"
                            alt="Mission Illustration"
                            class="relative w-full rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Section -->
    <section class="py-20 bg-gradient-to-b from-white to-gray-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-5xl font-bold text-gray-800 mb-4">Tim Kami yang Ramah</h2>
                <p class="text-xl text-gray-600">Kenali tim yang siap menjadi teman Anda dalam mengelola bisnis</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 scroll-reveal">
                <div
                    class="team-card group text-center bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 transform hover:-translate-y-2">
                    <div
                        class="w-24 h-24 mx-auto mb-4 rounded-full overflow-hidden ring-4 ring-orange-200 group-hover:ring-orange-400 transition-all duration-300">
                        <img src="{{ asset('images/teams/pp-aryak.webp') }}" alt="Hafiyyan Dwika Arya"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Hafiyyan Dwika Arya</h3>
                    <p class="text-gray-600 mb-4">Programmer, Full-Stack Developer</p>
                    <p class="text-gray-600 leading-relaxed">Arya memimpin visi TeMan dengan pengalaman di industri
                        teknologi, membuat semuanya lebih mudah dan simpel.</p>
                </div>
                <div
                    class="team-card group text-center bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 transform hover:-translate-y-2">
                    <div
                        class="w-24 h-24 mx-auto mb-4 rounded-full overflow-hidden ring-4 ring-orange-200 group-hover:ring-orange-400 transition-all duration-300">
                        <img src="{{ asset('images/teams/pp-melky.webp') }}" alt="Hafiyyan Dwika Arya"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Dewangga Putra</h3>
                    <p class="text-gray-600 mb-4">Manager, System Analyst</p>
                    <p class="text-gray-600 leading-relaxed">Dewangga mengawasi pengembangan teknologi TeMan, memastikan
                        platform Kami selalu dalam kondisi terbaiknya dan tanpa kendala.</p>
                </div>
                <div
                    class="team-card group text-center bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 transform hover:-translate-y-2">
                    <div
                        class="w-24 h-24 mx-auto mb-4 rounded-full overflow-hidden ring-4 ring-orange-200 group-hover:ring-orange-400 transition-all duration-300">
                        <img src="{{ asset('images/teams/pp-crysna.webp') }}" alt="Hafiyyan Dwika Arya"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Crysna Wima Rangga</h3>
                    <p class="text-gray-600 mb-4">Programmer, Full-Satck Developer</p>
                    <p class="text-gray-600 leading-relaxed">Crysna memastikan setiap pengguna TeMan mendapatkan pengalaman
                        terbaik
                        dan bantuan yang cepat kapan pun dibutuhkan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-50/50 via-transparent to-orange-50/50"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-5xl font-bold text-gray-800 mb-4">Nilai Kami</h2>
                <p class="text-xl text-gray-600">Prinsip yang membuat TeMan menjadi teman terbaik untuk bisnis Anda</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 scroll-reveal">
                <div
                    class="value-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-l-4 border-orange-600 cursor-pointer transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-500">💡</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Inovasi Simpel</h3>
                    <p class="text-gray-700 leading-relaxed">Kami terus berinovasi untuk menghadirkan solusi teknologi
                        yang mudah digunakan tanpa kerumitan.</p>
                </div>
                <div
                    class="value-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-l-4 border-orange-600 cursor-pointer transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-500">🤝</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Kolaborasi Ramah</h3>
                    <p class="text-gray-700 leading-relaxed">Kami bekerja bersama pengguna seperti teman untuk mencapai
                        kesuksesan bisnis bersama.</p>
                </div>
                <div
                    class="value-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-l-4 border-orange-600 cursor-pointer transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform duration-500">🌟</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Keunggulan Praktis</h3>
                    <p class="text-gray-700 leading-relaxed">Kami berkomitmen untuk memberikan kualitas dan layanan terbaik
                        yang benar-benar membantu sehari-hari.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section with Embed Map -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-5xl font-bold text-gray-800 mb-4">Lokasi Kami</h2>
                <p class="text-xl text-gray-600">Kunjungi kami di kantor pusat untuk diskusi lebih lanjut</p>
            </div>
            <div class="scroll-reveal">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.6569056964927!2d112.70178327594367!3d-7.503076174015273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e1001c6ec97b%3A0x1715c83d235c677!2sKOPERINDO.ID!5e0!3m2!1sid!2sid!4v1761086959714!5m2!1sid!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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
