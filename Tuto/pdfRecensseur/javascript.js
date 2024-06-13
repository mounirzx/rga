$(document).ready(function() {

    $('.rr').hide();
    
    $('#languageSelect').on('change', function() {
      var selectedLang = $('#languageSelect').val();
  
      if (selectedLang) {
        $('.rr').each(function() {
          var langMatch = !selectedLang || $(this).data('lang') === selectedLang;
          if (langMatch) {
            $(this).show();
          } else {
            $(this).hide();
          }
        });
      }
    });
  
   
  });
  