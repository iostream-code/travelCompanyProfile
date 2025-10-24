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
                            <img src="{{ asset('images/about-image.png') }}" alt="Travel Registration"
                                class="rounded-2xl shadow-lg w-full h-auto object-cover">

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
                            <!-- Alert Messages -->
                            <div id="alert-success"
                                class="hidden mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-lg">
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="flex-1">
                                        <p class="font-semibold text-green-800">Registrasi Berhasil!</p>
                                        <p id="success-message" class="text-sm text-green-700 mt-1"></p>
                                    </div>
                                </div>
                            </div>

                            <div id="alert-error" class="hidden mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded-lg">
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mt-0.5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="flex-1">
                                        <p class="font-semibold text-red-800">Terjadi Kesalahan!</p>
                                        <p id="error-message" class="text-sm text-red-700 mt-1"></p>
                                    </div>
                                </div>
                            </div>

                            <form id="register-form" class="space-y-6" enctype="multipart/form-data">
                                @csrf

                                <!-- Nama Travel -->
                                <div class="form-group">
                                    <label for="nama_travel" class="block text-sm font-semibold text-gray-700 mb-2">
                                        <span class="flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-orange-600" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                                </path>
                                            </svg>
                                            Nama Travel <span class="text-red-500">*</span>
                                        </span>
                                    </label>
                                    <input type="text" id="nama_travel" name="nama_travel"
                                        class="w-full px-4 py-3.5 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 transition-all duration-300 outline-none hover:border-orange-300"
                                        placeholder="Contoh: Korinity Tour" maxlength="15" required>
                                    <p class="mt-1 text-xs text-gray-500">Maksimal 15 karakter</p>
                                </div>

                                <!-- Alamat -->
                                <div class="form-group">
                                    <label for="address" class="block text-sm font-semibold text-gray-700 mb-2">
                                        <span class="flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-orange-600" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                </path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            Alamat Lengkap
                                        </span>
                                    </label>
                                    <textarea id="address" name="address" rows="3"
                                        class="w-full px-4 py-3.5 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 transition-all duration-300 outline-none hover:border-orange-300 resize-none"
                                        placeholder="Masukkan alamat kantor travel Anda"></textarea>
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
                                        placeholder="https://travelanda.com">
                                </div>

                                <!-- Dokumen Penguat -->
                                <div class="form-group">
                                    <label for="verified_document" class="block text-sm font-semibold text-gray-700 mb-2">
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
                                        <input type="file" id="verified_document" name="verified_document"
                                            class="w-full px-4 py-3.5 rounded-xl border-2 border-dashed border-gray-300 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 transition-all duration-300 outline-none hover:border-orange-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100 cursor-pointer"
                                            accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">
                                    </div>
                                    <p class="mt-2 text-xs text-gray-500 flex items-start">
                                        <svg class="w-4 h-4 mr-1 text-orange-500 flex-shrink-0 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Upload dokumen seperti SIUP, TDP, atau NIB (PDF, DOC, JPG, PNG - Max 5MB)
                                    </p>
                                    <div id="file-name" class="mt-2 text-sm text-gray-600 hidden">
                                        <span class="font-semibold">File terpilih:</span> <span
                                            id="file-name-text"></span>
                                    </div>
                                </div>

                                <!-- Token (Hidden Field) -->
                                <input type="hidden" id="token" name="token"
                                    value="bdbe153978c05bad8ffbaf8ae30c21aab9e922bb0a63513ff8379183a7dff0cc">

                                <!-- Submit Button -->
                                <div class="pt-4">
                                    <button type="submit" id="submit-btn"
                                        class="group w-full bg-gradient-to-r from-orange-600 to-orange-500 text-white px-6 py-4 rounded-xl font-bold text-lg shadow-lg hover:shadow-2xl hover:shadow-orange-300 transform hover:scale-[1.02] transition-all duration-300 hover:-translate-y-1 flex items-center justify-center space-x-2">
                                        <span id="btn-text">Daftar Sekarang</span>
                                        <svg id="btn-icon" class="w-5 h-5 group-hover:translate-x-1 transition-transform"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                        <svg id="btn-loading" class="hidden w-5 h-5 animate-spin" fill="none"
                                            viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10"
                                                stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor"
                                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                            </path>
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
                            <p class="text-2xl font-bold text-gray-800">100+</p>
                            <p class="text-xs text-gray-600">Travel Terafiliasi</p>
                        </div>
                        <div class="w-px h-12 bg-gray-300"></div>
                        <div class="text-center">
                            <p class="text-2xl font-bold text-gray-800">99%</p>
                            <p class="text-xs text-gray-600">Tingkat Kemudahan</p>
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

    <!-- Success Modal -->
    <div id="success-modal" class="hidden fixed inset-0 bg-gray-700 opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-md w-full p-8 relative animate-scale-in">
            <div class="text-center">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Registrasi Berhasil!</h3>
                <p class="text-gray-600 mb-6">Akun Anda telah berhasil dibuat. Berikut adalah kredensial login Anda. Mohon
                    tunggu hingga data terverifikasi</p>

                <div class="bg-gray-50 rounded-xl p-4 mb-6 text-left">
                    <div class="mb-3">
                        <p class="text-xs text-gray-500 mb-1">Email</p>
                        <p id="modal-email" class="font-semibold text-gray-800"></p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 mb-1">Password</p>
                        <p id="modal-password" class="font-semibold text-gray-800"></p>
                    </div>
                </div>

                <p class="text-sm text-orange-600 mb-6">
                    <svg class="w-4 h-4 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd" />
                    </svg>
                    Simpan kredensial ini dengan aman!
                </p>

                <button id="close-modal-btn"
                    class="w-full bg-gradient-to-r from-orange-600 to-orange-500 text-white px-6 py-3 rounded-xl font-bold hover:shadow-lg transition-all duration-300">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Custom CSS -->
    <style>
        .form-group input:focus,
        .form-group textarea:focus {
            box-shadow: 0 0 0 4px rgba(249, 115, 22, 0.1);
        }

        .form-group input:hover:not(:focus),
        .form-group textarea:hover:not(:focus) {
            border-color: #fed7aa;
        }

        @keyframes scale-in {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-scale-in {
            animation: scale-in 0.3s ease-out;
        }
    </style>
@endsection
