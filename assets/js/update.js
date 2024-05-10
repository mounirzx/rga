$(document).ready(function () {
 
  /*************************** recenseur details********************/
  /*************************** recenseur details********************/
  /*************************** recenseur details********************/
  /*************************** recenseur details********************/
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
        $("#nom_zone_district").val(response.nom_zone_district || "N/A");
        $("#num_zone_district").val(response.num_zone_district || "N/A");
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

  $("#submitDate").click(function (e) {
    e.preventDefault();

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
    console.log("the array:", formDataArrayStatut);
    
    

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
    
     //console.log("formDataObj");
     //console.log(formDataObj);



  
    var formDataArraySuperficie ={};
    $(".surface").each(function () {
      formDataArraySuperficie[this.name] = $(this).val();
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
         // formDataArraySol: formDataArraySol,
          //formDataArrayCodeMateriel: formDataArrayCodeMateriel,
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
});
