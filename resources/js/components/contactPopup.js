import $ from 'jquery';

export default function initContactPopup() {
    // Create contact button
    const contactButton = $(`
        <!-- Floating Contact Button - Hidden on mobile, visible on desktop -->
        <button id="contact-button" class="hidden sm:flex fixed bottom-28 right-8 z-50 w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-500 text-white rounded-full shadow-xl hover:shadow-2xl transform hover:scale-110 transition-all duration-300 items-center justify-center group">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
        </button>
    `);

    // Create popup modal
    const contactPopup = $(`
        <div id="contact-popup" class="fixed inset-0 z-[60] hidden">
            <!-- Backdrop -->
            <div class="popup-backdrop absolute inset-0 bg-black/50 backdrop-blur-sm transition-opacity duration-300 opacity-0"></div>

            <!-- Modal Container -->
            <div class="popup-container absolute inset-0 flex items-center justify-center p-4 overflow-y-auto">
                <div class="popup-content bg-white rounded-3xl shadow-2xl max-w-5xl w-full transform scale-95 opacity-0 transition-all duration-300 my-8">
                    <!-- Close Button -->
                    <button class="close-popup absolute top-6 right-6 z-10 w-10 h-10 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition-all duration-200 hover:rotate-90">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                    <!-- Content -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                        <!-- Left Side - Contact Form -->
                        <div class="p-8 lg:p-12">
                            <div class="mb-8">
                                <h2 class="text-4xl font-bold text-gray-800 mb-3">Hubungi Kami</h2>
                                <p class="text-gray-600">Kami siap membantu Anda! Kirim pesan dan tim kami akan merespons secepatnya.</p>
                            </div>

                            <form id="contact-form" class="space-y-5">
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="contact-name" class="block text-sm font-semibold text-gray-700 mb-2">
                                        <span class="flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                            Nama Lengkap
                                        </span>
                                    </label>
                                    <input type="text" id="contact-name" name="name"
                                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all duration-300 outline-none"
                                        placeholder="John Doe" required>
                                </div>

                                <!-- Email -->
                                <div class="form-group">
                                    <label for="contact-email" class="block text-sm font-semibold text-gray-700 mb-2">
                                        <span class="flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                            Email
                                        </span>
                                    </label>
                                    <input type="email" id="contact-email" name="email"
                                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all duration-300 outline-none"
                                        placeholder="john@example.com" required>
                                </div>

                                <!-- Message -->
                                <div class="form-group">
                                    <label for="contact-message" class="block text-sm font-semibold text-gray-700 mb-2">
                                        <span class="flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                            </svg>
                                            Pesan
                                        </span>
                                    </label>
                                    <textarea id="contact-message" name="message" rows="4"
                                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all duration-300 outline-none resize-none"
                                        placeholder="Tulis pesan Anda di sini..." required></textarea>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit"
                                    class="w-full bg-gradient-to-r from-blue-600 to-blue-500 text-white px-6 py-4 rounded-xl font-bold shadow-lg hover:shadow-2xl hover:shadow-blue-300 transform hover:scale-[1.02] transition-all duration-300 flex items-center justify-center space-x-2">
                                    <span>Kirim Pesan</span>
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>

                        <!-- Right Side - Contact Info -->
                        <div class="bg-gradient-to-br from-blue-600 to-blue-500 p-8 lg:p-12 rounded-r-3xl text-white relative overflow-hidden">
                            <!-- Decorative Elements -->
                            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
                            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

                            <div class="relative z-10">
                                <h3 class="text-2xl font-bold mb-6">Informasi Kontak</h3>

                                <div class="space-y-6 mb-10">
                                    <!-- Address -->
                                    <div class="flex items-start space-x-4">
                                        <div class="flex-shrink-0 w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mb-1">Alamat</h4>
                                            <p class="text-blue-100">Permata blok R3 No.32 - 39, Kludan, Kec. Tanggulangin, Kabupaten Sidoarjo, Jawa Timur 61272</p>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="flex items-start space-x-4">
                                        <div class="flex-shrink-0 w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mb-1">Email</h4>
                                            <p class="text-blue-100">cs@teman.pro</p>
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div class="flex items-start space-x-4">
                                        <div class="flex-shrink-0 w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mb-1">Telepon</h4>
                                            <p class="text-blue-100">+62 851-5917-9022</p>
                                        </div>
                                    </div>

                                    <!-- Hours -->
                                    <div class="flex items-start space-x-4">
                                        <div class="flex-shrink-0 w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mb-1">Jam Operasional</h4>
                                            <p class="text-blue-100">Senin - Sabtu: 08.00 - 17.00 WIB</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Social Media -->
                                <div>
                                    <h4 class="font-semibold mb-4">Ikuti Kami</h4>
                                    <div class="flex space-x-3">
                                        <a href="#" class="w-10 h-10 bg-white/20 hover:bg-white/30 rounded-lg flex items-center justify-center transition-all duration-200 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                                            </svg>
                                        </a>
                                        <a href="#" class="w-10 h-10 bg-white/20 hover:bg-white/30 rounded-lg flex items-center justify-center transition-all duration-200 hover:scale-110">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M22.675 0H1.325C.593 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.593 1.323-1.326V1.326C24 .593 23.407 0 22.675 0z"></path>
                                            </svg>
                                        </a>
                                        <a href="#" class="w-10 h-10 bg-white/20 hover:bg-white/30 rounded-lg flex items-center justify-center transition-all duration-200 hover:scale-110">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849s-.012 3.584-.069 4.849c-.148 3.228-1.667 4.771-4.919 4.919-1.266.058-1.645.069-4.85.069s-3.584-.012-4.849-.069c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.849s.012-3.584.069-4.849c.148-3.228 1.667-4.771 4.919-4.919 1.265-.058 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.073 4.948c.2 4.362 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.667-.014 4.948-.072c4.362-.2 6.78-2.618 6.98-6.98.058-1.281.072-1.689.072-4.948s-.014-3.667-.072-4.948c-.2-4.362-2.618-6.78-6.98-6.98-1.281-.058-1.689-.072-4.948-.072zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.791-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.209-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.441s.645 1.441 1.441 1.441 1.441-.645 1.441-1.441-.645-1.441-1.441-1.441z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `);

    // Append elements to body
    $('body').append(contactButton);
    $('body').append(contactPopup);

    // Show popup
    function showPopup() {
        $('#contact-popup').removeClass('hidden');
        // Trigger animation
        setTimeout(() => {
            $('.popup-backdrop').addClass('opacity-100');
            $('.popup-content').removeClass('scale-95 opacity-0').addClass('scale-100 opacity-100');
        }, 10);
        // Prevent body scroll
        $('body').css('overflow', 'hidden');
    }

    // Hide popup
    function hidePopup() {
        $('.popup-backdrop').removeClass('opacity-100');
        $('.popup-content').removeClass('scale-100 opacity-100').addClass('scale-95 opacity-0');
        setTimeout(() => {
            $('#contact-popup').addClass('hidden');
            $('body').css('overflow', '');
        }, 300);
    }

    // Event listeners
    $('#contact-button').on('click', showPopup);
    $('.close-popup').on('click', hidePopup);
    $('.popup-backdrop').on('click', hidePopup);

    // Prevent popup content click from closing
    $('.popup-content').on('click', function (e) {
        e.stopPropagation();
    });

    // Close on ESC key
    $(document).on('keydown', function (e) {
        if (e.key === 'Escape' && !$('#contact-popup').hasClass('hidden')) {
            hidePopup();
        }
    });

    // Form submission
    $('#contact-form').on('submit', function (e) {
        e.preventDefault();

        const formData = {
            name: $('#contact-name').val(),
            email: $('#contact-email').val(),
            message: $('#contact-message').val()
        };

        console.log('Form submitted:', formData);

        // Show success message
        alert('Terima kasih! Pesan Anda telah terkirim. Kami akan segera merespons.');

        // Reset form
        this.reset();

        // Close popup
        hidePopup();

        // TODO: Integrate with your backend API
        // $.ajax({
        //     url: '/api/contact',
        //     method: 'POST',
        //     data: formData,
        //     success: function(response) {
        //         alert('Pesan berhasil dikirim!');
        //         hidePopup();
        //     }
        // });
    });

    // Cleanup function
    return function cleanup() {
        contactButton.remove();
        contactPopup.remove();
        $(document).off('keydown');
    };
}
