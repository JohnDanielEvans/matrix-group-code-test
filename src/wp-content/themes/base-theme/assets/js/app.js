// Require specific Bootstrap component JS.
import 'bootstrap/js/src/toast'
import 'bootstrap/js/src/carousel'
import 'bootstrap/js/src/dropdown'

const setupJS = function() {
    // DOM is ready, add JS.
    console.log('DOM ready');

};

if (document.readyState === "complete" || (document.readyState !== "loading" && !document.documentElement.doScroll)) {
    setupJS();
} else {
    document.addEventListener("DOMContentLoaded", setupJS);
}