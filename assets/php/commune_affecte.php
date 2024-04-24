<?php
session_start();
include './config.php';


$id_user = $_SESSION['id_user'];

try {

    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $comm=[];
    // LISTE BULLETIN
    $req = $bdd->prepare('select * from controleur where id_user = ?');
    $req->execute(array($id_user));
    $output = [];
    $res = $req->fetch(PDO::FETCH_ASSOC);

   $commune = explode(',',$res['commune']);


   foreach ($commune as $code) {
    $req1 = $bdd->prepare('SELECT * FROM communes WHERE commune_code = ?');
    $req1->execute(array($code));
    $res2 = $req1->fetch(PDO::FETCH_ASSOC);

    if ($res2) {
        $comm []= $res2;
    }
}
    echo json_encode($comm);
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo json_encode(array("reponse" => "false", "place" => "tc", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
}

//}else{
  //  echo false;
//}