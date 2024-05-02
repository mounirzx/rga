$(document).ready(function () {
  $("#submitDate").click(function (e) {
    e.preventDefault();
//
    // Initialize formDataObj outside the loop to make it accessible throughout the function
    var formDataObj = {};
    var urlParams = new URLSearchParams(window.location.search);

    var id = parseInt(
      CryptoJS.AES.decrypt(
        atob(urlParams.get("id")),
        "your_secret_key"
      ).toString(CryptoJS.enc.Utf8)
    );

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
    console.log("formDataArrayStatut");
    console.log(formDataArrayStatut);

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
    formDataObj["id_questionnaire"] = id;

    // Add values of all input fields with class "bneder" to formDataObj
    $(".bneder").each(function () {
      formDataObj[this.name] = $(this).val();
    });
    console.log(
      "formDataObj++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++"
    );
    console.log(formDataObj);
    $(function () {
      $.ajax({
        url: "assets/php/update.php",
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify({
          form: formDataObj,
          formDataArrayStatut: formDataArrayStatut,
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
            //   var encryptedId = CryptoJS.AES.encrypt(
            //     data[i].id_questionnaire,
            //     "your_secret_key"
            //   ).toString();

            qst_list +=
              "<tr style='border:1px solid #262626; background:" +
              classes +
              "'><td><a class='btn btn-primary updateBtn' href='questionnaire_update.php?id=" +
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
      console.log(etat);
      qstList(etat);
    });
  });
});