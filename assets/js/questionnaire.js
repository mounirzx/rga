$(document).ready(function () {
  $.ajax({
    url: url.GetData,
    dataType: "json",
    success: function (response) {
    //  console.log(response);
      if (response.reponse !== "false") {
        $("#nom_recensseur").val(response.nom_recensseur || "N/A");
        $("#prenom_recenseur").val(response.prenom_recenseur || "N/A");
        $("#nom_controleur").val(response.nom_controleur || "N/A");
        $("#prenom_controleur").val(response.prenom_controleur || "N/A");

        $("#wilaya_name_ascii").val(response.wilaya_name_ascii || "N/A");
        $("#commune_name_ascii").val(response.commune_name_ascii || "N/A");
        $("#commune_code").val(response.r_commune || "N/A");
        $("#nom_zone_district").val(response.nom_zone_district || "N/A");
        $("#num_zone_district").val(response.num_zone_district || "N/A");
      } else {
        console.error("Error: " + response.message);
      }
    },
    error: function (xhr, status, error) {
      console.error("AJAX Error:", status, error);
    },
  });

  $("#submitDate").click(function (e) {
    e.preventDefault();

    // Initialize an empty array to store form data for each row
    var formDataArray = [];

    var formDataArrayStatut = [];
    function isValidObject(obj) {
      for (let key in obj) {
          if (obj[key] == 'undefined' || obj[key] == undefined || obj[key] == 'null' ) {
              return false; // If any property is undefined, null, or an empty string, return false
          }
      }
      return true; // If all properties are valid, return true
  }
  
  // Assuming formDataArrayStatut is already defined

  
  $(".statut_juridique_s").each(function () {
      // Initialize an object to store form data for the current row
      var formDataObjStatus = {};
  
      // Get the values of the inputs within the current row
      var origine_des_terres = $(this).find("[name^='origine_des_terres']").val();
      var status_juridique = $(this).find("[name^='status_juridique']").val();
      var superfecie_sj = $(this).find("[name^='superfecie_sj']").val();
      var superfecie_sj_are = $(this).find("[name^='superfecie_sj_are']").val();
  
      // Add the values to the formDataObj
      formDataObjStatus["origine_des_terres"] = origine_des_terres;
      formDataObjStatus["status_juridique"] = status_juridique;
      formDataObjStatus["superfecie_sj"] = superfecie_sj;
      formDataObjStatus["superfecie_sj_are"] = superfecie_sj_are;
  
      // Check if formDataObjStatus contains valid data before adding it to the array
      if (isValidObject(formDataObjStatus)) {
          formDataArrayStatut.push(formDataObjStatus);
          console.log("the array:", formDataArrayStatut);
      } else {
        
      }
  });

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
        console.log("the array:", formDataArrayCodeCulture);
    } else {
      
    }
   // console.log(formDataArrayCodeCulture);
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
            console.log("Data for code_materiel collected:", formDataCodeMateriel);
            console.log("Data for code_materiel collected:", formDataArrayCodeMateriel);
        } else {
            console.log("Invalid data detected in code_materiel:", formDataCodeMateriel);
        }
    });

    // Initialize formDataObj outside the loop to make it accessible throughout the function
    var formDataObj = {};

    // Handle checkboxes explicitly to include them in formDataObj
    $(".form-check-input").each(function () {
      formDataObj[this.name] = this.checked ? this.value : "0"; // Use "0" to indicate unchecked
    });

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
      mois_de_naissance.padStart(2, "0") +
      "-" +
      annee_de_naissance +
      "-";
    formDataObj["annee_naissance_exploitant"] = formattedDateNaissance;



  
    var formDataArraySuperficie ={};
    $(".surface").each(function () {
      formDataArraySuperficie[this.name] = $(this).val();
    });
   

