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
    
    
            $req = $bdd->prepare('UPDATE `questionnaire` SET etat=? , date_validation= NOW() where id_questionnaire = ? ');

            $req->execute(array('Approuvés', $id_questionnaire));




/********************************************************************************* */
//creation du code de validation 
$req2 = $bdd->prepare("select * from questionnaire where id_questionnaire = ?  ");
$req2->execute(array($id_questionnaire));
$questionnaire = $req2->fetch(PDO::FETCH_ASSOC);

$id_recenseur = $questionnaire['user'];
// select nombre de recenseur:
// print_r($id_recenseur);


$req3 = $bdd->prepare('select * from recenseur left join users on recenseur.id_user =  users.id_user where recenseur.id_user=? ');
$req3->execute(array($id_recenseur));
$recenseur = $req3->fetch(PDO::FETCH_ASSOC);
/***************************************/
/**/$commune = $recenseur['commune'];/**/
/***************************************/

$username_recenseur = $recenseur['username'];
$nb_recenseur = explode('-', $username_recenseur);
/****************************************/
/**/$nb_recenseur = $nb_recenseur[1];/**/
/************************************* */


//select nombre de controleur:
$id_controleur = $recenseur['controleur'];
 $req4 = $bdd->prepare('select * from controleur left join users on controleur.id_user = users.id_user  where controleur.id_user = ? ');
 $req4->execute(array($id_controleur));
 $controleur = $req4->fetch(PDO::FETCH_ASSOC);
 $username_controleur = $controleur["username"];
 $nb_controleur = explode('-', $username_controleur);
/****************************************/
/**/$nb_controleur = $nb_controleur[1];/**/
/****************************************/


// select nombre de questionnaire par recenseur 
$req5 = $bdd->prepare("select * from questionnaire where user  = ?  ");
$req5->execute(array($id_recenseur));
$count_quest = $req5->rowCount();
/*****************************************************************/
/**/$count_quest = str_pad($count_quest, 3, '0', STR_PAD_LEFT);/**/
/*****************************************************************/
$code_validation = 
 echo 'true';
    
    
    
    
    } catch (Exception $e) {
        $msg = $e->getMessage();
        echo json_encode(array("reponse" => "false", "place" => "tc", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
    }
}