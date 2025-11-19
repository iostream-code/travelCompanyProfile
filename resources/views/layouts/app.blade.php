<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Travel Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('images/logo-only-new.png') }}">
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50 border-b-4 border-orange-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="{{ asset('images/logo-only-new.png') }}" class="w-8 h-8 me-2" alt="">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-orange-600">
                        TeMan
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}"
                        class="{{ request()->routeIs('home') ? 'bg-primary-600 text-white py-1 px-2 rounded-sm' : 'text-gray-700 hover:text-orange-600 transition' }}">Home</a>
                    <a href="{{ route('features') }}"
                        class="{{ request()->routeIs('features') ? 'bg-primary-600 text-white py-1 px-2 rounded-sm' : 'text-gray-700 hover:text-orange-600 transition' }}">Features</a>
                    <a href="{{ route('pricing') }}"
                        class="{{ request()->routeIs('pricing') ? 'bg-primary-600 text-white py-1 px-2 rounded-sm' : 'text-gray-700 hover:text-orange-600 transition' }}">Pricing</a>
                    <a href="{{ route('about') }}"
                        class="{{ request()->routeIs('about') ? 'bg-primary-600 text-white py-1 px-2 rounded-sm' : 'text-gray-700 hover:text-orange-600 transition' }}">About</a>
                </div>

                <!-- Desktop Register Button -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="{{ route('register') }}"
                        class="bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700 transition">
                        Register Now!
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex md:hidden items-center">
                    <button id="mobile-menu-button" type="button"
                        class="text-gray-700 hover:text-orange-600 focus:outline-none focus:text-orange-600 transition">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Drawer Overlay -->
    <div id="drawer-overlay" class="fixed inset-0 bg-gray-700 opacity-50 z-40 hidden transition-opacity duration-300">
    </div>

    <!-- Mobile Drawer Menu -->
    <div id="mobile-drawer"
        class="fixed top-0 right-0 h-full w-64 bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out">

        <!-- Drawer Header -->
        <div class="flex items-center justify-between p-4 border-b border-gray-200">
            <div class="flex items-center">
                <img src="{{ asset('images/logo-only-new.png') }}" class="w-6 h-6 me-2" alt="">
                <span class="text-xl font-bold text-orange-600">TeMan</span>
            </div>
            <button id="close-drawer-button" type="button"
                class="text-gray-500 hover:text-orange-600 focus:outline-none transition">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Drawer Menu Items -->
        <div class="py-4">
            <a href="{{ route('home') }}"
                class="{{ request()->routeIs('home') ? 'text-white bg-orange-600 ' : 'text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition' }} block px-6 py-3">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Home
                </div>
            </a>
            <a href="{{ route('features') }}"
                class="{{ request()->routeIs('features') ? 'text-white bg-orange-600 ' : 'text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition' }} block px-6 py-3">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    Features
                </div>
            </a>
            <a href="{{ route('pricing') }}"
                class="{{ request()->routeIs('pricing') ? 'text-white bg-orange-600 ' : 'text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition' }} block px-6 py-3">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Pricing
                </div>
            </a>
            <a href="{{ route('about') }}"
                class="{{ request()->routeIs('about') ? 'text-white bg-orange-600 ' : 'text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition' }} block px-6 py-3">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    About
                </div>
            </a>

            <!-- Divider -->
            <div class="border-t border-gray-200 my-4"></div>

            <!-- Register Button -->
            <div class="px-6">
                <a href="{{ route('register') }}"
                    class="block text-center bg-orange-600 text-white px-4 py-3 rounded-lg hover:bg-orange-700 transition font-semibold">
                    Register Now!
                </a>
            </div>
        </div>

        <!-- Drawer Footer -->
        <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-gray-200 bg-gray-50">
            <p class="text-xs text-gray-500 text-center">© 2025 TeMan</p>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-orange-950 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-lg font-bold mb-4 text-orange-400">Product</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="{{ route('features') }}" class="hover:text-orange-400 transition">Features</a>
                        </li>
                        <li><a href="{{ route('pricing') }}" class="hover:text-orange-400 transition">Pricing</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4 text-orange-400">Company</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="{{ route('about') }}" class="hover:text-orange-400 transition">About Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4 text-orange-400">Contact</h4>
                    <ul class="space-y-2 mb-2 text-gray-300">
                        <li><a href="{{ route('contact') }}" class="hover:text-orange-400 transition">Contact Us</a>
                        </li>
                    </ul>
                    <p class="text-gray-300">cs@teman.pro</p>
                    <p class="text-gray-300">+62 851-5917-9022</p>
                </div>
            </div>
            <div class="border-t border-orange-900 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 TeMan. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/691a89feccfc7c195b6c4647/1ja7r2qcn';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>
