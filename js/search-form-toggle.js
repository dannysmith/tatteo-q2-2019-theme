(function($) {
	$('.search-button').on('touchstart click', function(){
		// reveal search input
		$('.header-search-form-wrapper').slideToggle();

	});

  $('.taxonomies-button').on('touchstart click', function(event){
    event.preventDefault();
    $('.taxonomies-dropdown').hide();
    $(event.target).parent().find('fieldset').toggle();
  })

})(jQuery);
