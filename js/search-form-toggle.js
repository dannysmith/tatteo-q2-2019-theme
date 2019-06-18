(function($) {
    //Shows search form on headr icon click
	$('.search-button').on('touchstart click', function(){
		$('.header-search-form-wrapper').toggle();
	});
    //Event handled for every taxonomy button
  $('.taxonomies-button').on('touchstart click', function(event){
    event.preventDefault();

    let taxonomyForms = document.querySelectorAll('.taxonomy-form')
    //Toggles the taxonomy dropdown for the clicked button, while hiding the other forms
    taxonomyForms.forEach(function(element) {
      if (element.contains(event.target)) {
        $(event.target).toggleClass('button-focused')
        $(element).find('.taxonomies-dropdown').toggle();
      }
      else {
        $(element).find('.taxonomies-dropdown').hide()
        $(element).find('.taxonomies-button').removeClass('button-focused')
      }
    })
  })
})(jQuery);
