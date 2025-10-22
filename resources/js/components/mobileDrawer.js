import $ from 'jquery';

export default function initMobileDrawer() {
    const $mobileMenuButton = $('#mobile-menu-button');
    const $closeDrawerButton = $('#close-drawer-button');
    const $mobileDrawer = $('#mobile-drawer');
    const $drawerOverlay = $('#drawer-overlay');
    const $drawerLinks = $mobileDrawer.find('a');

    function openDrawer() {
        $mobileDrawer.removeClass('translate-x-full');
        $drawerOverlay.removeClass('hidden');
        $('body').css('overflow', 'hidden');
    }

    function closeDrawer() {
        $mobileDrawer.addClass('translate-x-full');
        $drawerOverlay.addClass('hidden');
        $('body').css('overflow', '');
    }

    $mobileMenuButton.on('click', openDrawer);

    $closeDrawerButton.on('click', closeDrawer);

    $drawerOverlay.on('click', closeDrawer);

    $drawerLinks.on('click', closeDrawer);

    $(document).on('keydown.drawer', function (e) {
        if (e.key === 'Escape') {
            closeDrawer();
        }
    });

    return function cleanup() {
        $mobileMenuButton.off('click', openDrawer);
        $closeDrawerButton.off('click', closeDrawer);
        $drawerOverlay.off('click', closeDrawer);
        $drawerLinks.off('click', closeDrawer);
        $(document).off('keydown.drawer');
        console.log('✓ Mobile drawer cleaned up');
    };
}
