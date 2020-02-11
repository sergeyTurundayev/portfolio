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

});