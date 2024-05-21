<?php 
include('includes/header.php');

?>
    <br>
    <br>
    <br>
    <style>

/* tr {
    border: 1px solid #d1cece;
    background: #d1e7dd;
} */
    </style>

    <div class="card">
        <div style="text-align: center;" class="card-header">
            <h5> Etat </h5>
        </div>
        <div class="card-body">
            
            <div class="row">
                <div class="col">
                    <div class="card" style="border: gray 1px solid; border-radius: 15px;box-shadow: 0 0 14px #B4B4B4">
                        <a class="etat" data="all" id="all" href="#" style="color: rgb(110, 107, 107); font-weight: bold; font-size: 13px;text-decoration: none;" >
                        <div style="text-align: center;" class="card-header">
                            Total questionnaire
                        </div>
                        
                        <div style="text-align: center;" class="card-body">

                   
                            <img src="static/icons/form.svg" alt="State Icon" style="width: 20px; height: 35px; margin-left: 5px;">
                            
                               <span id="total_questionnaire"></span>
                            
                        </div>
                    </a>
                    </div>

                </div>
                <div class="col">
                 
                    
                    <div class="card" style="border: #E8F91B 1px solid; border-radius: 15px; box-shadow: 0 0 14px #FBFF7D">
                        <a class="etat" data="onhold" id="onhold" href="#" style="color: rgb(110, 107, 107); font-weight: bold; font-size: 13px;text-decoration: none;">
                        <div style="text-align: center;" class="card-header">
                            En attente
                        </div>
                        <div style="text-align: center;" class="card-body">
                            <img src="static/icons/wait.svg" alt="State Icon" style="width: 22px; height: 35px; margin-left: 5px;">
                            <span id="sum_en_attente"></span>
                        </div>
                    </a>
                    </div>

                </div>
                <div class="col">
                    <div class="card" style="border: #F03005 1px solid; border-radius: 15px;box-shadow: 0 0 14px #FF8E5D">
                        <a class="etat" data="rejected" id="rejected" href="#" style="color: rgb(110, 107, 107); font-weight: bold; font-size: 13px;text-decoration: none;">
                        <div style="text-align: center;" class="card-header">
                            Rejetés
                        </div>
                        <div style="text-align: center;" class="card-body">
                            <img src="static/icons/reject.svg" alt="State Icon" style="width: 25px; height: 35px; margin-left: 5px;">
                            <span id="sum_rejete"></span>
                        </div>
                    </a>
                    </div>

                </div>
                <div class="col">
                    <div class="card" style="border: #55A90B 1px solid; border-radius: 15px;box-shadow: 0 0 8px #A8FF5C;">
                        <a class="etat" id="approved" data="approved" href="#" style="color: rgb(110, 107, 107); font-weight: bold; font-size: 13px;text-decoration: none;">
                        <div style="text-align: center;" class="card-header">
                            Approuvés
                        </div>
                        <div style="text-align: center;" class="card-body">
                            <img src="static/icons/accept.svg" alt="State Icon" style="width: 25px; height: 35px; margin-left: 5px;">
                            <span id="sum_approuvee"></span>
                        </div>
                    </div>
                </a>



                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="card">
        <div class="card-body">

          



            
            <br>
            <table id="listTable" class="table table_bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">L'exploitant</th>
                        <th scope="col">L'exploitation</th>
                        <th scope="col">Superficie (Ha)</th>
                        <th scope="col">Wilaya</th>
                        <th scope="col">Commune</th>
                        <th scope="col">Date</th>
                        <th scope="col">Recenseur</th>
                        <th scope="col">Coherence Status Juridique</th>
                        <th scope="col">Coherence  Utilisation du sol</th>
                    </tr>
                </thead>
                <tbody id="qst_list">

                    
                 
                </tbody>
            </table>

            <br>

        
            
    
        </div>
    </div>




</body>

</html>

<script src="static/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.min.js"></script>
<script src="./assets/js/questionnaire.js"></script>
<script>
$(document).ready(function() {
    // Trigger click on "Total questionnaire" link to load the data
    $('#all').trigger('click');
});
</script>