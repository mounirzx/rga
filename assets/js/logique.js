$(document).ready(function() {
     $('#type_activite_exploitation').prop('disabled', true); // [36]
    //   $('#reseau_telephonique').prop('disabled', true); // [39]
     $('#reseau_telephonique_si_oui').prop('disabled', true); // [40]

     






















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
    
    




// Function to handle 'forage' checkbox toggle
function toggleForage() {
    var isForageChecked = $('#forage').prop('checked');
    var forageInputElement = $('#forage').closest('.form-check').find('.bneder-input');
    if (isForageChecked) {
        forageInputElement.show();
        $("#eau_total_forage").show();
    } else {
        forageInputElement.hide();
        $("#eau_total_forage").val('').hide();
    }
}

// Function to handle 'puits' checkbox toggle
function togglePuits() {
    var isPuitsChecked = $('#puits').prop('checked');
    var puitsInputElement = $('#puits').closest('.form-check').find('.bneder-input');
    if (isPuitsChecked) {
        puitsInputElement.show();
        $("#eau_total_puits").show();
    } else {
        puitsInputElement.hide();
        $("#eau_total_puits").val('').hide();
    }
}

// Function to handle 'source' checkbox toggle
function toggleSource() {
    var isSourceChecked = $('#source').prop('checked');
    var sourceInputElement = $('#source').closest('.form-check').find('.bneder-input');
    if (isSourceChecked) {
        sourceInputElement.show();
        $("#eau_total_source").show();
    } else {
        sourceInputElement.hide();
        $("#eau_total_source").val('').hide();
    }
}

// Initialize toggle functions on page load
toggleForage();
togglePuits();
toggleSource();

// Attach change event listeners to the checkboxes
$('#forage').change(toggleForage);
$('#puits').change(togglePuits);
$('#source').change(toggleSource);

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
            $('#eng_reseau_electrique')
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
          // $('.reference_cadastrale').prop('disabled', true); 
          //mounir
            // $('#si_exploi_eac').prop('disabled', true); 
            // $('#exploi_superficie_hec').prop('disabled', true); 
            // $('#exploi_superficie_are').prop('disabled', true); 
            // [44] [45] [6]
            document.getElementById('addForm').addEventListener('click', function () {
    
     
             // [44] [45] [6]
          //  $('#si_exploi_eai_eac').prop('disabled', false); 
       //   $('.reference_cadastrale').prop('disabled', true); 
          //mounir

        //   $('#si_exploi_eac').prop('disabled', true); 
        //   $('#exploi_superficie_hec').prop('disabled', true); 
        //   $('#exploi_superficie_are').prop('disabled', true);
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
   //    $('.reference_cadastrale').prop('disabled', true); 
       $('#si_exploi_eac').prop('disabled', true); 
       $('#exploi_superficie_hec').prop('disabled', true); 
       $('#exploi_superficie_are').prop('disabled', true); 
       // [44] [45] [6]
        // Assuming you want to remove the parent row when the button is clicked
        // const formRow = event.target.closest('.row');
        // formRow.remove();
    }
});



//thoses are variables total that needs to be inserted in bd
// total_forage
// total_puits
// total_source
//eau_total_source
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
       // console.log('val1: '+inputValue2+" val2: "+inputValue2)
        if (inputValue2 < inputValue1) {
         


            displayMessage_elvage(errorMessage, 'error');

            $(this).val('');
        }
    });
}
//   77 <= 78
handleInputComparisonEqualOrBigger('#chapt_dont_brebis', '#chapt_ovins', 'Le nombre de Berbis ne peut dépasser le nombre total des Ovins');
//   79 <= 80
handleInputComparisonEqualOrBigger('#chapt_dont_chevres', '#chapt_caprins', 'Le nombre de chèvres ne peut dépasser le nombre total de Caprins');
//   81 <= 82
handleInputComparisonEqualOrBigger('#chapt_dont_chamelles', '#chapt_camelins', 'Le nombre de chamelles ne peut dépasser le nombre total de Camelins');
//   83 <= 84
handleInputComparisonEqualOrBigger('#chapt_dont_juments','#chapt_equins', 'Le nombre de juments ne peut dépasser le nombre total des Equins');
// 91 dont pleins <= Ruches Modernes
// Début code a transmetre
handleInputComparisonEqualOrBigger('#chapt_dont_sont_pleines','#chapt_ruches_modernes', '');
// 92 dont pleins <= Ruches Traditionnelles
handleInputComparisonEqualOrBigger('#chapt_dont_sont_pleines_2','#chapt_ruches_traditionnelles', '');
// 'Le nombre de ruches pleines ne peut dépasser le nombre total des Ruches traditionnelles'
// 'Le nombre de ruches pleines ne peut dépasser le nombre total des Ruches Modernes'
// fin code a transmetre
// Function to calculate total number of Vaches
function calculateTotalVaches() {
    var total = 0;
    // Loop through each input field for vaches laitieres
    $('#chapt_dont_vaches_laitieres_blm, #chapt_dont_vaches_laitieres_bla, #chapt_dont_vaches_laitieres_bll').each(function() {
        // Parse the value as an integer and add it to the total
        total += parseInt($(this).val()) || 0;
    });
    return total;
}

