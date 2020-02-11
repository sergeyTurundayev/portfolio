$( document ).ready(function() {


    $('.mobile-button, .main-nav a').click(function(){
        
        $('.main-nav').fadeToggle();
        $('.mobile-button').toggleClass('active');
    });

    $(".main-nav a, .back").click(function(){

        var selected = $(this).attr('href');

        $.scrollTo( selected, 500 );

        return false;
    });

    $('form').submit( function(){

        var answerFun = function(data){
            console.log( data );
        if( data == 'true' ){
            $('.answer').fadeIn().text( 'Your message has been sent successfully' );
        } else {
            $('.answer').fadeIn().text( 'Your message hasn\'t been sent' );
        }
        $.scrollTo( $('.answer'), 500, { axis:'xy' } );
    };

        var name = $('input[name="name"]');
        var email = $('input[name="email"]');
        var subject = $('input[name="subject"]');
        var message = $('textarea');


        $('input[type="text"], textarea').each(function(){
            if( !$(this).val() ){
                $(this).addClass('text-error');
            } else {
                $(this).removeClass('text-error');
            }
        });

        if( $('.text-error').length ){
            return false;
        } else {
            $.ajax ({
                url: '../sends/form.php',
                type: 'POST',
                data: ({name: name.val(), email: email.val(), subject: subject.val(), message: message.val()}),
                dataType: 'html',
                success: answerFun,
            });
        }

        return false;
    });

});