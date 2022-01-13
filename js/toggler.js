$(document).ready(function () {
    $('.company-info__button').click( function (e) {
        let buttons = $('.company-info__button');
        let infos = $('.company-info__textbox');
        for (let i = 0; i < buttons.length; i++){
            $(buttons[i]).removeClass('active');
            $(infos[i]).removeClass('active');
            if (this.innerHTML == buttons[i].innerHTML) {
                let clicked = i;
                $(buttons[clicked]).addClass('active');
                $(infos[clicked]).addClass('active');
            }
        }
    })
})