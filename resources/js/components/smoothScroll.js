import $ from 'jquery';

export default function initSmoothScroll() {
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        const target = $($(this).attr('href'));
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 800);
        }
    });
}

// Counter Animation for Stats (optional utility)
export function animateCounter(element, target) {
    let current = 0;
    const increment = target / 100;
    const timer = setInterval(() => {
        current += increment;
        const hasPercent = $(element).text().includes('%');
        if (current >= target) {
            $(element).text(target + (hasPercent ? '%' : '+'));
            clearInterval(timer);
        } else {
            $(element).text(Math.floor(current) + (hasPercent ? '%' : '+'));
        }
    }, 20);
}