console.log(formDataArraySuperficie)


    // Add values of all input fields with class "bneder" to formDataObj
    $(".bneder").each(function () {
      formDataObj[this.name] = $(this).val();
    });


   
    console.log("formDataObj");
    console.log(formDataObj);
    $(function () {
      $.ajax({
        url: url.InsertQst,
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify({
          form: formDataObj,
          formDataArrayStatut: formDataArrayStatut,
          formDataArrayCodeCulture: formDataArrayCodeCulture,
          formDataArrayCodeMateriel: formDataArrayCodeMateriel,
          formDataArraySuperficie: formDataArraySuperficie,
        }),
        dataType: "json",
        success: function (response) {
          if (response.response) {
            Swal.fire({
              icon: "success",
              title: "Succès!",
              text: "Enregistrement effectué avec succès!"
            });
          } else {
            Swal.fire({
              icon: "error",
              title: "Erreur!",
              text: "Erreur lors de l'enregistrement: " + (response.error || "Erreur inconnue")
            });
          }
        },
        error: function (xhr, status, error) {
          // Check if there is a response text and if it contains valid JSON
          if (xhr.responseText) {
            try {
              var resp = JSON.parse(xhr.responseText);
              if (resp && resp.error) {
                Swal.fire({
                  icon: "error",
                  title: "Erreur de traitement",
                  text: "Erreur lors de l'enregistrement: " + resp.error
                });
              } else {
                Swal.fire({
                  icon: "error",
                  title: "Erreur de Réseau",
                  text: "Réponse inattendue du serveur: " + xhr.responseText
                });
              }
            } catch (e) {
              Swal.fire({
                icon: "error",
                title: "Erreur de format",
                text: "Réponse non JSON du serveur: " + xhr.responseText
              });
            }
          } else {
            Swal.fire({
              icon: "error",
              title: "Échec de la requête",
              text: "Un problème est survenu lors de la requête: " + error
            });
          }
        }
      });
    });
    
  });

  function qstList(etat) {
    $.ajax({
      url: url.qstList,
      method: "post",
      async: false,
      data: { etat: etat },
      success: function (response) {
      //  console.log(response);

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
          // var encryptedId = CryptoJS.AES.encrypt(data[i].id_questionnaire, 'your_secret_key').toString();
          var encryptedId = CryptoJS.AES.encrypt(
            data[i].id_questionnaire.toString(),
            "your_secret_key"
          ).toString();

          qst_list +=
            "<tr style='border:1px solid #262626; background:" +
            classes +
            "'><td><a class='btn btn-primary updateBtn' href="+url.questionnairePreview+"?id=" +
            btoa(encryptedId) +
            "' data-id='" +
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
   // console.log(etat);
    qstList(etat);
  });






/********************************************************************************/
// $(document).on('keyup', '.coherence_surface_total-surface', function () {
//   var sum_superficie_hectare = 0;

//   $(".statut_juridique_s").each(function () {
//       var superficie_hectare = parseFloat($(this).find("[name^='superficie_hectare']").val());
//       if (!Number.isNaN(superficie_hectare)) {
//           sum_superficie_hectare += superficie_hectare;
//       }
//   });

//   var cultures_herbacees_1 = $('[name="cultures_herbacees_1"]').val(),
//       terres_au_repos_jacheres_1 = $('[name="terres_au_repos_jacheres_1"]').val(),
//       plantations_arboriculture_1 = $('[name="plantations_arboriculture_1"]').val(),
//       prairies_naturelles_1 = $('[name="prairies_naturelles_1"]').val(),
//       pacages_et_parcours_1 = $('[name="pacages_et_parcours_1"]').val(),
//       surfaces_improductives_1 = $('[name="surfaces_improductives_1"]').val(),
//       terres_forestieres_bois_forets_maquis_vides_labourables_1 = $('[name="terres_forestieres_bois_forets_maquis_vides_labourables_1"]').val();

//   // Check if all inputs are defined and not empty
//   if (cultures_herbacees_1 && terres_au_repos_jacheres_1 && plantations_arboriculture_1 &&
//       prairies_naturelles_1 && pacages_et_parcours_1 && surfaces_improductives_1 &&
//       terres_forestieres_bois_forets_maquis_vides_labourables_1) {
      


//        var sup_total =  $('#surface_totale_st_1').val()
//       // var sup_total = (
//       //     parseFloat(cultures_herbacees_1) || 0 +
//       //     parseFloat(terres_au_repos_jacheres_1) || 0 +
//       //     parseFloat(plantations_arboriculture_1) || 0 +
//       //     parseFloat(prairies_naturelles_1) || 0 +
//       //     parseFloat(pacages_et_parcours_1) || 0 +
//       //     parseFloat(surfaces_improductives_1) || 0 +
//       //     parseFloat(terres_forestieres_bois_forets_maquis_vides_labourables_1) || 0
//       // );
//       console.log(sum_superficie_hectare)
//       console.log(sup_total)
//       if (sum_superficie_hectare > sup_total) {
//           $('.coherence_surface_total-surface').css('border', '3px solid red');
//       } else {
//           $('.coherence_surface_total-surface').css('border', '');
//       }
//   } else {
//       $('.coherence_surface_total-surface').css('border', '');
//   }
// });




$(document).on('keyup','.coherence_surface_total-surface',function(){

  /***********************************************/
    var sum_superficie_hectare= 0

        $(".statut_juridique_s").each(function () {
          var superficie_hectare = $(this).find("[name^='superficie_hectare']").val();
          superficie_hectare=parseFloat(superficie_hectare)
            if (!isNaN(superficie_hectare) && superficie_hectare !== null && superficie_hectare !== undefined) {
              sum_superficie_hectare += superficie_hectare;
            }
        });
         /***********************************************/
         var cultures_herbacees_1 = $('[name="cultures_herbacees_1"]').val();
         var terres_au_repos_jacheres_1 = $('[name="terres_au_repos_jacheres_1"]').val();
         var plantations_arboriculture_1 = $('[name="plantations_arboriculture_1"]').val();
         var prairies_naturelles_1 = $('[name="prairies_naturelles_1"]').val();
         var pacages_et_parcours_1 = $('[name="pacages_et_parcours_1"]').val();
         var surfaces_improductives_1 = $('[name="surfaces_improductives_1"]').val();
         var terres_forestieres_bois_forets_maquis_vides_labourables_1 = $('[name="terres_forestieres_bois_forets_maquis_vides_labourables_1"]').val();
/********************************************** */   
         var sup_total     = null
var sup_total =  $('#surface_totale_st_1').val()
if(cultures_herbacees_1!="" && terres_au_repos_jacheres_1!="" && plantations_arboriculture_1!="" && prairies_naturelles_1!="" && pacages_et_parcours_1!="" && surfaces_improductives_1 !="" && terres_forestieres_bois_forets_maquis_vides_labourables_1!=""){
  if((sum_superficie_hectare!=undefined && sup_total!="") && (sum_superficie_hectare<sup_total)){
    //console.log('ok')
    $('.surface_total_error').css('border','3px solid red')
   }else{
    $('.surface_total_error').css('border','')
   }

  }
    })



    /***************************************************************************************************************** */


    $(document).on('keyup','.coherence_surface_total-surface_are',function(){

      /***********************************************/
        var sum_superficie_are= 0
    
            $(".statut_juridique_s").each(function () {
              var superficie_are = $(this).find("[name^='superficie_are']").val();
              superficie_are=parseFloat(superficie_are)
                if (!isNaN(superficie_are) && superficie_are !== null && superficie_are !== undefined) {
                  sum_superficie_are += superficie_are;
                }
            });

            //console.log(sum_superficie_are)
             /***********************************************/
             var cultures_herbacees_2 = $('[name="cultures_herbacees_2"]').val();
             var terres_au_repos_jacheres_2 = $('[name="terres_au_repos_jacheres_2"]').val();
             var plantations_arboriculture_2 = $('[name="plantations_arboriculture_2"]').val();
             var prairies_naturelles_2 = $('[name="prairies_naturelles_2"]').val();
             var pacages_et_parcours_2 = $('[name="pacages_et_parcours_2"]').val();
             var surfaces_improductives_2 = $('[name="surfaces_improductives_2"]').val();
             var terres_forestieres_bois_forets_maquis_vides_labourables_2 = $('[name="terres_forestieres_bois_forets_maquis_vides_labourables_2"]').val();
    /********************************************** */   
          
    var sup_total_are =  $('#surface_totale_st_2').val()
    //console.log(sup_total_are)

    //console.log(cultures_herbacees_2+' '+terres_au_repos_jacheres_2+' '+plantations_arboriculture_2+' '+prairies_naturelles_2+' '+pacages_et_parcours_2+' '+surfaces_improductives_2+' '+terres_forestieres_bois_forets_maquis_vides_labourables_2)
    if(cultures_herbacees_2!="" && terres_au_repos_jacheres_2!="" && plantations_arboriculture_2!="" && prairies_naturelles_2!="" && pacages_et_parcours_2!="" && surfaces_improductives_2 !="" && terres_forestieres_bois_forets_maquis_vides_labourables_2!=""){
      if((sum_superficie_are!=undefined && sup_total_are!="") && (sum_superficie_are<sup_total_are)){
      //  console.log('ok')
        $('.surface_total_error_are').css('border','3px solid red')
       }else{
        $('.surface_total_error_are').css('border','')
       }
    
      }
        })
    /****************************************************************************************************************** */
    var elements = document.getElementsByClassName("surface");
    for (var i = 0; i < elements.length; i++) {
    
        elements[i].addEventListener("input", function () {
          var prairies_naturelles_1 = parseFloat(document.getElementsByName("prairies_naturelles_1")[0].value) || 0;
          var plantations_arboriculture_1 = parseFloat(document.getElementsByName("plantations_arboriculture_1")[0].value) || 0;
          var terres_au_repos_jacheres_1 = parseFloat(document.getElementsByName("terres_au_repos_jacheres_1")[0].value) || 0;
          var cultures_herbacees_1 = parseFloat(document.getElementsByName("cultures_herbacees_1")[0].value) || 0;
          var superficie_agricole_utile_sau_1 = prairies_naturelles_1 + plantations_arboriculture_1 + terres_au_repos_jacheres_1 + cultures_herbacees_1;
          document.getElementsByName("superficie_agricole_utile_sau_1")[0].value = (superficie_agricole_utile_sau_1).toFixed(2);
   
          var prairies_naturelles_2 = parseFloat(document.getElementsByName("prairies_naturelles_2")[0].value) || 0;
          var plantations_arboriculture_2 = parseFloat(document.getElementsByName("plantations_arboriculture_2")[0].value) || 0;
          var terres_au_repos_jacheres_2 = parseFloat(document.getElementsByName("terres_au_repos_jacheres_2")[0].value) || 0;
          var cultures_herbacees_2 = parseFloat(document.getElementsByName("cultures_herbacees_2")[0].value) || 0;
          var superficie_agricole_utile_sau_2 = prairies_naturelles_2 + plantations_arboriculture_2 + terres_au_repos_jacheres_2 + cultures_herbacees_2;
          document.getElementsByName("superficie_agricole_utile_sau_2")[0].value = (superficie_agricole_utile_sau_2).toFixed(2);
   
   
          var prairies_naturelles_3 = parseFloat(document.getElementsByName("prairies_naturelles_3")[0].value) || 0;
          var plantations_arboriculture_3 = parseFloat(document.getElementsByName("plantations_arboriculture_3")[0].value) || 0;
          var terres_au_repos_jacheres_3 = parseFloat(document.getElementsByName("terres_au_repos_jacheres_3")[0].value) || 0;
          var cultures_herbacees_3 = parseFloat(document.getElementsByName("cultures_herbacees_3")[0].value) || 0;
          var superficie_agricole_utile_sau_3 = prairies_naturelles_3 + plantations_arboriculture_3 + terres_au_repos_jacheres_3 + cultures_herbacees_3;
          document.getElementsByName("superficie_agricole_utile_sau_3")[0].value = (superficie_agricole_utile_sau_3).toFixed(2);
   
          var prairies_naturelles_4 = parseFloat(document.getElementsByName("prairies_naturelles_4")[0].value) || 0;
          var plantations_arboriculture_4 = parseFloat(document.getElementsByName("plantations_arboriculture_4")[0].value) || 0;
          var terres_au_repos_jacheres_4 = parseFloat(document.getElementsByName("terres_au_repos_jacheres_4")[0].value) || 0;
          var cultures_herbacees_4 = parseFloat(document.getElementsByName("cultures_herbacees_4")[0].value) || 0;
          var superficie_agricole_utile_sau_4 = prairies_naturelles_4 + plantations_arboriculture_4 + terres_au_repos_jacheres_4 + cultures_herbacees_4;
          document.getElementsByName("superficie_agricole_utile_sau_4")[0].value = (superficie_agricole_utile_sau_4).toFixed(2);
   
   
          var pacages_et_parcours_1 = parseFloat(document.getElementsByName("pacages_et_parcours_1")[0].value) || 0;
          var surfaces_improductives_1 = parseFloat(document.getElementsByName("surfaces_improductives_1")[0].value) || 0;
          var superficie_agricole_totale_sat_1 = pacages_et_parcours_1 + surfaces_improductives_1 + superficie_agricole_utile_sau_3
          document.getElementsByName("superficie_agricole_totale_sat_1")[0].value = (superficie_agricole_totale_sat_1 + superficie_agricole_utile_sau_1).toFixed(2);
   
          var pacages_et_parcours_2 = parseFloat(document.getElementsByName("pacages_et_parcours_2")[0].value) || 0;
          var surfaces_improductives_2 = parseFloat(document.getElementsByName("surfaces_improductives_2")[0].value) || 0;
          var superficie_agricole_totale_sat_2 = pacages_et_parcours_2 + surfaces_improductives_2 + superficie_agricole_utile_sau_4
          document.getElementsByName("superficie_agricole_totale_sat_2")[0].value = (superficie_agricole_totale_sat_2 + superficie_agricole_utile_sau_2).toFixed(2);
   
          var terres_forestieres_bois_forets_maquis_vides_labourables_1 = parseFloat(document.getElementsByName("terres_forestieres_bois_forets_maquis_vides_labourables_1")[0].value) || 0;
          var surface_totale_st_1 = terres_forestieres_bois_forets_maquis_vides_labourables_1
          document.getElementsByName("surface_totale_st_1")[0].value = (surface_totale_st_1 + superficie_agricole_totale_sat_1 + superficie_agricole_utile_sau_1).toFixed(2);
          
   
          var terres_forestieres_bois_forets_maquis_vides_labourables_2 = parseFloat(document.getElementsByName("terres_forestieres_bois_forets_maquis_vides_labourables_2")[0].value) || 0;
          var surface_totale_st_2 = terres_forestieres_bois_forets_maquis_vides_labourables_2
          document.getElementsByName("surface_totale_st_2")[0].value = (surface_totale_st_2 + superficie_agricole_totale_sat_2 + superficie_agricole_utile_sau_2).toFixed(2);

/******************************** */


if(superficie_agricole_utile_sau_2>100){
  console.log(superficie_agricole_utile_sau_1)
var divisor = 100;
// Calculate the quotient (result of integer division)
var divider =  prairies_naturelles_2 + plantations_arboriculture_2 + terres_au_repos_jacheres_2 + cultures_herbacees_2;
var quotient = Math.floor(divider / divisor);
// Calculate the remainder
var superficie_agricole_utile_sau_2 = divider % divisor;
$('input[name="superficie_agricole_utile_sau_1"]').val(parseFloat(superficie_agricole_utile_sau_1)+parseFloat(quotient.toFixed(2)));
$('input[name="superficie_agricole_utile_sau_2"]').val(superficie_agricole_utile_sau_2.toFixed(2));
 document.getElementsByName("superficie_agricole_totale_sat_2")[0].value = (superficie_agricole_totale_sat_2 + superficie_agricole_utile_sau_2).toFixed(2);
 document.getElementsByName("surface_totale_st_2")[0].value = (surface_totale_st_2 + superficie_agricole_totale_sat_2 + superficie_agricole_utile_sau_2).toFixed(2);
 document.getElementsByName("superficie_agricole_totale_sat_1")[0].value = (superficie_agricole_utile_sau_1+superficie_agricole_totale_sat_1 + quotient).toFixed(2);
 document.getElementsByName("surface_totale_st_1")[0].value = (superficie_agricole_utile_sau_1+surface_totale_st_1 + superficie_agricole_totale_sat_1 + quotient).toFixed(2);
}

if(superficie_agricole_utile_sau_4>=100){
console.log(superficie_agricole_utile_sau_4)
  var divisor = 100;
  var divider = prairies_naturelles_4 + plantations_arboriculture_4 + terres_au_repos_jacheres_4 + cultures_herbacees_4;
  var superficie_agricole_utile_sau_4 = divider % divisor;
  var quotient = Math.floor(divider / divisor);
  $('input[name="superficie_agricole_utile_sau_3"]').val(parseFloat(superficie_agricole_utile_sau_3)+parseFloat(quotient.toFixed(2)));
  $('input[name="superficie_agricole_utile_sau_4"]').val(superficie_agricole_utile_sau_4.toFixed(2));
  var superficie_agricole_totale_sat_2 = pacages_et_parcours_2 + surfaces_improductives_2 + superficie_agricole_utile_sau_4
  document.getElementsByName("superficie_agricole_totale_sat_2")[0].value = (superficie_agricole_totale_sat_2 + superficie_agricole_utile_sau_2).toFixed(2);
  document.getElementsByName("surface_totale_st_2")[0].value = (surface_totale_st_2 + superficie_agricole_totale_sat_2 + superficie_agricole_utile_sau_2).toFixed(2);
}

   
        });
    }







    $('#exploitant').on('change', function() {
      var exploitantValue = $(this).val();
     
      // Determine which list to use based on the 'exploitant' value
     // var listToUse = (exploitantValue === "1") ? listOrigineTerre1 : listOrigineTerre;
      if(exploitantValue === "1"){


        $('#origine_des_terres').html("<option selected='' disabled BoldText>-</option><option BoldText value='6'>6 - Domaine privé de létat ملكية خاصة للدولة</option>")


        
        
        
        listOrigineTerre ["6"]='<option selected="" disabled BoldText>-</option><option value="1">1- APFA «18-83» - ح.م.أ.ف</option><option value="3">3- Ex EAI «م.ف,ف - « 10-03 </option><option value="4">4- Ex GCA «483-97» - ع.إ.ف</option><option value="5">5- Ex CDARS «483-97» - م.ت.ف.ر.ص</option><option value="6">6- Concession CIM 108, CIM 1839</option><option value="7">7 - Nouvelle concession ONTA  إمتياز جديد« 21-432 »</option><option value="8">8 - Nouvelle concession ODASإمتياز جديد « 20-265 »</option><option value="9">9 - Exploitation sans titre إستغلال بدون سند « 21-432 »</option><option value="11">11 - Etablissement public (EPA, EPIC, EPE) مؤسسة عمومية</option>'
        
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
    '<option value="18" BoldText>18 - Préscription acquisitive ملكية مكتسبة</option>';

    var listOrigineTerre = {
      "1": '<option selected="" disabled BoldText>-</option>' + commonOptions,
      "2": '<option selected="" disabled BoldText>-</option>' + commonOptions,
      "3": '<option selected="" disabled BoldText>-</option>' + commonOptions,
      "4": '<option selected="" disabled BoldText>-</option>' + commonOptions,
      "5": '<option selected="" disabled BoldText>-</option><option value="12">12 - Droit d’usage des forêts حق الانتفاع في استخدام الغابات للملكية العمومية</option>',
      "6": '<option selected="" disabled BoldText>-</option><option value="1">1- APFA «18-83» - ح.م.أ.ف</option><option value="2">2- Ex EAC «03-10» - م.ف.ج</option><option value="3">3- Ex EAI «م.ف,ف - « 10-03 </option><option value="4">4- Ex GCA «483-97» - ع.إ.ف</option><option value="5">5- Ex CDARS «483-97» - م.ت.ف.ر.ص</option><option value="6">6- Concession CIM 108, CIM 1839</option><option value="7">7 - Nouvelle concession ONTA  إمتياز جديد« 21-432 »</option><option value="8">8 - Nouvelle concession ODASإمتياز جديد « 20-265 »</option><option value="9">9 - Exploitation sans titre إستغلال بدون سند « 21-432 »</option><option value="10">10 - Ferme pilote مزرعة نموذجية</option><option value="11">11 - Etablissement public (EPA, EPIC, EPE) مؤسسة عمومية</option>',
      "7": '<option selected="" disabled BoldText>-</option>' + commonOptions,
      "8": '<option selected="" disabled BoldText>-</option>' + commonOptions,
      "9": '<option selected="" disabled BoldText>-</option>' + commonOptions
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
