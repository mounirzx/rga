<?php
include './config.php';


try {
    // Connection to the database
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));



    $req =$bdd->prepare('SELECT  *,
     superviseur.wilaya as wilaya_sup,
     controleur.commune as controleur_commune,
     superviseur.phone as superviseur_phone,
     controleur.phone as controleur_phone,
     controleur.wilaya as controleur_wilaya,
     recenseur.phone as recenseur_phone,
     recenseur.commune as recenseur_commune 
     FROM users 
     LEFT JOIN superviseur ON users.id_user = superviseur.id_user 
     LEFT JOIN controleur ON users.id_user = controleur.id_user 
     LEFT JOIN recenseur ON users.id_user = recenseur.id_user 
     LEFT JOIN superviseur_national ON users.id_user = superviseur_national.id_user  
    --  LEFT JOIN (
    --     SELECT DISTINCT wilaya_code, wilaya_name, wilaya_name_ascii
    --     FROM communes
    -- ) AS communes ON superviseur.wilaya = communes.wilaya_code
    -- LEFT JOIN (
    --     SELECT DISTINCT wilaya_code, wilaya_name, wilaya_name_ascii
    --     FROM communes1
    -- ) AS communes ON controleur.wilaya = communes1.wilaya_code
     ');

    $req->execute();

$i=0;
    while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
        $output[] = $res;

        if($res['role']=="superviseur"){
                $req1 = $bdd->prepare('select * from communes where wilaya_code = ? group by  wilaya_code ');
                $req1->execute(array($res['wilaya_sup']));
                $wilaya = $req1->fetch(PDO::FETCH_ASSOC);
                $wilaya = $wilaya['wilaya_name_ascii'];
                $output[$i]['wilaya_sup']=$wilaya;
        }
        if($res['role']=="controleur"){
            $req2 = $bdd->prepare('select * from communes where wilaya_code = ? group by  wilaya_code ');
            $req2->execute(array($res['controleur_wilaya']));
            $wilaya = $req2->fetch(PDO::FETCH_ASSOC);
            $wilaya = $wilaya['wilaya_name_ascii'];
            $output[$i]['controleur_wilaya']=$wilaya;
                    }
        $i++;
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