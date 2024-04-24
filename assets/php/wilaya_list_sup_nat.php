<?php


include './config.php';


session_start();
$_id_user = $_SESSION['id_user'];

try {

    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // select user's wilayas



    $req = $bdd->prepare("select * from superviseur_national , communes where superviseur_national.wilaya LIKE CONCAT('%', communes.wilaya_code, '%') and superviseur_national.id_user = ? group by wilaya_code");


    $req->execute(array($_id_user));

    $output = [];
    while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
        $output[] = $res;
    } //fin while
    echo json_encode($output);
/************************************************************************************ */


} catch (Exception $e) {
    $msg = $e->getMessage();
    echo json_encode(array("reponse" => "false", "place" => "tc", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
}

//}else{
  //  echo false;
//}
