import './bootstrap';
import $ from 'jquery';

import register from './auth/register';
import home from './pages/home';
import features from './pages/features';
import pricing from './pages/pricing';
import about from './pages/about';
import contact from './pages/contact';

import initParticles from './components/particles';
import initScrollReveal from './components/scrollReveal';
import initFeatureCards from './components/featureCards';
import initSmoothScroll from './components/smoothScroll';
import initParallax from './components/parallax';
import initBackgroundMusic from './components/backgroundMusic';
import initContactPopup from './components/contactPopup';
import initMobileDrawer from './components/mobileDrawer';
import initLiveChat from './components/liveChat';

import { matchRoute } from './routes';

window.$ = $;

let musicCleanup = null;
let contactCleanup = null;
let drawerCleanup = null;
let chatCleanup = null;

const components = {
    particles: initParticles,
    scrollReveal: initScrollReveal,
    featureCards: initFeatureCards,
    smoothScroll: initSmoothScroll,
    parallax: initParallax,
};

const pageControllers = {
    '/': home,
    '/features': features,
    '/pricing': pricing,
    '/about': about,
    '/contact': contact,
    '/register': register,
};

function getCurrentRoute() {
    return window.location.pathname;
}

function cleanupComponents() {
    $(window).off('scroll resize');
    $('.feature-card').off('mouseenter');
    $('a[href^="#"]').off('click');
}

function initRouteComponents() {
    const currentRoute = getCurrentRoute();
    const routeComponents = matchRoute(currentRoute);

    routeComponents.forEach(componentName => {
        if (components[componentName]) {
            try {
                components[componentName]();
            } catch (error) {
                console.error(`✗ Error initializing ${componentName}:`, error);
            }
        }
    });
}

function initPageController() {
    const currentRoute = getCurrentRoute();

    if (pageControllers[currentRoute]) {
        try {
            pageControllers[currentRoute]();
            return;
        } catch (error) {
            console.error(`✗ Error initializing controller for ${currentRoute}:`, error);
        }
    }

    if (pageControllers['/']) {
        try {
            pageControllers['/']();
        } catch (error) {
            console.error(`✗ Error initializing controller for /:`, error);
        }
    }
}

function initLoadingAnimation() {
    $('body').css('opacity', '0');
    setTimeout(() => {
        $('body').css({
            'transition': 'opacity 0.5s ease-in',
            'opacity': '1'
        });
    }, 100);
}

function initMusic() {
    if (musicCleanup && typeof musicCleanup === 'function') {
        musicCleanup();
    }

    if (!$('#music-player').length) {
        try {
            musicCleanup = initBackgroundMusic();
        } catch (error) {
            console.error('✗ Error initializing music:', error);
        }
    }
}

function initContact() {
    if (contactCleanup && typeof contactCleanup === 'function') {
        contactCleanup();
    }

    if (!$('#contact-button').length) {
        try {
            contactCleanup = initContactPopup();
        } catch (error) {
            console.error('✗ Error initializing contact popup:', error);
        }
    }
}

function initDrawer() {
    if (drawerCleanup && typeof drawerCleanup === 'function') {
        drawerCleanup();
    }

    if ($('#mobile-drawer').length) {
        try {
            drawerCleanup = initMobileDrawer();
        } catch (error) {
            console.error('✗ Error initializing drawer:', error);
        }
    }
}

function initChat() {
    if (chatCleanup && typeof chatCleanup === 'function') {
        chatCleanup();
    }

    if (!$('#live-chat-container').length) {
        try {
            chatCleanup = initLiveChat();
        } catch (error) {
            console.error('✗ Error initializing live chat:', error);
        }
    }
}

function initApp() {
    initLoadingAnimation();
    initRouteComponents();
    initPageController();
    initMusic();
    initContact();
    initDrawer();
    initChat();
}

function handleRouteChange() {
    cleanupComponents();
    initApp();
}

$(document).ready(function () {
    initApp();
});

window.addEventListener('popstate', handleRouteChange);

$(document).on('click', 'a[data-route]', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');

    window.history.pushState({}, '', href);

    handleRouteChange();
});
