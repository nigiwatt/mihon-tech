
/* ------------------------
/*   Swiper wrapper
/* -------------------------------- */

const vendor = './assets/vendor/';
const js = 'swiper-bundle.min.js';
const css = 'swiper-bundle.min.css';

// Load JS
var script = document.createElement('script');
script.async = true;
script.defer = true;
script.src = vendor + js;
document.head.appendChild(script);

// Load CSS
let link = document.createElement('link');
link.rel = 'stylesheet';
link.href = vendor + css;
document.head.appendChild(link);

// Run after loading JS
if (script.addEventListener) {
    script.onload = function() {

        // If swiper class exists (Except defer)
        document.querySelectorAll('.swiper:not(.-defer)').forEach(init_swiper);
    }
}

// Initialize
function init_swiper(el) {

    // Get root element
    const root = el.closest('.js-n-swiper');

    // Default
    let width   = !root.dataset.width   ? '640,345' : root.dataset.width;
    let margin  = !root.dataset.margin  ? '0,0' : root.dataset.margin;
    let options = !root.dataset.options ? '' : root.dataset.options;
    let delay   = !root.dataset.delay   ? '' : root.dataset.delay;
    let speed   = !root.dataset.speed   ? '' : root.dataset.speed;

    width  = width.split(',').map(Number);
    margin = margin.split(',').map(Number);

    width[1]  = width.length < 2 ? 345 : width[1];
    margin[1] = margin.length < 2 ? 0 : margin[1];

    // Options ('break_sp' is defined by common.js)
    let opt = {
        loop: true,
        centeredSlides: true,
        slidesPerView: ((break_sp / 2) / (width[1] + margin[1])),
        breakpoints: {
            [break_sp]: {
                slidesPerView: (1920 / (width[0] + margin[0])),
            }
        },
        on: {
            slideChangeTransitionStart: () => {
                el.classList.add('swiper-slide-start');
            }
        }
    };

    if (options.indexOf('notAllowTouchMove') > -1) {
        opt['allowTouchMove'] = false;
    }
    if (options.indexOf('pauseOnMouseEnter') > -1) {
        if (!opt['autoplay']) opt['autoplay'] = {};
        opt['autoplay'].pauseOnMouseEnter = true;
    }
    if (options.indexOf('reverseDirection') > -1) {
        if (!opt['autoplay']) opt['autoplay'] = {};
        opt['autoplay'].reverseDirection = true;
    }
    if (options.indexOf('fade') > -1) {
        opt['effect'] = 'fade';
    } else if (options.indexOf('cube') > -1) {
        opt['effect'] = 'cube';
    }

    if (delay != '') {
        if (!opt['autoplay']) opt['autoplay'] = {};
        opt['autoplay'].delay = Number(delay);
    }
    if (options.indexOf('manualplay') > -1) {
        delete opt.autoplay;
    }
    if (speed != '') {
        opt['speed'] = Number(speed);
    }

    if (el.querySelector('.swiper-button-prev')) {
        if (!opt['navigation']) opt['navigation'] = {};
        opt['navigation'].prevEl = '.swiper-button-prev';
    }
    if (el.querySelector('.swiper-button-next')) {
        if (!opt['navigation']) opt['navigation'] = {};
        opt['navigation'].nextEl = '.swiper-button-next';
    }
    if (el.querySelector('.swiper-pagination')) {
        opt['pagination'] = { el: '.swiper-pagination', clickable: true };
    }

    // Initialize swiper
    const swiperObj = new Swiper(el, opt);
}
