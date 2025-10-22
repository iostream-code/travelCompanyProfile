@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
    <!-- Animated Background -->
    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div id="particles-bg" class="absolute inset-0 bg-gradient-to-br from-orange-50 via-white to-orange-50"></div>
        <canvas id="particlesCanvas" class="absolute inset-0 w-full h-full"></canvas>
    </div>

    <!-- Hero Section -->
    <section class="relative text-gray-800 py-16 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-500/10 via-transparent to-orange-600/10"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center fade-in-up">
                <div class="inline-block mb-4 px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold">
                    💬 Hubungi Kami
                </div>
                <h1
                    class="text-5xl font-bold mb-6 bg-gradient-to-r from-orange-600 to-orange-800 bg-clip-text text-transparent">
                    Ada Pertanyaan?
                </h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-2xl mx-auto">
                    Kami siap membantu Anda. Jangan ragu untuk menghubungi kami melalui form atau informasi kontak di bawah.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form and Info Section -->
    <section class="py-12 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 scroll-reveal">
                <!-- Contact Form - Wider -->
                <div class="lg:col-span-3">
                    <div
                        class="bg-white p-8 lg:p-10 rounded-2xl shadow-xl border border-orange-100 hover:border-orange-300 transition-all duration-300">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-3xl font-bold text-gray-800">Kirim Pesan</h2>
                                <p class="text-gray-600">Kami akan merespons dalam 1x24 jam</p>
                            </div>
                        </div>

                        <form action="#" method="POST" class="space-y-5">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Nama Lengkap <span class="text-orange-600">*</span>
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </div>
                                        <input type="text" id="name" name="name"
                                            class="block w-full pl-12 pr-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all duration-300"
                                            placeholder="Nama Anda" required>
                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Email <span class="text-orange-600">*</span>
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <input type="email" id="email" name="email"
                                            class="block w-full pl-12 pr-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all duration-300"
                                            placeholder="email@contoh.com" required>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Subjek
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                        </svg>
                                    </div>
                                    <input type="text" id="subject" name="subject"
                                        class="block w-full pl-12 pr-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all duration-300"
                                        placeholder="Tentang apa?">
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Pesan <span class="text-orange-600">*</span>
                                </label>
                                <textarea id="message" name="message" rows="6"
                                    class="block w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all duration-300 resize-none"
                                    placeholder="Tulis pesan Anda di sini..." required></textarea>
                            </div>

                            <div>
                                <button type="submit"
                                    class="w-full bg-gradient-to-r from-orange-600 to-orange-700 text-white px-6 py-4 rounded-xl font-bold hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1 flex items-center justify-center group">
                                    <span>Kirim Pesan</span>
                                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Information - Narrower -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Contact Cards -->
                    <div
                        class="bg-gradient-to-br from-orange-50 to-white p-6 rounded-2xl shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300 hover:shadow-xl group">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800 mb-1">Alamat</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">Permata blok R3 No.32 - 39, Kludan, Kec.
                                    Tanggulangin, Kabupaten Sidoarjo, Jawa Timur 61272</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-gradient-to-br from-orange-50 to-white p-6 rounded-2xl shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300 hover:shadow-xl group">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800 mb-1">Email</h3>
                                <a href="mailto:support@teman.com"
                                    class="text-orange-600 hover:text-orange-700 text-sm font-medium">itai.technology@travel.com</a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-gradient-to-br from-orange-50 to-white p-6 rounded-2xl shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300 hover:shadow-xl group">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800 mb-1">Telepon</h3>
                                <a href="tel:+622112345678"
                                    class="text-orange-600 hover:text-orange-700 text-sm font-medium">+62 857 3055 7075</a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-gradient-to-br from-orange-50 to-white p-6 rounded-2xl shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300 hover:shadow-xl group">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800 mb-1">Jam Operasional</h3>
                                <p class="text-gray-600 text-sm">Senin - Sabtu</p>
                                <p class="text-orange-600 font-semibold text-sm">08.00 - 17.00 WIB</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="flex gap-3">
                        <!-- TikTok -->
                        <a href="#"
                            class="w-12 h-12 bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl flex items-center justify-center text-white hover:scale-110 hover:shadow-lg transition-all duration-300 group">
                            <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z" />
                            </svg>
                        </a>
                        <!-- Facebook -->
                        <a href="#"
                            class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center text-white hover:scale-110 hover:shadow-lg transition-all duration-300 group">
                            <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M22.675 0H1.325C.593 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.593 1.323-1.326V1.326C24 .593 23.407 0 22.675 0z" />
                            </svg>
                        </a>
                        <!-- Instagram -->
                        <a href="#"
                            class="w-12 h-12 bg-gradient-to-br from-pink-500 to-purple-600 rounded-xl flex items-center justify-center text-white hover:scale-110 hover:shadow-lg transition-all duration-300 group">
                            <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849s-.012 3.584-.069 4.849c-.148 3.228-1.667 4.771-4.919 4.919-1.266.058-1.645.069-4.85.069s-3.584-.012-4.849-.069c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.849s.012-3.584.069-4.849c.148-3.228 1.667-4.771 4.919-4.919 1.265-.058 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.073 4.948c.2 4.362 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.667-.014 4.948-.072c4.362-.2 6.78-2.618 6.98-6.98.058-1.281.072-1.689.072-4.948s-.014-3.667-.072-4.948c-.2-4.362-2.618-6.78-6.98-6.98-1.281-.058-1.689-.072-4.948-.072zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.791-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.209-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.441s.645 1.441 1.441 1.441 1.441-.645 1.441-1.441-.645-1.441-1.441-1.441z" />
                            </svg>
                        </a>
                        <!-- WhatsApp -->
                        <a href="#"
                            class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center text-white hover:scale-110 hover:shadow-lg transition-all duration-300 group">
                            <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom CSS -->
    <style>
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease-out forwards;
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
