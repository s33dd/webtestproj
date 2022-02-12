$(document).ready(function () {
    let range = $('.calc_range');
    let value = range.val();
    let max = range.attr('max');
    let min = range.attr('min');
    let progress = (value - min)/(max - min) * 100;
    let value_window = $('.range_value');
    let rangeWidth = $('.rulerbox').width();
    let thumbWidth = 24;

    value_window.html(value);
    value_window.css({
        left: 4.2
    });
    range.on('input',function (){
        rangeWidth = $('.rulerbox').width() - thumbWidth;
        let multiplier = rangeWidth/100;
        value = range.val();
        progress = (value - min)/(max - min) * 100;
        range.css({
            background: 'linear-gradient(90deg, rgb(12, 125, 255) 0%, rgb(12, 125, 255) ' + progress
                + '%, rgb(232, 242, 254)' + progress + '%, rgb(232, 242, 254) 100%)'
        })
        value_window.html(value);
        if ((value === 100) || (value < 10)) {
            if (value === 100) {
                progress -= 1;
            } else {
                progress += 1;
            }
        }

        value_window.css({
            left: progress * multiplier
        });
    });

    let ticks = document.createElement('div')
    let tickRange = 10;
    let left;
    $(ticks).addClass('ticks');
    $(ticks).appendTo($('.rulerbox'));
    for (let i = 0; i <= max; i += tickRange){
        left = ((i - min)/(max-min)) * (rangeWidth - thumbWidth);
        //left = Math.round(left);
        if ((i == min) || (i == max)){
            let added = $('<span/>').addClass('large');
            added.appendTo($(ticks));
            added.html(i);
            added.css({left: left});
        }
        else {
            if ((i % 10 === 0) && (i / 10 % 2 === 0)){
                let added = $('<span/>');
                added.appendTo($(ticks));
                added.html(i);
                left += thumbWidth/4;
                added.css({left: left});
            }
            else {
                let added = $('<span/>').addClass('tick');
                added.appendTo($(ticks));
                left += thumbWidth/2;
                added.css({left: left});
            }
        }
    }
});