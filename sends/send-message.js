    $(document).ready(function(){
        $('.btn-submit').click(function(e){
            e.preventDefault();

            var error = false;
            var name = $('#name').val();
            var email = $('#email').val();
            var subject = $('#subject').val();
            var message = $('#message').val();
            
            if(name.length == 0){
                var error = true;
                $('#name').addClass('text-error');
            }else{
                $('#name').removeClass('text-error');
            }
            if(email.length == 0 || email.indexOf('@') == '-1'){
                var error = true;
                $('#email').addClass('text-error');
            }else{
                $('#email').removeClass('text-error');
            }
            if(subject.length == 0){
                var error = true;
                $('#subject').addClass('text-error');
            }else{
                $('#subject').removeClass('text-error');
            }
            if(message.length == 0){
                var error = true;
                $('#message').addClass('text-error');
            }else{
                $('#message').removeClass('text-error');
            }
            
             if(error == false){
                $('#send_message').attr({'disabled' : 'true', 'value' : 'Отправить' });
                
                 $.post("sends/send_email.php", $("#contact_form").serialize(),function(result){
                     if(result == 'sent'){
                          $('#cf_submit_p').remove();
                          $('#mail_success').fadeIn(500);
                          $('#send_message').addClass('hidden');
                    }else{
                         $('#mail_fail').fadeIn(500);
                        $('#send_message').removeAttr('disabled').attr('value', 'Отправить');
                    }
                });
            }
        });    
    });