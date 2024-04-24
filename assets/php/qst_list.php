<?php


include './config.php';



session_start();

$id_user = $_SESSION['id_user'];
$role = $_SESSION['role'];




try {

    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $sql = 'SELECT * FROM `questionnaire` left join recenseur on questionnaire.user = recenseur.id_user  left join controleur on  recenseur.controleur  = controleur.id_user  left join communes on recenseur.commune = communes.commune_code ' ;


 

    if(isset($_POST['etat'])){
        $etat = $_POST['etat'];
        if($etat=="approved"){
            $sql.=' where etat = "Approuvés" ';
        }
        if($etat=="rejected"){
            $sql.=' where etat = "Rejetés" ';
        }
        if($etat=="onhold"){
            $sql.=' where etat = "En attente" ';
        }if($etat=='all'){
            $sql.=' where 1 ';
        }
    }   

$array=[];

    if($role == 'recenseur'){
        $sql.=' and recenseur.id_user =?';
        array_push($array,$id_user);
    }

    if($role == 'controleur'){
        $sql.=' and recenseur.controleur =?';
        array_push($array,$id_user);
    }   
    
    if($role == 'superviseur'){
        $sql.=' and controleur.added_by =?';
        array_push($array,$id_user);
    }




     $req = $bdd->prepare( $sql );
     $req->execute($array);




    $output = [];
    while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
        $output[] = $res;
    } //fin while
    echo json_encode($output);
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo json_encode(array("reponse" => "false", "place" => "tc", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
}

//}else{
  //  echo false;
//}
