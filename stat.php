<?php
include('includes/header.php');
?>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<!-- SearchPanes CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchpanes/2.2.9/css/searchPanes.dataTables.min.css">

<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<!-- SearchPanes JS -->
<script type="text/javascript" src="https://cdn.datatables.net/searchpanes/2.2.9/js/dataTables.searchPanes.min.js"></script>
<style>

.dt-type-numeric{
text-align:center !important;
}

.editStatBtn{

    font-size: 10px; 
    border-radius: 50%;
}
table.dataTable th, table.dataTable td{
    padding:2px;
}



</style>
<body>
    <br>
    <br>
    <div class="card">
        <div style="text-align: center;" class="card-header">
            <div class="row">
                <div class="col-8">
                    <h5>Statistique</h5>
                </div>
                <!-- <div class="col-3">   <a href="./add_superviseur.php" class="btn btn-success">Ajouter Superviseur</a></div> -->
             
            </div>
            
            
            

        </div>


<?php

if($_SESSION['role']=="superviseur_national"){

    ?> 
   <div class="card">


<div class="card-bod">
<div class="input-group input-group-sm">
        <span style="width: 180px;" class="input-group-text" id="basic-addon-username">Wilaya</span>
        <select id="wilaya"  class="form-control">

        <option></option>
        </select>
    </div>

</div>
</div>

<?php
}


?>
     



        <div class="card">
        <div style="text-align: center;" class="card-header">
            <h5> Etats </h5>
        </div>
        <div class="card-body">
            
            <div class="row">
            <div class="col">
                    <div class="card" style="border: gray 1px solid; border-radius: 15px;box-shadow: 0 0 14px #B4B4B4">
                        <a class="etat" data="all" id="all" href="#" style="color: rgb(110, 107, 107); font-weight: bold; font-size: 13px;text-decoration: none;" >
                        <div style="text-align: center;" class="card-header" >
                           Total  exploiattions a recenser
                        </div>
                        
                        <div style="text-align: center;" class="card-body">

                   
                            <img src="static/icons/form.svg" alt="State Icon" style="width: 20px; height: 35px; margin-left: 5px;">
                            
                              <span id="sum_qst_a_recense"></span>
                              <br/>  <br/>
                            
                        </div>
                    </a>
                    </div>

                </div>
                <div class="col">
                    <div class="card" style="border: gray 1px solid; border-radius: 15px;box-shadow: 0 0 14px #B4B4B4">
                        <a class="etat" data="all" id="all" href="#" style="color: rgb(110, 107, 107); font-weight: bold; font-size: 13px;text-decoration: none;" >
                        <div style="text-align: center;" class="card-header">
                           Nb exploitations  recensées
                        </div>
                        
                        <div style="text-align: center;" class="card-body">

                   
                            <img src="static/icons/form.svg" alt="State Icon" style="width: 20px; height: 35px; margin-left: 5px;">
                            
                            <span id="qst_recense"></span>
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" id='sum_taux_avancememnt_1'>

</div>
                            
                        </div>
                    </a>
                    </div>

                </div>
                <div class="col">
                    <div class="card" style="border: gray 1px solid; border-radius: 15px;box-shadow: 0 0 14px #0d6efd">
                        <a class="etat" data="all" id="all" href="#" style="color: rgb(110, 107, 107); font-weight: bold; font-size: 13px;text-decoration: none;" >
                        <div style="text-align: center;" class="card-header">
                            Nb  questionnaires saisis
                        </div>
                        
                        <div style="text-align: center;" class="card-body">

                        <i class="fa-solid fa-file" style="font-size: 24px; margin-left: 5px;color: #0d6efd;margin-bottom: 10px;"></i>
                            <!-- <img src="static/icons/form.svg" alt="State Icon" style="width: 20px; height: 35px; margin-left: 5px;"> -->
                            
                               <span id="total_questionnaire"></span>
                               <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" id="sum_taux_avancememnt_2">

