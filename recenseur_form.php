<?php
include('includes/header.php');

$role = $_SESSION['role'];

?>


<body>
    <br>
    <br>
    <div class="card">
        <div style="text-align: center;" class="card-header">
            <div class="row">
                <div class="col-8">
                    <h5>Changer les informations du recenseur</h5>
                </div>
              
            </div>
        </div>
        <div class="card-body">


            <form method="post">
             
<input type="hidden" value="<?php echo $_GET['id_user']; ?>" id="id_recenseur"/>

<?php 

if(isset($_GET['controleur'])){

    ?>
<input type="hidden" value="<?php echo $_GET['controleur']; ?>" id="controleur"/>
    <?php
}
?>

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
                    <span style="width: 180px;" class="input-group-text" id="basic-addon-username">Commune</span>
                    <select required id="commune"  class="form-control">
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

                    <?php 
if($role=="admin"){

    ?>
 <input type="text" class="form-control" name="username" id="username">
            
<?php 


}

else{

    ?>
 <input type="text" class="form-control" name="username" id="username"  disabled >
<?php 
}
                    ?>
                 
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
   <script src="static/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="static/vendor/bootstrap/js/popper.js"></script>
    <script src="static/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="static/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="static/vendor/tilt/tilt.jquery.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.min.js"></script>

<script src="assets/js/recenseur.js"></script>

</body>

</html>