<?php
include './config.php';


try {
    // Connection to the database
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));



    $req =$bdd->prepare('SELECT * FROM users LEFT JOIN superviseur ON users.id_user = superviseur.id_user LEFT JOIN controleur ON users.id_user = controleur.id_user LEFT JOIN recenseur ON users.id_user = recenseur.id_user LEFT JOIN superviseur_national ON users.id_user = superviseur_national.id_user');

    $req->execute();


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


?>