jQuery(function($) {
  $(".panel").hide();
  $("#menuWrap").toggle(
    function() {
      $(this)
        .next()
        .slideToggle();
      $("#menuBtn").toggleClass("close");
    },
    function() {
      $(this)
        .next()
        .slideToggle();
      $("#menuBtn").removeClass("close");
    }
  );
});
