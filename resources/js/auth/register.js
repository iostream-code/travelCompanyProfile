export default function register() {
    // Particle Canvas Animation
    const canvas = $('#particlesCanvas')[0];
    const ctx = canvas.getContext('2d');

    canvas.width = window.innerWidth;
    canvas.height = $('body')[0].scrollHeight;

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

            // Connect particles
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

    // Resize Event
    $(window).resize(function () {
        canvas.width = window.innerWidth;
        canvas.height = $('body')[0].scrollHeight;
        init();
    });

    // Scroll Reveal Animation
    const scrollRevealElements = $('.scroll-reveal');

    const elementInView = (el, dividend = 1) => {
        const elementTop = el.getBoundingClientRect().top;
        return (
            elementTop <= (window.innerHeight || document.documentElement.clientHeight) / dividend
        );
    };

    const displayScrollElement = (element) => {
        element.addClass('visible');
    };

    const handleScrollAnimation = () => {
        scrollRevealElements.each(function () {
            const el = $(this)[0];
            if (elementInView(el, 1.25)) {
                displayScrollElement($(this));
            }
        });
    };

    $(window).scroll(handleScrollAnimation);
    handleScrollAnimation(); // Initial check

    // Feature Cards Hover Effect
    const featureCards = $('.feature-card');
    featureCards.on('mouseenter', function (e) {
        const rect = this.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        $(this).css('--mouse-x', `${x}px`);
        $(this).css('--mouse-y', `${y}px`);
    });

    // Smooth Scroll for Links
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        const target = $(this.getAttribute('href'));
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 'smooth');
        }
    });

    // Counter Animation for Stats
    const animateCounter = (element, target) => {
        let current = 0;
        const increment = target / 100;
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = target + (element.textContent.includes('%') ? '%' : '+');
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current) + (element.textContent.includes('%') ?
                    '%' : '+');
            }
        }, 20);
    };

    // Parallax Effect on Scroll
    $(window).scroll(function () {
        const scrolled = window.pageYOffset;
        const parallaxElements = $('.animate-float, .animate-float-delayed');

        parallaxElements.each(function (index) {
            const el = $(this);
            const speed = 0.5 + (index * 0.1);
            el.css('transform', `translateY(${scrolled * speed * 0.05}px)`);
        });
    });

    // Add loading animation
    $('body').css('opacity', '0');
    setTimeout(() => {
        $('body').css('transition', 'opacity 0.5s ease-in').css('opacity', '1');
    }, 100);
}
