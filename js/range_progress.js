$(document).ready(function () {
    let range = $('.calc_range');
    let value = range.val();
    let max = range.attr('max');
    let min = range.attr('min');
    let progress = (value - min)/(max - min) * 100;
    let value_window = $('.range_value');

    value_window.html(value);
    value_window.css({
        left: 4.2
    });
    range.on('input',function (){
        value = range.val();
        progress = (value - min)/(max - min) * 100;
        range.css({
            background: 'linear-gradient(90deg, rgb(12, 125, 255) 0%, rgb(12, 125, 255) ' + progress
                + '%, rgb(232, 242, 254)' + progress + '%, rgb(232, 242, 254) 100%)'
        })
        value_window.html(value);
        if ((value == 100) || (value < 10)) {
            if (value == 100) {
                progress -= 1;
            } else {
                progress += 1;
            }
        }
        value_window.css({
            left: progress * 4.2
        });
        console.log(value);
        console.log(progress);
    });
});