(function ($) {
  $(".open").on("click", function () {
    $(".popup-overlay").toggle('easing');
  });
})(jQuery);


(function ($) {
  $(".close-form").on("click", function () {
    $(".popup-overlay").toggle('fast');
  });
})(jQuery);
