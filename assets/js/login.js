$(document).ready(function () {
   // Function to start the countdown timer
   function startCountdown(remainingTime) {
    var countdownInterval = setInterval(function () {
        $(".error").html("Trop de tentatives de connexion. Veuillez réessayer dans " + remainingTime + " secondes.");
        remainingTime--;
        if (remainingTime < 0) {
            clearInterval(countdownInterval);
            $(".error").html(""); // Clear the message after the countdown ends
            enableLoginButton(); // Enable the login button after cooldown ends
            // Remove the remaining time from local storage after the cooldown ends
            localStorage.removeItem('cooldownRemainingTime');
        } else {
            // Update the remaining time in local storage
            localStorage.setItem('cooldownRemainingTime', remainingTime);
        }
    }, 1000);
}

// Check if there is a cooldown message stored in local storage
var cooldownRemainingTime = localStorage.getItem('cooldownRemainingTime');
if (cooldownRemainingTime) {
    // Start countdown with the remaining time retrieved from local storage
    disableLoginButton(); // Disable login button during cooldown
    startCountdown(cooldownRemainingTime);
}

/*********************************************************************************** */
$("#username").on("input", function() {
    var inputText = $(this).val();
    var upperCaseText = inputText.toUpperCase();
    $(this).val(upperCaseText);
});
/**************************************************************************************** */
  $("#login").click(function (e) {
      e.preventDefault();

      //data
      var username = $("#username").val();
      var password = $("#password").val();

      $.ajax({
          url: url.Login,
          method: "post",
          data: { username: username, password: password },
          success: function (response) {
              var data = JSON.parse(response);
              console.log(data); // Log the response for debugging
              if (data.success == 1) {
                  $(".error").html("Veuillez remplir tous les champs");
              } else if (data.success == 2) {
                  $(".error").html("Nom d'utilisateur ou mot de passe invalide");
              } else if (data.success == 3) {
                  if (data.role == "superviseur" || data.role == "controleur" || data.role=="superviseur_national") {
                      window.location = "Statistiques";
                  } else if (data.role == "recenseur" || data.role == "admin") {
                      window.location = "Questionnaire";
                  } else {
                      window.location = "Questionnaire";
                  }
              } else if (data.success == 4) {
                  console.log(data.message); // Log the cooldown message for debugging
                  $(".error").html(data.message); // Display the cooldown message
                  var remainingTime = parseInt(data.message.match(/\d+/)[0]); // Extract remaining time from the message
                  disableLoginButton(); // Disable login button during cooldown
                  startCountdown(remainingTime); // Start countdown
                  // Store remaining time in local storage
                  localStorage.setItem('cooldownRemainingTime', remainingTime);
              }
          },
          error: function () {
              $(".error").html("Une erreur s'est produite lors de la connexion. Veuillez réessayer.");
          }
      }); //end ajax
  }); //end click

  // Retrieve remaining time from local storage and start countdown
  var remainingTime = parseInt(localStorage.getItem('cooldownRemainingTime'));
  if (remainingTime > 0) {
      startCountdown(remainingTime);
  }
});

function disableLoginButton() {
  $("#login").prop("disabled", true);
}

function enableLoginButton() {
  $("#login").prop("disabled", false);
}

function startCountdown(remainingTime) {
  var countdownInterval = setInterval(function () {
      $(".error").html("Trop de tentatives de connexion. Veuillez réessayer dans " + remainingTime + " secondes.");
      remainingTime--;
      if (remainingTime < 0) {
          clearInterval(countdownInterval);
          $(".error").html(""); // Clear the message after the countdown ends
          enableLoginButton(); // Enable the login button after cooldown ends
          // Remove the remaining time from local storage after the cooldown ends
          localStorage.removeItem('cooldownRemainingTime');
      } else {
          // Update the remaining time in local storage
          localStorage.setItem('cooldownRemainingTime', remainingTime);
      }
  }, 1000);
}
