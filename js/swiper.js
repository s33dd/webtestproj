let service_text_slider;
let service_img_slider;
let reviews;


//Изменение кол-ва слайдов в зависимости от ширины экрана
const firstBreakpoint = window.matchMedia('(max-width:1024px)');
const secondBreakpoint = window.matchMedia('(max-width:760px)');
const thirdBreakpoint = window.matchMedia('(max-width:360px)');

function Checker () {
    let slides = 3;
    let slidesSpace = 111;
    if (firstBreakpoint.matches === true) {
        slides = 2;
        slidesSpace = 45;
        if (thirdBreakpoint.matches === true) {
            slides = 1;
        }
    }
    if (secondBreakpoint.matches === true) {
        try {
            reviews.destroy();
        }
        catch(e){}
        reviews = new Swiper('.reviews__content-reviewbox_mobile', {
            pagination: {
                el: '.reviewbox-pagination_mobile',
                clickable: true
            },
        });
    }
    else {
        try {
            reviews.destroy();
        }
        catch(e){}
        reviews = new Swiper('.reviews__content-reviewbox', {
            pagination: {
                el: '.reviewbox-pagination',
                clickable: true
            },
        });
    }
    try {
        service_img_slider.destroy();
        service_text_slider.destroy();
    }
    catch (e) {}
    service_img_slider = new Swiper('.photo-slider', {
        slidesPerView: slides,
        spaceBetween: slidesSpace,
        allowTouchMove: false,
    });
    service_text_slider = new Swiper('.textbox__content', {
        allowTouchMove: false,
        navigation: {
            nextEl: '.nextElement',
            prevEl: '.prevElement'
        },
        pagination: {
            el: '.pagination',
            clickable: true
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
    });
    service_img_slider.controller.control = service_text_slider;
    service_text_slider.controller.control = service_img_slider;
}
firstBreakpoint.addListener(Checker);
secondBreakpoint.addListener(Checker)
thirdBreakpoint.addListener(Checker);
Checker();



