jQuery(document).ready(function() {
  // Toggle show transcription edit.
  jQuery('#scripto-transcription-edit-show').click(function(event) {
      event.preventDefault();
      var clicks = jQuery(this).data('clicks');
      if (!clicks) {
          // change viewer width using edit class
          jQuery('#scripto-openlayers').addClass('edit');
      } else {
          // change viewer width edit class
          jQuery('#scripto-openlayers').removeClass('edit');
      }
  });
});