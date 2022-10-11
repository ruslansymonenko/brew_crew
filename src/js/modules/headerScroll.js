export function headerScroll () {
    window.onscroll = function showHeader() {
        let pageHeader = document.querySelector('.header');

        if (window.pageYOffset > 100) {
            pageHeader.classList.add('header_fixed');
        } else if (window.pageYOffset < 80) {
            pageHeader.classList.remove('header_fixed');
        }
    }
}