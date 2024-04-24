<?php


include './config.php';
session_start();

try {
    // Connection to the database
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // LIST BULLETIN
    $req = $bdd->prepare('SELECT * FROM `recenseur` left join controleur on recenseur.controleur = controleur.id_user  where controleur.wilaya = ? ');

    $req->execute(array($_SESSION['wilaya']));
    $count = $req->rowCount();


    echo json_encode(["count" => $count, "wilaya" => $_SESSION['wilaya']]);
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