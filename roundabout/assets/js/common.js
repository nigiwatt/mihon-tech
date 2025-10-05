
/* ------------------------
/*   Common JS
/* -------------------------------- */

// Sizes
var innerWidth;
var innerHeight;

var fv_clientHeight;

// Selectors
const body = document.querySelector('body');

const fv = document.querySelector('.js-n-fv');
const header = document.querySelector('.js-n-header');
const pagetop = document.querySelector('.js-n-pagetop');
const separate = document.querySelectorAll('.js-n-separate');
const text_anim = document.querySelectorAll('.js-n-text-anim');
const contact = document.querySelector('.js-n-contact');
const confirm = document.querySelector('.js-n-confirm');

// Smooth scroll
const scrollSpeed = 1000;
const scrollAction = 'easeInOutQuad';

// Fade animation
const fadeAnim = true;
const fadeAnimDelay = 6;

// Classname
const isHide = 'is-n-hide';
const isShow = 'is-n-show';
const jsNobr = 'js-n-nobr';
const nobr = '-nobr';
const fade = '-fade';
const fadeChain = '-fade-chain';
const fadeOut = ['-fade-zoom-out', '-fade-rotate-out'];


// When scrolling
const onScroll = (scrollTop, scrollBottom) => {

    // ToDo

    // Header menu and Pagetop
    if (fv_clientHeight <= scrollTop) {
        header.classList.add('-slim');
        pagetop.classList.remove('-hidden');
    } else {
        header.classList.remove('-slim');
        pagetop.classList.add('-hidden');
    }

    // Separate parallax image
    requestAnimationFrame(() => {
        for (const sep of separate) {
            const separate_img = sep.querySelector('img');
            const offset = sep.getBoundingClientRect().top - innerHeight;
            if (offset < 0) {
                const parallax = (-offset / 6) - (separate_img.clientHeight / 2);
                separate_img.style.transform = 'translateY(' + parallax + 'px)';
            }
        }
    });
}

// When breakpoint changed
const handle = (mq) => {

    if (innerWidth > (break_tb != 0 ? break_tb : break_pc)) {

        // For desktop
        breakpoint = 'pc';

        // ToDo

    } else if (mq.matches) {

        // For tablet
        breakpoint = 'tb';

        // ToDo

    } else {

        // For smartphone
        breakpoint = 'sp';

        // ToDo

    }
}


/* ------------------------
/*   Responsive
/* -------------------------------- */

var breakpoint;

const root = getComputedStyle(document.querySelector(':root'));
const break_sp   = Number(root.getPropertyValue('--breakpoint-sp'));   // For smartphone
const break_tb   = Number(root.getPropertyValue('--breakpoint-tb'));   // For tablet
const break_pc   = Number(root.getPropertyValue('--breakpoint-pc'));   // For desktop
const break_high = Number(root.getPropertyValue('--breakpoint-high')); // For high-resolution
const pixel_size = Boolean(root.getPropertyValue('--enable-pixel-size')); // Enable pixel size emulation on non-smartphone devices
const mediaQuery = window.matchMedia(
    '(min-width: ' + (break_sp + 1) + 'px) and ' +
    '(max-width: ' + (break_tb != 0 ? break_tb : break_pc) + 'px)'
);

// Get scrollbar width (Immediate execution)
const scrollbarWidth = (() => {

    // Create a container with a scrollbar and add it to the BODY tag
    let el = document.createElement('div');
    const offset = el.offsetWidth;
    const client = el.clientWidth;

    el.innerHTML = '&nbsp;';
    Object.assign(el.style, {
        'overflow-y': 'scroll',
        'visibility': 'hidden',
    });
    body.append(el);

    // Measure scrollbar width
    const scrollbarWidth = offset - client;

    // Remove container
    el.remove();

    return scrollbarWidth;
})();

// Assign scrollbar width to CSS variables
document.documentElement.style.setProperty('--sb', scrollbarWidth + 'px');

