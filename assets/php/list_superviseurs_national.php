<?php


include './config.php';

try {
    // Connection to the database
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // LIST BULLETIN
    $req = $bdd->prepare('SELECT *
        FROM `superviseur_national`
        -- LEFT JOIN `communes` ON `superviseur_national`.`wilaya` = `communes`.`wilaya_code` 
        left join users on superviseur_national.id_user  = users.id_user GROUP BY id_superviseur_national
    ');

    $req->execute();
    $output = [];

    while ($res = $req->fetch(PDO::FETCH_ASSOC)) {

        $wil = "";
        $wilaya = $res['wilaya'];
        $wilaya = explode(',', $wilaya);

        foreach ($wilaya as $code) {
            $req1 = $bdd->prepare('SELECT * FROM communes WHERE wilaya_code = ?');
            $req1->execute(array($code));
            $res2 = $req1->fetch(PDO::FETCH_ASSOC);

            if ($res2) {
                $wil .= $res2['wilaya_name_ascii'] . ', ';
            }
        }

        // Remove the trailing comma and space
        $wil = rtrim($wil, ', ');

        $res['wilaya'] = $wil;
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