(function($) {
	// Add event handler to all the post type buttons/tabs at the top
	$('.post-type-button').on('touchstart click', function(event) {
		event.preventDefault();
		// Changes styling of the button clicked and checks the relevant radio button (which is hidden from view)
		$(event.target).toggleClass('button-focused');
		$(event.target)
			.next('input[type="checkbox"]')
			.prop('checked', true);
	});

	// Attaches the datepicker widget to inputs with the datepicker classs
	$('#date_from , #date_to').datepicker({ dateFormat: 'dd/mm/yy' });

	// Event handler to hide dropdown boxes on another input focus
	$('#location, #dates, #accomodation').on('focus', function() {
		$('.taxonomies-dropdown').hide();
		$('.taxonomies-button').removeClass('button-focused');
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
});
jQuery;
