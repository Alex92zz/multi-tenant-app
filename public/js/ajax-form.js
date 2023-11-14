$(function () {
    $('form').bind('submit', function () {
        $.ajax({
            type: 'post',
            url: 'sendemail.php',
            data: $('form').serialize(),
            success: function () {
                $( "#dialog" ).dialog();
                $("form")[0].reset();
            }
        });
        return false;
    });
});



