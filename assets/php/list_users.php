<?php
include './config.php';


try {
    // Connection to the database
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // LIST BULLETIN
    $req = $bdd->prepare('SELECT *
        FROM `controleur`
        LEFT JOIN `communes` ON `controleur`.`wilaya` = `communes`.`wilaya_code` GROUP BY id_controleur
    ');

    $req->execute();
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


?>