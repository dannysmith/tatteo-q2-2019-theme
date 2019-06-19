(function($) {
	//Shows search form on header icon click
	$('.search-button').on('touchstart click', function() {
		$('.header-search-form-wrapper').toggle();
	});

	//
	function changeAttributeForm(form) {
		$('.header-search-form')
			.find('input')
			.trigger('reset');
		switch (form) {
			case 'studios':
				$('.dates-filter').hide();
				$('taxonomies-wrapper').show();
				break;
			case 'guest_spots':
				$('.taxonomies-wrapper , .dates-filter').show();
				break;
			case 'events':
				$('.taxonomies-wrapper').hide();
				$('.dates-filter').show();
				break;
		}
	}

	$('.post-type-button').on('touchstart click', function(event) {
		event.preventDefault();
		$('.post-type-button').removeClass('button-focused');
		$(event.target).addClass('button-focused');
		$(event.target)
			.next('input[type=radio]')
			.prop('checked', true);
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