// Convert LF and space following it into a BR tag (Delete new line at beginning and end)
document.querySelectorAll('.' + jsNobr).forEach((el) => {

    el.innerHTML = el.innerHTML.trim().replace(/\n\x20*/g, '<br class="' + nobr + '">');
});

// Emulate Sass --rv function
const rv = (pixel) => {

    if (pixel_size) {

        // Enable pixel size emulation on non-smartphone devices
        if (innerWidth < break_sp && break_sp != 0)
            pixel = pixel * (innerWidth / break_sp);
        else
            pixel = pixel * 1;

    } else {

        // Adjust pixel size to fit the screen width
        if (innerWidth < break_sp && break_sp != 0)
            pixel = pixel * (innerWidth / break_sp);
        else if (innerWidth < break_tb && break_tb != 0)
            pixel = pixel * (innerWidth / break_tb);
        else if (innerWidth < break_pc && break_pc != 0)
            pixel = pixel * (innerWidth / break_pc);
        else if (innerWidth > break_high && break_high != 0)
            pixel = pixel * (innerWidth / break_high);
    }

    return pixel;
}


/* ------------------------
/*   Hamburger menu
/* -------------------------------- */

document.querySelectorAll('.js-n-menu a, .js-n-menu button').forEach((el) => {

    el.addEventListener('click', (event) => {

        // Close menu when anchor tag or button tag is clicked
        document.querySelectorAll('#js-n-opener').forEach((input) => {

            input.checked = false;
        });
    });
});


/* ------------------------
/*   Required checkbox
/* -------------------------------- */

document.querySelectorAll('.js-n-check').forEach((el) => {

    el.addEventListener('click', (event) => required_checkbox());
    function required_checkbox() {

        // If at least one is checked, remove "required"
        var checkbox = document.querySelectorAll('[name="' + el.name + '"]');
        for (var i = 0; i < checkbox.length; i++) {

            checkbox[i].setAttribute('required', 'required');
            if (checkbox[i].checked) {

                checkbox.forEach((input) => { input.removeAttribute('required') });
                return;
            }
        }
    }
    required_checkbox();
});


/* ------------------------
/*   Modal control
/* -------------------------------- */

document.querySelectorAll('.js-n-modal').forEach((el) => {

    var content = el.parentNode.nextElementSibling.querySelector('.js-n-modal-content');
    var window  = el.parentNode.nextElementSibling;

    el.addEventListener('click', (event) => {

        // When show dialog
        if (el.checked) {

            // Scroll back
            content.scroll(0, 0);

            // Filling the holes
            window.parentNode.after(window.cloneNode(true));

        // When hide dialog
        } else {

            // Digging the holes
            window.parentNode.nextElementSibling.remove();
        }
    });
    el.checked = false;
});


/* ------------------------
/*   Jump link
/* -------------------------------- */

