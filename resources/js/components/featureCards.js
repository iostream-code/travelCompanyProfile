import $ from 'jquery';

export default function initFeatureCards() {
    $('.feature-card').on('mouseenter', function (e) {
        const rect = this.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        $(this).css({
            '--mouse-x': `${x}px`,
            '--mouse-y': `${y}px`
        });
    });
}
