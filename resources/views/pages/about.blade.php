@extends('layouts.app')

@section('title', 'Tentang TeMan')

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
                    Tentang TeMan
                </h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-3xl mx-auto">
                    Tidak perlu lagi pusing dengan sistem yang rumit. TeMan hadir sebagai
                    <span class="font-semibold text-orange-600">teman setia</span> yang membantu Anda mengelola bisnis
                    travel
                    dengan cara yang simpel dan menyenangkan.
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-5xl font-bold mb-6 fade-in-up">Bergabunglah dengan TeMan</h2>
            <p class="text-2xl mb-10 text-orange-100 fade-in-up delay-1">
                Mulai kelola bisnis travel Anda dengan lebih mudah dan menyenangkan.
            </p>
            <a href="#"
                class="inline-block bg-white text-orange-600 px-10 py-5 rounded-xl font-bold text-lg hover:bg-gray-100 hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1 fade-in-up delay-2">
                Coba Sekarang
            </a>
        </div>
    </section>
@endsection
