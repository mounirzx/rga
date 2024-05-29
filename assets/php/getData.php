<?php


include './config.php';


session_start();
$uid = isset($_POST['uid']) ? $_POST['uid'] : $_SESSION['id_user'];

try {

    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // LISTE BULLETIN
    $req = $bdd->prepare('
   SELECT 
    recenseur.*, 
    recenseur.commune AS  r_commune, 

    controleur.*, 
    communes.commune_name, 
    communes.commune_name_ascii,
    communes.daira_name, 
    communes.daira_name_ascii, 
    communes.wilaya_code, 
    communes.wilaya_name, 
    communes.wilaya_name_ascii
FROM 
    recenseur 
LEFT JOIN 
    controleur ON recenseur.controleur = controleur.id_user 
LEFT JOIN 
    communes ON recenseur.commune = communes.commune_code
WHERE 
    recenseur.id_user = ?
    
    
');
    $req->execute(array($uid));
$result = $req->fetch(PDO::FETCH_ASSOC);
    echo json_encode($result);
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo json_encode(array("reponse" => "false", "place" => "tc", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
}

