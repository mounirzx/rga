<?php
include './config.php';


   //connexion a la base de données
   $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));



    $req = $bdd->prepare("SELECT * from superficie_exploitation ");
    $req->execute();

    while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
            $id_questionnaire = $res['id_questionnaire'];
            $superficie_agricole_utile_sau_1 = $res['superficie_agricole_utile_sau_1'];

            /************************************* */
           
            $req00 = $bdd->prepare('select st_en_hectar from questionnaire where id_questionnaire = ?');
            $req00->execute(array($id_questionnaire));
            $res00 = $req00->fetch(PDO::FETCH_ASSOC);
            $st_en_hectar = $res00['st_en_hectar'];
            /************************************* */
            $req2 = $bdd->prepare('select * from utilisation_du_sol where id_questionnaire=? ');
            $req2->execute(array($id_questionnaire));
            $superficie_hec = 0;
            $superficie_are = 0;
            while ($res2 = $req2->fetch(PDO::FETCH_ASSOC)) {

                $superficie_hec .= $res['superficie_hec'];
                $superficie_are .= $res['superficie_are'];

            }
            $totalHectares = $superficie_hec + $superficie_are;

                    /******************************************************* */
                    $coherence_util_sol="";
                    $message_coherence_util_sol="";
                    $coherence_stat_jur="";
                    $message_coherence_stat_jur="";
            if ($totalHectares > 3 * $superficie_agricole_utile_sau_1) {
                $coherence_util_sol = "text-danger";
                $message_coherence_util_sol="La surface d utilisation du sol est superieure à 3 fois la SAU déclarée";
            }else if($totalHectares <  $superficie_agricole_utile_sau_1){
                 $coherence_util_sol = "text-warning";
                 $message_coherence_util_sol="La surface d utilisation du sol est inférieure à la SAU déclarée";
            }else if(($totalHectares  >= $superficie_agricole_utile_sau_1) && ($totalHectares  <= (3*$superficie_agricole_utile_sau_1))  ){
                $coherence_util_sol = "text-danger";
                $message_coherence_util_sol="La surface d utilisation du sol est superieure à 3 fois la SAU déclarée";
            }

/********************************************************* */

$sum_superfecie_sj =0;
$req3 = $bdd->prepare('select * from status_juridique where id_questionnaire = =?  ');
$req3->execute(array($id_questionnaire));
while ($res23 = $req3->fetch(PDO::FETCH_ASSOC)) {
    $sum_superfecie_sj.=$res3['superfecie_sj'];
}
if($sum_superfecie_sj==$st_en_hectar){
    $coherence_stat_jur="text-success";
    
    $message_coherence_stat_jur="La surface totale est identique à celle déclarée au statut juridique";
  
   }
  else if ($sum_superfecie_sj > $st_en_hectar ) {
    $coherence_stat_jur="text-warning";
    $message_coherence_stat_jur="La surface totale est superieure à celle déclarée au statut juridique";
  } else if ($sum_superfecie_sj < $st_en_hectar ) {
    $coherence_stat_jur="text-danger";
    $message_coherence_stat_jur="La surface totale est inferieure à celle déclarée au statut juridique";
  }

/******************************************************** */
            $req5 = $bdd->prepare('select * from coherence_superficie where id_quest = ?  ');
                $req5->execute(array($id_questionnaire));
                $count= $req5->rowCount();
                if($count==0){
                    $req4=$bdd->prepare('INSERT INTO `coherence_superficie`(`id_quest`, `coherence_stat_jur`, `message_coherence_stat_jur`, `coherence_util_sol`, `message_coherence_util_sol`) VALUES (?,?,?,?,?)');
                    $req4->execute(array($id_questionnaire,$coherence_stat_jur,$message_coherence_stat_jur,$coherence_util_sol,$message_coherence_util_sol));
                }else{
                    $req4=$bdd->prepare('UPDATE `coherence_superficie` SET `coherence_stat_jur`=?,`message_coherence_stat_jur`=?,`coherence_util_sol`=?,`message_coherence_util_sol`=? WHERE id_quest=?');
                    $req4->execute(array($coherence_stat_jur,$message_coherence_stat_jur,$coherence_util_sol,$message_coherence_util_sol,$id_questionnaire));
                }



    } //fin while

?>
