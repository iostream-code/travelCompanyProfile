export const routes = {
    '/': ['particles', 'scrollReveal', 'featureCards', 'smoothScroll', 'parallax'],
    '/register': ['particles', 'scrollReveal', 'featureCards', 'smoothScroll'],
    '/features': ['particles', 'scrollReveal', 'featureCards', 'smoothScroll'],
    '/pricing': ['particles', 'scrollReveal', 'featureCards', 'smoothScroll'],
    '/about': ['particles', 'scrollReveal', 'featureCards', 'smoothScroll'],
    '/contact': ['particles', 'scrollReveal', 'featureCards', 'smoothScroll'],
};

export const fallbackComponents = ['smoothScroll'];
export function matchRoute(currentPath) {
    if (routes[currentPath]) {
        return routes[currentPath];
    }

    for (const [route, components] of Object.entries(routes)) {
        if (route.includes(':')) {
            const routePattern = route.replace(/:[^/]+/g, '[^/]+');
            const regex = new RegExp(`^${routePattern}$`);
            if (regex.test(currentPath)) {
                return components;
            }
        }
    }

    return fallbackComponents;
}