// Event listener for input changes
$('#chapt_dont_vaches_laitieres_blm, #chapt_dont_vaches_laitieres_bla, #chapt_dont_vaches_laitieres_bll').on('input', function() {
    var chapt_bovins = parseInt($('#chapt_bovins').val()) || 0; // Get the maximum number of bovins
    var totalVaches = calculateTotalVaches(); // Calculate the total number of vaches laitieres

    // Check if the total number of vaches laitieres exceeds or is less than the number of bovins
    if (totalVaches > chapt_bovins) {
        displayMessage_elvage('Le nombre total de vaches laitieres ne peut pas dépasser le nombre de bovins', 'error');
        setBorders('red');
        // Début code a transmetre

    } else if (totalVaches < chapt_bovins) {
        
        displayMessage_elvage_bovins('Le nombre total de vaches laitieres est inférieur au nombre de bovins', 'warning');
        setBorders('orange');
    } else if(totalVaches == chapt_bovins) {
        displayMessage_elvage_bovins('', '');
        
        setBorders('green');
    }
    // fin code a transmetre

});

// Event listener for input focus out (when user leaves the input)
$('#chapt_dont_vaches_laitieres_blm, #chapt_dont_vaches_laitieres_bla, #chapt_dont_vaches_laitieres_bll').on('focusout', function() {
    $('#chapt_dont_vaches_laitieres_blm, #chapt_dont_vaches_laitieres_bla, #chapt_dont_vaches_laitieres_bll').css('border', '' );

});

// Function to set border colors
function setBorders(color) {
    $('#chapt_dont_vaches_laitieres_blm, #chapt_dont_vaches_laitieres_bla, #chapt_dont_vaches_laitieres_bll').css('border', '2px solid ' + color);
}


// Function to handle input comparison and apply border color
function handleInputComparisonEqualOrBigger(selector, comparisonSelector, errorMessage) {
    $(selector).on('input', function() {
        var value = parseInt($(this).val()) || 0;
        var comparisonValue = parseInt($(comparisonSelector).val()) || 0;

        if (value > comparisonValue) {
            displayMessage_elvage(errorMessage, 'error');
            $(this).css('border', '2px solid red');
        } else if(value > comparisonValue){
            displayMessage_elvage(errorMessage, 'warning');
            $(this).css('border', '2px solid orange');
        }
        else {
            $(this).css('border', '2px solid green'); // Reset border color if valid
        }
        // fin code a transmetre

    });
}

// handleInputComparisonEqualOrBigger('#chapt_dont_vaches_laitieres_blm', '#chapt_bovins', 'La somme des types de bovins ne peut être supérieure au total bovins');


























//  117 <= 64





// $(document).on('input', '[id^="superficie_are_"]', compareIrrigationTotals);
// $(document).on('input', '.Mode_irrigation', compareIrrigationTotals);

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


