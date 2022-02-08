$(document).ready(function () {
    $('#contact-form').submit(function (){
        $.post(
            '/components/mail.php',
            $('#contact-form').serialize(),
            function (data){
                $('.form-answer').html(data);
            }
        );
        return false;
    });
});