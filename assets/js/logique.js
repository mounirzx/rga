$(document).ready(function() {
      $('#type_activite_exploitation').prop('disabled', true); // [36]
      $('#reseau_telephonique').prop('disabled', true); // [39]
      $('#reseau_telephonique_si_oui').prop('disabled', true); // [40]
      //$('#reseau_internet').prop('disabled', true); // [41]
     // $('#reseau_internet_si_oui').prop('disabled', true); // [42]
  
      $('#activite_exploitation').change(function() { // [35]
          var selectedValue = $(this).val();
          if (selectedValue === "1") {
              $('#chapt_animals').hide(); // [VI]
              $('#type_activite_exploitation').prop('disabled', true); // [36]
          } else if (selectedValue === "2" || selectedValue === "3") {
              $('#chapt_animals').show(); // [VI]
              $('#type_activite_exploitation').prop('disabled', false); // [36]
          }
      });
  
      $('#type_activite_exploitation').change(function() { // [36]
          var selectedValue = $(this).val();
          if (selectedValue === "2") {
              $('#sans_terre').hide(); // [IV]
              $('.36_si_sont_terres').prop('hidden', true); // [XII]
          } else if (selectedValue === "1") {
              $('#sans_terre').show(); // [IV]
              $('.36_si_sont_terres').prop('hidden', false); // [XII]
          }
      });



  
      $('#reseau_electrique').change(function() { // [38]
          var selectedValue = $(this).val();
          if (selectedValue === "1") {
              $('#reseau_telephonique').prop('disabled', false); // [39]
              $('#reseau_telephonique_si_oui').prop('disabled', false); // [40]
          } else if (selectedValue === "2") {
                  $('#reseau_telephonique').prop('disabled', true); // [39]
                  $('#reseau_telephonique_si_oui').prop('disabled', true); // [40]
                  $('#reseau_internet').prop('disabled', true); // [41]
                  $('#reseau_internet_si_oui').prop('disabled', true); // [42]
          }
      });



      $('#reseau_telephonique').change(function() { // [39]
            var selectedValue = $(this).val();
            if (selectedValue === "2") {
                  $('#reseau_telephonique_si_oui').prop('disabled', true); // [40]
            } else if (selectedValue === "1") {
                $('#reseau_telephonique').prop('disabled', false); // [39]
                $('#reseau_telephonique_si_oui').prop('disabled', false); // [40]
            }
        });
  
      $('#reseau_internet').change(function() { // [41]
          var selectedValue = $(this).val();
          if (selectedValue === "1") {
              $('#reseau_internet_si_oui').prop('disabled', false); // [42]
          } else if (selectedValue === "2") {
              $('#reseau_internet_si_oui').prop('disabled', true); // [42]
          }
      });
  
  });
  