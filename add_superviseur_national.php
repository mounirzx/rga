<?php
include('includes/header.php');
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
    <br>
    <br>
    <div class="card">
        <div style="text-align: center;" class="card-header">
            <div class="row">
                <div class="col-8">
                <h5>Ajouter un superviseur national</h5>
                </div>
              
            </div>
        </div>
        <div class="card-body">


            <form method="post">
             
            <b id="first_name_error"  style="color:#dc3545"></b>
                <div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-group-text" id="basic-addon-username">Prénom</span>
                    <input type="text" class="form-control" name="last_name" id="last_name" required>
                </div>
                <br>
                <b id="last_name_error"  style="color:#dc3545"></b>
                <div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-group-text" id="basic-addon-username">Nom de famille</span>
                    <input type="text" class="form-control" name="first_name" id="first_name" required>
                </div>
                <br>
                <div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-group-text" id="basic-addon-username">Wilaya</span>
                    <select required id="wilaya"  multiple="multiple"  class="form-control js-example-basic-multiple">
                        <option></option>
                     
                    </select>
                </div>
              
               
                <br>
                <b id="email_error" style="color:#dc3545"></b>
                <div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-group-text" id="basic-addon-email">E-mail</span>
                    <input type="email" class="form-control" name="email" id="email"  required>
                </div>
                <br>
          
                <div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-group-text" id="basic-addon-phone">Téléphone</span>
                    <input type="text" class="form-control" name="phone" id="phone" required>
                </div>
              
         
               
           
                <hr>
              
                <div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-group-text" id="basic-addon-username">Nom d'utilisateur</span>
                    <input type="text" class="form-control" name="username" id="username" disabled>
                </div>
                <br>
                <div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-group-text" id="basic-addon-username">Mot de passe</span>
                    <input type="text" class="form-control" name="password" id="password" ><button  type="button" onclick="generatePassword()" class="btn btn-primary btn-sm">Generer un mot de passe</button>
                </div>
               
           

       
                <br>
                <button class="btn btn-success btn-lg" style="width: 100%;" id="add_user">Valider</button>
            </form>
        </div>
    </div>



   <!--===============================================================================================-->

    <!--===============================================================================================-->
    <script src="static/vendor/bootstrap/js/popper.js"></script>
    <script src="static/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="static/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="static/vendor/tilt/tilt.jquery.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" ></script>

<script src="assets/js/superviseurs_national.js"></script>
<script>
function generatePassword() {
    var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!!@@##&&**--()__++//:,.??"; // Define the characters to be used in the password
    var password = "";
    var length = 8; // Define the desired length of the password

    for (var i = 0; i < length; i++) {
        var randomIndex = Math.floor(Math.random() * charset.length); // Get a random index from the charset
        password += charset[randomIndex]; // Append the character at the random index to the password
    }
    
    // Set the generated password to the password input fields
    document.getElementById("password").value = password;
    document.getElementById("password2").value = password;
}
</script>

</body>

</html>