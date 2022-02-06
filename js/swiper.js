let service_text_slider = new Swiper('.textbox__content', {
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

let service_img_slider = new Swiper('.photo-slider', {
    slidesPerView: 3,
    spaceBetween: 111,
});

service_text_slider.controller.control = service_img_slider;
service_img_slider.controller.control = service_text_slider;

new Swiper('.reviews__content-reviewbox', {
    pagination: {
        el: '.reviewbox-pagination',
        clickable: true
    },
});
