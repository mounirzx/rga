$(document).ready(function() {
     $('#type_activite_exploitation').prop('disabled', true); // [36]
    //   $('#reseau_telephonique').prop('disabled', true); // [39]
     $('#reseau_telephonique_si_oui').prop('disabled', true); // [40]

     




     $('#eau_bassin_d_accumulation').prop('disabled', true);
     $('#eau_bassin_geomembrane').prop('disabled', true);
     $('#eau_reservoir').prop('disabled', true);
     $('#eau_citrene_souple').prop('disabled', true);
     $('#eau_mare_deau').prop('disabled', true);
     $('#eau_ced').prop('disabled', true);
     $('#eau_digue').prop('disabled', true);
     $('#eau_autres_1').prop('disabled', true);






     
  


     $('#ui_medicaments_veterinaires').prop('disabled', true);
    //  ui_semences_selectionnees
    //  ui_semences_certifiees
    //  ui_semences_de_la_ferme
    //  ui_bio
    //  ui_engrais_azotes
    //  ui_engrais_phosphates
    //  ui_autres_engrais_mineraux
    //  ui_engrais_organique
    //  ui_fumier
    //  ui_produits_phytosanitaires







      $('#activite_exploitation').change(function() { // [35]
          var selectedValue = $(this).val();
          if (selectedValue === "1") {
            $('#ui_vaccins').prop('disabled', true); //
              $('#ui_medicaments_veterinaires').prop('disabled', true); //
              $('#type_activite_exploitation').prop('disabled', true); //
              $('input[name^="chapt_"]').prop('disabled', true);
          }else if(selectedValue === "2") {
             $('#chapt_animals').show(); // [VI]
             $('input[name^="chapt_"]').prop('disabled', false);
              $('#type_activite_exploitation').prop('disabled', false); // [36]
              $('#ui_vaccins').prop('disabled', false); //
              $('#ui_medicaments_veterinaires').prop('disabled', false); //
            $('#ui_semences_selectionnees').prop('disabled', true);
            $('#ui_semences_certifiees').prop('disabled', true);
            $('#ui_semences_de_la_ferme').prop('disabled', true);
            $('#ui_bio').prop('disabled', true);
            $('#ui_engrais_azotes').prop('disabled', true);
            $('#ui_engrais_phosphates').prop('disabled', true);
            $('#ui_autres_engrais_mineraux').prop('disabled', true);
            $('#ui_engrais_organique').prop('disabled', true);
            $('#ui_fumier').prop('disabled', true);
            $('#ui_produits_phytosanitaires').prop('disabled', true);
          }else if(selectedValue === "3") {
            $('input[name^="chapt_"]').prop('disabled', false);
            $('#type_activite_exploitation').prop('disabled', false); // [36]
            $('#ui_vaccins').prop('disabled', false); //
            $('#ui_medicaments_veterinaires').prop('disabled', false); //
            $('#ui_semences_selectionnees').prop('disabled', false);
            $('#ui_semences_certifiees').prop('disabled', false);
            $('#ui_semences_de_la_ferme').prop('disabled', false);
            $('#ui_bio').prop('disabled', false);
            $('#ui_engrais_azotes').prop('disabled', false);
            $('#ui_engrais_phosphates').prop('disabled', false);
            $('#ui_autres_engrais_mineraux').prop('disabled', false);
            $('#ui_engrais_organique').prop('disabled', false);
            $('#ui_fumier').prop('disabled', false);
            $('#ui_produits_phytosanitaires').prop('disabled', false);
        }else{
            //$('#type_activite_exploitation').prop('disabled', false); // [36]
            $('#ui_vaccins').prop('disabled', false); //
            $('#ui_medicaments_veterinaires').prop('disabled', false); //
            $('#ui_semences_selectionnees').prop('disabled', false);
            $('#ui_semences_certifiees').prop('disabled', false);
            $('#ui_semences_de_la_ferme').prop('disabled', false);
            $('#ui_bio').prop('disabled', false);
            $('#ui_engrais_azotes').prop('disabled', false);
            $('#ui_engrais_phosphates').prop('disabled', false);
            $('#ui_autres_engrais_mineraux').prop('disabled', false);
            $('#ui_engrais_organique').prop('disabled', false);
            $('#ui_fumier').prop('disabled', false);
            $('#ui_produits_phytosanitaires').prop('disabled', false);
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



      $('#reseau_electrique').change(function() {
        var selectedValue = $(this).val();
    
        if (selectedValue === "1") {
            // Enable checkboxes
            $('#eng_reseau_electrique, #eng_groupe_electrogene, #eng_energie_solaire, #eng_energie_eolienne, #eng_energie_carburant, #autres_sources_d_energie')
                .prop('disabled', false)
                .prop('checked', false); // Optionally uncheck on enable, depending on your needs
        } else if (selectedValue === "2") {
            // Disable and uncheck checkboxes
            $('#eng_reseau_electrique, #eng_groupe_electrogene, #eng_energie_solaire, #eng_energie_eolienne, #eng_energie_carburant, #autres_sources_d_energie')
                .prop('disabled', true)
                .prop('checked', false);
        }
    });
    


      $('#reseau_telephonique').change(function() { // [39]
            var selectedValue = $(this).val();
            if (selectedValue === "2") {
                  $('#reseau_telephonique_si_oui').prop('disabled', true); // [40]
                  $('#reseau_telephonique_si_oui').val('')
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
              $('#reseau_internet_si_oui').val('')
          }
      });

            //i have created an id on remove row red color button called statut_juridique_check
            // [44] [45] [6]
           // $('#si_exploi_eai_eac').prop('disabled', true); 
            $('#reference_cadastrale').prop('disabled', true); 
            $('#si_exploi_eac').prop('disabled', true); 
            $('#exploi_superficie_hec').prop('disabled', true); 
            $('#exploi_superficie_are').prop('disabled', true); 
            // [44] [45] [6]
            document.getElementById('addForm').addEventListener('click', function () {
    
     
             // [44] [45] [6]
          //  $('#si_exploi_eai_eac').prop('disabled', false); 
          $('#reference_cadastrale').prop('disabled', true); 
          $('#si_exploi_eac').prop('disabled', true); 
          $('#exploi_superficie_hec').prop('disabled', true); 
          $('#exploi_superficie_are').prop('disabled', true);
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
      // $('#si_exploi_eai_eac').prop('disabled', true); 
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

      var ma_adultes_plus_15_ans_m = $('#ma_adultes_plus_15_ans_m').val();
      var ma_adultes_plus_15_ans_f = $('#ma_adultes_plus_15_ans_f').val();
      var ma_enfants_moins_15_ans_m = $('#ma_enfants_moins_15_ans_m').val();
      var ma_enfants_moins_15_ans_f = $('#ma_enfants_moins_15_ans_f').val();
      if(ma_adultes_plus_15_ans_m!="" && ma_adultes_plus_15_ans_f!="" && ma_enfants_moins_15_ans_m!="" && ma_enfants_moins_15_ans_f){
         if(totalFamilyMembers < maxPersons){
            Swal.fire({
                icon: 'error',
                title: 'Insuffisant',
                text: 'Le nombre total de membres de la famille ne peut pas être inférieur à ' + maxPersons + '.'
            });
        $(this).val(''); // Clear the input field
    
          }
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


  
  function handleInputComparisonEqualOrBigger(inputId1, inputId2, errorMessage) {
    $(inputId1 + ', ' + inputId2).on('input', function() {
        var inputValue1 = parseInt($(inputId1).val()) || 0;
        var inputValue2 = parseInt($(inputId2).val()) || 0;
        console.log('val1: '+inputValue2+" val2: "+inputValue2)
        if (inputValue1 >= inputValue2) {
            Swal.fire({
                icon: 'error',
                title: 'Limite dépassée',
                text: errorMessage,
            });
            $(this).val('');
        }
    });
}
//   77 <= 78
handleInputComparisonEqualOrBigger('#chapt_dont_brebis', '#chapt_ovins', 'Le nombre de Dont Berbis ne peut pas dépasser le nombre total de Ovins');
//   79 <= 80
handleInputComparisonEqualOrBigger('#chapt_dont_chevres', '#chapt_caprins', 'Le nombre de Dont chèvres ne peut pas dépasser le nombre total de Caprins');
//   81 <= 82
handleInputComparisonEqualOrBigger('#chapt_dont_chamelles', '#chapt_camelins', 'Le nombre de Dont chamelles ne peut pas dépasser le nombre total de Camelins');
//   83 <= 84
handleInputComparisonEqualOrBigger('#chapt_dont_juments','#chapt_equins', 'Le nombre de Dont juments ne peut pas dépasser le nombre total de Equins');
// 91 dont pleins <= Ruches Modernes
handleInputComparisonEqualOrBigger('#chapt_dont_sont_pleines','#chapt_ruches_modernes', 'Le nombre de Dont pleines ne peut pas dépasser le nombre total des Ruches');
// 92 dont pleins <= Ruches Traditionnelles
handleInputComparisonEqualOrBigger('#chapt_dont_sont_pleines_2','#chapt_ruches_traditionnelles', 'Le nombre de Dont pleines ne peut pas dépasser le nombre total des Ruches');
//  117 <= 64
function calculateTotalSupIrrigation() {
    var totalAres = 0;
    // Loop through each input field for adults and children
    $('#formContainer2 .row').each(function() {
        var ares = parseFloat($(this).find('[id^="superficie_are_"]').val()) || 0;
        totalAres += ares;
    });
    return totalAres;

}
function calculateTotalModeIrrigation() {
    var total = 0;
    // Loop through each input field with class 'Mode_irrigation'
    $('.Mode_irrigation').each(function() {
        // Parse the value as an integer and add it to the total
        total += parseInt($(this).val()) || 0;
    });
    return total;
}
function compareIrrigationTotals() {
    var totalAres = calculateTotalSupIrrigation();
    var totalModeIrrigation = calculateTotalModeIrrigation();
    // console.log("totalAres: "+totalAres);
    // console.log("totalModeIrrigation: "+totalModeIrrigation);
    if (totalAres <=  totalModeIrrigation) {
        Swal.fire({
            icon: 'error',
            title: 'Limite dépassée',
            text: "Le total des modes d'irrigation ne peut pas dépasser le total des superficies d'irrigation.",
        });
    }
}
$(document).on('input', '[id^="superficie_are_"]', function() {


    compareIrrigationTotals();
});
$(document).on('input', '.Mode_irrigation', function() {

    compareIrrigationTotals();
});

// end  117 <= 64
//124 Egal à somme (125 et 126) par sexe et par type emploi (permanent/saisonnier)
// 126 Somme(Masculin + féminin) pour les 2 classes d'âge <= Nombre des membres du ou des ménage (s) actifs de l'exploitation (somme 124 masculin, féminin par type d'emploi)

    // Function to check equality and apply border colors
//     function checkEquality(exploitantInput, adultesInput, enfantsInput) {
//         const exploitantValue = parseInt(exploitantInput.val()) || 0;
//         const adultesValue = parseInt(adultesInput.val()) || 0;
//         const enfantsValue = parseInt(enfantsInput.val()) || 0;
//         const totalValue = adultesValue + enfantsValue;

//         // Check if the values are not equal
//         if (exploitantValue !== totalValue) {
//             // Apply red border to all inputs
//             exploitantInput.css('border-color', 'red');
//             adultesInput.css('border-color', 'red');
//             enfantsInput.css('border-color', 'red');
//         } else if(exploitantValue === totalValue && exploitantValue !== 0) {
//             // Apply green border to all inputs
//             exploitantInput.css('border-color', 'green');
//             adultesInput.css('border-color', 'green');
//             enfantsInput.css('border-color', 'green');
//         } else {
//             // Reset border color for all inputs
//             exploitantInput.css('border-color', '');
//             adultesInput.css('border-color', '');
//             enfantsInput.css('border-color', '');
//         }
//     }
    
// //************* */ first group
//     // Call checkEquality for the first group of inputs
// const exploitantInput1 = $('#in150');
// const adultesInput1 = $('#in154');
// const enfantsInput1 = $('#in158');
// checkEquality(exploitantInput1, adultesInput1, enfantsInput1);

// // Attach event listeners to inputs of the first group
// const inputsGroup1 = [exploitantInput1, adultesInput1, enfantsInput1];
// inputsGroup1.forEach(input => {
//     input.on('input', function() {
//         checkEquality(exploitantInput1, adultesInput1, enfantsInput1);
//     });

//     // Remove borders when any input in the group loses focus
//     input.on('blur', function() {
//         inputsGroup1.forEach(input => {
//             if (input.css('border-color') === 'rgb(0, 128, 0)') {
//             input.css('border-color', '');
//             }
//         });
//     });
// });
// //************** */ Second group
// // Call checkEquality for the second group of inputs
// const exploitantInput2 = $('#in151');
// const adultesInput2 = $('#in155');
// const enfantsInput2 = $('#in159');
// checkEquality(exploitantInput2, adultesInput2, enfantsInput2);

// // Attach event listeners to inputs of the second group
// const inputsGroup2 = [exploitantInput2, adultesInput2, enfantsInput2];
// inputsGroup2.forEach(input => {
//     input.on('input', function() {
//         checkEquality(exploitantInput2, adultesInput2, enfantsInput2);
//     });

//     // Remove borders when any input in the group loses focus
//     input.on('blur', function() {
//         inputsGroup2.forEach(input => {
//             if (input.css('border-color') === 'rgb(0, 128, 0)') {
//                 input.css('border-color', '');
//             }
//         });
//     });
// });



//124 Egal à somme (125 et 126) par sexe et par type emploi (permanent/saisonnier)

// Dynamic  version 
$(document).ready(function() {
    // Define input IDs for each group
    const inputGroups = {
        1: { exploitant: 'mo_exploitant_individuel_1', adultes: 'mo_adultes_plus_15_ans_11', enfants: 'mo_enfants_moins_15_ans_1' },
        2: { exploitant: 'mo_exploitant_individuel_2', adultes: 'adultes_plus_15_ans_22', enfants: 'mo_enfants_moins_15_ans_2' },
        3: { exploitant: 'mo_exploitant_individuel_3', adultes: 'mo_adultes_plus_15_ans_3', enfants: 'mo_enfants_moins_15_ans_3' },
        4: { exploitant: 'mo_exploitant_individuel_4', adultes: 'mo_adultes_plus_15_ans_4', enfants: 'mo_enfants_moins_15_ans_4' }
    };

    // Function to check equality and apply border colors
    function checkEquality(group) {
        const exploitantInput = $(`#${inputGroups[group].exploitant}`);
        const adultesInput = $(`#${inputGroups[group].adultes}`);
        const enfantsInput = $(`#${inputGroups[group].enfants}`);

        const exploitantValue = parseInt(exploitantInput.val()) || 0;
        const adultesValue = parseInt(adultesInput.val()) || 0;
        const enfantsValue = parseInt(enfantsInput.val()) || 0;
        const totalValue = adultesValue + enfantsValue;

       /************************************************ */
  // Calculate sums
  const sumExploitant = exploitantValue + adultesValue;
  const sumAdultesEnfants = adultesValue + enfantsValue;

      // Check if the sums are equal
      if (group <= 2 && sumExploitant !== sumAdultesEnfants) {
        applyBorderColor(exploitantInput, adultesInput, enfantsInput, 'red');
    } else if (group > 2 && exploitantValue !== sumAdultesEnfants) {
        applyBorderColor(exploitantInput, adultesInput, enfantsInput, 'red');
    } else {
        applyBorderColor(exploitantInput, adultesInput, enfantsInput, 'green');
    }

       /************************************************* */
        // Check if the values are not equal
        if (exploitantValue !== totalValue) {
            // Apply red border to all inputs
            exploitantInput.css({
                'border-color': 'red',
                'border-width': '2px' // Set border width to 2 pixels
            });
            adultesInput.css({
                'border-color': 'red',
                'border-width': '2px'
            });
            enfantsInput.css({
                'border-color': 'red',
                'border-width': '2px'
            });
        } else if (exploitantValue === totalValue && exploitantValue !== 0) {
            // Apply green border to all inputs
            exploitantInput.css({
                'border-color': 'green',
                'border-width': '2px'
            });
            adultesInput.css({
                'border-color': 'green',
                'border-width': '2px'
            });
            enfantsInput.css({
                'border-color': 'green',
                'border-width': '2px'
            });
        } else {
            // Reset border color and width for all inputs
            exploitantInput.css({
                'border-color': '',
                'border-width': '1px'
            });
            adultesInput.css({
                'border-color': '',
                'border-width': '1px'
            });
            enfantsInput.css({
                'border-color': '',
                'border-width': '1px'
            });
        }
    }
// Function to apply border color
function applyBorderColor(exploitantInput, adultesInput, enfantsInput, color) {
    exploitantInput.css({
        'border-color': color,
        'border-width': '2px'
    });
    adultesInput.css({
        'border-color': color,
        'border-width': '2px'
    });
    enfantsInput.css({
        'border-color': color,
        'border-width': '2px'
    });
}

 // Iterate over inputGroups object properties and process each group
 Object.keys(inputGroups).forEach(group => {
    const { exploitant, adultes, enfants } = inputGroups[group];
    
    // Attach event listeners to inputs of the group
    $(`#${exploitant}, #${adultes}, #${enfants}`).on('input', function() {
        checkEquality(group);
    });

    // Remove borders when any input in the group loses focus
    $(`#${exploitant}, #${adultes}, #${enfants}`).on('blur', function() {
        const borderColor = $(this).css('border-color');
        if (borderColor === 'rgb(0, 128, 0)') { // Check for green color
            $(`#${exploitant}, #${adultes}, #${enfants}`).css({
                'border-color': '',
                'border-width': '1px'
            });
        }
    });
});
});

//     // Remove borders when any input in the group loses focus
//     input.on('blur', function() {
//         inputsGroup2.forEach(input => {
//             if (input.css('border-color') === 'rgb(0, 128, 0)') {
//                 input.css('border-color', '');
//             }
//         });
//     });
// });
  //--------------------------------------------------- mounir's part end ! ------------------------------------------------//


 //*********************************************Farouk Touil start ******************************************************** */
  // Function to capitalize the first letter of the input
  $('#nom_exploitant').on('input', function() {
    var inputText = $(this).val();
    var capitalizedText = inputText.toUpperCase() ;
    $(this).val(capitalizedText);
});

$('#prenom_exploitant,#adress_exploitant, #nom_exploitation ').on('input', function() {
    var inputText = $(this).val();
    var capitalizedText = inputText.charAt(0).toUpperCase() + inputText.slice(1);
    $(this).val(capitalizedText);
});


 // 16 Mapping from first dropdown value to acceptable values for the second dropdown
 var dropdownMapping = {
    '1': ['1','2','3', '4'],       // Values for 16 (1) -> 17 (1)
    '2': ['1','2', '3', '4', '5', '9'],  // Values for 16 (2,3,4) -> 17 (2,3,4,5,9)
    '3': ['1','2', '3', '4', '5', '9'],  // Repeated as specified
    '4': ['1','2', '3', '4', '5', '9'],  // Repeated as specified
    '5': ['1','6', '7', '8']             // Values for 16 (5) -> 17 (6,7,8)
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
// $('#nin_exploitant').on('input', function() {
//     // Remove non-digit characters
//     this.value = this.value.replace(/[^0-9]/g, '');

//     // Limit to 18 characters (extra safety layer)
//     if (this.value.length > 18) {
//         this.value = this.value.slice(0, 18);
//     }
// });




  // Function to toggle the disabled state and clear the input based on dropdown selection
  function toggleAndClearCoExploitantsInput() {
    var selectedValue = $('#exploitant').val(); // Get the selected value
    if (selectedValue === '1') { // If "1 - Unique" is selected
        $('#nb_co_exploitants').prop('disabled', true).val(''); // Disable the input and clear its value
        // $('#origine_des_terres').prop('disabled', true).val(''); // Disable the input and clear its value
        // $('#status_juridique').prop('disabled', true).val(''); // Disable the input and clear its value
        // $('#superfecie_sj').prop('disabled', true).val(''); // Disable the input and clear its value
        // $('#superfecie_sj_are').prop('disabled', true).val(''); // Disable the input and clear its value
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



// $('#origine_des_terres').on('change', function() {
//     var selectedValue = $(this).val();
//     var accessOptions = '';
//     var generalOptions = {
//         '14': '14 - Succession إرث',
//         '15': '15 - Donation هبة',
//         '16': '16 - Testament وصية',
//         '17': '17 - Droit préemption حق الشفاعة',
//         '18': '18 - Préscription acquisitive ملكية مكتسبة',
//         '21': '21 - Autre  آخرى',
//         '22': '22 - Inconnu غير معروف'
//     };

//     // Disable the other field (assuming its ID is 'another_field')
//     $('#another_field').prop('disabled', selectedValue !== '6').val('-');

//     // Check conditions to append specific options
//     if (selectedValue !== '5' && selectedValue !== '6') {
//         // Appending specific options for selected values not equal to '5' and '6'
//         accessOptions += '<option value="13">13 - Vente/Achat بيع/شراء</option>';
//         accessOptions += '<option value="18">' + generalOptions['18'] + '</option>'; // Prescription acquisitive
//         accessOptions += '<option value="21">' + generalOptions['21'] + '</option>'; // Autre
//         accessOptions += '<option value="15">' + generalOptions['15'] + '</option>'; // Donation
//         accessOptions += '<option value="16">' + generalOptions['16'] + '</option>'; // Testament
//         accessOptions += '<option value="14">' + generalOptions['14'] + '</option>'; // Succession
//     } else {
//         accessOptions = '<option selected="" disabled="" value="-">Unavailable for selected origin</option>';
//     }

//     // Update the access_mode dropdown
//     $('#access_mode').html(accessOptions);
// });

$('#origine_des_terres').on('change', function() {
    var selectedValue = $(this).val();
    if (selectedValue !== '6') {  // Check if the selected value is not '6'
        $('#si_exploi_eai_eac').prop('disabled', true);  // Disable the second select
        $('#si_exploi_eai_eac').val('-');  // Set its value to '-'
    } else {
        $('#si_exploi_eai_eac').prop('disabled', false);  // Enable the second select if the value is '6'
    }
});


$(document).on('change', '[id^="status_juridique"]', function() {
    // Extract the unique identifier suffix from the ID
    var suffix = this.id.match(/\d+$/)[0]; // Matches the number at the end of the ID

    // Get the value from the corresponding 'origine_des_terres' dropdown
    var origineValue = $('#origine_des_terres_' + suffix).val();
    var statusValue = $(this).val();

    // Define the specific conditions under which the alert should be displayed
    if (origineValue === '6' && statusValue === '2') {
        $('#reference_cadastrale').prop('disabled', false); 
          $('#si_exploi_eac').prop('disabled', false); 
          $('#exploi_superficie_hec').prop('disabled', false); 
          $('#exploi_superficie_are').prop('disabled', false);
    }else{

        $('#reference_cadastrale').prop('disabled', true); 
          $('#si_exploi_eac').prop('disabled', true); 
          $('#exploi_superficie_hec').prop('disabled', true); 
          $('#exploi_superficie_are').prop('disabled', true);

    }
});


$('#exploit_est_un_bloc').on('change', function() {
    // Retrieve the selected value from the dropdown
    var selectedValue = $(this).val();

    // Check if the selected value is '2' (Non)
    if (selectedValue === '2') {
          $('#exploit_est_un_bloc_oui').prop('disabled', true);  // Disable the input field
          $('#exploit_est_un_bloc_oui').val('');  // Clear the input field
    } else {
          $('#exploit_est_un_bloc_oui').prop('disabled', false);  // Enable the input field
    }
 });

 $('#exploit_indus_sur_exploitation').on('change', function() {
    // Retrieve the selected value
    var selectedValue = $(this).val();
    
    // Check the selected value and adjust the input field accordingly
    if(selectedValue !== '1') {
        $('#exp_indu_si_oui_nombre_menage').prop('disabled', true); // Disable the input field
        $('#exp_indu_si_oui_nombre_menage').val(''); // Clear the input field
    } else {
        $('#exp_indu_si_oui_nombre_menage').prop('disabled', false); // Enable the input field if the value is '1'
    }
});





// function updateSAU() {
//     var totalHectares = 0;

//     // Combine hectare inputs
//     $('input[id$="_1"], input[id$="_3"]').each(function() {
//         totalHectares += parseFloat($(this).val()) || 0;
//     });

//     // Combine are inputs, converting to hectares
//     $('input[id$="_2"], input[id$="_4"]').each(function() {
//         totalHectares += (parseFloat($(this).val()) || 0) / 100;
//     });

 
// }

// // Trigger update on input changes
// $('input[id*="_1"], input[id*="_2"], input[id*="_3"], input[id*="_4"]').on('input', updateSAU);




// // Attach input event listener to all related hectare and are inputs
// $('.ares_to_hectares').on('input', updateSAU);

// // Event listener for changes to the SAU input field to alert the value
// $('#superficie_agricole_utile_sau_1').on('change', function() {
//     var currentValue = $(this).val();
//     console.log('Current SAU value: ' + currentValue);
// });

// // Dropdown change events for handling specific conditions

//     function updateFields() {
//         var totalHectares = 0;
//         var totalAres = 0;
//         var SAU = parseFloat($('#superficie_agricole_utile_sau_1').val()) || 0; // Ensure this field exists for SAU

//         $('#formContainer2 .row').each(function() {
//             var hectares = parseFloat($(this).find('[id^="superficie_hec_"]').val()) || 0;
//             var ares = parseFloat($(this).find('[id^="superficie_are_"]').val()) || 0;
//             var cultureCode = parseInt($(this).find('.code_culture_s').val());
//             var intercalaireField = $(this).find('[id^="en_intercalaire"]');

//             totalHectares += hectares;
//             totalAres += ares;

//             // Convert total ares to hectares for calculation
//             totalHectares += totalAres / 100;

//             // Disable 'en intercalaire' if there is no appropriate crop code or both hectare and ares fields are filled
//             if ((cultureCode < 44 || cultureCode > 70) || (hectares > 0 && ares > 0)) {
//                 intercalaireField.val('').prop('disabled', true);
//             } else {
//                 intercalaireField.prop('disabled', false);
//             }

//             // Additional scenario: Enable other fields when 'en_intercalaire' is not empty
//             if (intercalaireField.val()) {
//                 $(this).find('[id^="superficie_hec_"], [id^="superficie_are_"]').prop('disabled', false);
//                 $(this).find('[id^="code_culture_"]').css('border', '2px solid green');
               
              
                
//             } else {
//                 $(this).find('[id^="superficie_hec_"], [id^="superficie_are_"]').prop('disabled', false);
//                 $(this).find('[id^="code_culture_"]').css('border', '2px solid green');
//             }
//         });

//         if (totalHectares > 2.99 * SAU) {
           
//             Swal.fire({
//                 icon: 'error',
//                 title: 'Limite dépassée',
//                 text: 'La superficie totale dépasse 2,99 fois la superficie agricole utile',
//             });
//         }

//         console.log('Total hectares for all agriculture types: ' + totalHectares.toFixed(2));
//     }

//     // Bind the update function to input events on all related hectare and are inputs
//     $('#formContainer2').on('change', '[id^="superficie_hec_"], [id^="superficie_are_"], .code_culture_s', updateFields);

//     // Initialize the fields correctly on page load
//     updateFields();

/*********************************************************************************************************** */
/*********************************************************************************************************** */
/*********************************************************************************************************** */
/*********************************************************************************************************** */
/*********************************************************************************************************** */
/*********************************************************************************************************** */



  // Function to check and set the disabled property for en_intercalaire based on the crop code
  function checkAndDisableIntercalaire($row) {
    var cropCode = parseInt($row.find('.code_culture_s').val());
    var isArboriculture = (cropCode >= 44 && cropCode <= 70);
    //$row.find('[id^="en_intercalaire"]').prop('disabled', !isArboriculture);
}

// When the crop culture select changes, check and potentially disable the intercalaire field
$('#formContainer2').on('change', '.code_culture_s', function() {
    var $row = $(this).closest('.row');
    checkAndDisableIntercalaire($row);
});

// Check when other fields are updated
$('#formContainer2').on('input change', '[id^="superficie_hec_"], [id^="superficie_are_"]', function() {
    var $row = $(this).closest('.row');
    var hectares = $row.find('[id^="superficie_hec_"]').val();



if(hectares){
    $('#eau_bassin_d_accumulation').prop('disabled', false);
    $('#eau_bassin_geomembrane').prop('disabled', false);
    $('#eau_reservoir').prop('disabled', false);
    $('#eau_citrene_souple').prop('disabled', false);
    $('#eau_mare_deau').prop('disabled', false);
    $('#eau_ced').prop('disabled', false);
    $('#eau_digue').prop('disabled', false);
    $('#eau_autres_1').prop('disabled', false);
}else{
    $('#eau_bassin_d_accumulation').prop('disabled', true);
    $('#eau_bassin_geomembrane').prop('disabled', true);
    $('#eau_reservoir').prop('disabled', true);
    $('#eau_citrene_souple').prop('disabled', true);
    $('#eau_mare_deau').prop('disabled', true);
    $('#eau_ced').prop('disabled', true);
    $('#eau_digue').prop('disabled', true);
    $('#eau_autres_1').prop('disabled', true);
}

    


    var ares = $row.find('[id^="superficie_are_"]').val();
    var intercalaireInput = $row.find('[id^="en_intercalaire"]');

    // Disable en_intercalaire if both hectares and ares fields have values
    if (hectares && ares) {
        intercalaireInput.prop('disabled', false);
    } else {
        checkAndDisableIntercalaire($row); // Re-check if it should be enabled based on crop code
    }

    // Disable hectares and ares if intercalaire has a value
    if (intercalaireInput.val()) {
        $row.find('[id^="superficie_hec_"], [id^="superficie_are_"]').prop('disabled', false);
    } else {
        $row.find('[id^="superficie_hec_"], [id^="superficie_are_"]').prop('disabled', false);
    }
});

// Initialize all rows on document ready
$('#formContainer2 .row').each(function() {
    checkAndDisableIntercalaire($(this));
});





/*********************************************************************************************************** */
/*********************************************************************************************************** */
/*********************************************************************************************************** */
/*********************************************************************************************************** */
/*********************************************************************************************************** */
/*********************************************************************************************************** */

var selectedValues = []; // Array to hold unique combinations of selected values

    // Listen for changes on any select elements within formContainer3
    // $('#formContainer3').on('change', 'select', function() {
    //     var $row = $(this).closest('.row'); // Get the closest parent row of the changed select
    //     var codeMateriel = $row.find('[id^="code_materiel"]').val();
    //     var modeMobilisation = $row.find('[id^="ee_mode_mobilisation_materiel"]').val();
    //     var modeExploitation = $row.find('[id^="ee_mode_exploitation_materiel"]').val();

    //     // Form a unique identifier using the selected values
    //     var identifier = codeMateriel + '|' + modeMobilisation + '|' + modeExploitation;

    //     // Remove error class from all selects in the row
    //     $row.find('select').removeClass('error');

    //     // Check if the identifier is already used
    //     if (selectedValues.includes(identifier)) {
    //         console.log("Combination already selected: " + identifier);
    //         Swal.fire({
    //             title: 'Attention!',
    //             text: 'Cette combinaison de valeurs est déjà sélectionnée. Veuillez choisir une autre combinaison.',
    //             icon: 'warning',
    //             confirmButtonText: 'OK'
    //         });
    //         // Add error class back to selects
    //         $row.find('select').addClass('error');
    //         // Optionally reset the current select to its default state
    //         $(this).val($(this).find('option:first').val());
    //     } else {
    //         // If the combination is new, add it to the array
    //         selectedValues.push(identifier);
    //     }
    // });

    // // Example: Dynamically add rows and handle them
    // $('#addForm3').on('click', function() {
    //     var newRow = $('#formContainer3 .row:first').clone();
    //     newRow.find('input, select').val('').removeClass('error');
    //     newRow.find('select').attr('id', function(i, val) {
    //         return val.replace(/\d+$/, function(n) { return parseInt(n) + 1; });
    //     });
    //     $('#formContainer3').append(newRow);
    // });


 

/*******************************************inrercalaire algo********************* */
// Attach event listener to inputs for total calculation
$('#formContainer2').on('input', '.class_intercalaire, .superficie_hec, .superficie_are', function() {
    calculateTotals();
});

function calculateTotals() {
    let totalInterca = 0;
    let totalHec = 0;
    let totalAre = 0;
    let $intercalaireInputs = $('.class_intercalaire');

    // Sum all intercalaire values
    $intercalaireInputs.each(function() {
        totalInterca += parseFloat($(this).val()) || 0;
    });

    // Sum all hectare values
    $('.superficie_hec').each(function() {
        totalHec += parseFloat($(this).val()) || 0;
    });

    // Sum all are values
    $('.superficie_are').each(function() {
        totalAre += parseFloat($(this).val()) || 0;
    });

    // Check conditions and alert if necessary
    if (totalInterca > totalHec || totalInterca > totalAre) {
        Swal.fire({
            title: 'Erreur',
            text: 'La somme des valeurs intercalaire ne doit pas dépasser celle des hectares ou des ares.',
            icon: 'error',
            confirmButtonText: 'OK'
        }).then(() => {
            // Empty all intercalaire inputs and focus on the first one
            $intercalaireInputs.val('').first().focus();
        });
    }
}

// Integrate with the existing logiqueIntercalaire function
$('#formContainer2').on('change', '.class_intercalaire', function() {
    var $row = $(this).closest('.row');
    logiqueIntercalaire($row);
});
});

var classIntercalaireArray = [];

function logiqueIntercalaire($row) {
// Get the value, parse it as an integer, and add it to the array
var class_intercalaire_addition = parseInt($row.find('.class_intercalaire').val());
if (!isNaN(class_intercalaire_addition)) {
    classIntercalaireArray.push(class_intercalaire_addition);

    // Calculate the total sum of the array
    var total = classIntercalaireArray.reduce(function(acc, val) {
        return acc + val;
    }, 0);

    // SweetAlert to notify the total sum
    Swal.fire({
        title: 'Total Intercalaire',
        text: `Total: ${total}`,
        icon: 'info',
        confirmButtonText: 'OK'
    });

    // Check if there is any value in intercalaire
    if (total > 0) {
        filterArboricultureOptions($row);
    }
}
}

function filterArboricultureOptions($row) {
// Get the select element
var $select = $row.find('.code_culture_s');

// Store all options to restore later if needed
if (!$select.data('allOptions')) {
    $select.data('allOptions', $select.html());
}

// Filter options to show only Arboriculture (values 44 to 70)
var allOptions = $select.data('allOptions');
var $options = $(allOptions).filter(function() {
    var value = parseInt($(this).val());
    return value >= 44 && value <= 70;
});

// Update the select with filtered options and refocus
$select.html($options).focus();

// SweetAlert to notify the user to select an arboriculture option
Swal.fire({
    title: 'Attention !',
    text: 'Veuillez sélectionner une culture arboricole.',
    icon: 'warning',
    confirmButtonText: 'OK'
});
}

// When the intercalaire field changes, check and potentially filter the options in the select field
$('#formContainer2').on('change', '.class_intercalaire', function() {
var $row = $(this).closest('.row');
logiqueIntercalaire($row);
});

// When the crop culture select changes, reset options if no intercalaire value exists
$('#formContainer2').on('change', '.code_culture_s', function() {
var $row = $(this).closest('.row');
var totalIntercalaire = classIntercalaireArray.reduce(function(acc, val) {
    return acc + val;
}, 0);

// If no intercalaire value exists, reset options to all available options
if (totalIntercalaire === 0) {
    var $select = $row.find('.code_culture_s');
    if ($select.data('allOptions')) {
        $select.html($select.data('allOptions'));
    }
}
/***************************************intercalaire algo******************************** */







    
    
    // When the crop culture select changes, reset options if no intercalaire value exists
    $('#formContainer2').on('change', '.code_culture_s', function() {
        var $row = $(this).closest('.row');
        var totalIntercalaire = classIntercalaireArray.reduce(function(acc, val) {
            return acc + val;
        }, 0);
    
        // If no intercalaire value exists, reset options to all available options
        if (totalIntercalaire === 0) {
            var $select = $row.find('.code_culture_s');
            if ($select.data('allOptions')) {
                $select.html($select.data('allOptions'));
            }
        }
    });

    







    
    
//**********************************************Farouk Touil end  ******************************************************* */


 /***************************************************************** wissem start*********************************************************************** */
 $('#nin_exploitant').blur(function(){
    console.log('gg')
    var inputLength = $(this).val().length;
    if (inputLength < 18) {
        // If length is less than 18, display an error message or perform any other action.
        $('#error_message').text('le nin doit etre 18 characters.');
        $('#nin_exploitant').css('border','2px solid red')
    } else {
        // If length is 18 or more, clear the error message.
        $('#error_message').text('');
        $('#nin_exploitant').css('border','2px solid green')
    }
});


$('#nom_exploitation').on('input', function(){
    var inputVal = $(this).val();
    $(this).val(inputVal.charAt(0).toUpperCase() + inputVal.slice(1));
});

/*********************************** */

// $('#reference_cadastrale').on('input', function() {
//     var userInput = $(this).val().trim();
//     var regex = /^\d{3}\/\d{5}$/; // Regular expression for the desired format

//     if (/^\d{3}$/.test(userInput)) {
//         // If user has entered 3 numbers, automatically add "/"
//         $(this).val(userInput + '/');
//     }

//     if (regex.test(userInput)) {
//         // Valid input format
//         $(this).css('border-color', 'green');
//     } else {
//         // Invalid input format
//         $(this).css('border-color', 'red');
//     }
// });


$('#eau_exploitation_type_irrigation').change(function(){
    $('.pm_hydraulique').prop('checked', false);
});



/**************** */
//28==>119

$('.main_oeuvre').on('input', function(){

var sexe_exploitant = $('#sexe_exploitant').val(); 
var exploitant = $('#exploitant').val(); //


if (exploitant == 1) {
    $('[name="co_exploitants_y_compris_exploitant_principa_l"]').attr('readonly', 'readonly');
    $('[name="co_exploitants_y_compris_exploitant_principa_2"]').attr('readonly', 'readonly');
}else {
    $('[name="co_exploitants_y_compris_exploitant_principa_l"]').removeAttr('readonly');
    $('[name="co_exploitants_y_compris_exploitant_principa_2"]').removeAttr('readonly');
}


if (sexe_exploitant !== null && exploitant !== null) {
    console.log('not null ')
    

    if (sexe_exploitant == '1' && exploitant== '1') {
       
        $('[name="co_exploitants_y_compris_exploitant_principa_l"]').val(1);

    } else if(sexe_exploitant == '2' && exploitant== '1')
        {
        $('[name="co_exploitants_y_compris_exploitant_principa_2"]').val(1);
       
    }
}
});


/********************* */
$('#fa_avez_vous_contracte_une_assurance_agricole').change(function(){

$('#fa_si_oui_quelle_compagnie').val('')
$('.type_assurance').prop('checked', false);
})


/*************************** */


// $('.exploitant_indiv').on('input', function(){
// console.log('okkk')
//   var mo_exploitant_individuel_1 =   $('[name="mo_exploitant_individuel_1"]').val(1);
//   var mo_adultes_plus_15_ans_11 =   $('[name="mo_adultes_plus_15_ans_11"]').val(1);
//   var mo_adultes_plus_15_ans_11 =   $('[name="mo_adultes_plus_15_ans_11"]').val(1);



//   ///////
//   var mo_exploitant_individuel_2 =   $('[name="mo_exploitant_individuel_2"]').val(1);
//   var mo_exploitant_individuel_2 =   $('[name="mo_exploitant_individuel_2"]').val(1);
// })


$('#fa_credit_bancaire').change(function(){
if(!$(this).is(":checked")) {
   $('.type_credit_bancaire').prop('checked', false);
}
});
$('#fa_soutien_public').change(function(){
if(!$(this).is(":checked")) {
   $('.soutien_public_ckeckbox').prop('checked', false);
}
});

/****************************************************** wissem end************* ************************************** */


});
