/**
 * Hide/show search input in header
 */

(function($) {
	var searchContainer = $('.search-reveal'),
		searchInput = $('.search-reveal .search-field'),
		userLogin = $('.secondary-navigation .user-login');

	// turn off autocomplete
	searchInput.attr('autocomplete', 'off');

	// listen for click and touch events
	searchInput.click(function() {
		// reveal search input
		$(searchContainer).toggleClass('revealed');
		// make space when search open
		userLogin.toggle();
		// focus on search input
		$(searchInput).focus();
	});
	searchContainer.click(function() {
		// reveal search input
		$(searchContainer).toggleClass('revealed');
	});
})(jQuery);
