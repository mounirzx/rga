<?php


include './config.php';

try {
    // Connection to the database
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // LIST BULLETIN
    $req = $bdd->prepare('SELECT *
        FROM `admin_central`
        left join users on admin_central.id_user  = users.id_user GROUP BY id_admin  order by admin_central.id_user desc
    ');

    $req->execute();
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