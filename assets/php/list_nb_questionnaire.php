<?php
include './config.php';
session_start();

$code_commune = $_GET['code_commune'];

try {
    // Connection to the database
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // LIST BULLETIN
    $req = $bdd->prepare('SELECT * FROM `nb_quest_recensee` WHERE commune_code = ?');
    $req->execute(array($code_commune));

    $output = [];
    while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
        $output[] = $res;
    }

    // Return the data encapsulated in a "data" key
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
?>
