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
                    <h5>Gestion des recenseurs</h5>
                </div>
                <div class="col-3">   <a href="AjouterRecenseurs" class="btn btn-success">Ajouter recenseur</a></div>

            </div>
            
            
            

        </div>
    



        <hr>
        <div class="container">
            <div class="card">
                <div style="text-align: center;" class="card-header">
                        <h6>Liste des recenseurs</h6>
                       
                    
                </div>
                <div class="card-body">
                    <table class="table table-hover" id="tablerecenseur">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom d'utilisateur</th>
                                <th scope="col">Wilaya</th>
                                <th scope="col">Nom complet</th>
                                <th scope="col">Téléphone</th>
                                <th scope="col">Rôle</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="list_recenseurs" >
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
<script src="./assets/js/recenseur.js"></script>


</body>

</html>