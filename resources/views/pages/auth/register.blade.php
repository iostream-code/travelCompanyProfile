@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <!-- Register Section with Split Layout -->
    <section class="min-h-screen py-20 bg-gradient-to-br from-orange-50 via-white to-orange-50 relative overflow-hidden">
        <!-- Decorative Elements -->
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-orange-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float">
        </div>
        <div
            class="absolute bottom-0 left-0 w-96 h-96 bg-orange-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float-delayed">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <!-- Left Side - Illustration & Info -->
                <div class="hidden lg:block scroll-reveal">
                    <div class="relative">
                        <!-- Main Illustration -->
                        <div
                            class="relative z-10 bg-gradient-to-br from-orange-500 to-orange-600 rounded-3xl p-12 shadow-2xl transform hover:scale-105 transition-all duration-500">
                            <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=800&auto=format&fit=crop"
                                alt="Travel Registration" class="rounded-2xl shadow-lg w-full h-auto object-cover">

                            <!-- Floating Badge -->
                            <div class="absolute -top-6 -right-6 bg-white rounded-2xl p-4 shadow-xl animate-float">
                                <div class="flex items-center space-x-3">
                                    <div class="bg-orange-100 p-3 rounded-xl">
                                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-gray-800">Verified</p>
                                        <p class="text-xs text-gray-500">Trusted Platform</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Background Decoration -->
                        <div class="absolute -bottom-6 -left-6 w-72 h-72 bg-orange-200 rounded-full opacity-50 blur-2xl">
                        </div>
                    </div>

                    <!-- Feature List -->
                    <div class="mt-12 space-y-6">
                        <div class="flex items-start space-x-4 animate-slide-in" style="animation-delay: 0.2s">
                            <div class="flex-shrink-0 bg-orange-100 p-3 rounded-xl">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Proses Cepat & Mudah</h3>
                                <p class="text-gray-600 text-sm">Registrasi hanya membutuhkan 5 menit</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4 animate-slide-in" style="animation-delay: 0.4s">
                            <div class="flex-shrink-0 bg-orange-100 p-3 rounded-xl">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Keamanan Terjamin</h3>
                                <p class="text-gray-600 text-sm">Data Anda dilindungi dengan enkripsi SSL</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4 animate-slide-in" style="animation-delay: 0.6s">
                            <div class="flex-shrink-0 bg-orange-100 p-3 rounded-xl">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Support 24/7</h3>
                                <p class="text-gray-600 text-sm">Tim kami siap membantu Anda kapan saja</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Form -->
                <div class="scroll-reveal">
                    <div
                        class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-orange-100 hover:shadow-orange-200 transition-all duration-500">
                        <!-- Form Header -->
                        <div
                            class="bg-gradient-to-r from-orange-600 to-orange-500 px-8 py-10 text-white relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-40 h-40 bg-white opacity-10 rounded-full -mr-20 -mt-20">
                            </div>
                            <div class="absolute bottom-0 left-0 w-32 h-32 bg-white opacity-10 rounded-full -ml-16 -mb-16">
                            </div>
                            <div class="relative z-10">
                                <h2 class="text-4xl font-bold mb-2">Bergabung Bersama Kami</h2>
                                <p class="text-orange-100">Daftarkan travel Anda dan raih kesuksesan bersama</p>
                            </div>
                        </div>

                        <!-- Form Body -->
                        <div class="px-8 py-10">
                            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data"
                                class="space-y-6">
                                @csrf

                                <!-- Nama Travel -->
                                <div class="form-group">
                                    <label for="nama_travel" class="block text-sm font-semibold text-gray-700 mb-2">
                                        <span class="flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-orange-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                                </path>
                                            </svg>
                                            Nama Travel
                                        </span>
                                    </label>
                                    <input type="text" id="nama_travel" name="nama_travel"
                                        class="w-full px-4 py-3.5 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 transition-all duration-300 outline-none hover:border-orange-300"
                                        placeholder="Contoh: Singgah Travel" required>
                                </div>

                                <!-- Alamat -->
                                <div class="form-group">
                                    <label for="alamat" class="block text-sm font-semibold text-gray-700 mb-2">
                                        <span class="flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-orange-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                </path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            Alamat Lengkap
                                        </span>
                                    </label>
                                    <textarea id="alamat" name="alamat" rows="3"
                                        class="w-full px-4 py-3.5 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 transition-all duration-300 outline-none hover:border-orange-300 resize-none"
                                        placeholder="Masukkan alamat kantor travel Anda" required></textarea>
                                </div>

                                <!-- Website -->
                                <div class="form-group">
                                    <label for="website" class="block text-sm font-semibold text-gray-700 mb-2">
                                        <span class="flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-orange-600" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                                                </path>
                                            </svg>
                                            Website
                                        </span>
                                    </label>
                                    <input type="url" id="website" name="website"
                                        class="w-full px-4 py-3.5 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 transition-all duration-300 outline-none hover:border-orange-300"
                                        placeholder="https://travelanda.com" required>
                                </div>

                                <!-- Dokumen Penguat -->
                                <div class="form-group">
                                    <label for="dokumen" class="block text-sm font-semibold text-gray-700 mb-2">
                                        <span class="flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-orange-600" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                </path>
                                            </svg>
                                            Dokumen Penguat
                                        </span>
                                    </label>
                                    <div class="relative">
                                        <input type="file" id="dokumen" name="dokumen"
                                            class="w-full px-4 py-3.5 rounded-xl border-2 border-dashed border-gray-300 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 transition-all duration-300 outline-none hover:border-orange-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100 cursor-pointer"
                                            accept=".pdf,.doc,.docx,.jpg,.png" required>
                                    </div>
                                    <p class="mt-2 text-xs text-gray-500 flex items-start">
                                        <svg class="w-4 h-4 mr-1 text-orange-500 flex-shrink-0 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Upload dokumen seperti SIUP, TDP, atau NIB (PDF, DOC, JPG, PNG - Max 5MB)
                                    </p>
                                </div>

                                <!-- Submit Button -->
                                <div class="pt-4">
                                    <button type="submit"
                                        class="group w-full bg-gradient-to-r from-orange-600 to-orange-500 text-white px-6 py-4 rounded-xl font-bold text-lg shadow-lg hover:shadow-2xl hover:shadow-orange-300 transform hover:scale-[1.02] transition-all duration-300 hover:-translate-y-1 flex items-center justify-center space-x-2">
                                        <span>Daftar Sekarang</span>
                                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Footer Text -->
                                <div class="text-center pt-4 border-t border-gray-100">
                                    <p class="text-sm text-gray-600">
                                        Sudah punya akun?
                                        <a href="#"
                                            class="text-orange-600 font-semibold hover:text-orange-700 transition-colors">
                                            Masuk di sini
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Trust Badges -->
                    <div class="mt-8 flex justify-center items-center space-x-8 opacity-70">
                        <div class="text-center">
                            <p class="text-2xl font-bold text-gray-800">500+</p>
                            <p class="text-xs text-gray-600">Travel Terdaftar</p>
                        </div>
                        <div class="w-px h-12 bg-gray-300"></div>
                        <div class="text-center">
                            <p class="text-2xl font-bold text-gray-800">99%</p>
                            <p class="text-xs text-gray-600">Tingkat Kepuasan</p>
                        </div>
                        <div class="w-px h-12 bg-gray-300"></div>
                        <div class="text-center">
                            <p class="text-2xl font-bold text-gray-800">24/7</p>
                            <p class="text-xs text-gray-600">Customer Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom CSS Animations -->
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes float-delayed {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        @keyframes slide-in {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 8s ease-in-out infinite;
        }

        .animate-slide-in {
            animation: slide-in 0.6s ease-out forwards;
            opacity: 0;
        }

        .scroll-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .scroll-reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .form-group input:focus,
        .form-group textarea:focus {
            box-shadow: 0 0 0 4px rgba(249, 115, 22, 0.1);
        }

        /* File input styling */
        input[type="file"]::file-selector-button {
            transition: all 0.3s ease;
        }

        /* Hover effect for form inputs */
        .form-group input:hover:not(:focus),
        .form-group textarea:hover:not(:focus) {
            border-color: #fed7aa;
        }
    </style>
@endsection
