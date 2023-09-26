// import lightbox from './../../../node_modules/lightbox2/dist/js/lightbox.min.js';
import Macy from 'macy';
export let macyInstance;

export default function masonryComponent() {
    // Sprawdzenie, czy element istnieje w DOM
    if (document.querySelector('.masonry-gallery')) {
        macyInstance = Macy({
            container: '.masonry-gallery',
            trueOrder: false,
            waitForImages: true,
            margin: 24,
            columns: 3,
            breakAt: {
                1200: 3,
                940: 2,
                520: 1
            }
        });
        
        macyInstance.recalculate();
    }
}


