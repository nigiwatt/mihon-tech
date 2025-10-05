
/* ------------------------
/*   jQuery wrapper
/* -------------------------------- */

const vendor = './assets/vendor/';
const js = 'jquery-3.7.1.min.js';

// Load JS
var script = document.createElement('script');
script.async = true;
script.defer = true;
script.src = vendor + js;
document.head.appendChild(script);

// Run after loading JS
if (script.addEventListener) {
    script.onload = function() {

        // ToDo

    }
}
