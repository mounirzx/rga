<?php
include './config.php';


try {
    // Connection to the database
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $role = $_POST['role'];
    $id = $_POST['id'];

    $donnees ="";
    if($role=="controleur"){
        $req = $bdd->prepare("SELECT * FROM controleur WHERE id_user =?");
        $req->execute(array($id));
        $donnees = $req->fetch();
        

    }elseif($role=="recenseur"){
        $req = $bdd->prepare("SELECT * FROM recenseur WHERE id_user =?");
        $req->execute(array($id));
        $donnees = $req->fetch();

    }
  echo json_encode($donnees);

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