const smoothScroll = (move, time, anim) => {

    let scrollEnd = move === null ? 0 : move;

    // Avoid going beyond the bottom of the document
    const documentEnd = document.documentElement.scrollHeight - innerHeight;
    if (scrollEnd > documentEnd) scrollEnd = documentEnd;

    const scrollTop = window.scrollY || document.documentElement.scrollTop;
    const start = new Date();
    const intervalID = setInterval(() => {

        let elapsed = new Date() - start;
        if (elapsed > time) {

            clearInterval(intervalID);
            elapsed = time;
        }

        let ease = 0;
        let x = (elapsed / time);

        // Reference - https://easings.net/ja
        switch (anim) {
            case 'easeInSine':
                ease = 1 - Math.cos((x  * Math.PI) / 2);
                break;
            case 'easeOutSine':
                ease = Math.sin((x * Math.PI) / 2);
                break;
            case 'easeInOutSine':
                ease = -(Math.cos(Math.PI * x) - 1) / 2;
                break;
            case 'easeInQuad':
                ease = x * x;
                break;
            case 'easeOutQuad':
                ease = 1 - (1 - x) * (1 - x);
                break;
            case 'easeInOutQuad':
                ease = x < 0.5 ? 2 * x * x : 1 - Math.pow(-2 * x + 2, 2) / 2;
                break;
            case 'easeInCubic':
                ease = x * x * x;
                break;
            case 'easeOutCubic':
                ease = 1 - Math.pow(1 - x, 3);
                break;
            case 'easeInOutCubic':
                ease = x < 0.5 ? 4 * x * x * x : 1 - Math.pow(-2 * x + 2, 3) / 2;
                break;
            case 'easeInQuart':
                ease = x * x * x * x;
                break;
            case 'easeOutQuart':
                ease = 1 - Math.pow(1 - x, 4);
                break;
            case 'easeInOutQuart':
                ease = x < 0.5 ? 8 * x * x * x * x : 1 - Math.pow(-2 * x + 2, 4) / 2;
                break;
            case 'easeInQuint':
                ease = x * x * x * x * x;
                break;
            case 'easeOutQuint':
                ease = 1 - Math.pow(1 - x, 5);
                break;
            case 'easeInOutQuint':
                ease = x < 0.5 ? 16 * x * x * x * x * x : 1 - Math.pow(-2 * x + 2, 5) / 2;
                break;
            case 'easeInExpo':
                ease = x === 0 ? 0 : Math.pow(2, 10 * x - 10);
                break;
            case 'easeOutExpo':
                ease = x === 1 ? 1 : 1 - Math.pow(2, -10 * x);
                break;
            case 'easeInOutExpo':
                ease = x === 0 ? 0 :
                x === 1 ? 1 : x < 0.5 ? Math.pow(2, 20 * x - 10) / 2 :
                (2 - Math.pow(2, -20 * x + 10)) / 2;
                break;
            default:
                ease = 1;
        }

        if (move === null) scrollEnd = -scrollTop;
        window.scrollTo(0, scrollEnd * ease + scrollTop);
    }, 5);
}

// Get the absolute position of the target elements
const targetAbsolutePos = (el) => {

    const bounds = el.getBoundingClientRect();
    const html = document.documentElement;
    const body = document.body;

    return {
        x: bounds.left + (body.scrollLeft || html.scrollLeft) - html.clientLeft,
        y: bounds.top + (body.scrollTop || html.scrollTop) - html.clientTop
    };
}

// When clicking on a link containing "#"
document.querySelectorAll('a[href*="#"]').forEach((el) => {

    el.addEventListener('click', (event) => {

        const href = el.getAttribute('href');
        const base = href.split('#');

        const jump_id = '#' + base[1];

        // If not containing "#"
        if (base[0] != '' && !document.querySelector(jump_id)) {

            // Go to link
            return true;
        }

        // Execute smooth scroll
        event.preventDefault();
        smoothScroll(
            jump_id == '#' ? null : document.querySelector(jump_id).getBoundingClientRect().top,
            scrollSpeed, scrollAction
        );
    });
});

// When clicking on a button containing "data-href"
document.querySelectorAll('button').forEach((el) => {

    el.addEventListener('click', (event) => {

        if (!el.dataset.href) return;

        const href = el.dataset.href;
        const base = href.split('#');

        const jump_id = '#' + base[1];

        // If containing "#"
        if (base[0] == '' && base.length > 1) {

            // Execute smooth scroll
            event.preventDefault();
            smoothScroll(
                jump_id == '#' ? null : document.querySelector(jump_id).getBoundingClientRect().top,
                scrollSpeed, scrollAction
            );
            return;
        }

        // Go to link
        location.href = href;
    });
});

// Correct jump position after display
setTimeout(() => {

    if (location.hash != '') {

        const target = document.querySelector(location.hash);
        if (target) window.scrollTo({ top: targetAbsolutePos(target).y });
    }
}, 500);


/* ------------------------
/*   Fade animation
/* -------------------------------- */

// If not run the animation
if (!fadeAnim) {

    // Show all
    document.querySelectorAll('.' + isHide).forEach((el) => {

        // Remove classes related to fade class
        let reg = new RegExp('\b' + fade + '\S+', 'g');
        (el.className.match(reg) || []).forEach((className) => {

            el.classList.remove(className);
        });

        // Mark as displayed
        el.classList.remove(isHide);
        el.classList.add(isShow);
    });
}

