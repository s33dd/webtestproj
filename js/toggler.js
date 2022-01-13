$(document).ready(function () {
    $('.company-info__button').click( function (e) {
        $('.active').removeClass('active');
        $(this).toggleClass('active');
    })
})