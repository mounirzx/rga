$(document).ready(function() {

    $('.rrC').hide();
    
    $('#languageSelectC').on('change', function() {
      var selectedLang = $('#languageSelectC').val();
  
      if (selectedLang) {
        $('.rrC').each(function() {
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
  