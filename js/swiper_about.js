let service_img_slider;

const firstBreakpoint = window.matchMedia('(max-width:1024px)');
const secondBreakpoint = window.matchMedia('(max-width:360px)');

function Checker () {
    let slides = 3;
    let slidesSpace = 111;
    if (firstBreakpoint.matches === true) {
        slides = 2;
        slidesSpace = 45;
        if (secondBreakpoint.matches === true) {
            slides = 1;
        }
    }
    try {
        service_img_slider.destroy();
    }
    catch (e) {}
    service_img_slider = new Swiper('.photo-slider', {
        slidesPerView: slides,
        spaceBetween: slidesSpace,
        allowTouchMove: false,
        navigation: {
            nextEl: '.nextElement',
            prevEl: '.prevElement'
        },
        pagination: {
            el: '.pagination',
            clickable: true
        },
    });
}
firstBreakpoint.addListener(Checker);
secondBreakpoint.addListener(Checker);
Checker();