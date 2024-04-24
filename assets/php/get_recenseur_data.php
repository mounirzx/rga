<?php


include './config.php';
$id_user=$_POST['id_user'];
try {

    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // LISTE BULLETIN
    $req = $bdd->prepare('SELECT * FROM `recenseur`  left join users on recenseur.id_user  = users.id_user  where recenseur.id_user  =?   ');
    $req->execute(array($id_user));
    $output = [];
    $commune="";
    while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
        $output[] = $res;

    } //fin while

  
    echo json_encode($output);
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo json_encode(array("reponse" => "false", "place" => "tc", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
}

