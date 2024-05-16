<?php
session_start();
include './config.php';


$id_questionnaire = $_POST['id_questionnaire'];
$action = $_POST['action'];

if($action == "rejeter")
{
    try {

        //connexion a la base de données
        $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
    
            $req = $bdd->prepare('UPDATE `questionnaire` SET etat=? where id_questionnaire = ? ');
            $req->execute(array('Rejetés', $id_questionnaire));
            echo 'true';
    
    
    
    
    } catch (Exception $e) {
        $msg = $e->getMessage();
        echo json_encode(array("reponse" => "false", "place" => "tc", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
    }
}
if($action == "approuver")
{
    try {

        //connexion a la base de données
        $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
    
            $req = $bdd->prepare('UPDATE `questionnaire` SET etat=? where id_questionnaire = ? ');
            $req->execute(array('Approuvés', $id_questionnaire));
            echo 'true';
    
    
    
    
    } catch (Exception $e) {
        $msg = $e->getMessage();
        echo json_encode(array("reponse" => "false", "place" => "tc", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
    }
}