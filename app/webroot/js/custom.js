jQuery(document).ready(function($) {
	$('.hamburger').click(function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.inner_navigation ul').slideToggle();
		$(this).toggleClass('is-active');
	});
});
