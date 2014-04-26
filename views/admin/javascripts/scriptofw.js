jQuery(document).ready(function() {
  // Toggle show transcription edit.
  jQuery('#scripto-transcription-edit-show').click(function(event) {
      event.preventDefault();
      var clicks = jQuery(this).data('clicks');
      if (!clicks) {
          // change viewer width
          jQuery('#scripto-openlayers').animate({ width: "45%" }, 50, "linear", function() { /* Animation complete. */ });
          jQuery(window).trigger("resize");
      } else {
          // change viewer width
          jQuery('#scripto-openlayers').animate({ width: "100%" }, 50, "linear", function() { /* Animation complete. */ });
          jQuery(window).trigger("resize");
      }
  });
});