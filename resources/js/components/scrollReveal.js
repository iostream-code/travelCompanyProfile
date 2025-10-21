import $ from 'jquery';

export default function initScrollReveal() {
    const elementInView = (el, dividend = 1) => {
        const elementTop = el.getBoundingClientRect().top;
        return (
            elementTop <= ($(window).height() || $(document).height()) / dividend
        );
    };

    const displayScrollElement = (element) => {
        $(element).addClass('visible');
    };

    const handleScrollAnimation = () => {
        $('.scroll-reveal').each(function () {
            if (elementInView(this, 1.25)) {
                displayScrollElement(this);
            }
        });
    };

    $(window).on('scroll', handleScrollAnimation);
    handleScrollAnimation(); // Initial check
}
