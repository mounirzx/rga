$(document).ready(function () {
  $("#login").click(function (e) {
    e.preventDefault();

    //data
    var username = $("#username").val();
    var password = $("#password").val();

    $.ajax({
      url: "assets/php/login.php",
      method: "post",
      data: { username: username, password: password },
      success: function (response) {
        console.log(response);
        if (response == 1) {
          $(".error").html("Veuillez remplir tous les champs");
        } else if (response == 2) {
          $(".error").html("Nom d'utilisateur ou mot de passe invalid ");
        } else if (response == 3) {
          window.location = "questionnaire.php";
        }
      },
    }); //end ajax
  }); //end click
}); //end ready
