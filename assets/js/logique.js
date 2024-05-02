               //make document ready 
               $(document).ready(function(){
                 $('#type_activite_exploitation').prop('disabled', true);
                 $('#reseau_telephonique').prop('disabled', true); //39
                 
              
                   $('#activite_exploitation').change(function() {
                         var selectedValue = $(this).val(); 
                         if (selectedValue === "1") {
                               $('#chapt_animals').hide();
                            
                         } else if (selectedValue === "2") {
                            $('#chapt_animals').show();
                            $('#type_activite_exploitation').prop('disabled', false);
                         }else if (selectedValue === "3") {
                               $('#element_to_hide_3').hide(); 
                         }
                   });
       
                   $('#type_activite_exploitation').change(function() {
                        var selectedValue = $(this).val(); 
                        if (selectedValue === "2") {
                              $('#sans_terre').hide(); 
                              $('.36_si_sont_terres').prop('hidden', true); //36
                              
                        } 
                        
                      });

                      $('#reseau_telephonique').change(function () {         

                        
                        }) ;//fin change reseau telephone




       
        });
       
       
       
          