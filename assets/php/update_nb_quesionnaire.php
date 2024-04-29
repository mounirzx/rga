<?php
session_start();
$role = $_SESSION['role'];


include './config.php';

try {

    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $code_commune = $_POST['code_commune'];


if($role=="superviseur"){
    $nb_qst_a_recense = $_POST['nb_qst_a_recense'];
    $req = $bdd->prepare('UPDATE `communes` SET `qst_a_recense`=? where commune_code=?');
    $req->execute(array($nb_qst_a_recense,$code_commune));
    echo "true";
}else{

    $nb_qst_recense = $_POST['nb_qst_recense'];
    $date = $_POST['date'];


    $req1 = $bdd->prepare('INSERT INTO `nb_quest_recensee`(`commune_code`, `date`, `nombre_quest`) VALUES(?,?,?)');
    $req1->execute(array($code_commune,$date,$nb_qst_recense));
    $req = $bdd->prepare('UPDATE `communes` SET qst_recense = qst_recense + ? where commune_code=?');
    $req->execute(array($nb_qst_recense,$code_commune));
    echo "true"; 
}

     
      


  

    
    

} catch (Exception $e) {
    $msg = $e->getMessage();
    echo json_encode(array("reponse" => "false", "place" => "tc", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
}
?>