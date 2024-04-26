<?php
include('includes/header.php');
$wilaya = $_SESSION['wilaya'];
$wilaya_name = $_SESSION['wilaya_name'];
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <br>
    <br>
    <div class="card">
        <div style="text-align: center;" class="card-header">
            <div class="row">
                <div class="col-8">
                    <h5>Changer les informations du controleur</h5>
                </div>
              
            </div>
        </div>
        <div class="card-body">


            <form method="post">
             
<input type="hidden" value="<?php echo $_GET['id_user']; ?>" id="id_controleur"/>
            <b id="first_name_error"  style="color:#dc3545"></b>
                <div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-group-text" id="basic-addon-username">Prénom</span>
                    <input type="text" class="form-control" name="first_name" id="first_name" required>
                </div>
                <br>
                <b id="last_name_error"  style="color:#dc3545"></b>
                <div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-group-text" id="basic-addon-username">Nom de famille</span>
                    <input type="text" class="form-control" name="last_name" id="last_name" required>
                </div>
                <br>
                <div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-group-text" id="basic-addon-username">Wilaya</span>
                    <select required id="wilaya"  class="form-control ">
                        <option></option>
                        <option  value="<?php echo $wilaya;  ?>"><?php echo $wilaya_name;  ?></option>
                       
                    </select>
                </div>
                <br>
                <div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-group-text" id="basic-addon-username">Commune</span>
                    <select required id="commune"  multiple="multiple"  class="form-control js-example-basic-multiple">
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
                <br><div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-group-text" id="basic-addon-username">Mot de passe</span>
                    <input type="text" class="form-control" name="password" id="password" ><button  type="button" onclick="generatePassword()" class="btn btn-primary btn-sm">Generer un mot de passe</button>
                </div>
                <!-- <div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-group-text" id="basic-addon-password">Mot de passe</span>
                    <input type="text" class="form-control" name="password1" id="password1" required>
                    <button type="button" class="btn btn-secondary" onclick="generatePassword()">Générer un mot de passe</button>
                </div>
                <br>
                <div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-group-text">Confirmez le mot de passe</span>
                    <input class="form-control" name="password2" id="password2" required>
                </div> -->

                <script>
                    function generatePassword() {
                        // Generate a random 8-digit password
                        var newPassword = Math.floor(10000000 + Math.random() * 90000000);
                        
                        // Set the generated password to the password input field
                        document.getElementById("password").value = newPassword;
                        //document.getElementById("password2").value = newPassword;
                    }
                </script>
                <br>
                <button class="btn btn-success btn-lg" style="width: 100%;" id="valider">Valider</button>
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

<script src="assets/js/controleurs.js"></script>

</body>

</html>