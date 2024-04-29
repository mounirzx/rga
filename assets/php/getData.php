<?php


include './config.php';


session_start();
$_id_user = $_SESSION['id_user'];

try {

    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // LISTE BULLETIN
    $req = $bdd->prepare('
   SELECT 
    recenseur.*, 
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
    $req->execute(array($_id_user));
$result = $req->fetch(PDO::FETCH_ASSOC);
    echo json_encode($result);
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo json_encode(array("reponse" => "false", "place" => "tc", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
}

// try {
//     // Connexion à la base de données
//     $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

//     // LISTE BULLETIN
//     $req = $bdd->prepare('SELECT recenseur.id_user, recenseur.nom AS recenseur_nom, controleur.nom AS controleur_nom, communes2.commune_name AS commune_name, communes2.daira_name, communes2.wilaya_name FROM recenseur LEFT JOIN controleur ON recenseur.controleur = controleur.id_user LEFT JOIN communes2 ON recenseur.commune = communes2.commune_code WHERE recenseur.id_user = ?');
//     $req->execute(array($_id_user));
//     $result = $req->fetch(PDO::FETCH_ASSOC);
//     echo json_encode($result);
// } catch (Exception $e) {
//     $msg = $e->getMessage();
//     echo json_encode(array("reponse" => "false", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
// }