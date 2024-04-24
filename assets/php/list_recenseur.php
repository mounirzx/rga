<?php


include './config.php';
session_start();

$id_user = $_SESSION['id_user'];
try {
    // Connection to the database
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // LIST BULLETIN
    $req = $bdd->prepare('SELECT *
        FROM `recenseur`
        LEFT JOIN `communes` ON `recenseur`.`commune` = `communes`.`commune_code` 
        left join users on recenseur.id_user  = users.id_user 

        where recenseur.controleur = ?
    ');

    $req->execute(array($id_user));
    $output = [];

    while ($res = $req->fetch(PDO::FETCH_ASSOC)) {


   

        $output[] = $res;
    }

    echo json_encode($output);
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo json_encode(array(
        "reponse" => "false",
        "place" => "tc",
        "message" => $msg,
        "type" => "danger",
        "icon" => "nc-icon nc-bell-55",
        "autoDismiss" => 0
    ));
}