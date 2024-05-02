               //make document ready 
               $(document).ready(function(){
                $('#type_activite_exploitation').prop('disabled', true);
                   $('#activite_exploitation').change(function() {
                         var selectedValue = $(this).val(); // Use jQuery to get the value
       
                         if (selectedValue === "1") {
                               $('#chapt_animals').hide(); // Hide Test 1 if option 1 is selected
                            
                         } else if (selectedValue === "2") {
                            $('#chapt_animals').show(); // Hide Test 1 if option 1 is selected
                            $('#type_activite_exploitation').prop('disabled', false);
                         }else if (selectedValue === "3") {
                               $('#element_to_hide_3').hide(); // Hide Test 2 if option 2 is selected
                         }
                   });
       
                   $('#activite_exploitation').change(function() {
                        
                      });
       
        });
       
       
       
          