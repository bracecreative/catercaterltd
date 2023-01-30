jQuery(document).ready(function($) {
	var $hamburger = $('.hamburger');

	$hamburger.on('click', function(e) {
		$hamburger.toggleClass('is-active');

		// Do something else, like open/close menu
	});

	$('img')
		.removeAttr('width')
		.removeAttr('height');

	$('.brace-slick').slick({
		slidesToShow: 5,
		slidesToScroll: 5,
		infinite: true,
		autoplay: true,
		arrows: false,
		speed: 0,
		draggable: false,
		touchMove: false,
		autoplaySpeed: 5000,
		cssEase: 'linear',
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				},
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});

	$('.brace-slick-testimonial').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
		autoplay: true,
		arrows: true,
	});

	$(window).scroll(function() {
		var scroll = $(window).scrollTop();

		//>=, not <=
		if (scroll >= 200) {
			$('header').addClass('slide-up');
		} else {
			$('header').removeClass('slide-up');
		}
	});
});

if (document.querySelector('.buttons-list')) {
	var buttonList = document.querySelector('.buttons-list');
	var parentButton = document.querySelector('.buttons-list > li');

	parentButton.addEventListener('click', function(e) {
		e.preventDefault();
		buttonList.classList.toggle('show');
	});
}
