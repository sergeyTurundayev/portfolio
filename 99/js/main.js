$(document).ready(function () {
	
	var slides = $('.slider li');
	var n = 0;

	$(slides[n]).addClass('active');

	$('button').on('click', function(){
		var way = $(this).attr('class');

		$('.active').removeClass('active');

		if( way == 'next'){
			n++;
			if( n >= $('.slider li').length ){
				n = 0;
			}
		} else{
			n--;
			if( n < 0 ){
				n = $('.slider li').length - 1;
			}
		}

		$(slides[n]).addClass('active');
	});
});