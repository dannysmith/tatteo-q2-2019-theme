(function($) {
	//Shows search form on header icon click
	$('.search-button').on('touchstart click', function() {
		$('.header-search-form-wrapper').toggle();
	});

	// Event handler to hide dropdown boxes on another input focus
	$('#location, #dates, #accomodation').on('focus', function() {
		$('.taxonomies-dropdown').hide();
		$('.taxonomies-button').removeClass('button-focused');
		//<-- Add line to hide calendar dropdowns here -->
	});

	// Attaches the datepicker widget to inputs with the datepicker classs
	$('#date_from , #date_to').datepicker({ dateFormat: 'dd/mm/yy' });

	//Event handled for every taxonomy button
	$('.taxonomies-button').on('touchstart click', function(event) {
		event.preventDefault();

		//Toggles the taxonomy dropdown for the clicked button, while hiding the other forms
		let taxonomyForms = document.querySelectorAll('.taxonomy-form');
		taxonomyForms.forEach(function(element) {
			if (element.contains(event.target)) {
				$(event.target).toggleClass('button-focused');
				$(element)
					.find('.taxonomies-dropdown')
					.toggle();
			} else {
				$(element)
					.find('.taxonomies-dropdown')
					.hide();
				$(element)
					.find('.taxonomies-button')
					.removeClass('button-focused');
			}
		});
	});
})(jQuery);
