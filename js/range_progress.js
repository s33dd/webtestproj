$(document).ready(function () {
    $('.calc_range').on('input',function (){
        let progress = (this.value - this.min)/(this.max - this.min) * 100;
        $('.calc_range').css({
            background: 'linear-gradient(90deg, rgb(12, 125, 255) 0%, rgb(12, 125, 255) ' + progress
                + '%, rgb(232, 242, 254)' + progress + '%, rgb(232, 242, 254) 100%)'
        })
    });
});