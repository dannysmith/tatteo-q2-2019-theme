function addTaxonomiesSelectedToQuery(taxonomy, query) {
	if (typeof query.taxonomy === 'undefined') {
		query.taxonomy = [];
	}
	let taxonomyInput = taxonomy.querySelectorAll('input');
	taxonomyInput.forEach(function(element) {
		if (element.checked === true) {
			query.taxonomy.push(element.value);
		}
	});
	return query;
}

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

	//Get all data from inputs on submit click
	$('#searchsubmit').on('touchstart click', function(event) {
		event.preventDefault();
		let query = {};
		//Get post types
		let postTypeInputs = document.querySelectorAll('#post_type');
		query.postType = [];
		postTypeInputs.forEach(function(element) {
			if (element.checked === true) {
				query.postType.push(element.value);
			}
			return query;
		});

		// Get date from
		query.dates = {};
		let dateFromInput = document.querySelector('#date_from');
		query.dates.dateFrom = dateFromInput.value;
		let dateToInput = document.querySelector('#date_to');
		query.dates.dateTo = dateToInput.value;

		//Get accomodation
		let accomodation = document.querySelector('#accomodation');
		if (accomodation.checked === true) {
			query.accomodation = 'yes';
		}

		// Get name
		query.name = document.getElementById('name').value;

		// Get Location
		// <!-- insert location code here -->

		// Select taxonomy forms
		let taxonomyForms = document.querySelectorAll('.taxonomies-dropdown');
		let [art_styles, comission, tools] = taxonomyForms;

		// Add taxonomy terms to query
		addTaxonomiesSelectedToQuery(art_styles, query);
		addTaxonomiesSelectedToQuery(comission, query);
		addTaxonomiesSelectedToQuery(tools, query);

		console.log(query);

		$.ajax({
			url: ajaxurl,
			method: 'GET',
			crossDomain: true,
			contentType: 'application/json',
			beforeSend: function(xhr) {
				xhr.setRequestHeader('X-WP-Nonce', tatteo_vars.wpapi_nonce);
			}
		})
			.done(function(data) {})
			.fail();
	});
})(jQuery);
