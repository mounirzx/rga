<?php


include './config.php';
try {

    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // LISTE BULLETIN
    $req = $bdd->prepare('SELECT  DATE(date_saisi) AS saisi_date,  SUBSTRING(questionnaire.commune_code, 1, 2) AS wilaya_code,wilaya_name_ascii, COUNT(*) AS total_count
FROM questionnaire left join communes on questionnaire.commune_code = communes.commune_code
GROUP BY saisi_date, wilaya_code');
    $req->execute();
    while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
       
    }






} catch (Exception $e) {
    $msg = $e->getMessage();
    echo json_encode(array("reponse" => "false", "place" => "tc", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
}

//}else{
  //  echo false;
//}
