<?php


include './config.php';
$id_user=$_POST['id_user'];
try {

    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


    $req = $bdd->prepare('SELECT * FROM `superviseur_national`  left join users on superviseur_national.id_user  = users.id_user  where superviseur_national.id_user  =?   ');
    $req->execute(array($id_user));
    $output = [];
    $wilaya="";
    while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
        $output[] = $res;
        $listCommune=[];
        $wilaya = $res['wilaya'];
        $wilaya = explode(',',$wilaya);
       // print_r($wilaya);
 
    } //fin while
    $output[0]['wilaya']= $wilaya;
  
    echo json_encode($output);
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo json_encode(array("reponse" => "false", "place" => "tc", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
}

