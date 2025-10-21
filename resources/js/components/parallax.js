import $ from 'jquery';

export default function initParallax() {
    $(window).on('scroll', function () {
        const scrolled = $(window).scrollTop();
        $('.animate-float, .animate-float-delayed').each(function (index) {
            const speed = 0.5 + (index * 0.1);
            $(this).css('transform', `translateY(${scrolled * speed * 0.05}px)`);
        });
    });
}
