
<!-- //code a recuperer date 06/06/2024  16:20-->
<?php 
include('includes/header.php');
include './assets/php/config.php';
$role=$_SESSION['role'];

$role = $_SESSION['role'];
$bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


$sql = "SELECT 
COUNT(*) AS total,
SUM(CASE WHEN etat = 'Approuvés' THEN 1 ELSE 0 END) AS approuves,
SUM(CASE WHEN etat = 'Rejetés' THEN 1 ELSE 0 END) AS rejetes,
SUM(CASE WHEN etat = 'En attente' THEN 1 ELSE 0 END) AS en_attente
FROM questionnaire";

if($role == "recenseur"){
    $sql .= " WHERE user = ".$_SESSION['id_user'];
}if($role =="controleur"){
    $sql.=" left join recenseur on  questionnaire.user = recenseur.id_user where recenseur.controleur = ".$_SESSION['id_user'];
}if($role == "superviseur"){
    
    $sql.=" left join recenseur on  questionnaire.user = recenseur.id_user left join  controleur on recenseur.controleur =  controleur.id_user where controleur.added_by =  ".$_SESSION['id_user'];
}
$req = $bdd->prepare($sql);
$req->execute();
$res  = $req->fetch(PDO::FETCH_ASSOC);
$approuves = $res["approuves"];
$rejetes = $res["rejetes"];
$en_attente = $res["en_attente"];
$total = $res["total"];
?>
    <br>
    <br>
    <br>
    <style>
    .skeleton {
        background-color: #e0e0e0;
        border-radius: 4px;
        display: inline-block;
        height: 48px;
        width: 100%;
        position: relative;
        overflow: hidden;
    }

    .skeleton::after {
        content: '';
        display: block;
        position: absolute;
        left: -100%;
        height: 100%;
        width: 100%;
        background: linear-gradient(90deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0));
        animation: loading 1.5s infinite;
    }

    @keyframes loading {
        0% {
            left: -100%;
        }
        50% {
            left: 100%;
        }
        100% {
            left: 100%;
        }
    }

    .skeleton-row td {
        padding: 10px;
    }

    .skeleton-row td .skeleton {
        width: 100%;
        height: 20px;
    }
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
                            
                               <span id="total_questionnaire"><?php echo$total; ?></span>
                            
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
                            <span id="sum_en_attente"><?php echo$en_attente; ?></span>
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
                            <span id="sum_rejete"><?php echo$rejetes; ?></span>
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
                            <span id="sum_approuvee"><?php echo$approuves; ?></span>
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

          

<input type="hidden" value="<?php echo $role;  ?>" id="role" />

            
            <br>
            <?php
            if($role=="admin" || $role=="admin_central"){

                ?>
            <select id="wilaya" class='form-control' style="background: #0064f5;color: white;">
                        <option value="">Selection de wilaya</option>
                    </select>
<?php

            }
                    ?>
            <table style="text-align:center" id="listTable" class="table table_bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <?php
                        if($role=="admin" || $role=="admin_central"){
                            ?>
<th scope="col">Clé</th>
                            <?php
                        }
                        ?>
                        <th scope="col">L'exploitant</th>
                        <th scope="col">L'exploitation</th>
                        <th scope="col">Superficie (Ha)</th>
                        <th scope="col">Wilaya</th>
                        <th scope="col">Commune</th>
                        <th scope="col">Date de passage</th>
                        <th scope="col">Date de saisie</th>
                        <th scope="col">Recenseur</th>
                        <th scope="col">Coherence Status Juridique</th>
                        <th scope="col">Coherence  Utilisation du sol</th>
                    </tr>
                </thead>
                <tbody id="qst_list">
                    <!-- Skeleton loader rows -->
                   
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

    
function getWwilaya(){

$.ajax({
    url:'assets/php/list_wilaya.php',
    method:'post',
    async:false,
    success:function(response){
        var data = JSON.parse(response)
        var wilaya_list="<option></option>"
        for(i=0;i<data.length; i++){
            wilaya_list+="<option value='"+data[i].wilaya_code+"'>"+data[i].wilaya_code+" "+data[i].wilaya_name_ascii+"</option>"
        }
        $('#wilaya').append(wilaya_list)


    }
})
}

getWwilaya()
</script>