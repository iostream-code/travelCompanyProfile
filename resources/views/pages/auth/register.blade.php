@extends('layouts.app')

@section('title', 'Register')

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
                    Daftar ke MyApp
                </h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-3xl mx-auto">
                    Daftarkan bisnis travel Anda sekarang dan mulai gunakan platform terpadu kami untuk mengembangkan
                    bisnis.
                </p>
            </div>
        </div>
    </section>

    <!-- Register Form Section -->
    <section class="py-20 bg-white/80 backdrop-blur-sm relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-md mx-auto bg-white p-8 rounded-2xl shadow-lg border border-orange-100 scroll-reveal">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Form Pendaftaran</h2>
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-6">
                        <!-- Nama Travel -->
                        <div>
                            <label for="nama_travel" class="block text-sm font-medium text-gray-700">Nama Travel</label>
                            <input type="text" id="nama_travel" name="nama_travel"
                                class="mt-1 block w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-orange-600 focus:ring-orange-600 transition-all duration-300"
                                placeholder="Masukkan nama travel Anda" required>
                        </div>

                        <!-- Alamat -->
                        <div>
                            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                            <textarea id="alamat" name="alamat" rows="3"
                                class="mt-1 block w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-orange-600 focus:ring-orange-600 transition-all duration-300"
                                placeholder="Masukkan alamat lengkap" required></textarea>
                        </div>

                        <!-- Website -->
                        <div>
                            <label for="website" class="block text-sm font-medium text-gray-700">Website</label>
                            <input type="url" id="website" name="website"
                                class="mt-1 block w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-orange-600 focus:ring-orange-600 transition-all duration-300"
                                placeholder="https://example.com" required>
                        </div>

                        <!-- Dokument Penguat -->
                        <div>
                            <label for="dokumen" class="block text-sm font-medium text-gray-700">Dokumen Penguat</label>
                            <input type="file" id="dokumen" name="dokumen"
                                class="mt-1 block w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-orange-600 focus:ring-orange-600 transition-all duration-300"
                                accept=".pdf,.doc,.docx,.jpg,.png" required>
                            <p class="mt-2 text-sm text-gray-500">Upload dokumen pendukung seperti SIUP atau TDP (PDF, DOC,
                                atau gambar).</p>
                        </div>

                        <div>
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-orange-600 to-orange-700 text-white px-6 py-3 rounded-xl font-bold hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1">
                                Daftar Sekarang
                            </button>
                        </div>
                    </div>
                </form>
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
            <h2 class="text-5xl font-bold mb-6 fade-in-up">Sudah Punya Akun?</h2>
            <p class="text-2xl mb-10 text-orange-100 fade-in-up delay-1">Masuk sekarang dan mulai kelola bisnis Anda.</p>
            <a href="#"
                class="inline-block bg-white text-orange-600 px-10 py-5 rounded-xl font-bold text-lg hover:bg-gray-100 hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1 fade-in-up delay-2">
                Masuk
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
