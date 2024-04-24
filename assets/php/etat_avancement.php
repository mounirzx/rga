<?php


include './config.php';
session_start();
$user_id= $_SESSION['id_user'];
$wilaya = $_SESSION['wilaya'];
$role = $_SESSION['role'];

try {

    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if($role=="controleur"){

   // $req = $bdd->prepare("SELECT SUM(qst_a_recense) as sum_qst_a_recense ,SUM(qst_recense) as qst_recense  from controleur left join  communes on controleur.wilaya = communes.wilaya_code where  controleur.wilaya=?  and controleur.id_user=?");
    
    

    $req = $bdd->prepare("SELECT SUM(qst_a_recense) as sum_qst_a_recense ,SUM(qst_recense) as qst_recense  from controleur left join  communes on controleur.wilaya = communes.wilaya_code left join recenseur on controleur.id_user = recenseur.controleur left join questionnaire on recenseur.id_user = questionnaire.user   where  controleur.wilaya=?  and controleur.id_user=?");
    $req->execute(array($wilaya,$user_id));
    $res = $req->fetch(PDO::FETCH_ASSOC);
    $sum_qst_a_recense = $res['sum_qst_a_recense'];
    $qst_recense = $res['qst_recense'];

    /********************************************************************************* */

   

    $output = ['sum_qst_a_recense' => $sum_qst_a_recense, 'qst_recense' => $qst_recense];
}



if($role=="superviseur"){
    $req = $bdd->prepare("SELECT SUM(qst_a_recense) as sum_qst_a_recense ,SUM(qst_recense) as qst_recense  from superviseur left join  communes on superviseur.wilaya = communes.wilaya_code where  superviseur.wilaya=?  and superviseur.id_user=?");
    $req->execute(array($wilaya,$user_id));
    $res = $req->fetch(PDO::FETCH_ASSOC);
    $sum_qst_a_recense = $res['sum_qst_a_recense'];
    $qst_recense = $res['qst_recense'];

    /********************************************************************************* */

   

    $output = ['sum_qst_a_recense' => $sum_qst_a_recense, 'qst_recense' => $qst_recense];
}





    echo json_encode($output);
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo json_encode(array("reponse" => "false", "place" => "tc", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
}

