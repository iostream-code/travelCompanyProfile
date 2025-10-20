<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Travel Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50 border-b-4 border-orange-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo-only-new.png') }}" class="w-8 h-8 me-2" alt="">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-orange-600">
                        teman
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-orange-600 transition">Home</a>
                    <a href="{{ route('features') }}"
                        class="text-gray-700 hover:text-orange-600 transition">Features</a>
                    <a href="{{ route('pricing') }}" class="text-gray-700 hover:text-orange-600 transition">Pricing</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-orange-600 transition">About</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700 transition">
                        Register Now!
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-orange-950 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-bold mb-4 text-orange-400">TeMan</h3>
                    <p class="text-gray-300">Solusi terbaik untuk kebutuhan bisnis Anda</p>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4 text-orange-400">Product</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="{{ route('features') }}" class="hover:text-orange-400 transition">Features</a>
                        </li>
                        <li><a href="{{ route('pricing') }}" class="hover:text-orange-400 transition">Pricing</a></li>
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
                    <p class="text-gray-300">koperindo@travel.com</p>
                    <p class="text-gray-300">+62 857 3055 7075</p>
                </div>
            </div>
            <div class="border-t border-orange-900 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 MyApp. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>
