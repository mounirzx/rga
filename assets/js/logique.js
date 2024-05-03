               //make document ready 
               $(document).ready(function(){
                 $('#type_activite_exploitation').prop('disabled', true);//36
                 $('#reseau_telephonique').prop('disabled', true); //39
                 
              
                   $('#activite_exploitation').change(function() {//35
                         var selectedValue = $(this).val(); 
                         if (selectedValue === "1") {
                               $('#chapt_animals').hide(); //VI
                               $('#type_activite_exploitation').prop('disabled', true);//36
                            
                         } else if (selectedValue === "2") {
                            $('#chapt_animals').show();//VI
                            $('#type_activite_exploitation').prop('disabled', false);//36
                         }else if (selectedValue === "3") {
                             $('#chapt_animals').show();//VI
                             $('#type_activite_exploitation').prop('disabled', false);//36
                         }
                   });
       
                   $('#type_activite_exploitation').change(function() {//36
                        var selectedValue = $(this).val(); 
                        if (selectedValue === "2") {
                              $('#sans_terre').hide(); //IV
                              $('.36_si_sont_terres').prop('hidden', true); //XII
                              
                        } else if(selectedValue==="1"){
                              $('#sans_terre').show(); //IV
                              $('.36_si_sont_terres').prop('hidden', false); //XII
                        }
                        
                      });

                      $('#reseau_telephonique').change(function () {         

                        
                        }) ;//fin change reseau telephone




       
        });
       
       
       
          