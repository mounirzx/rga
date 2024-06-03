<?php
session_start();



include './config.php';

try {

    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $commune_code = $_POST['commune_code'];


    $value = $_POST['value'];
    $id = $_POST['id'];





    /************************************************************************** */
$req1 = $bdd->prepare('update nb_quest_recensee set  nombre_quest = ? where id = ? ');
$req1->execute(array($value,$id));
    /************************************************************************** */
$req2 = $bdd->prepare('select sum(nombre_quest) as sum from nb_quest_recensee where commune_code=? ');
$req2->execute(array($commune_code));
$res = $req2->fetch(PDO::FETCH_ASSOC);
$sum = $res["sum"];

    /************************************************************************** */

    $req = $bdd->prepare('UPDATE `communes` SET qst_recense = ?  where commune_code=?');
    $req->execute(array($sum,$commune_code));
    echo "true"; 


     
      


  

    
    

} catch (Exception $e) {
    $msg = $e->getMessage();
    echo json_encode(array("reponse" => "false", "place" => "tc", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
}
?>