const fadeAnimation = (scrollBottom) => {

    // Adjust the animation start position
    const triggerMargin = innerHeight / fadeAnimDelay;

    document.querySelectorAll('.' + isHide).forEach((el) => {

        // Get the absolute position of the target
        const position = targetAbsolutePos(el);

        // Animation does not start for elements set to invisible
        if (position.y == 0) return;

        // For movements that specify "transform: scale(2);",
        // set animation start position further forward
        let ratio = 1;
        if (el.classList.contains(fadeOut[0]) ||
            el.classList.contains(fadeOut[1])) ratio = 2;

        // Do not animate until the scroll reaches
        if (scrollBottom <= position.y + triggerMargin * ratio) return;

        // When specified animation chain (-fade-chainXX)
        if (!el.classList.contains(isShow) &&
            el.className.indexOf(fadeChain) > -1) {

            // Search for animation chains with the same name
            for (let i = 0; i < el.classList.length; i++) {

                if (el.classList[i].indexOf(fadeChain) < 0) continue;

                // Add show class to elements with animation chains of the same name
                document.querySelectorAll('.' + el.classList[i]).forEach((chain) => {

                    // Mark as displayed
                    delay_ms = chain.dataset.delay ? chain.dataset.delay : 1000;
                    chain.classList.add(isShow);
                    setTimeout(() => {
                        chain.classList.remove(isHide);
                    }, delay_ms);
                });
            }

        } else if (!el.classList.contains(isShow)) {

            // Mark as displayed
            delay_ms = el.dataset.delay ? el.dataset.delay : 1000;
            el.classList.add(isShow);
            setTimeout(() => {
                el.classList.remove(isHide);
            }, delay_ms);
        }
    });
}


/* ------------------------
/*   Event
/* -------------------------------- */

// When resizing
window.addEventListener('resize', () => {

    innerWidth = window.innerWidth;
    innerHeight = window.innerHeight;

    // ToDo

    fv_clientHeight = fv.clientHeight;
});


// When scrolling
window.addEventListener('scroll', () => {

    // Coordinates at the top or bottom of the screen
    const scrollTop    = window.scrollY;
    const scrollBottom = window.scrollY + innerHeight;

    // Fade animation
    fadeAnimation(scrollBottom);

    // Scroll event
    onScroll(scrollTop, scrollBottom);
});

// When breakpoint changes
mediaQuery.addEventListener('change', handle);


/* ------------------------
/*   CSS hack
/* -------------------------------- */

// Get browser information
const userAgent = window.navigator.userAgent.toLowerCase();

// Compatible with different browsers
if (userAgent.indexOf('msie') != -1 || userAgent.indexOf('trident') != -1)
    body.classList.add('is-n-browser-ie');
else if (userAgent.indexOf('edg') != -1)
    body.classList.add('is-n-browser-edge');
else if (userAgent.indexOf('chrome') != -1)
    body.classList.add('is-n-browser-chrome');
else if (userAgent.indexOf('safari') != -1)
    body.classList.add('is-n-browser-safari');
else if (userAgent.indexOf('firefox') != -1)
    body.classList.add('is-n-browser-firefox');

// Compatible with different OS
if (userAgent.indexOf('windows nt') != -1)
    body.classList.add('is-n-platform-windows');
else if (userAgent.indexOf('android') != -1)
    body.classList.add('is-n-platform-android');
else if (userAgent.indexOf('iphone') != -1 || userAgent.indexOf('ipad') != -1)
    body.classList.add('is-n-platform-ios');
else if (userAgent.indexOf('mac os') != -1)
    body.classList.add('is-n-platform-macintosh');


/* ------------------------
/*   Outer
/* -------------------------------- */

const outerWidth = (el) => {

    const computedStyle = window.getComputedStyle(el);
    const clientWidth = el.clientWidth;
    const {marginLeft, marginRight} = computedStyle;
    const ml = Number(marginLeft.replace('px', ''));
    const mr = Number(marginRight.replace('px', ''));

    return clientWidth + ml + mr;
}

