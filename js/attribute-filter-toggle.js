(function($) {
	//Shows search form on header icon click
	$('.search-button').on('touchstart click', function() {
		$('.header-search-form-wrapper').toggle();
	});

	//
	function changeAttributeForm(form) {
		// Reset all inputs
		$('.header-search-form')
			.find('input')
			.trigger('reset');
		// Recieves id of which button was clicked, shows relevant inputs using .hide() and .show()
		switch (form) {
			case 'studios':
				$('.dates-filter').hide();
				$('.taxonomies-wrapper , .name-filter').show();
				break;
			case 'guest_spots':
				$('.name-filter').hide();
				$('.taxonomies-wrapper , .dates-filter').show();
				break;
			case 'events':
				$('.taxonomies-wrapper , .name-filter').hide();
				$('.dates-filter').show();
				break;
			case 'artists':
				$('.taxonomies-wrapper , .dates-filter').hide();
				$('.name-filter').show();
				break;
		}
	}
	// Add event handler to all the post type buttons/tabs at the top
	$('.post-type-button').on('touchstart click', function(event) {
		event.preventDefault();
		// Changes styling of the button clicked and checks the relevant radio button (which is hidden from view)
		$('.post-type-button').removeClass('button-focused');
		$(event.target).addClass('button-focused');
		$(event.target)
			.next('input[type=radio]')
			.prop('checked', true);
		//Gets the id of the button clicked and passes it to the function to change the form inputs displayed
		let formSelected = $(event.target).attr('id');
		changeAttributeForm(formSelected);
	});

	// Attaches the datepicker widget to inputs with the datepicker classs
	$('#date_from , #date_to').datepicker({ dateFormat: 'dd/mm/yy' });

	// Event handler to hide dropdown boxes on another input focus
	$('#location, #dates, #accomodation').on('focus', function() {
		$('.taxonomies-dropdown').hide();
		$('.taxonomies-button').removeClass('button-focused');
		//<-- Add line to hide calendar dropdowns here -->
	});

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
