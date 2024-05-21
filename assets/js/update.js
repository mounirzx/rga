$(document).ready(function () {
 
  /*************************** recenseur details********************/
  /*************************** recenseur details********************/
  /*************************** recenseur details********************/
  /*************************** recenseur details********************/



//   $('#forage').change(function() {
   
    
//       var isChecked = $(this).prop('checked');
//       var inputElement = $(this).closest('.form-check').find('.bneder-input');
      
//       if (isChecked) {
//           inputElement.show();
//           $("#eau_total_forage").show()
//       } else {
//           inputElement.hide();
          
         
//           $("#eau_total_forage").val('')
          
          
//       }
//   });

//   $('#puits').change(function() {
   
    
//     var isChecked = $(this).prop('checked');
//     var inputElement = $(this).closest('.form-check').find('.bneder-input');
    
//     if (isChecked) {
//         inputElement.show();
//         $("#eau_total_puits").show()
//     } else {
//         inputElement.hide();
        
      
//         $("#eau_total_puits").val('')
     
        
//     }
// });

// $('#source').change(function() {
   
    
//   var isChecked = $(this).prop('checked');
//   var inputElement = $(this).closest('.form-check').find('.bneder-input');
  
//   if (isChecked) {
//       inputElement.show();
//       $("#eau_total_source").show()
//   } else {
//       inputElement.hide();
      
//       $("#eau_total_source").val('')
     
      
      
//   }
// });

  $.ajax({
    url: url.GetData,
    dataType: "json",
    success: function (response) {
      //console.log(response);
      if (response.reponse !== "false") {
        $("#nom_recensseur").val(response.nom_recensseur || "N/A");
        $("#prenom_recenseur").val(response.prenom_recenseur || "N/A");
        $("#nom_controleur").val(response.nom_controleur || "N/A");
        $("#prenom_controleur").val(response.prenom_controleur || "N/A");

        $("#wilaya_name_ascii").val(response.wilaya_name_ascii || "N/A");
        $("#commune_name_ascii").val(response.commune_name_ascii || "N/A");
        $("#commune_code").val(response.commune || "N/A");
        // $("#nom_zone_district").val(response.nom_zone_district || "N/A");
        // $("#num_zone_district").val(response.num_zone_district || "N/A");
      } else {
        //console.error("Error: " + response.message);
      }
    },
    error: function (xhr, status, error) {
      //console.error("AJAX Error:", status, error);
    },
  });
  /*************************** recenseur details********************/
  /*************************** recenseur details********************/
  /*************************** recenseur details********************/
  /*************************** recenseur details********************/
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

  

  function updateFields() {
    var message=""
    var totalHectares = 0;
    var totalAres = 0;
    var SAU = parseFloat($('#superficie_agricole_utile_sau_1').val()) || 0; // Ensure this field exists for SAU
  
    $('#formContainer2 .row').each(function() {
        var hectares = parseFloat($(this).find('[id^="superficie_hec_"]').val()) || 0;
        var ares = parseFloat($(this).find('[id^="superficie_are_"]').val()) || 0;
        var cultureCode = parseInt($(this).find('.code_culture_s').val());
        var intercalaireField = $(this).find('[id^="en_intercalaire"]');
  
        totalHectares += hectares;
        totalAres += ares;
  
        // Convert total ares to hectares for calculation
        totalHectares += totalAres / 100;
  
        // Disable 'en intercalaire' if there is no appropriate crop code or both hectare and ares fields are filled
        if ((cultureCode < 44 || cultureCode > 70) || (hectares > 0 && ares > 0)) {
           // intercalaireField.val('').prop('disabled', false);
        } else {
           // intercalaireField.prop('disabled', false);
        }
  
        // Additional scenario: Enable other fields when 'en_intercalaire' is not empty
        if (intercalaireField.val()) {
            $(this).find('[id^="superficie_hec_"], [id^="superficie_are_"]').prop('disabled', false);
           // $(this).find('[id^="code_culture_"]').css('border', '2px solid red');
           
          
            
        } else {
            $(this).find('[id^="superficie_hec_"], [id^="superficie_are_"]').prop('disabled', false);
            $(this).find('[id^="code_culture_"]').css('border', '2px solid green');
        }
    });
  console.log(totalHectares+'  '+SAU)
    if (totalHectares > 2.99 * SAU) {
       
      displayMessage('La superficie totale dépasse  la superficie agricole utile', 'warning');
  
  
        message = "red";
    }else if(totalHectares < (2.99 * SAU)  && (totalHectares !=  SAU)){
        // Swal.fire({
        //     icon: 'error',
        //     title: 'Limite dépassée',
        //     text: 'La superficie totale n\'est pas egale la superficie agricole utile',
        // });
        displayMessage('La superficie totale dépasse la superficie agricole utile', 'warning');
        console.log( 'La superficie totale n\'est pas egale la superficie agricole utile')
        message="orange"
    }else if(totalHectares  == (SAU)){
        message="green"
  console.log('good')
  
    }
  
    console.log('Total hectares for all agriculture types: ' + totalHectares.toFixed(2));
  
    return message
  }


/********************************************************************************************************************* */
function controleSatSumsjtest () {
var message="";
var sum_superfecie_sj=0
  $(".statut_juridique_s").each(function () {
    var superfecie_sj = $(this).find("[name^='superfecie_sj']").val();
    superfecie_sj=parseFloat(superfecie_sj)
      if (!isNaN(superfecie_sj) && superfecie_sj !== null && superfecie_sj !== undefined) {
        sum_superfecie_sj += superfecie_sj;
      }
  });
     // console.log(sum_superfecie_sj)
     var superficie_agricole_totale_sat_1 =parseFloat($('[name="superficie_agricole_totale_sat_1"]').val())
      var range_5_percent = 0.05 * sum_superfecie_sj

    //else if(superficie_agricole_totale_sat_1 > (sum_superfecie_sj + range_5_percent) || superficie_agricole_totale_sat_1 < (sum_superfecie_sj - range_5_percent)){
    //   console.log("red")
    //  }

      // Calculate the upper and lower bounds of the range
    //  console.log("range_5_percent")
    //  console.log(range_5_percent)
  var upper_bound = sum_superfecie_sj + range_5_percent;
  var lower_bound = sum_superfecie_sj - range_5_percent;
 // console.log(upper_bound)
 // console.log(lower_bound)
  // Check if SAT is within the range
  if(sum_superfecie_sj==superficie_agricole_totale_sat_1){
    message="green"
   // console.log("green")
   message="green"
   }
  else if (superficie_agricole_totale_sat_1 > lower_bound && superficie_agricole_totale_sat_1 < upper_bound) {
  //  console.log('orange')
  //  console.log("SAT is within the range (+5% and -5% of SUMSJ)");
    message="orange"
  } else {
    //console.log('red')
   // console.log("SAT is not within the range (+5% and -5% of SUMSJ)");
    message="red"
  }

  return message
}
$(document).on('input', '.controle_sumSj_sat_hectare',controleSatSumsjtest)

  /***************************************************************************************************************** */

// Bind the update function to input events on all related hectare and are inputs
$('#formContainer2').on('change', '[id^="superficie_hec_"], [id^="superficie_are_"], .code_culture_s', updateFields);

// Initialize the fields correctly on page load
//updateFields();





  $("#submitDate").click(function (e) {
    e.preventDefault();
    var message = updateFields()
    var controleSatSumsjtest2 = controleSatSumsjtest()
    // Initialize an empty array to store form data for each row
    var formDataArray = [];

    
    var formDataArrayStatut = [];

    function isValidObject(obj) {
        for (let key in obj) {
            if (obj[key]) {
                return true; // If any property is defined and not null, return true
            }
        }
        return false; // If all properties are undefined or null, return false
    }
    
    // Iterate over each .statut_juridique_s element
    $(".statut_juridique_s").each(function () {
        var formDataObjStatus = {};
    
        // Extract values from the current element
        var origine_des_terres = $(this).find("[name^='origine_des_terres']").val();
        var status_juridique = $(this).find("[name^='status_juridique']").val();
        var superfecie_sj = $(this).find("[name^='superfecie_sj']").val();
        var superfecie_sj_are = $(this).find("[name^='superfecie_sj_are']").val();
    
        // Assign values to the formDataObjStatus object
        formDataObjStatus["origine_des_terres"] = origine_des_terres;
        formDataObjStatus["status_juridique"] = status_juridique;
        formDataObjStatus["superfecie_sj"] = superfecie_sj; // Assign an empty string if the value is undefined
        formDataObjStatus["superfecie_sj_are"] = superfecie_sj_are; // Assign an empty string if the value is undefined
    
        // Check if the object contains any defined properties
        if (isValidObject(formDataObjStatus)) {
            formDataArrayStatut.push(formDataObjStatus); // Push the object to the array
        }
    });
    
    // Output the formDataArrayStatut array
    //console.log("the array:", formDataArrayStatut);
    
    

    var formDataArrayCodeCulture = [];
    // Loop over each row

    $(".code_culture_s").each(function () {
      // Initialize an object to store form data for the current row
      var formDataCodeCulture = {};
      // Get the values of the inputs within the current row
      var code_culture = $(this).find("[name^='code_culture']").val();

      var superficie_hec = $(this).find("[name^='superficie_hec']").val();
      var superficie_are = $(this).find("[name^='superficie_are']").val();
      var en_intercalaire = $(this).find("[name^='en_intercalaire']").val();
      // Add the values to the formDataObj

      formDataCodeCulture["code_culture"] = code_culture;
      formDataCodeCulture["superficie_hec"] = superficie_hec;
      formDataCodeCulture["superficie_are"] = superficie_are;
      formDataCodeCulture["en_intercalaire"] = en_intercalaire;
      // Push the formDataObj to the formDataArray
     
      if (isValidObject(formDataCodeCulture)) {
        formDataArrayCodeCulture.push(formDataCodeCulture);
        //console.log("the array:", formDataArrayCodeCulture);
    } else {
      
    }
   // //console.log(formDataArrayCodeCulture);
    });

    var formDataArrayCodeMateriel = [];
    // Loop over each row
    $(".code_materiel_s").each(function () {
        // Initialize an object to store form data for the current row
        var formDataCodeMateriel = {};

        // Get the values of the inputs within the current row
        var code_materiel = $(this).find("[name^='code_materiel']").val();
        var code_materiel_nombre = $(this).find("[name^='code_materiel_nombre']").val();
        var ee_mode_mobilisation_materiel = $(this).find("[name^='ee_mode_mobilisation_materiel']").val();
        var ee_mode_exploitation_materiel = $(this).find("[name^='ee_mode_exploitation_materiel']").val();
        
        
        // Add the values to the formDataObj
        formDataCodeMateriel["code_materiel"] = code_materiel;
        formDataCodeMateriel["code_materiel_nombre"] = code_materiel_nombre;
        formDataCodeMateriel["ee_mode_mobilisation_materiel"] = ee_mode_mobilisation_materiel;
        formDataCodeMateriel["ee_mode_exploitation_materiel"] = ee_mode_exploitation_materiel;

        // Check if the object is valid before pushing to the array
        if (isValidObject(formDataCodeMateriel)) {
            // Push the formDataObj to the formDataArray if it is valid
            formDataArrayCodeMateriel.push(formDataCodeMateriel);
            //console.log("Data for code_materiel collected:", formDataCodeMateriel);
            //console.log("Data for code_materiel collected:", formDataArrayCodeMateriel);
        } else {
            //console.log("Invalid data detected in code_materiel:", formDataCodeMateriel);
        }
    });

    // Initialize formDataObj outside the loop to make it accessible throughout the function
    var formDataObj = {};

    // Handle checkboxes explicitly to include them in formDataObj
    // $(".form-check-input").each(function () {
    //   formDataObj[this.name] = this.checked ? this.value : "0"; // Use "0" to indicate unchecked
    // });

    // Add date of passage and birth date to formDataObj
    var day_of_passage = $("#day_of_passage").val();
    var month_of_passage = $("#month_of_passage").val();
    var year_of_passage = $("#year_of_passage").val();
    var formattedDatePassage =
      day_of_passage.padStart(2, "0") +
      "-" +
      month_of_passage.padStart(2, "0") +
      "-" +
      year_of_passage;
    formDataObj["date_passage"] = formattedDatePassage;

    var jour_de_naissance = $("#jour_de_naissance").val();
    var mois_de_naissance = $("#mois_de_naissance").val();
    var annee_de_naissance = $("#annee_de_naissance").val();
    var formattedDateNaissance =
      jour_de_naissance.padStart(2, "0") +
      "-" +
      mois_de_naissance.padStart(2, "0") +"-"+annee_de_naissance;
     
    formDataObj["annee_naissance_exploitant"] = formattedDateNaissance;


  
// var formDataArraySuperficie ={};
// $(".surface").each(function () {
//   formDataArraySuperficie[this.name] = $(this).val();
// });
// console.log(formDataArraySuperficie)


var formDataArraySuperficie = [];
$(".surface").each(function() {
    formDataArraySuperficie.push({ name: this.name, value: $(this).val() });
});
//console.log(formDataArraySuperficie)





$("input[type='checkbox']").each(function() {
  formDataObj[this.name] = this.checked ? "1" : "0";
});
    // Add values of all input fields with class "bneder" to formDataObj
    $(".bneder").each(function () {
      formDataObj[this.name] = $(this).val();
      
    });


    $(function () {
      $.ajax({
        url: "assets/php/update.php",
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify({
          form: formDataObj,
          formDataArrayStatut: formDataArrayStatut,
          formDataArrayCodeMateriel: formDataArrayCodeMateriel,
          formDataArrayCodeCulture: formDataArrayCodeCulture,
          formDataArraySuperficie:formDataArraySuperficie,
          message:message,
          controleSatSumsjtest2:controleSatSumsjtest2
        }),
        dataType: "json",
        success: function (response) {
          // No need to parse response as 'dataType: "json"' does that automatically
          if (response.response === "success") {
            Swal.fire({
              icon: "success",
              title: "Succès!",
              text: "Enregistrement effectué avec succès!",
            });
          } else {
            Swal.fire({
              icon: "error",
              title: "Erreur!",
              html: "<h1 style='color:red'>Erreur lors de l'enregistrement</h1>",
            });
          }
        },
        error: function (xhr, status, error) {
          Swal.fire({
            icon: "error",
            title: "Échec de la requête",
            text:
              "Un problème est survenu lors de la requête: " + xhr.statusText,
          });
        },
      });
    });

    function qstList(etat) {
      $.ajax({
        url: url.qstList,
        method: "post",
        async: false,
        data: { etat: etat },
        success: function (response) {
          //console.log(response);

          var qst_list;
          var data = JSON.parse(response);

          for (i = 0; i < data.length; i++) {
            var etat = data[i].etat;
            var classes;
            if (etat == "Approuvés") {
              classes = "#d1e7dd;";
            } else if (etat == "Rejetés") {
              classes = "#f8d7da;";
            } else if (etat == "En attente") {
              classes = "#fff3cd;";
            }
            //   var encryptedId = CryptoJS.AES.encrypt(
            //     data[i].id_questionnaire,
            //     "your_secret_key"
            //   ).toString();

            qst_list +=
              "<tr style='border:1px solid #262626; background:" +
              classes +
              "'><td><a class='btn btn-primary updateBtn' href='questionnaire_update.php?id="+data[i].id_questionnaire +"'data-id='"+
              data[i].id_questionnaire +
              "'>Update</a></td><td>" +
              data[i].nom_exploitant +
              " " +
              data[i].prenom_exploitant +
              "</td><td>" +
              data[i].nom_exploitation +
              "</td><td>" +
              data[i].nom_exploitation +
              "</td><td>" +
              data[i].wilaya_name_ascii +
              "</td><td>" +
              data[i].commune_name_ascii +
              "</td><td></td><td>" +
              data[i].nom_recensseur +
              " " +
              data[i].prenom_recenseur +
              "</td></tr>";
          }
          $("#qst_list").empty();
          $("#qst_list").append(qst_list);
          $("#listTable").DataTable();
        },
      });
    }

    // qstList("all");

    $(".etat").click(function () {
      var etat = $(this).attr("data");
      //console.log(etat);
      qstList(etat);
    });
  });






  
  


  /***************************************************************************** */

// $('#rejected').click(function(e){
//   e.preventDefault()
//     var id_questionnaire = $('#id_questionnaire').val();
//   console.log('okkk')
//     $.ajax({
//       url:'assets/php/change_state.php',
//       method:'post',
//       async:false,
//       data:{id_questionnaire:id_questionnaire , action : "rejeter"},
//       success:function(response){
//         console.log(response)
//         Swal.fire({
//           title: "Questionnaire rejeté",
          
//           icon: "success"
//         });
//       }
//     })
//   })


  $('#rejeter').click(function(e){
    e.preventDefault()
      var id_questionnaire = $('#id_questionnaire').val();
    console.log('okkk')
      $.ajax({
        url:'assets/php/change_state.php',
        method:'post',
        async:false,
        data:{id_questionnaire:id_questionnaire , action : "rejeter"},
        success:function(response){
          console.log(response)
          Swal.fire({
            title: "Questionnaire rejeté",
            
            icon: "success"
          });
        }
      })
    })

    
  /********************************************* modification wissem 21/05/2024 10:44 ***************************************************************** */
    $('#approuver').click(function(e){
      e.preventDefault()
      var id_questionnaire = $('#id_questionnaire').val();
    
      $.ajax({
        url:'assets/php/change_state.php',
        method:'post',
        async:false,
        data:{id_questionnaire:id_questionnaire , action : "approuver"},
        success:function(response){
          console.log(response)
          Swal.fire({
            title: "Questionnaire approuvé",
            
            icon: "success"
          });
        }
      })
    })
  /********************************************* modification wissem 21/05/2024 10:44 ***************************************************************** */

  // $('#submitDate').click(function(e){
  //   e.preventDefault()
  //   var id_questionnaire = $('#id_questionnaire').val();
  
  //   $.ajax({
  //     url:'assets/php/change_state.php',
  //     method:'post',
  //     async:false,
  //     data:{id_questionnaire:id_questionnaire , action : "approuver"},
  //     success:function(response){
  //       console.log(response)
  //       Swal.fire({
  //         title: "Questionnaire approuvé",
          
  //         icon: "success"
  //       });
  //     }
  //   })
  // })
  
  /************************************************************************* */

  
  $('#exploitant').on('change', function() {
    var exploitantValue = $(this).val();
   
    // Determine which list to use based on the 'exploitant' value
   // var listToUse = (exploitantValue === "1") ? listOrigineTerre1 : listOrigineTerre;
    if(exploitantValue === "1"){

    

      listOrigineTerre ["5"]='<option selected="" disabled BoldText>-</option><option value="12">12 - Droit d’usage des forêts حق الانتفاع في استخدام الغابات للملكية العمومية</option>'
      
      
      
      listOrigineTerre ["6"]='<option selected="" disabled BoldText>-</option><option value="1">1- APFA «18-83» - ح.م.أ.ف</option><option value="2">2- Ex EAC «03-10» - م.ف.ج</option><option value="3">3- Ex EAI «م.ف,ف - « 10-03 </option><option value="4">4- Ex GCA «483-97» - ع.إ.ف</option><option value="5">5- Ex CDARS «483-97» - م.ت.ف.ر.ص</option><option value="6">6- Concession CIM 108, CIM 1839</option><option value="7">7 - Nouvelle concession ONTA  إمتياز جديد« 21-432 »</option><option value="8">8 - Nouvelle concession ODAS إمتياز جديد « 20-265 »</option><option value="9">9 - Exploitation sans titre إستغلال بدون سند « 21-432 »</option><option value="10">10 - Ferme pilote مزرعة نموذجية</option><option value="11">11 - Etablissement public (EPA, EPIC, EPE) مؤسسة عمومية</option><option value="22" BoldText>22 - Inconnu غير معروف</option>'
      
    }else{
      $('#origine_des_terres').html("<option selected='' disabled value='-'></option><option BoldText value='1'>1 - Melk personnel titré ملك شخصي موثق</option><option BoldText value='2'>2 - Melk personnel non titré ملك شخصي غير موثق</option><option BoldText value='3'>3 - Melk en indivision titré ملك مشترك موثق</option><option BoldText value='4'>4 - Melk en indivision non titré ملك مشترك غير موثق </option><option BoldText value='5'>5 - Domaine public ملكية عامة للدولة</option><option BoldText value='6'>6 - Domaine privé de l'état ملكية خاصة للدولة</option><option BoldText value='7'>7 - Wakf privé وقف خاص</option><option BoldText value='8'>8 - Wakf public وقف عام</option><option BoldText value='9'>9 - Inconnue مجهول</option>")
      
      
      
      listOrigineTerre ["6"]='<option selected="" disabled BoldText>-</option><option value="1">1- APFA «18-83» - ح.م.أ.ف</option><option value="2">2- Ex EAC «03-10» - م.ف.ج</option><option value="3">3- Ex EAI «م.ف,ف - « 10-03 </option><option value="4">4- Ex GCA «483-97» - ع.إ.ف</option><option value="5">5- Ex CDARS «483-97» - م.ت.ف.ر.ص</option><option value="6">6- Concession CIM 108, CIM 1839</option><option value="7">7 - Nouvelle concession ONTA  إمتياز جديد« 21-432 »</option><option value="8">8 - Nouvelle concession ODASإمتياز جديد « 20-265 »</option><option value="9">9 - Exploitation sans titre إستغلال بدون سند « 21-432 »</option><option value="10">10 - Ferme pilote مزرعة نموذجية</option><option value="11">11 - Etablissement public (EPA, EPIC, EPE) مؤسسة عمومية</option>'
    }
   

});






  /*************************************************** */
  //origine des terres

  var commonOptions = '<option value="13">13 - Vente/Achat بيع/شراء</option>' +
  '<option value="14" BoldText>14 - Succession إرث</option>' +
  '<option value="15" BoldText>15 - Donation هبة</option>' +
  '<option value="16" BoldText>16 - Testament وصية</option>' +
  '<option value="17" BoldText>17 - Droit préemption حق الشفاعة</option>' +
  '<option value="18" BoldText>18 - Préscription acquisitive ملكية مكتسبة</option>' +
  '<option value="19" BoldText>19 - Certificat de possession شهادة حيازة</option>' +
  '<option value="20" BoldText>20 - Location إجار</option>' +
  '<option value="21" BoldText>21 - Autre  آخرى </option>' +
  '<option value="22" BoldText>22 - Inconnu غير معروف</option>';

var listOrigineTerre = {
  "1": '<option selected="" disabled BoldText>-</option>' + commonOptions,
  "2": '<option selected="" disabled BoldText>-</option>' + commonOptions,
  "3": '<option selected="" disabled BoldText>-</option>' + commonOptions,
  "4": '<option selected="" disabled BoldText>-</option>' + commonOptions,
  "5": '<option selected="" disabled BoldText>-</option><option value="1">1- APFA «18-83» - ح.م.أ.ف</option><option value="2">2- Ex EAC «03-10» - م.ف.ج</option><option value="3">3- Ex EAI «م.ف,ف - « 10-03 </option><option value="4">4- Ex GCA «483-97» - ع.إ.ف</option><option value="5">5- Ex CDARS «483-97» - م.ت.ف.ر.ص</option><option value="6">6- Concession CIM 108, CIM 1839</option><option value="7">7 - Nouvelle concession ONTA  إمتياز جديد« 21-432 »</option><option value="8">8 - Nouvelle concession ODASإمتياز جديد « 20-265 »</option><option value="9">9 - Exploitation sans titre إستغلال بدون سند « 21-432 »</option><option value="10">10 - Ferme pilote مزرعة نموذجية</option><option value="11">11 - Etablissement public (EPA, EPIC, EPE) مؤسسة عمومية</option>',
  "6": '<option selected="" disabled BoldText>-</option><option value="1">1- APFA «18-83» - ح.م.أ.ف</option><option value="2">2- Ex EAC «03-10» - م.ف.ج</option><option value="3">3- Ex EAI «م.ف,ف - « 10-03 </option><option value="4">4- Ex GCA «483-97» - ع.إ.ف</option><option value="5">5- Ex CDARS «483-97» - م.ت.ف.ر.ص</option><option value="6">6- Concession CIM 108, CIM 1839</option><option value="7">7 - Nouvelle concession ONTA  إمتياز جديد« 21-432 »</option><option value="8">8 - Nouvelle concession ODASإمتياز جديد « 20-265 »</option><option value="9">9 - Exploitation sans titre إستغلال بدون سند « 21-432 »</option><option value="10">10 - Ferme pilote مزرعة نموذجية</option><option value="11">11 - Etablissement public (EPA, EPIC, EPE) مؤسسة عمومية</option>',
  "7": '<option selected="" disabled BoldText>-</option>' + commonOptions,
  "8": '<option selected="" disabled BoldText>-</option>' + commonOptions,
  "9": '<option selected="" disabled BoldText>-</option>' + commonOptions,
  "12": '<option value="12">12 - Droit d’usage des forêts حق الانتفاع في استخدام الغابات للملكية العمومية</option>'
};





  function filterByKey(prefix) {
    var filteredObj = {};
    Object.keys(listOrigineTerre).forEach(function(key) {
        if (key.startsWith(prefix)) {
            filteredObj[key] = listOrigineTerre[key];
        }
    });
    return filteredObj;
}


  $(document).on('change', '[id^="origine_des_terres_"]', function() {
  
    var fullId = $(this).attr('id'); // Get the full ID of the changed input
  var idPart = fullId.match(/[^_]+$/)[0]; // Extract the part after the last '_'
 // console.log(idPart); // Log the extracted part to the console

 var selectedValue = $(this).val();
 console.log(selectedValue)
 if (selectedValue !== '6') {  // Check if the selected value is not '6'
     $('#si_exploi_eai_eac').prop('disabled', true);  // Disable the second select
     $('#si_exploi_eai_eac').val('-');  // Set its value to '-'
 } else {
     $('#si_exploi_eai_eac').prop('disabled', false);  // Enable the second select if the value is '6'
 }
 

    var id = $(this).val()
  //  console.log(fullId)
    var filtered = filterByKey(id);
    
//console.log(filtered[id]);
$('#status_juridique_'+idPart).empty()
$('#status_juridique_'+idPart).append(filtered[id])
  })



  
});
