import $ from 'jquery';

export default function initBackgroundMusic() {
    const playlist = [
        {
            src: '/audio/backsound-1.mp3',
            name: 'Backsound Track 1'
        },
        {
            src: '/audio/backsound-2.mp3',
            name: 'backsound Track 2'
        },
    ];

    let currentTrack = 0;
    const audio = new Audio(playlist[currentTrack].src);
    audio.volume = 0.2;
    audio.loop = false;

    let isPlaying = false;

    const musicPlayer = $(`
        <div id="music-player" class="fixed bottom-8 right-8 z-50 flex flex-row items-center gap-4">
            <!-- Volume Slider (Hidden by default) -->
            <div class="volume-control bg-white rounded-full shadow-lg p-2 hidden opacity-0 transition-all duration-300">
                <div class="flex items-center gap-2 px-2">
                    <svg class="w-4 h-4 text-orange-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02z"/>
                    </svg>
                    <input type="range" min="0" max="100" value="20"
                        class="volume-slider w-24 h-2 bg-orange-200 rounded-full appearance-none cursor-pointer"
                        style="accent-color: #ea580c;">
                    <span class="volume-value text-xs font-semibold text-gray-700">20%</span>
                </div>
            </div>

            <!-- Main Control Button -->
            <button class="music-toggle-btn w-16 h-16 bg-gradient-to-r from-orange-600 to-orange-500 text-white rounded-full shadow-xl hover:shadow-2xl transform hover:scale-110 transition-all duration-300 flex items-center justify-center group relative">
                <!-- Play Icon -->
                <svg class="music-icon-play w-7 h-7 transition-all" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z"/>
                </svg>
                <!-- Pause Icon -->
                <svg class="music-icon-pause w-7 h-7 hidden transition-all" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M6 4h4v16H6V4zm8 0h4v16h-4V4z"/>
                </svg>

                <!-- Animated rings when playing -->
                <span class="audio-wave absolute inset-0 rounded-full border-4 border-orange-400 opacity-75 hidden"></span>
            </button>
        </div>
    `);

    $('body').append(musicPlayer);

    function playNextTrack() {
        currentTrack = (currentTrack + 1) % playlist.length;
        audio.src = playlist[currentTrack].src;
        audio.play();
        updateTrackInfo();
    }


    function updateTrackInfo() {
        $('.track-name').text(playlist[currentTrack].name);
    }

    function toggleMusic() {
        if (isPlaying) {
            audio.pause();
            $('.music-icon-play').removeClass('hidden');
            $('.music-icon-pause').addClass('hidden');
            $('.audio-wave').addClass('hidden');
        } else {
            audio.play().catch(err => {
                console.warn('Audio playback failed:', err);
            });
            $('.music-icon-play').addClass('hidden');
            $('.music-icon-pause').removeClass('hidden');
            $('.audio-wave').removeClass('hidden');
            updateTrackInfo();
        }
        isPlaying = !isPlaying;
    }

    $('.volume-slider').on('input', function () {
        const volume = $(this).val() / 100;
        audio.volume = volume;
        $('.volume-value').text(Math.round(volume * 100) + '%');
    });

    $('.music-toggle-btn').on('mouseenter', function () {
        $('.volume-control').removeClass('hidden').css('opacity', '1');
    });

    $('#music-player').on('mouseleave', function () {
        setTimeout(() => {
            $('.volume-control').css('opacity', '0').delay(300).queue(function () {
                $(this).addClass('hidden').dequeue();
            });
        }, 1000);
    });

    $('.music-toggle-btn').on('click', toggleMusic);

    audio.addEventListener('ended', playNextTrack);

    setInterval(() => {
        if (isPlaying) {
            $('.audio-wave').css({
                animation: 'ping 1.5s cubic-bezier(0, 0, 0.2, 1) infinite'
            });
        }
    }, 100);

    $(document).on('keydown', function (e) {
        if (e.key === 'm' || e.key === 'M') {
            toggleMusic();
        }

        if (e.key === '+' || e.key === '=') {
            const newVolume = Math.min(audio.volume + 0.1, 1);
            audio.volume = newVolume;
            $('.volume-slider').val(newVolume * 100);
            $('.volume-value').text(Math.round(newVolume * 100) + '%');
        }

        if (e.key === '-' || e.key === '_') {
            const newVolume = Math.max(audio.volume - 0.1, 0);
            audio.volume = newVolume;
            $('.volume-slider').val(newVolume * 100);
            $('.volume-value').text(Math.round(newVolume * 100) + '%');
        }
    });

    audio.addEventListener('play', () => {
        sessionStorage.setItem('musicPlaying', 'true');
    });

    audio.addEventListener('pause', () => {
        sessionStorage.setItem('musicPlaying', 'false');
    });

    if (sessionStorage.getItem('musicPlaying') === 'true') {
        setTimeout(() => {
            toggleMusic();
        }, 500);
    }

    return function cleanup() {
        audio.pause();
        audio.removeEventListener('ended', playNextTrack);
        musicPlayer.remove();
        $(document).off('keydown');
    };
}

const style = document.createElement('style');
style.textContent = `
    @keyframes ping {
        75%, 100% {
            transform: scale(1.5);
            opacity: 0;
        }
    }

    .volume-slider::-webkit-slider-thumb {
        appearance: none;
        width: 16px;
        height: 16px;
        background: #ea580c;
        cursor: pointer;
        border-radius: 50%;
        box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }

    .volume-slider::-moz-range-thumb {
        width: 16px;
        height: 16px;
        background: #ea580c;
        cursor: pointer;
        border-radius: 50%;
        border: none;
        box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }
`;
document.head.appendChild(style);
