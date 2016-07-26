$(function(){
    var sendForm = $('.send-form');
    var modal = $('#myModal');
    var btnSend = $('#btn-send');

    sendForm.submit(function(){
        var data = $(this).serialize();
        $.ajax({
            url: 'mailer.php',
            type: 'post',
            data: data,
            beforeSend: function(){
                btnSend.attr('disabled', true);
            },
            success:function(data){
                modal.modal({
                    keyboard: false
                });
            },
            error: function(e){
                console.log(e);
            },
            complete: function(){
                btnSend.attr('disabled', false);
                sendForm[0].reset();
            }
        });
        return false;
    });
});