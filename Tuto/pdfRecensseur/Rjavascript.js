$(document).ready(function() {

    $('.rrR').hide();
    
    $('#languageSelectR').on('change', function() {
      var selectedLang = $('#languageSelectR').val();
    
      if (selectedLang) {
        $('.rrR').each(function() {
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