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
        var data = JSON.parse(response)
        console.log(data)
        if (data.success == 1) {
          $(".error").html("Veuillez remplir tous les champs");
        } else if (data.success == 2) {
          $(".error").html("Nom d'utilisateur ou mot de passe invalid ");
        } else if (data.success == 3) {

              if(data.role=="superviseur" || data.role=="controleur"){
                window.location = "stat.php";
              }  else if(data.role=="recenseur" || data.role=="admin"){
                window.location = "questionnaire.php";
              }else{
                window.location = "questionnaire.php";
              }
         
        }
      },
    }); //end ajax
  }); //end click
}); //end ready
