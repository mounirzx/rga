<?php


include './config.php';

try {

    $id_user=$_POST['id_user'];

    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // LISTE BULLETIN
    $req = $bdd->prepare('SELECT * FROM `controleur` left join users on controleur.id_user = users.id_user  where controleur.id_user=?   ');
    $req->execute(array($id_user));
    $output = [];
    $commune="";
    while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
        $output[] = $res;

            $listCommune=[];
        $commune = $res['commune'];
        $commune = explode(',',$commune);
 
        
    } //fin while

   $output[0]['commune']= $commune;
    echo json_encode($output);
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo json_encode(array("reponse" => "false", "place" => "tc", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
}