$('.double_are').on("input",function(){
    var sanitizedValue = this.value.replace(/[^\d.,]/g, '');
    console.log(sanitizedValue)
    // Replace ',' with '.' if present
    sanitizedValue = sanitizedValue.replace(',', '.');

    // Split the value by '.' to separate the integer and decimal parts
    var parts = sanitizedValue.split('.');

    // Ensure the integer part has a maximum of 5 digits
    if (parts[0].length > 2) {
        // Truncate the integer part to 5 digits
        parts[0] = parts[0].slice(0, 2);
    }

    // If there are more than one decimal points, remove the extra ones
    if (parts.length > 2) {
        parts = [parts[0], parts.slice(1).join('')];
    }

    // Ensure the decimal part has a maximum of 2 digits
    if (parts[1] && parts[1].length > 2) {
        // Truncate the decimal part to 2 digits
        parts[1] = parts[1].slice(0, 2);
    }

    // Combine the integer and decimal parts with a dot
    var newValue = parts.join('.');

    // Update the input value with the sanitized value
    this.value = newValue;
})



$('.double_are_non_bati').on("input",function(){
    var sanitizedValue = this.value.replace(/[^\d.,]/g, '');
    console.log(sanitizedValue)
    // Replace ',' with '.' if present
    sanitizedValue = sanitizedValue.replace(',', '.');

    // Split the value by '.' to separate the integer and decimal parts
    var parts = sanitizedValue.split('.');

    // Ensure the integer part has a maximum of 5 digits
    if (parts[0].length > 4) {
        // Truncate the integer part to 5 digits
        parts[0] = parts[0].slice(0, 4);
    }

    // If there are more than one decimal points, remove the extra ones
    if (parts.length > 2) {
        parts = [parts[0], parts.slice(1).join('')];
    }

    // Ensure the decimal part has a maximum of 2 digits
    if (parts[1] && parts[1].length > 2) {
        // Truncate the decimal part to 2 digits
        parts[1] = parts[1].slice(0, 2);
    }

    // Combine the integer and decimal parts with a dot
    var newValue = parts.join('.');

    // Update the input value with the sanitized value
    this.value = newValue;
})


$('.double_are_surface').on("input",function(){
    var sanitizedValue = this.value.replace(/[^\d.,]/g, '');
    console.log(sanitizedValue)
    // Replace ',' with '.' if present
    sanitizedValue = sanitizedValue.replace(',', '.');

    // Split the value by '.' to separate the integer and decimal parts
    var parts = sanitizedValue.split('.');

    // Ensure the integer part has a maximum of 5 digits
    if (parts[0].length > 5) {
        // Truncate the integer part to 5 digits
        parts[0] = parts[0].slice(0, 5);
    }

    // If there are more than one decimal points, remove the extra ones
    if (parts.length > 1) {
        parts = [parts[0], parts.slice(1).join('')];
    }

    // Ensure the decimal part has a maximum of 2 digits
    if (parts[1] && parts[1].length > 1) {
        // Truncate the decimal part to 2 digits
        parts[1] = parts[1].slice(0, 1);
    }

    // Combine the integer and decimal parts with a dot
    var newValue = parts.join('.');

    // Update the input value with the sanitized value
    this.value = newValue;
})


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
    if (selectedValue === '2') { // If "1 - Unique" is selected
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
        // $('#si_exploi_eai_eac').prop('disabled', true);  // Disable the second select
        // $('#si_exploi_eai_eac').val('-');  // Set its value to '-'
    } else {
        // $('#si_exploi_eai_eac').prop('disabled', false);  // Enable the second select if the value is '6'
    }
});