const outerHeight = (el) => {

    const computedStyle = window.getComputedStyle(el);
    const clientHeight = el.clientHeight;
    const {marginTop, marginBottom} = computedStyle;
    const mt = Number(marginTop.replace('px', ''));
    const mb = Number(marginBottom.replace('px', ''));

    return clientHeight + mt + mb;
}


/* ------------------------
/*   After content loaded
/* -------------------------------- */

document.addEventListener('DOMContentLoaded', () => {

    // Fire resize and scroll event
    setTimeout(() => {
        window.dispatchEvent(new Event('resize'));
        window.dispatchEvent(new Event('scroll'));

        // Current breakpoint task
        // handle(mediaQuery);
    }, 100);

    document.body.classList.add('-loaded');

    // ToDo

    // Text animation
    for (const text of text_anim) {
        const org_text = text.innerHTML.split('');

        let new_text = '';
        for (const i in org_text) {
            new_text += `<span style="--char-index: ${i}">${org_text[i]}</span>`;
        }
        text.innerHTML = new_text;
    }

    // Contact form
    if (contact) {
        const current = '--current';
        const disable = '-disable';
        const error   = '-error';

        // Validate email address
        const regex = RegExp("^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$");

        // Get query parameter
        const currentUrl = window.location.href;
        const searchParams = new URLSearchParams(new URL(currentUrl).search);
        const entry = searchParams.get('entry');
        const career = searchParams.get('career');

        // Get form elements
        const contact_confirm = document.querySelector('.js-n-contact-confirm');
        const contact_organization = document.querySelector('.js-n-contact-organization');
        const contact_require = document.querySelectorAll('.js-n-contact-require');
        const contact_select = document.querySelector('.js-n-contact-select select');
        const id_contact = document.querySelector('#contact');
        const id_email = document.querySelector('#email');

        if (entry != null) {
            contact_select.selectedIndex = 1;
            contact_organization.classList.add(disable);
        }
        if (career != null) {
            contact_select.selectedIndex = 2;
            contact_organization.classList.add(disable);
        }

        // "Apply" option selected
        contact_select.addEventListener('change', () => {
            if (contact_select.selectedIndex == 1 || contact_select.selectedIndex == 2) {
                contact_organization.classList.add(disable);
            } else {
                contact_organization.classList.remove(disable);
            }
        });

        // Input check
        for (const require of contact_require) {
            require.addEventListener('change', () => {
                require.classList.remove(error + current);

                const input = require.querySelector('input');
                switch(input.getAttribute('type')) {
                    case 'text':
                        if (input.value != '') require.classList.remove(error);
                        break;
                    case 'checkbox':
                        if (input.checked) require.classList.remove(error);
                        break;
                }

                // Reset current error
                const targets = contact.querySelectorAll('.' + error + current);
                for (const target of targets) {
                    target.classList.remove(error + current);
                    target.classList.add(error);
                }

                const check = contact.querySelectorAll('.' + error);
                if (check.length > 0) {
                    check[0].classList.remove(error);
                    check[0].classList.add(error + current);
                }
            });
        }

        // Confirm check
        contact.addEventListener('submit', (e) => {
            for (const require of contact_require) {
                require.classList.remove(error + current);
                require.classList.remove(error);

                const input = require.querySelector('input');
                switch(input.getAttribute('type')) {
                    case 'text':
                        if (input.value == '') require.classList.add(error);
                        break;
                    case 'checkbox':
                        if (!input.checked) require.classList.add(error);
                        break;
                }
            }

            if (!regex.test(id_email.value)) {
                id_email.closest('.js-n-contact-require').classList.add(error);
            }

            const check = contact.querySelectorAll('.' + error);
            if (check.length > 0) {
                check[0].classList.remove(error);
                check[0].classList.add(error + current);

                // Execute smooth scroll
                smoothScroll(
                    id_contact.getBoundingClientRect().top,
                    scrollSpeed, scrollAction
                );
                e.preventDefault();
            }
        });
    }
});
