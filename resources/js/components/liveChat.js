import $ from 'jquery';

export default function initLiveChat() {
    if ($('#live-chat-container').length) {
        return;
    }

    const chatHTML = `
        <!-- Live Chat Floating Button -->
        <button id="live-chat-button" class="flex lg:hidden fixed bottom-28 right-8 z-50 w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-full shadow-2xl hover:shadow-green-300 transform hover:scale-110 transition-all duration-300 items-center justify-center group">
            <svg id="chat-icon" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
            </svg>
            <svg id="close-icon" class="hidden w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
            <span class="tooltip absolute -top-12 right-0 bg-gray-800 text-white text-xs px-4 py-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">
                💬 Chat dengan Kami
            </span>
            <!-- Notification Badge -->
            <span id="chat-notification" class="absolute -top-1 -right-1 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center text-xs font-bold border-2 border-white animate-pulse">
                1
            </span>
        </button>

        <!-- Live Chat Window -->
        <div id="live-chat-window" class="hidden fixed bottom-28 right-8 z-50 w-96 max-w-[calc(100vw-2rem)] bg-white rounded-2xl shadow-2xl overflow-hidden animate-slide-up">
            <!-- Chat Header -->
            <div class="bg-gradient-to-r from-green-500 to-green-600 px-6 py-4 text-white">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                                <span class="text-2xl">👨‍💼</span>
                            </div>
                            <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-white"></span>
                        </div>
                        <div>
                            <h3 class="font-bold text-sm">Tim Support TeMan</h3>
                            <p class="text-xs text-green-100">Online - Siap membantu</p>
                        </div>
                    </div>
                    <button id="minimize-chat" class="hover:bg-white/20 rounded-lg p-1 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Chat Messages -->
            <div id="chat-messages" class="h-96 overflow-y-auto bg-gray-50 p-4 space-y-4">
                <!-- Welcome Message -->
                <div class="flex items-start space-x-2 animate-fade-in">
                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-lg">👨‍💼</span>
                    </div>
                    <div class="bg-white rounded-2xl rounded-tl-sm px-4 py-3 shadow-sm max-w-[75%]">
                        <p class="text-sm text-gray-800">Halo! 👋 Selamat datang di TeMan. Ada yang bisa kami bantu?</p>
                        <p class="text-xs text-gray-400 mt-1">Baru saja</p>
                    </div>
                </div>
            </div>

            <!-- Quick Replies -->
            <div class="bg-white border-t border-gray-200 p-3">
                <p class="text-xs text-gray-500 mb-2">Quick Replies:</p>
                <div class="flex flex-wrap gap-2" id="quick-replies">
                    <button class="quick-reply-btn px-3 py-1.5 bg-gray-100 hover:bg-green-50 text-gray-700 hover:text-green-600 rounded-full text-xs transition-colors" data-message="Bagaimana cara daftar?">
                        📝 Cara Daftar
                    </button>
                    <button class="quick-reply-btn px-3 py-1.5 bg-gray-100 hover:bg-green-50 text-gray-700 hover:text-green-600 rounded-full text-xs transition-colors" data-message="Berapa biaya berlangganan?">
                        💰 Harga
                    </button>
                    <button class="quick-reply-btn px-3 py-1.5 bg-gray-100 hover:bg-green-50 text-gray-700 hover:text-green-600 rounded-full text-xs transition-colors" data-message="Fitur apa saja yang tersedia?">
                        ⭐ Fitur
                    </button>
                </div>
            </div>

            <!-- Chat Input -->
            <div class="bg-white border-t border-gray-200 p-4">
                <div class="flex items-center space-x-2">
                    <input type="text" id="chat-input" placeholder="Ketik pesan Anda..."
                        class="flex-1 px-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:border-green-500 text-sm">
                    <button id="send-message" class="w-10 h-10 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-full flex items-center justify-center hover:shadow-lg transition-all duration-300 hover:scale-110">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    `;

    $('body').append(`<div id="live-chat-container">${chatHTML}</div>`);

    const autoResponses = {
        'bagaimana cara daftar': 'Untuk mendaftar, Anda bisa klik tombol "Daftar Sekarang" di halaman utama, lalu isi form dengan data travel Anda. Proses pendaftaran hanya membutuhkan 5 menit! 🚀',
        'berapa biaya': 'TeMan menyediakan paket Starter (Gratis), Professional (Rp 299K/bulan), dan Business (Custom). Anda bisa cek detail harga di halaman Pricing kami! 💰',
        'fitur': 'TeMan menyediakan fitur Manajemen Jamaah, Pencatatan Keuangan, Laporan Otomatis, Manifest Digital, dan Tracking Keberangkatan. Semua fitur dirancang untuk memudahkan bisnis travel Anda! ⭐',
        'halo': 'Halo! Senang bisa membantu Anda hari ini. Ada yang ingin ditanyakan tentang TeMan? 😊',
        'terima kasih': 'Sama-sama! Jangan ragu untuk menghubungi kami lagi jika ada pertanyaan lain. Selamat menggunakan TeMan! 🙏',
        'default': 'Terima kasih atas pesan Anda! Tim support kami akan segera merespons. Atau Anda bisa hubungi kami di support@teman.com atau +62 851-5917-9022 📞'
    };

    $('#live-chat-button').on('click', function () {
        const $window = $('#live-chat-window');
        const $chatIcon = $('#chat-icon');
        const $closeIcon = $('#close-icon');
        const $notification = $('#chat-notification');

        if ($window.hasClass('hidden')) {
            $window.removeClass('hidden');
            $chatIcon.addClass('hidden');
            $closeIcon.removeClass('hidden');
            $notification.addClass('hidden');

            setTimeout(() => {
                const $messages = $('#chat-messages');
                $messages.scrollTop($messages[0].scrollHeight);
            }, 100);
        } else {
            $window.addClass('hidden');
            $chatIcon.removeClass('hidden');
            $closeIcon.addClass('hidden');
        }
    });

    $('#minimize-chat').on('click', function () {
        $('#live-chat-window').addClass('hidden');
        $('#chat-icon').removeClass('hidden');
        $('#close-icon').addClass('hidden');
    });

    function sendMessage(message) {
        if (!message.trim()) return;

        const timestamp = new Date().toLocaleTimeString('id-ID', {
            hour: '2-digit',
            minute: '2-digit'
        });

        const userMessageHTML = `
            <div class="flex items-start space-x-2 justify-end animate-fade-in">
                <div class="bg-gradient-to-r from-green-500 to-green-600 text-white rounded-2xl rounded-tr-sm px-4 py-3 shadow-sm max-w-[75%]">
                    <p class="text-sm">${message}</p>
                    <p class="text-xs text-green-100 mt-1 text-right">${timestamp}</p>
                </div>
                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <span class="text-lg">👤</span>
                </div>
            </div>
        `;

        $('#chat-messages').append(userMessageHTML);

        $('#chat-input').val('');

        const $messages = $('#chat-messages');
        $messages.scrollTop($messages[0].scrollHeight);

        setTimeout(() => {
            let response = autoResponses.default;
            const lowerMessage = message.toLowerCase();

            for (const [key, value] of Object.entries(autoResponses)) {
                if (lowerMessage.includes(key)) {
                    response = value;
                    break;
                }
            }

            const botMessageHTML = `
                <div class="flex items-start space-x-2 animate-fade-in">
                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-lg">👨‍💼</span>
                    </div>
                    <div class="bg-white rounded-2xl rounded-tl-sm px-4 py-3 shadow-sm max-w-[75%]">
                        <p class="text-sm text-gray-800">${response}</p>
                        <p class="text-xs text-gray-400 mt-1">${timestamp}</p>
                    </div>
                </div>
            `;

            $('#chat-messages').append(botMessageHTML);
            $messages.scrollTop($messages[0].scrollHeight);
        }, 1000);
    }

    $('#send-message').on('click', function () {
        const message = $('#chat-input').val();
        sendMessage(message);
    });

    $('#chat-input').on('keypress', function (e) {
        if (e.which === 13) {
            const message = $(this).val();
            sendMessage(message);
        }
    });

    $(document).on('click', '.quick-reply-btn', function () {
        const message = $(this).data('message');
        sendMessage(message);

        $('#quick-replies').parent().slideUp();
    });

    $(document).on('click', function (e) {
        if (!$(e.target).closest('#live-chat-window, #live-chat-button').length) {
            if (!$('#live-chat-window').hasClass('hidden')) {
                $('#live-chat-window').addClass('hidden');
                $('#chat-icon').removeClass('hidden');
                $('#close-icon').addClass('hidden');
            }
        }
    });

    return function cleanup() {
        $('#live-chat-container').remove();
        $(document).off('click', '.quick-reply-btn');
        console.log('✓ Live chat cleaned up');
    };
}
