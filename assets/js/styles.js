$(document).ready(function(){
	var altura = $('.menu-flotante').offset().top;
	$(window).on('scroll', function(){
		if ($(window).scrollTop() > altura) 
			$('.menu-flotante').addClass('nav-flotante');		
		else
			$('.menu-flotante').removeClass('nav-flotante');
	});
});
