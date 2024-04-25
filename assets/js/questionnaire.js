$(document).ready(function () {
  $("#submitDate").click(function (e) {
    e.preventDefault();

    // Initialize an empty array to store form data for each row
    var formDataArray = [];

    var formDataArrayStatut = [];
    // Loop over each row
    $(".statut_juridique_s").each(function () {
      // Initialize an object to store form data for the current row

      var formDataObjStatus = {};

      // Get the values of the inputs within the current row
      var origine_terres = $(this).find("[name^='origine_des_terres']").val();

      var mode_dexploitation = $(this)
        .find("[name^='mode_dexploitation_des_terres']")
        .val();
      var superficie_hectare = $(this)
        .find("[name^='superficie_hectare']")
        .val();
      var superficie_are = $(this).find("[name^='superficie_are']").val();

      // Add the values to the formDataObj
      formDataObjStatus["origine_des_terres"] = origine_terres;
      formDataObjStatus["mode_dexploitation_des_terres"] = mode_dexploitation;
      formDataObjStatus["superficie_hectare"] = superficie_hectare;
      formDataObjStatus["superficie_are"] = superficie_are;

      // Push the formDataObj to the formDataArray
      formDataArrayStatut.push(formDataObjStatus);
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
      formDataArrayCodeCulture.push(formDataCodeCulture);
    });

    var formDataArrayCodeMateriel = [];
    // Loop over each row
    //$(".code_materiel_s:gt(0)").each(function () {
    $(".code_materiel_s").each(function () {
      // Initialize an object to store form data for the current row
      var formDataCodeMateriel = {};

      // Get the values of the inputs within the current row
      var code_materiel = $(this).find("[name^='code_materiel']").val();
      var code_materiel_nombre = $(this)
        .find("[name^='code_materiel_nombre']")
        .val();

      // Add the values to the formDataObj
      formDataCodeMateriel["code_materiel"] = code_materiel;
      formDataCodeMateriel["code_materiel_nombre"] = code_materiel_nombre;

      // Log to console
      console.log("formDataCodeMateriel:");
      console.log(formDataCodeMateriel);

      // Push the formDataObj to the formDataArray
      formDataArrayCodeMateriel.push(formDataCodeMateriel);
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

    // Add values of all input fields with class "bneder" to formDataObj
    $(".bneder").each(function () {
      formDataObj[this.name] = $(this).val();
    });

    $(function () {
    $.ajax({
        url: "assets/php/add.php",
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify({
            form: formDataObj,
            formDataArray: formDataArray,
            formDataArrayStatut: formDataArrayStatut,
            formDataArrayCodeCulture: formDataArrayCodeCulture,
            formDataArrayCodeMateriel: formDataArrayCodeMateriel,
        }),
        dataType: "json",
        success: function (response) {
            try {
                // Parse JSON response if not already an object
                var serverResponse = typeof response === "string" ? JSON.parse(response) : response;

                // Check the response 'response' key, which indicates success or failure
                if (serverResponse.response === true) {
                    Swal.fire({
                        icon: "success",
                        title: "Succès!",
                        text: "Enregistrement effectué avec succès!",
                    });
                } else {
                    // Server responded with an error
                    Swal.fire({
                        icon: "error",
                        title: "Erreur!",
                        html: "<h1 style='color:red'>Erreur lors de l'enregistrement</h1>", // You can customize the error message here
                    });
                }
            } catch (e) {
                // Handle any parsing errors or missing keys
                Swal.fire({
                    icon: "error",
                    title: "Erreur de Format",
                    text: "La réponse du serveur n'était pas dans le format attendu: " + e.message,
                });
            }
        },
        error: function (xhr, status, error) {
            // More detailed error handling based on status and xhr state
            if (!xhr.responseText || xhr.status === 0) {
                Swal.fire({
                    icon: "error",
                    title: "Erreur de Réseau",
                    text: "Vérifiez votre connexion réseau ou l'accessibilité du serveur.",
                });
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Échec de la requête",
                    text: "Un problème est survenu lors de la requête: " + xhr.statusText,
                });
            }
        },
    });
});

  });

  function qstList(etat) {
    $.ajax({
      url: "assets/php/qst_list.php",
      method: "post",
      async: false,
      data: { etat: etat },
      success: function (response) {
        console.log(response);

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
          var encryptedId = CryptoJS.AES.encrypt(data[i].id_questionnaire.toString(), 'your_secret_key').toString();

          qst_list +=
            "<tr style='border:1px solid #262626; background:" +
            classes +
            "'><td><a class='btn btn-primary updateBtn' href='questionnaire_update.php?id="+btoa(encryptedId )+"' data-id='" + data[i].id_questionnaire + "'>Update</a></td><td>" +
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
    console.log(etat);
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
    console.log('ok')
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
             /***********************************************/
             var cultures_herbacees_2 = $('[name="cultures_herbacees_2"]').val();
             var terres_au_repos_jacheres_2 = $('[name="terres_au_repos_jacheres_2"]').val();
             var plantations_arboriculture_2 = $('[name="plantations_arboriculture_2"]').val();
             var prairies_naturelles_2 = $('[name="prairies_naturelles_2"]').val();
             var pacages_et_parcours_2 = $('[name="pacages_et_parcours_2"]').val();
             var surfaces_improductives_2 = $('[name="surfaces_improductives_2"]').val();
             var terres_forestieres_bois_forets_maquis_vides_labourables_2 = $('[name="terres_forestieres_bois_forets_maquis_vides_labourables_2"]').val();
    /********************************************** */   
             var sup_total     = null
    var sup_total =  $('#surface_totale_st_2').val()
    if(cultures_herbacees_2!="" && terres_au_repos_jacheres_2!="" && plantations_arboriculture_2!="" && prairies_naturelles_2!="" && pacages_et_parcours_2!="" && surfaces_improductives_2 !="" && terres_forestieres_bois_forets_maquis_vides_labourables_2!=""){
      if((sum_superficie_are!=undefined && sup_total!="") && (sum_superficie_are<sup_total)){
        console.log('ok')
        $('.surface_total_error_are').css('border','3px solid red')
       }else{
        $('.surface_total_error_are').css('border','')
       }
    
      }
        })
    /****************************************************************************************************************** */
    var elements = document.getElementsByClassName("surface");
    for (var i = 0; i < elements.length; i++) {
      console.log(i)
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
   
        });
    }


});