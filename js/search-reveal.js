/**
 * Hide/show search input in header
 */
 
(function($) {
	var searchContainer = $('.search-reveal'),
	searchInput = $('.search-reveal .search-field');
	
	// turn off autocomplete
	searchInput.attr('autocomplete', 'off');
	
	// listen for click and touch events
	searchContainer.on('touchstart click', function(){
		// reveal search input
		$(searchContainer).addClass('revealed');
		// focus on search input
		$(searchInput).focus();
	});

})(jQuery);