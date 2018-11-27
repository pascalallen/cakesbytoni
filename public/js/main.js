$(document).ready(function(){
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
		if ($(window).scrollTop() > 280) {
			$('.navbarScroll').addClass('fixed-top');
		}
		if ($(window).scrollTop() < 280) {
			$('.navbarScroll').removeClass('fixed-top');
		}
	});

	window.sr = ScrollReveal({ reset: true, duration: 1000 });
	sr.reveal('#cake', { origin: 'left', rotate: { z: 180 }, distance: '20vw', scale: 0.1 });
	sr.reveal('#cookie', { origin: 'bottom', rotate: { z: -180 }, distance: '20vw', scale: 0.1 });
	sr.reveal('#cupcake', { origin: 'right', rotate: { z: -180 }, distance: '20vw', scale: 0.1 });

	sr.reveal('#vegan', { origin: 'right', rotate: { z: 180 }, distance: '20vw', scale: 0.1 });
	sr.reveal('#gmo', { origin: 'left', rotate: { z: -180 }, distance: '20vw', scale: 0.1 });
	sr.reveal('#gluten', { origin: 'right', rotate: { z: 180 }, distance: '20vw', scale: 0.1 });
	sr.reveal('#organic', { origin: 'left', rotate: { z: -180 }, distance: '20vw', scale: 0.1 });

	$('#card').on('click',function() {
		$(this).closest('.card').fadeOut();
	});

	$('#order-form').hide(); // hidden form on page load

	$(document).on('click', '#edit', function (event) {
		$('#order-list').hide();
		$('#order-form').show();
	});

	var confettiSettings = { target: 'my-canvas' };
	var confetti = new ConfettiGenerator(confettiSettings);
	confetti.render();
});