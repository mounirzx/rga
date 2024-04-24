<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include './config.php';
session_start();
$id_user=$_SESSION['id_user'];
try {
    // Connection to the database
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // LIST BULLETIN
    $req = $bdd->prepare('SELECT *
        FROM `controleur`
        left join users on controleur.id_user = users.id_user
        LEFT JOIN `communes` ON `controleur`.`wilaya` = `communes`.`wilaya_code` where  users.role="controleur"  and controleur.added_by = ?  GROUP BY id_controleur
    ');

    $req->execute(array($id_user));
    $output = [];

    while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
        $comm = "";
        $commune = $res['commune'];
        $commune = explode(',', $commune);

        foreach ($commune as $code) {
            $req1 = $bdd->prepare('SELECT * FROM communes WHERE commune_code = ?');
            $req1->execute(array($code));
            $res2 = $req1->fetch(PDO::FETCH_ASSOC);

            if ($res2) {
                $comm .= $res2['commune_name_ascii'] . ', ';
            }
        }

        // Remove the trailing comma and space
        $comm = rtrim($comm, ', ');

        $res['commune'] = $comm;
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