import $ from 'jquery';

export default function initParticles() {
    const canvas = $('#particlesCanvas')[0];

    if (!canvas) {
        console.warn('Particles canvas not found');
        return;
    }

    const ctx = canvas.getContext('2d');

    canvas.width = $(window).width();
    canvas.height = $(document).height();

    let planes = [];
    const planeCount = 7;

    class PaperPlane {
        constructor() {
            this.reset();
        }

        reset() {
            // Start dari kiri
            this.x = -50;
            this.y = Math.random() * (canvas.height - 100) + 50;

            // Kecepatan sedang
            this.speed = Math.random() * 0.5 + 0.8; // 0.8-1.3

            // Sedikit variasi sudut (tapi tetap dominan ke kanan)
            this.angle = (Math.random() * 0.3 - 0.15); // -8° sampai +8°
            this.vx = Math.cos(this.angle) * this.speed;
            this.vy = Math.sin(this.angle) * this.speed;

            // Size & color
            this.size = Math.random() * 15 + 25; // 25-40px
            this.hue = Math.random() * 30 + 5;
            this.opacity = Math.random() * 0.3 + 0.6;
        }

        update() {
            // Gerak lurus
            this.x += this.vx;
            this.y += this.vy;

            // Reset jika keluar canvas
            if (this.x > canvas.width + 50 || this.y < -50 || this.y > canvas.height + 50) {
                this.reset();
            }
        }

        draw() {
            ctx.save();
            ctx.translate(this.x, this.y);
            ctx.rotate(this.angle);

            // Shadow untuk depth
            ctx.shadowBlur = 12;
            ctx.shadowColor = `hsla(${this.hue}, 80%, 40%, 0.4)`;

            // Paper plane body
            ctx.fillStyle = `hsla(${this.hue}, 90%, 60%, ${this.opacity})`;
            ctx.beginPath();
            ctx.moveTo(this.size, 0);
            ctx.lineTo(-this.size * 0.5, -this.size * 0.4);
            ctx.lineTo(-this.size * 0.3, 0);
            ctx.lineTo(-this.size * 0.5, this.size * 0.4);
            ctx.closePath();
            ctx.fill();

            // Detail garis tengah
            ctx.strokeStyle = `hsla(${this.hue}, 90%, 50%, ${this.opacity * 0.8})`;
            ctx.lineWidth = 2;
            ctx.beginPath();
            ctx.moveTo(this.size, 0);
            ctx.lineTo(-this.size * 0.3, 0);
            ctx.stroke();

            // Highlight untuk dimensi
            ctx.fillStyle = `rgba(255, 255, 255, ${this.opacity * 0.5})`;
            ctx.beginPath();
            ctx.moveTo(this.size, 0);
            ctx.lineTo(-this.size * 0.2, -this.size * 0.25);
            ctx.lineTo(-this.size * 0.1, 0);
            ctx.closePath();
            ctx.fill();

            // Wing detail
            ctx.strokeStyle = `hsla(${this.hue}, 90%, 50%, ${this.opacity * 0.6})`;
            ctx.lineWidth = 1.5;
            ctx.beginPath();
            ctx.moveTo(-this.size * 0.3, 0);
            ctx.lineTo(-this.size * 0.5, -this.size * 0.4);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(-this.size * 0.3, 0);
            ctx.lineTo(-this.size * 0.5, this.size * 0.4);
            ctx.stroke();

            ctx.shadowBlur = 0;
            ctx.restore();
        }
    }

    function init() {
        planes = [];
        for (let i = 0; i < planeCount; i++) {
            const plane = new PaperPlane();
            // Spread posisi awal di sepanjang jalur
            plane.x = Math.random() * canvas.width - 50;
            planes.push(plane);
        }
    }

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        for (let i = 0; i < planes.length; i++) {
            planes[i].update();
            planes[i].draw();
        }

        requestAnimationFrame(animate);
    }

    init();
    animate();

    $(window).on('resize', function () {
        canvas.width = $(window).width();
        canvas.height = $(document).height();
        init();
    });
}
