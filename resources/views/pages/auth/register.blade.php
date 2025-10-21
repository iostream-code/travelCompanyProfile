@extends('layouts.app')

@section('title', 'Register')

@section('content')
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

    <!-- Custom CSS Animations -->
    <style>
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