$(document).on('change', '[id^="status_juridique"]', function() {
    // Extract the unique identifier suffix from the ID
    var suffix = this.id.match(/\d+$/)[0]; // Matches the number at the end of the ID

    // Get the value from the corresponding 'origine_des_terres' dropdown
    var origineValue = $('#origine_des_terres_' + suffix).val();
    var statusValue = $(this).val();

    // Define the specific conditions under which the alert should be displayed
    if (origineValue == '6' &&  (statusValue == '2')) {
       // $('.reference_cadastrale').prop('disabled', false); 
          $('#si_exploi_eac').prop('disabled', false); 
          $('#si_exploi_eai_eac').prop('disabled', false); 

          $('#exploi_superficie_hec').prop('disabled', false); 
          $('#exploi_superficie_are').prop('disabled', false);
    }else if (origineValue == '6' &&  (statusValue == '3')) {
        // $('.reference_cadastrale').prop('disabled', false); 
                   $('#si_exploi_eai_eac').prop('disabled', false); 
           $('#si_exploi_eac').prop('disabled', true); 
           $('#exploi_superficie_hec').prop('disabled', true); 
           $('#exploi_superficie_are').prop('disabled', true);
     }else{

         //$('.reference_cadastrale').prop('disabled', true); 
          $('#si_exploi_eac').prop('disabled', true);
          $('#si_exploi_eac').val('');
          $('#exploi_superficie_hec').prop('disabled', true); 
          $('#exploi_superficie_hec').val('');
          $('#exploi_superficie_are').prop('disabled', true);
          $('#exploi_superficie_are').val('');

    }

    if (origineValue == '9' &&  (statusValue == '22')) {

        $('.reference_cadastrale').prop('disabled', true); 
        $('.reference_cadastrale').val('');


    }else{
        $('.reference_cadastrale').prop('disabled', false); 
        $('.reference_cadastrale').val('');
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
    var irrigue = $row.find('[id^="superficie_are_"]').val();



if(irrigue){
    $('#eau_bassin_d_accumulation').prop('disabled', false);
    $('#eau_bassin_geomembrane').prop('disabled', false);
    $('#eau_reservoir').prop('disabled', false);
    $('#eau_citrene_souple').prop('disabled', false);
    $('#eau_mare_deau').prop('disabled', false);
    $('#eau_ced').prop('disabled', false);
    $('#eau_digue').prop('disabled', false);
    $('#eau_autres_1').prop('disabled', false);
}else{
    $('#eau_bassin_d_accumulation').prop('disabled', false);
    $('#eau_bassin_geomembrane').prop('disabled', false);
    $('#eau_reservoir').prop('disabled', false);
    $('#eau_citrene_souple').prop('disabled', false);
    $('#eau_mare_deau').prop('disabled', false);
    $('#eau_ced').prop('disabled', false);
    $('#eau_digue').prop('disabled', false);
    $('#eau_autres_1').prop('disabled', false);
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


function displayMessage(message, type) {
    let messageClass = type === 'error' ? 'error-message' : 'info-message';
    let $message = $('<div>').addClass(messageClass).text(message);
    
    // Add border and change text color based on message type
    if (type === 'error') {
        $message.css({
            'font-weight': 'bold',
            'color': 'red',

        });
    } else if(type == 'warning'){
        $message.css({
            'font-weight': 'bold',
            'color': 'orange'
        });
    }
    
    $('#error_messages').empty($message); // Append message to container
    $('#error_messages').append($message); // Append message to container
    setTimeout(() => $message.fadeOut(() => $message.remove()), 5000); // Remove message after 5 seconds
}
function displayMessage_elvage(message, type) {
    let messageClass = type === 'error' ? 'error-message' : 'info-message';
    let $message = $('<div>').addClass(messageClass).text(message);
    
    // Add border and change text color based on message type
    if (type === 'error') {
        $message.css({
            'font-weight': 'bold',
            'color': 'red',

        });
    } else if(type == 'warning'){
        $message.css({
            'font-weight': 'bold',
            'color': 'orange'
        });
    }
    
    $('#error_message_elvage').empty($message); // Append message to container
    $('#error_message_elvage').append($message); // Append message to container
    setTimeout(() => $message.fadeOut(() => $message.remove()), 5000); // Remove message after 5 seconds
}

function displayMessage_elvage_bovins(message, type) {
    let messageClass = type === 'error' ? 'error-message' : 'info-message';
    let $message = $('<div>').addClass(messageClass).text(message);
    
    // Add border and change text color based on message type
    if (type === 'error') {
        $message.css({
            'font-weight': 'bold',
            'color': 'red',

        });
    } else if(type == 'warning'){
        $message.css({
            'font-weight': 'bold',
            'color': 'orange'
        });
    }
    
    $('#error_message_elvage').empty($message); // Append message to container
    $('#error_message_elvage').append($message); // Append message to container
    setTimeout(() => $message.fadeOut(() => $message.remove()), 5000); // Remove message after 5 seconds
}


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
        displayMessage('La somme des valeurs intercalaire ne doit pas dépasser celle des hectares ou des ares.', 'error');
        // Apply red border and focus on the first input
        $intercalaireInputs.addClass('input-error').first().focus();
    } else {
        // Remove red border if no error
        $intercalaireInputs.removeClass('input-error');
    }
}

// Integrate with the existing logiqueIntercalaire function
$('#formContainer2').on('change', '.class_intercalaire', function() {
    var $row = $(this).closest('.row');
    logiqueIntercalaire($row);
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

      //  displayMessage(`Total: ${total}`, 'info');

        // Check if there is any value in intercalaire
        if (total > 0) {
           // filterArboricultureOptions($row);
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

    displayMessage('Veuillez sélectionner une culture arboricole.', 'warning');
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
});
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

    


//Mise a jour du samedi 

$('#nom_zone_district').on('input', function(){
        var inputVal = $(this).val();
        $(this).val(inputVal.charAt(0).toUpperCase() + inputVal.slice(1));
    });
    
    
    
//**********************************************Farouk Touil end  ******************************************************* */


 /***************************************************************** wissem start*********************************************************************** */
 $('#nin_exploitant').blur(function(){
    //console.log('gg')
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

// $('.reference_cadastrale').on('input', function() {
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
    //console.log('not null ')
    

    if (sexe_exploitant == '1' && exploitant== '2') {
       
        $('[name="co_exploitants_y_compris_exploitant_principa_l"]').val(1);

    } else if(sexe_exploitant == '2' && exploitant== '2')
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
$(document).ready(function(){
    var selectedValues = []; // Array to hold the counts of each combined value selected

    $(document).on('change', '.statut_juridique_check', function() {
        var fullId = $(this).attr('id');
        var idPart = fullId.match(/[^_]+$/)[0]; // Extract the dynamic part of the ID

        var val1 = $('#origine_des_terres_' + idPart).val() || "";
        var val2 = $('#status_juridique_' + idPart).val() || "";
        var cc = val1 + val2; // Combine the values to form a unique identifier

        // Clear any previous error indication before any new validation
        $('#origine_des_terres_' + idPart).removeClass('error');
        $('#status_juridique_' + idPart).removeClass('error');

        if(val1 === "" || val2 === "") {
           // console.log("Both selections are required.");
            return; // Exit the function if one of the dropdowns is not selected
        }

        // Check if this combination already exists in the array
        if($.inArray(cc, selectedValues) !== -1){
          //  console.log("This combination of values has already been selected.");
            // Swal.fire({
            //    title: 'Attention!',
            //     text: 'Cette option a déjà été sélectionnée. Veuillez en choisir une autre.',
            //     icon: 'warning',
            //     confirmButtonText: 'OK'
            // });


            displayMessage('Cette option a déjà été sélectionnée. Veuillez en choisir une autre', 'error');





            $('#origine_des_terres_' + idPart).addClass('error');
            $('#status_juridique_' + idPart).addClass('error');
            $("#"+fullId).prop("selectedIndex", 0); // Optionally reset the current dropdown
        } else {
            // If the combination is unique, add it to the array and ensure no error class is present
            selectedValues.push(cc);
        }
    });








    var select1 = document.getElementsByName('reseau_internet')[0];
    var select2 = document.getElementsByName('reseau_internet_si_oui')[0];

    select1.addEventListener('input', updateSelect2);

    function updateSelect2() {
        var selectedValue = select1.value;
        select2.disabled = (selectedValue != '1');
    }







    document.getElementById('addForm').addEventListener('click', function () {
        const formContainer = document.getElementById('formContainer');
        const formRow = formContainer.firstElementChild.cloneNode(true);
    
        // Generate unique IDs and names for the cloned form elements
        formRow.querySelectorAll('[id], [name]').forEach(function (element) {
            element.setAttribute('id', element.getAttribute('id') + '_' + formContainer.children.length);
            element.setAttribute('name', element.getAttribute('name') + '_' + formContainer.children.length);
    
            // Remove the "disabled" attribute if present
            element.removeAttribute('disabled');
        });
    
        // Remove the add button from the cloned row and add a remove button
        const removeButton = document.createElement('button');
        removeButton.textContent = '-';
        removeButton.type = 'button';
    
        removeButton.classList.add('btn', 'btn-danger', 'btn-sm', 'disable-44-45-46' );
        removeButton.addEventListener('click', function () {
            formRow.remove();
        });
        formRow.querySelector('.d-grid').innerHTML = '';
        formRow.querySelector('.d-grid').appendChild(removeButton);
    
        formContainer.appendChild(formRow);
    
        // Enable the cloned input elements inside the replicated HTML code
        formRow.querySelectorAll('.line-edit').forEach(function (inputElement) {
            inputElement.removeAttribute('disabled');
        });
    
        restrictInputToDoublesARE();
    });






    /**************************************************************************************************** */

    
           
document.getElementById('addForm2').addEventListener('click', function() {
    const formContainer = document.getElementById('formContainer2');
    const formRow = formContainer.firstElementChild.cloneNode(true);

    // Generate unique IDs and names for the cloned form elements
    formRow.querySelectorAll('[id], [name]').forEach(function(element, index) {
        var baseId = element.id.match(/^[^\d]+/)[0]; // Extract base ID without the numeric part
        var newIndex = formContainer.children.length; // New index based on the number of existing rows
        element.id = baseId + '_' + newIndex;
        element.name = baseId + '_' + newIndex;
        element.removeAttribute('disabled'); // Remove "disabled" attribute if present

        if (element.tagName === 'SELECT') {
            element.selectedIndex = 0; // Reset select element to default value
            // Add an event listener to enforce selection
            element.addEventListener('blur', function() {


               $('#en_intercalaire').on('change', function() {

                     // alert('test')


               });






                if (this.value === "-" || this.value === "") {
                  if (result.isConfirmed) {
                            this.focus(); // Refocus on the dropdown if user closes the alert
                        }
                }
            });
        } else if (element.type === 'text') {
            element.value = ''; // Clear input text fields
        }
    });

    // Remove the add button from the cloned row and add a remove button
    const removeButton = document.createElement('button');
    removeButton.textContent = '-';
    removeButton.type = 'button';
    removeButton.classList.add('btn', 'btn-danger', 'btn-sm');
    removeButton.addEventListener('click', function() {
        formRow.remove();
    });
    formRow.querySelector('.d-grid').innerHTML = '';
    formRow.querySelector('.d-grid').appendChild(removeButton);

    formContainer.appendChild(formRow);

    // Focus on the 'code_culture' select element in the newly added row
    formRow.querySelector('.code_culture_s').focus();
    restrictInputToDoubles();

    // Optionally call any other functions that need to reinitialize settings or bindings
});








/************************************************** */

var select7 = document.getElementsByName('pratiquez_vous_lagriculture_biologique')[0];
var select27 = document.getElementsByName('si_oui_avez_vous_un_certificat')[0];

select7.addEventListener('input', function () {
   updateSelect7();
});

function updateSelect7() {
   var selectedValue = select7.value;
  // console.log(selectedValue)
   select27.disabled = (selectedValue != '1');
   if(selectedValue!="1"){
      select27.value=''
   }
  
}



/***************************************************************** */
var select5 = document.getElementsByName('pratiquez_vous_une_agriculture_conventionnee')[0];
                  
select5.addEventListener('input', function () {
    updateSelect6();
});

function updateSelect6() {
    var div_to_effect5 = document.getElementById('card1');
    var child_inputs1 = div_to_effect5.getElementsByTagName('input');

    if (select5.value !== '1') {
        for (var i = 0; i < child_inputs1.length; i++) {
            child_inputs1[i].disabled = true;
            child_inputs1[i].checked = false; 
        }
    } else {
        for (var i = 0; i < child_inputs1.length; i++) {
            child_inputs1[i].disabled = false;
        }
    }
}

    
});

/************************************************************************************************ */

$(document).ready(function(){
    var combinations = {}; // Object to hold combinations to ensure uniqueness
 
 // Function to generate a unique combination based on row inputs
// Function to generate a unique key for a row
function generateCombination(row) {
    return row.find('[id^="code_materiel"]').val() + '-' +
           row.find('[id^="code_materiel_nombre"]').val() + '-' +
           row.find('[id^="ee_mode_mobilisation_materiel"]').val() + '-' +
           row.find('[id^="ee_mode_exploitation_materiel"]').val();
}

// Function to check and manage unique combinations
function manageCombinations(row) {
    var key = generateCombination(row);
    var isDuplicate = false;
    
    // Check for duplicates by iterating through all rows
    $('#formContainer3 .row').each(function() {
        var currentRow = $(this);
        if (currentRow.is(row)) {
            return true; // Skip the current row
        }
        var currentKey = generateCombination(currentRow);
        if (currentKey === key) {
            isDuplicate = true;
            return false; // Break the loop if a duplicate is found
        }
    });

    if (isDuplicate) {
        Swal.fire({
            title: 'Attention!',
            text: 'Cette combinaison a déjà été sélectionnée. Veuillez en choisir une autre.',
            icon: 'warning',
            confirmButtonText: 'OK'
        });
        // Reset the row's selects to the default option
        row.find('select').val(function() {
            return $(this).children('option:first').val();
        });
    }
}

// Handle changes in any of the dropdowns
$('#formContainer3').on('change', 'select', function() {
    manageCombinations($(this).closest('.row'));
});

 
 // Handle the addition of new rows
 $('#addForm3').click(function() {
     var formContainer = $('#formContainer3');
     var formRow = formContainer.children('.row').first().clone();
     formRow.find('input').val('');
     formRow.find('select').each(function() {
         $(this).val($(this).find('option:first').val());
     });
 
     // Append a remove button to the new row
     var removeButton = $('<button>').text('-').addClass('btn btn-danger btn-sm').click(function() {
         delete combinations[generateCombination($(this).closest('.row'))];
         $(this).closest('.row').remove();
     });
 
     formRow.find('.d-grid').empty().append(removeButton);
     formContainer.append(formRow);
 });




 /****************************************************************************************** */
 function updateSelect8() {

    var div_to_effect6 = document.getElementById('card3');
    var child_inputs2 = div_to_effect6.getElementsByTagName('input');

    if(!check1.checked){
        for (var i = 0; i < child_inputs2.length; i++) {
            child_inputs2[i].disabled = true;
        }
    }else{
        for (var i = 0; i < child_inputs2.length; i++) {
            child_inputs2[i].disabled = false;
        }
    }
   
}



// $('#longitude_x_prefix').on('keypress', function() {
//     var inputValue = $(this).val();
//     // Regular expression to match numbers with optional decimal point
//     var regex = /^\d*\.?\d*$/;
//     if(!regex.test(inputValue)) {
//         $(this).val(inputValue.slice(0, -1)); // Remove last character if it's not valid
//     }
// });



$('#lon_exploitation').keypress(function(event) {
    if (((event.which != 46 || (event.which == 46 && $(this).val() == '')) ||
            $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
}).on('paste', function(event) {
    event.preventDefault();
});




$('#lat_exploitation').keypress(function(event) {
    if (((event.which != 46 || (event.which == 46 && $(this).val() == '')) ||
            $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
}).on('paste', function(event) {
    event.preventDefault();
});


/******************************************************************************************** */

//35
$('#activite_exploitation').change(function(){

    var activite_exploitation = $(this).val()
    if(activite_exploitation=="3"){
        $('#type_activite_exploitation').html('<option value="1">1 - لديه أرض - Avec terre</option>')
    }else{
        $('#type_activite_exploitation').html('  <option value="-" disabled selected><option value="1">1 - لديه أرض - Avec terre</option> <option value="2">2 - بدون أرض - Sans terre</option>')
    }
})







$('.double').on("input",function(){
    var sanitizedValue = this.value.replace(/[^\d.,]/g, '');
    console.log(sanitizedValue)

    // Replace ',' with '.' if present
    sanitizedValue = sanitizedValue.replace(',', '.');

    // Split the value by '.' to separate the integer and decimal parts
    var parts = sanitizedValue.split('.');

    // Ensure the integer part has a maximum of 5 digits
    if (parts[0].length > 5) {
        // Truncate the integer part to 5 digits
        parts[0] = parts[0].slice(0, 5);
    }

    // If there are more than one decimal points, remove the extra ones
    if (parts.length > 2) {
        parts = [parts[0], parts.slice(1).join('')];
    }

    // Ensure the decimal part has a maximum of 2 digits
    if (parts[1] && parts[1].length > 2) {
        // Truncate the decimal part to 2 digits
        parts[1] = parts[1].slice(0, 2);
    }

    // Combine the integer and decimal parts with a dot
    var newValue = parts.join('.');

    // Update the input value with the sanitized value
    this.value = newValue;
})


 });
 
 