$(document).ready(function() {
    // Initial hide of all elements
    $('.rr').hide();
    
    // Event listener for changes in language and voice selection
    $(document).on('change', '#languageSelect, #voiceSelect', function() {
    var selectedLang = $('#languageSelect').val();
    var selectedVoice = $('#voiceSelect').val();
    
    if(selectedLang!= null && selectedVoice!=null )
        {
            $('.rr').each(function() {
                var langMatch = !selectedLang || $(this).data('lang') === selectedLang;
                var voiceMatch = !selectedVoice || $(this).data('voice') === selectedVoice;
           
                console.log(langMatch,voiceMatch)
                if (langMatch && voiceMatch) {
                $(this).show();
                } else {
                $(this).hide();
                }
                });
        }
    });
    
    // Close video container on close button click
    $('.close-btn').on('click', function() {
    $('.video-container').fadeOut();
    $('.video-container video')[0].pause();
    });
    
    // Close video container if clicked outside of it
    $(document).on('click', function(e) {
    if ($(e.target).closest('.video-container, .thumbnail').length === 0) {
    $('.video-container').fadeOut();
    $('.video-container video')[0].pause();
    }
    });
    });