@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
    <!-- Animated Background -->
    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div id="particles-bg" class="absolute inset-0 bg-gradient-to-br from-orange-50 via-white to-orange-50"></div>
        <canvas id="particlesCanvas" class="absolute inset-0 w-full h-full"></canvas>
    </div>

    <!-- Contact Form and Info Section -->
    <section class="py-20 min-h-screen flex items-center relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 scroll-reveal">
                <!-- Contact Form -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Kirim Pesan</h2>
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 block w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-orange-600 focus:ring-orange-600 transition-all duration-300"
                                placeholder="Nama Anda" required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email"
                                class="mt-1 block w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-orange-600 focus:ring-orange-600 transition-all duration-300"
                                placeholder="email@contoh.com" required>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                            <textarea id="message" name="message" rows="5"
                                class="mt-1 block w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-orange-600 focus:ring-orange-600 transition-all duration-300"
                                placeholder="Tulis pesan Anda..." required></textarea>
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-orange-600 to-orange-700 text-white px-6 py-3 rounded-xl font-bold hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Contact Information -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Informasi Kontak</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="text-orange-600 text-2xl mr-4">📍</div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Alamat</h3>
                                <p class="text-gray-600">Jl. Inovasi No. 123, Jakarta, Indonesia</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="text-orange-600 text-2xl mr-4">📧</div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Email</h3>
                                <p class="text-gray-600">support@myapp.com</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="text-orange-600 text-2xl mr-4">📞</div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Telepon</h3>
                                <p class="text-gray-600">+62 21 1234 5678</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="text-orange-600 text-2xl mr-4">🕒</div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Jam Operasional</h3>
                                <p class="text-gray-600">Senin - Jumat: 08.00 - 17.00 WIB</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Ikuti Kami</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-orange-600 hover:text-orange-800 transition-colors duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.708.87 3.215 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z" />
                                </svg>
                            </a>
                            <a href="#" class="text-orange-600 hover:text-orange-800 transition-colors duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M22.675 0H1.325C.593 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.593 1.323-1.326V1.326C24 .593 23.407 0 22.675 0z" />
                                </svg>
                            </a>
                            <a href="#" class="text-orange-600 hover:text-orange-800 transition-colors duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849s-.012 3.584-.069 4.849c-.148 3.228-1.667 4.771-4.919 4.919-1.266.058-1.645.069-4.85.069s-3.584-.012-4.849-.069c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.849s.012-3.584.069-4.849c.148-3.228 1.667-4.771 4.919-4.919 1.265-.058 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.073 4.948c.2 4.362 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.667-.014 4.948-.072c4.362-.2 6.78-2.618 6.98-6.98.058-1.281.072-1.689.072-4.948s-.014-3.667-.072-4.948c-.2-4.362-2.618-6.78-6.98-6.98-1.281-.058-1.689-.072-4.948-.072zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.791-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.209-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.441s.645 1.441 1.441 1.441 1.441-.645 1.441-1.441-.645-1.441-1.441-1.441z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
