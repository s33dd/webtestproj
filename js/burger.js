$(document).ready(function () {
    $('.menu__burger').click(function (e) {
        $('.burger').toggleClass('active');
        $('.menu__mobile-links').toggleClass('menu__mobile-links_active');
        //$('body').toggleClass('lock')
    });

    $('.dropdown-toggler').click(function (e) {
       $('.menu__dropdown-mobile').toggleClass('menu__dropdown-mobile_active');
    });
});