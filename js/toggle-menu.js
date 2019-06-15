/**
 * Toggle menu for small screens
 */
 
(function($) {
	const menuToggle = $('.nav-toggle'),
		menuOpened = $('#site-navigation, .nav-toggle');
	
	// listen for click and touch events
	menuToggle.on('touchstart click', function(){
		// reveal search input
		$(menuOpened).toggleClass('opened');
	});

})(jQuery);