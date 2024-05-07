$(document).ready(function() {
     $('#type_activite_exploitation').prop('disabled', true); // [36]
      $('#reseau_telephonique').prop('disabled', true); // [39]
     $('#reseau_telephonique_si_oui').prop('disabled', true); // [40]

     
  
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
              $('#reseau_internet').prop('disabled', false); // [41]
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

            //i have created an id on remove row red color button called statut_juridique_check
            // [44] [45] [6]
            $('#si_exploi_eai_eac').prop('disabled', true); 
            $('#reference_cadastrale').prop('disabled', true); 
            $('#si_exploi_eac').prop('disabled', true); 
            $('#exploi_superficie_hec').prop('disabled', true); 
            $('#exploi_superficie_are').prop('disabled', true); 
            // [44] [45] [6]
            document.getElementById('addForm').addEventListener('click', function () {
    
     
             // [44] [45] [6]
            $('#si_exploi_eai_eac').prop('disabled', false); 
            $('#reference_cadastrale').prop('disabled', false); 
            $('#si_exploi_eac').prop('disabled', false); 
            $('#exploi_superficie_hec').prop('disabled', false); 
            $('#exploi_superficie_are').prop('disabled', false); 
             // [44] [45] [6]
      
})
// Assuming you have a parent element with ID 'parentElement'
// Assuming the parent container of the buttons has the ID 'formContainer'
const formContainer = document.getElementById('formContainer');

// Add a click event listener to the parent container
formContainer.addEventListener('click', function(event) {
    // Check if the clicked element has the class 'disable-44-45-46'
    if (event.target.classList.contains('disable-44-45-46')) {
        // Your event handling code here
       // [44] [45] [6]
       $('#si_exploi_eai_eac').prop('disabled', true); 
       $('#reference_cadastrale').prop('disabled', true); 
       $('#si_exploi_eac').prop('disabled', true); 
       $('#exploi_superficie_hec').prop('disabled', true); 
       $('#exploi_superficie_are').prop('disabled', true); 
       // [44] [45] [6]
        // Assuming you want to remove the parent row when the button is clicked
        const formRow = event.target.closest('.row');
        formRow.remove();
    }
});



//thoses are variables total that needs to be inserted in bd
// total_forage
// total_puits
// total_source
$('#forage, #puits, #source').change(function() {
    
      var isChecked = $(this).prop('checked');
      var inputElement = $(this).closest('.form-check').find('.bneder-input');
      
      if (isChecked) {
          inputElement.show();
      } else {
          inputElement.hide();
      }
  });

  function calculateTotalFamilyMembers() {
      var total = 0;
      // Loop through each input field for adults and children
      $('#ma_adultes_plus_15_ans_m, #ma_adultes_plus_15_ans_f, #ma_enfants_moins_15_ans_m, #ma_enfants_moins_15_ans_f').each(function() {
          // Parse the value as an integer and add it to the total
          total += parseInt($(this).val()) || 0;
      });
      return total;
  }
  
  // Event listener for input fields for adults and children
  $('#ma_adultes_plus_15_ans_m, #ma_adultes_plus_15_ans_f, #ma_enfants_moins_15_ans_m, #ma_enfants_moins_15_ans_f').on('input', function() {
      var maxPersons = parseInt($('#ma_nombre_de_personnes').val()) || 0; // Get the maximum number of persons
      var totalFamilyMembers = calculateTotalFamilyMembers(); // Calculate the total number of family members
      // Compare the total number of family members with the maximum allowed
      if (totalFamilyMembers > maxPersons) {
            Swal.fire({
                  icon: 'error',
                  title: 'Limite dépassée',
                  text: 'Le nombre total de membres de la famille ne peut pas dépasser ' + maxPersons,
              });
          $(this).val(''); // Clear the input field
      }
  });
  


// Fonction pour activer ou désactiver un groupe d'éléments
function toggleElements($elements, disabled) {
      $elements.prop('disabled', disabled);
  }
  
  // Fonction pour activer ou désactiver les éléments spécifiques en fonction de la valeur de la case à cocher
  function toggleByCheckbox($checkbox, $elements, checkedValue) {
      $checkbox.change(function() {
          var isChecked = $(this).prop('checked');
          toggleElements($elements, isChecked !== checkedValue);
      });
  }

  
  
  // Désactiver tous les éléments par défaut
  toggleElements($('#fa_ettahadi, #fa_classique, #fa_leasing, #fa_rfig, #fa_financiere, #fa_materiel, #fa_culture, #fa_intrants, #fa_si_oui_quelle_compagnie, #fa_terre, #fa_personnel, #fa_batiments, #fa_cultures, #fa_materiels, #fa_cheptel'), true);
  
  // Activer ou désactiver les éléments spécifiques en fonction de la case à cocher "Crédit bancaire"
  toggleByCheckbox($('#fa_credit_bancaire'), $('#fa_ettahadi, #fa_classique, #fa_leasing, #fa_rfig'), true);
  
  // Activer ou désactiver les éléments spécifiques en fonction de la case à cocher "Soutien public"
  toggleByCheckbox($('#fa_soutien_public'), $('#fa_financiere, #fa_materiel, #fa_culture, #fa_intrants'), true);
  
  // Activer ou désactiver les éléments spécifiques en fonction de la case à cocher "Ressources propres"
  toggleByCheckbox($('#fa_propres_ressources'), $('#fa_ettahadi, #fa_classique, #fa_leasing, #fa_rfig, #fa_financiere, #fa_materiel, #fa_culture, #fa_intrants'), false);
  
  // Activer ou désactiver les éléments spécifiques en fonction de la sélection de l'assurance agricole
  $('#fa_avez_vous_contracte_une_assurance_agricole').change(function() {
      var selectedValue = $(this).val();
      toggleElements($('#fa_si_oui_quelle_compagnie, #fa_terre, #fa_personnel, #fa_batiments, #fa_cultures, #fa_materiels, #fa_cheptel'), selectedValue !== "1");
  });
  


  //--------------------------------------------------- mounir's part start ! -----------------------------------------------------------//


        //   var test="mmounir";
  //--------------------------------------------------- mounir's part end ! ------------------------------------------------//


    //*********************************************Farouk Touil start ******************************************************** */
  // Function to capitalize the first letter of the input

$('#nom_exploitant,#prenom_exploitant,#adress_exploitant, #nom_exploitation ').on('input', function() {
    var inputText = $(this).val();
    var capitalizedText = inputText.charAt(0).toUpperCase() + inputText.slice(1);
    $(this).val(capitalizedText);
});


 // 16 Mapping from first dropdown value to acceptable values for the second dropdown
 var dropdownMapping = {
    '1': ['1'],       // Values for 16 (1) -> 17 (1)
    '2': ['2', '3', '4', '5', '9'],  // Values for 16 (2,3,4) -> 17 (2,3,4,5,9)
    '3': ['2', '3', '4', '5', '9'],  // Repeated as specified
    '4': ['2', '3', '4', '5', '9'],  // Repeated as specified
    '5': ['6', '7', '8']             // Values for 16 (5) -> 17 (6,7,8)
};

$('#niveau_instruction').on('change', function() {
    var selectedValue = $(this).val(); // Get the selected value of the first dropdown
    var validOptions = dropdownMapping[selectedValue]; // Get valid options for the second dropdown

    // Reset and hide all options in the second dropdown
    $('#niveau_formation_agricole option').hide();

    // Show only the valid options in the second dropdown
    if (validOptions) {
        validOptions.forEach(function(val) {
            $('#niveau_formation_agricole option[value="' + val + '"]').show();
        });
        // Set the first valid option as selected
        $('#niveau_formation_agricole').val(validOptions[0]);
    }
});
$('#nin_exploitant').on('input', function() {
    // Remove non-digit characters
    this.value = this.value.replace(/[^0-9]/g, '');

    // Limit to 18 characters (extra safety layer)
    if (this.value.length > 18) {
        this.value = this.value.slice(0, 18);
    }
});




  // Function to toggle the disabled state and clear the input based on dropdown selection
  function toggleAndClearCoExploitantsInput() {
    var selectedValue = $('#exploitant').val(); // Get the selected value
    if (selectedValue === '1') { // If "1 - Unique" is selected
        $('#nb_co_exploitants').prop('disabled', true).val(''); // Disable the input and clear its value
    } else {
        $('#nb_co_exploitants').prop('disabled', false); // Enable the input
    }
}

// Initial check in case the dropdown is pre-selected when the page loads
toggleAndClearCoExploitantsInput();

// Event listener for changes on the dropdown
$('#exploitant').on('change', function() {
    toggleAndClearCoExploitantsInput();
});



$('#reseau_electrique').change(function() {
    var selectedValue = $(this).val(); // Get the selected value from the first dropdown
    if (selectedValue === '2') { // If "Non" (value 2) is selected
        $('#reseau_telephonique').prop('disabled', false); // Enable the second select
    } else {
        $('#reseau_telephonique')
            .prop('disabled', true) // Disable the second select
            .val('-'); // Reset its value to the placeholder or default value
    }
});


// $('#origine_des_terres').on('change', function() {
//     var selectedValue = $(this).val(); // Get the selected value from the first dropdown
//     if (selectedValue !== '6') { // Check if the selected value is not '6'
//         $('#si_exploi_eai_eac').prop('disabled', true).val('-'); // Disable the second dropdown and reset its value to '-'
//     } else {
//         $('#si_exploi_eai_eac').prop('disabled', false); // Enable the second dropdown if the value is '6'
//     }
// });

// // Optional: Disable the second dropdown initially if the first dropdown is not on '6'
// if ($('#origine_des_terres').val() !== '6') {
//     $('#si_exploi_eai_eac').prop('disabled', true).val('-');
// }

    //**********************************************Farouk Touil end  ******************************************************* */



    /***************************************************************** wissem start*********************************************************************** */
    $('#nin_exploitant').blur(function(){
        var inputLength = $(this).val().length;
        if (inputLength < 18) {
            // If length is less than 18, display an error message or perform any other action.
            $('#error_message').text('le nin doit etre 18 characters.');
            ('#nin_exploitant').css('border','2px solid red')
        } else {
            // If length is 18 or more, clear the error message.
            $('#error_message').text('');
            nin_exploitant.css('border','2px solid green')
        }
    });


    $('#nom_exploitation').on('input', function(){
        var inputVal = $(this).val();
        $(this).val(inputVal.charAt(0).toUpperCase() + inputVal.slice(1));
    });

    /*********************************** */

    $('#reference_cadastrale').on('input', function() {
        var userInput = $(this).val().trim();
        var regex = /^\d{3}\/\d{5}$/; // Regular expression for the desired format

        if (/^\d{3}$/.test(userInput)) {
            // If user has entered 3 numbers, automatically add "/"
            $(this).val(userInput + '/');
        }

        if (regex.test(userInput)) {
            // Valid input format
            $(this).css('border-color', 'green');
        } else {
            // Invalid input format
            $(this).css('border-color', 'red');
        }
    });
    /****************************************************************** wissem end********************************************************************** */


});
