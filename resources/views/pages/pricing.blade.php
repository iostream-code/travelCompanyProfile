@extends('layouts.app')

@section('title', 'Harga MyApp')

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
                    Pilih Paket yang Tepat untuk Bisnis Anda
                </h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-3xl mx-auto">
                    Dapatkan akses ke semua fitur MyApp dengan harga yang kompetitif, dirancang untuk mendukung pertumbuhan
                    bisnis Anda.
                </p>
            </div>
        </div>
    </section>

    <!-- Pricing Plans Section -->
    <section class="py-20 bg-white/80 backdrop-blur-sm relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic Plan -->
                <div
                    class="pricing-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 cursor-pointer transform hover:-translate-y-2 scroll-reveal">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Basic</h3>
                    <p class="text-gray-600 mb-6">Cocok untuk bisnis kecil yang baru memulai</p>
                    <div class="text-4xl font-bold text-orange-600 mb-6">Gratis</div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Akses ke dashboard dasar</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">1 GB penyimpanan cloud</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Support email</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-gray-400 mr-3 text-2xl">✗</span>
                            <span class="text-gray-700">Laporan analitik lanjutan</span>
                        </li>
                    </ul>
                    <a href="#"
                        class="inline-block bg-gradient-to-r from-orange-600 to-orange-700 text-white px-8 py-4 rounded-xl font-bold hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1">
                        Mulai Sekarang
                    </a>
                </div>

                <!-- Pro Plan -->
                <div
                    class="pricing-card group bg-gradient-to-br from-orange-100 to-orange-200 p-10 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border-2 border-orange-300 cursor-pointer transform hover:-translate-y-2 scroll-reveal relative">
                    <div
                        class="absolute top-4 right-4 bg-orange-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
                        Populer</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Pro</h3>
                    <p class="text-gray-600 mb-6">Ideal untuk bisnis yang sedang berkembang</p>
                    <div class="text-4xl font-bold text-orange-600 mb-6">Rp 299K /bulan</div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Dashboard lengkap dengan widget kustom</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">10 GB penyimpanan cloud</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Support 24/7 via chat & email</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Laporan analitik lanjutan</span>
                        </li>
                    </ul>
                    <a href="#"
                        class="inline-block bg-gradient-to-r from-orange-600 to-orange-700 text-white px-8 py-4 rounded-xl font-bold hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1">
                        Pilih Pro
                    </a>
                </div>

                <!-- Enterprise Plan -->
                <div
                    class="pricing-card group bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 hover:border-orange-300 cursor-pointer transform hover:-translate-y-2 scroll-reveal">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Enterprise</h3>
                    <p class="text-gray-600 mb-6">Solusi lengkap untuk bisnis besar</p>
                    <div class="text-4xl font-bold text-orange-600 mb-6">Hubungi Kami</div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Dashboard tanpa batas</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Penyimpanan cloud tak terbatas</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Support prioritas 24/7</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-600 mr-3 text-2xl">✓</span>
                            <span class="text-gray-700">Integrasi API kustom</span>
                        </li>
                    </ul>
                    <a href="#"
                        class="inline-block border-2 border-orange-600 text-orange-600 px-8 py-4 rounded-xl font-bold hover:bg-orange-600 hover:text-white transition-all duration-300">
                        Kontak Sales
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gradient-to-b from-white to-gray-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-5xl font-bold text-gray-800 mb-4">Pertanyaan Umum</h2>
                <p class="text-xl text-gray-600">Jawaban atas pertanyaan yang sering diajukan</p>
            </div>
            <div class="space-y-6 scroll-reveal">
                <div
                    class="bg-white p-6 rounded-2xl shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Apa yang termasuk dalam paket gratis?</h3>
                    <p class="text-gray-600 leading-relaxed">Paket gratis mencakup akses ke dashboard dasar, 1 GB
                        penyimpanan cloud, dan dukungan melalui email. Cocok untuk bisnis kecil yang ingin mencoba MyApp.
                    </p>
                </div>
                <div
                    class="bg-white p-6 rounded-2xl shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Apakah saya bisa mengganti paket kapan saja?</h3>
                    <p class="text-gray-600 leading-relaxed">Ya, Anda dapat meningkatkan atau menurunkan paket kapan saja
                        tanpa biaya tambahan. Perubahan akan berlaku pada siklus penagihan berikutnya.</p>
                </div>
                <div
                    class="bg-white p-6 rounded-2xl shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Bagaimana cara kerja dukungan prioritas?</h3>
                    <p class="text-gray-600 leading-relaxed">Dukungan prioritas untuk paket Enterprise memberikan akses ke
                        tim khusus melalui chat, email, dan telepon, dengan waktu respons di bawah 10 menit.</p>
                </div>
                <div
                    class="bg-white p-6 rounded-2xl shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Apakah ada kontrak jangka panjang?</h3>
                    <p class="text-gray-600 leading-relaxed">Tidak, semua paket berbasis langganan bulanan tanpa komitmen
                        jangka panjang. Anda bebas membatalkan kapan saja.</p>
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
            <h2 class="text-5xl font-bold mb-6 fade-in-up">Mulai Perjalanan Anda Sekarang</h2>
            <p class="text-2xl mb-10 text-orange-100 fade-in-up delay-1">
                Pilih paket yang sesuai dan rasakan kemudahan mengelola bisnis Anda.
            </p>
            <a href="#"
                class="inline-block bg-white text-orange-600 px-10 py-5 rounded-xl font-bold text-lg hover:bg-gray-100 hover:shadow-2xl hover:scale-105 transition-all duration-300 hover:-translate-y-1 fade-in-up delay-2">
                Daftar Sekarang
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

    <!-- JavaScript for Animations -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Particle Canvas Animation
            const canvas = document.getElementById('particlesCanvas');
            const ctx = canvas.getContext('2d');

            canvas.width = window.innerWidth;
            canvas.height = document.body.scrollHeight;

            let particles = [];
            const particleCount = 80;

            class Particle {
                constructor() {
                    this.x = Math.random() * canvas.width;
                    this.y = Math.random() * canvas.height;
                    this.size = Math.random() * 3 + 1;
                    this.speedX = Math.random() * 0.5 - 0.25;
                    this.speedY = Math.random() * 0.5 - 0.25;
                    this.opacity = Math.random() * 0.5 + 0.2;
                }

                update() {
                    this.x += this.speedX;
                    this.y += this.speedY;

                    if (this.x > canvas.width) this.x = 0;
                    if (this.x < 0) this.x = canvas.width;
                    if (this.y > canvas.height) this.y = 0;
                    if (this.y < 0) this.y = canvas.height;
                }

                draw() {
                    ctx.fillStyle = `rgba(249, 115, 22, ${this.opacity})`;
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    ctx.fill();
                }
            }

            function init() {
                particles = [];
                for (let i = 0; i < particleCount; i++) {
                    particles.push(new Particle());
                }
            }

            function animate() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                for (let i = 0; i < particles.length; i++) {
                    particles[i].update();
                    particles[i].draw();

                    for (let j = i + 1; j < particles.length; j++) {
                        const dx = particles[i].x - particles[j].x;
                        const dy = particles[i].y - particles[j].y;
                        const distance = Math.sqrt(dx * dx + dy * dy);

                        if (distance < 150) {
                            ctx.strokeStyle = `rgba(249, 115, 22, ${0.1 * (1 - distance / 150)})`;
                            ctx.lineWidth = 1;
                            ctx.beginPath();
                            ctx.moveTo(particles[i].x, particles[i].y);
                            ctx.lineTo(particles[j].x, particles[j].y);
                            ctx.stroke();
                        }
                    }
                }

                requestAnimationFrame(animate);
            }

            init();
            animate();

            window.addEventListener('resize', function() {
                canvas.width = window.innerWidth;
                canvas.height = document.body.scrollHeight;
                init();
            });

            // Scroll Reveal Animation
            const scrollRevealElements = document.querySelectorAll('.scroll-reveal');

            const elementInView = (el, dividend = 1) => {
                const elementTop = el.getBoundingClientRect().top;
                return (
                    elementTop <= (window.innerHeight || document.documentElement.clientHeight) / dividend
                );
            };

            const displayScrollElement = (element) => {
                element.classList.add('visible');
            };

            const handleScrollAnimation = () => {
                scrollRevealElements.forEach((el) => {
                    if (elementInView(el, 1.25)) {
                        displayScrollElement(el);
                    }
                });
            };

            window.addEventListener('scroll', handleScrollAnimation);
            handleScrollAnimation();

            // Smooth Scroll for Links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Parallax Effect on Scroll
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const parallaxElements = document.querySelectorAll(
                '.animate-float, .animate-float-delayed');

                parallaxElements.forEach((el, index) => {
                    const speed = 0.5 + (index * 0.1);
                    el.style.transform = `translateY(${scrolled * speed * 0.05}px)`;
                });
            });

            // Add loading animation
            document.body.style.opacity = '0';
            setTimeout(() => {
                document.body.style.transition = 'opacity 0.5s ease-in';
                document.body.style.opacity = '1';
            }, 100);
        });
    </script>
@endsection
