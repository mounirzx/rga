<?php


include './config.php';
session_start();

$role = $_SESSION['role'];
try {

    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));





    if($role=='controleur'){

   
        $req = $bdd->prepare('SELECT etat,   COUNT(DISTINCT id_questionnaire) AS total
        FROM questionnaire
        LEFT JOIN recenseur ON questionnaire.user = recenseur.id_user
        LEFT JOIN controleur ON recenseur.controleur = controleur.id_user
        LEFT JOIN superviseur ON controleur.added_by = superviseur.id_user
        LEFT JOIN communes ON superviseur.wilaya = communes.wilaya_code
        WHERE recenseur.commune = ?
        GROUP BY etat');
        $req->execute(array($_POST['commune']));


        $output=[];
        while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
      
            $output[] = $res;

        } //fin

        echo json_encode($output);






    }else if($role=='superviseur'){

        $req = $bdd->prepare('SELECT etat,   COUNT(DISTINCT id_questionnaire) AS total
        FROM questionnaire
        LEFT JOIN recenseur ON questionnaire.user = recenseur.id_user
        LEFT JOIN controleur ON recenseur.controleur = controleur.id_user
        LEFT JOIN superviseur ON controleur.added_by = superviseur.id_user
        LEFT JOIN communes ON superviseur.wilaya = communes.wilaya_code
        WHERE recenseur.commune = ?
        GROUP BY etat');
        $req->execute(array($_POST['commune']));


        $output=[];
        while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
      
            $output[] = $res;

        } //fin

        echo json_encode($output);
    } 
    else if($role=='superviseur_national'  || $role=='admin_central'){

        $req = $bdd->prepare('SELECT etat,   COUNT(DISTINCT id_questionnaire) AS total
        FROM questionnaire
        LEFT JOIN recenseur ON questionnaire.user = recenseur.id_user
        LEFT JOIN controleur ON recenseur.controleur = controleur.id_user
        LEFT JOIN superviseur ON controleur.added_by = superviseur.id_user
        LEFT JOIN communes ON superviseur.wilaya = communes.wilaya_code
        WHERE recenseur.commune = ?
        GROUP BY etat');
        $req->execute(array($_POST['commune']));


        $output=[];
        while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
      
            $output[] = $res;

        } //fin

        echo json_encode($output);
    } 


   
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo json_encode(array("reponse" => "false", "place" => "tc", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
}

?>