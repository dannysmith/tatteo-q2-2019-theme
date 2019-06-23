(function($) {
	//Get all data from inputs on submit click
	$('#searchsubmit').click(function(event) {
		event.preventDefault();

		let content = document.querySelector('#main');
		let query = $('#attributes').serialize();
		// let query = JSON.stringify(formData);
		$.ajax({
			type: 'POST',
			url: api_vars.ajaxurl,
			data: {
				action: api_vars.action,
				query: query
			},
			beforeSend: function(xhr) {
				xhr.setRequestHeader('X-WP-Nonce', api_vars.nonce);
			},
			success: function(response) {
				$(content).empty();
				$(content).append(response);
			},
			error: function(errorThrown) {
				alert(errorThrown);
			}
		});
	});
})(jQuery);
