$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});

$(window).scroll(function () {
	//if you hard code, then use console
	//.log to determine when you want the 
	//nav bar to stick.  
	console.log($(window).scrollTop())
	if ($(window).scrollTop() > 700) {
		$('.navbar').addClass('fixed-top');
	}
	if ($(window).scrollTop() < 700) {
		$('.navbar').removeClass('fixed-top');
	}
});