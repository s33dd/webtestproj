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
    });

    $('.step').click( function (e) {
        let steps = $('.step');
        let clicked = 0;
        for (let i = 0; i < steps.length; i++){
            if (this == steps[i]) {
                clicked = i;
            }
        }
        for (let i = 0; i < steps.length; i++) {
            if (i <= clicked) {
                $(steps[i]).addClass('step_active');
            }
            else {
                $(steps[i]).removeClass('step_active');
            }
        }
    });

    $('.question').click( function (e) {
        let questions = $('.question');
        let clicked = 0;
        for (let i = 0; i < questions.length; i++) {
            if (this == questions[i]){
                clicked = i;
            }
        }
        $(this).toggleClass('question_active');
        let answer = $('.question__answer').eq(clicked);
        answer.slideToggle(500);
    });

    $("input[name='agree']").on('change', function () {

        let submit = $('#consult-send');
        if(this.checked){
            submit.prop('disabled', false);
        }
        else {
            submit.prop('disabled', true);
        }
    });
});