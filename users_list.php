<?php
include('includes/header.php');
?>

<body>
    <br>
    <br>
    <div class="card">
        <div style="text-align: center;" class="card-header">
            <div class="row">
                <div class="col-8">
                    <h5>List des utilisateurs</h5>
                </div>
             <div class="col-3">
             <!-- <a class="btn btn-success" href="./add_superviseur.php">Ajouter superviseur</a> -->
             </div>
            </div>
            
            
            

        </div>
    



        <hr>
        <div class="container">
            <div class="card">
                <div style="text-align: center;" class="card-header">
                        <h6>Liste des utilisateurs</h6>
                       
                    
                </div>
                <div class="card-body">
                    <table class="table table-hover" id="tableUsers">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom d'utilisateur</th>
                                <th scope="col">Wilaya</th>
                                <th scope="col">Commune</th>
                                <th scope="col">Nom complet</th>
                                <th scope="col">Téléphone</th>
                                <th scope="col">Rôle</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="list_users" >
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <br>



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
<!-- <script src="./assets/js/superviseurs.js"></script> -->

<script>



    $(document).ready(function(){

        function getUsersList(){
            $.ajax({
                url:'assets/php/utilisateurs_list.php',
                method:'post',
                async:false,
                success:function(response){
                    console.log(response)

                        var data = JSON.parse(response)
                    var list_users=""
                    for(var i = 0; i < data.length ; i++){
                        var nom="";
                        var prenom="";
                        var wilaya="-"; 
                        var commune="-"
                        var phone="";
                        
                            if(data[i].role=="superviseur_national"){
                                nom =  data[i].nom_superviseur_national
                                prenom =  data[i].prenom_superviseur_national
                                wilaya =  data[i].wilaya
                                phone =  data[i].phone
                            }if(data[i].role=="superviseur"){
                                nom =  data[i].nom_superviseur
                                prenom =  data[i].prenom_superviseur
                                wilaya =  data[i].wilaya_sup
                                phone =  data[i].superviseur_phone
                            }if(data[i].role=="controleur"){
                                nom =  data[i].nom_controleur
                                prenom =  data[i].prenom_controleur
                                wilaya =  data[i].controleur_wilaya
                                phone =  data[i].controleur_phone
                                commune =  data[i].controleur_commune
                            }
                            if(data[i].role=="recenseur"){
                                nom =  data[i].nom_recensseur
                                prenom =  data[i].prenom_recenseur
                                phone =  data[i].recenseur_phone
                                commune =  data[i].recenseur_commune
                            }


                        list_users+='<tr><td>'+(i+1)+'</td><td>'+data[i].username+'</td><td>'+wilaya+'</td><td>'+commune+'</td><td>'+nom+' '+prenom+'</td><td>'+phone+'</td><td>'+data[i].role+'</td><td><button class="btn btn-warn btn-sm"><i class="fa-solid fa-trash"></i></button>&nbsp;<button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button></td></tr>'
                    }
                    $('#list_users').append(list_users)

                }
            })
        }

        getUsersList()
    })
</script>
</body>

</html>