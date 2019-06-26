(function ($) {
  $(".open").on("click", function () {
    $(".popup-overlay").fadeIn();
  });
})(jQuery);


(function ($) {
  $(".close-form").on("click", function () {
    $(".popup-overlay").fadeOut();
  });
})(jQuery);