</div>
                        </div>
                    </a>
                    </div>

                </div>
                <div class="col">
                 
                    
                    <div class="card" style="border: #bbb  1px solid; border-radius: 15px; box-shadow: 0 0 14px #FBFF7D">
                        <a class="etat" data="onhold" id="onhold" href="#" style="color: rgb(110, 107, 107); font-weight: bold; font-size: 13px;text-decoration: none;">
                        <div style="text-align: center;" class="card-header">
                           Nb questionnaires En attente
                        </div>
                        <div style="text-align: center;" class="card-body">
                            <img src="static/icons/wait.svg" alt="State Icon" style="width: 22px; height: 35px; margin-left: 5px;">
                          <span id="en_attente"></span>
                          <br/>  <br/>
                        </div>
                    </a>
                    </div>

                </div>
                <div class="col">
                    <div class="card" style="border: #F03005 1px solid; border-radius: 15px;box-shadow: 0 0 14px #FF8E5D">
                        <a class="etat" data="rejected" id="rejected" href="#" style="color: rgb(110, 107, 107); font-weight: bold; font-size: 13px;text-decoration: none;">
                        <div style="text-align: center;" class="card-header">
                        Nb questionnaires Rejetés
                        </div>
                        <div style="text-align: center;" class="card-body">
                            <img src="static/icons/reject.svg" alt="State Icon" style="width: 25px; height: 35px; margin-left: 5px;">
                           
                            <span id="sum_rejete"></span>
                            <br/>  <br/>
                        </div>
                    </a>
                    </div>

                </div>
                <div class="col">
                    <div class="card" style="border: #55A90B 1px solid; border-radius: 15px;box-shadow: 0 0 8px #A8FF5C;">
                        <a class="etat" id="approved" data="approved" href="#" style="color: rgb(110, 107, 107); font-weight: bold; font-size: 13px;text-decoration: none;">
                        <div style="text-align: center;" class="card-header">
                        Nb questionnaires Validés
                        </div>
                        <div style="text-align: center;" class="card-body">
                            <img src="static/icons/accept.svg" alt="State Icon" style="width: 25px; height: 35px; margin-left: 5px;">
                            <span id="sum_approuve"></span>
                            <br/>  <br/>
                        </div>
                    </div>
                </a>



                </div>
            </div>
        </div>
    </div>


        <hr>
        <div class="container">
            <div class="card">
        
                <div style="text-align: center;" class="card-header">
                        <h6>Tableau de suivi</h6>
                       
                  
                </div>
              
                <div class="card-body">


                <div class="row">
                    <div class="col table-responsive">

                    <table class="table table-hover table-sm " id="tableQst">
                    
                    <thead>
                    <!-- <tr><td>Filtre par Commune</td><td><select id="listCommune" class="form-control"><option>Selectionner...</option></select></td><td colspan="9"></td></tr> -->
                        <tr style="background: #d5d5d5">
                            <th scope="col">#</th>
                            <th  style="background:#8bdfb8;" scope="col">Commune</th>
                            <th  style="background:#8bdfb8;" scope="col">Nombre d'exploiatations à recenser</th>
                            <th  style="background:#8bdfb8;" scope="col">Nombre d'exploiatations recensées</th>
                            <th scope="col">Nombre de questionnaires saisis</th>
                            <th scope="col" >Taux recensement</th>
                            <th scope="col" >Taux saisie</th>
                            <th scope="col" >Nb questionnaires Validés</th>
                            <th scope="col" >Nb questionnaires rejetés</th>
                            <th scope="col" >Nb questionnaires en attente</th>
                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="list" class='text-center'>
                    </tbody>
                </table>
                    </div>
                </div>
                  
                </div>
            </div>
        </div>
        <br>
        <br>



    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background: aliceblue;">
        <h5 class="modal-title" id="exampleModalLabel" style='font-size:15px'>Ajouter nombre d'exploiatations recensées par jour</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="code_commune"/>

        <div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-text" id="basic-addon-username">Commune</span>
                    <input type="text" class="form-control" name="commune_name" id="commune_name" disabled>
                </div>
                <br>
<?php
    if($_SESSION['role']=="superviseur"){

   
?>

      <div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-text" id="basic-addon-username">Nombre de questionnaire à recenser</span>
                    <input type="number" class="form-control" name="nb_qst_a_recense" id="nb_qst_a_recense" required>
                </div>
                <br>


                <?php
 }else{


                ?>
        <div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-text" id="basic-addon-username">Date</span>
                    <input type="date" class="form-control" name="date" id="date" value="<?php echo date('Y-m-d'); ?>" >

                </div>
                <br>
                <div class="input-group input-group-sm">
                    <span style="width: 180px;" class="input-text" id="basic-addon-username">Nombre d'exploiatations recensées.</span>
                    <input type="number" class="form-control" name="nb_qst_recense" id="nb_qst_recense" required>
                </div>  
                
                
                <?php
 }

?>
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="modifier">Valider</button>
      </div>
    </div>
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
<script src="./assets/js/stat.js"></script>


</body>

</html>