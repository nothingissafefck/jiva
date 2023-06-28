import {initMenu} from './modules/menu.js';
import {initMap} from './modules/map.js';
// import {initForm} from './modules/form.js';

window.addEventListener('load', () => {
    initMenu();
    // initForm();

    const map = document.getElementById('map');
    const observer = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting) {
            initMap({
                id: 'map',
                initials: {
                    center: [54.667879, 20.510793],
                    controls: [],
                    zoom: 16,
                },
                placemark: [
                    {
                        hintContent: 'г. Калининград, ул. Интернациональная, 74',
                    },
                ],
            });

            if (map != null) {
                observer.unobserve(map);
            }
        }
    }, {
        rootMargin: '0px',
        threshold: 0,
    });

    if (map != null) {
        observer.observe(map);
    }
});
