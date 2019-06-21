function addTaxonomiesSelectedToQuery(taxonomy, query) {
	if (typeof query.taxonomy === 'undefined') {
		query.taxonomy = [];
	}
	let taxonomyInput = taxonomy.querySelectorAll('input');
	let tempArray = [];
	taxonomyInput.forEach(function(element) {
		if (element.checked === true) {
			tempArray.push(element.value);
		}
	});
	query.taxonomy.push(tempArray);
	return query;
}

(function($) {
	//Get all data from inputs on submit click
	$('#searchsubmit').click(function(event) {
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
		let content = document.querySelector('#main');
		let bormData = $('#attributes').serialize();
		let formData = JSON.stringify(bormData);

		$.ajax({
			type: 'POST',
			url: api_vars.ajaxurl,
			data: {
				action: api_vars.action,
				query: JSON.parse(formData)
			},
			success: function(response) {
				console.log(response);
				$(content).empty();
				$(content).append(response);
			},
			error: function(errorThrown) {
				alert(errorThrown);
			}
		});
	});
})(jQuery);
