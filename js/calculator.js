$(document).ready( function () {
    //Изменение переменных для вычисления
    let forms = $('.org-form button');
    let taxes = $('.tax-sys button');
    let employees = $('.employees button');

    forms.click(function (e){
        let clicked = 0;
        for (let i = 0; i < forms.length; i++) {
            if (this == forms[i]){
                clicked = i;
            }
        }
        for (let i = 0; i < forms.length; i++) {
            if (i == clicked) {
                $(forms[i]).addClass('active');
            }
            else {
                $(forms[i]).removeClass('active');
            }
        }
    });

    taxes.click(function (e){
        let clicked = 0;
        for (let i = 0; i < taxes.length; i++) {
            if (this == taxes[i]){
                clicked = i;
            }
        }
        for (let i = 0; i < taxes.length; i++) {
            if (i == clicked) {
                $(taxes[i]).addClass('active');
            }
            else {
                $(taxes[i]).removeClass('active');
            }
        }
    });

    employees.click(function (e){
        let clicked = 0;
        for (let i = 0; i < employees.length; i++) {
            if (this == employees[i]){
                clicked = i;
            }
        }
        for (let i = 0; i < employees.length; i++) {
            if (i == clicked) {
                $(employees[i]).addClass('active');
            }
            else {
                $(employees[i]).removeClass('active');
            }
        }
    });

    //Вычисления
    let answer = 2068;
    let answerField = $('.answer');
    answerField.html('от ' + answer);

    let chosenForm = $('.org-form button.active');
    let chosenTax = $('.tax-sys button.active');
    let chosenEmps = $('.employees button.active');
    let chosenOps = $('.calc_range').val();

    let vars = $('.variables button, .variables input');

    vars.on('click input',function (e){
        answer = 0;
        chosenForm = $('.org-form button.active');
        chosenTax = $('.tax-sys button.active');
        chosenEmps = $('.employees button.active');
        chosenOps = $('.calc_range').val();

        let taxCoef = 1;
        let empsCoef = 1;

        if(chosenForm.hasClass('individual')) {
            answer = 2068;
            if (!chosenTax.hasClass('simple')){
                answer += 400;
                taxCoef = 1.3;
            }
            if (chosenEmps.hasClass('less-three')){
                empsCoef = 3.2;
            } else {
                if (chosenEmps.hasClass('three-more')){
                    empsCoef = 3.8;
                }
            }
        } else {
            if (chosenForm.hasClass('ltd')) {
                answer = 6700;
                if(!chosenTax.hasClass('simple')){
                    if(chosenTax.hasClass('income')){
                        taxCoef = 1.3;
                        answer += 980;
                    }
                    else {
                        answer += 3000;
                        taxCoef = 1.5;
                    }
                }
                if (chosenEmps.hasClass('less-three')){
                    empsCoef = 1.2;
                } else {
                    if (chosenEmps.hasClass('three-more')){
                        empsCoef = 1.8;
                    }
                }
            }
        }

        answer = (empsCoef * answer) + (taxCoef * Number(chosenOps) * 150);
        answer = Math.round(answer);

        answerField.html('от ' + answer);
    });
});