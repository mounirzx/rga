<?php
include './config.php';


try {
    // Connection to the database
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $wilaya_code = $_POST['wilaya_code'];


    $req =$bdd->prepare('SELECT  *,
     superviseur.wilaya as wilaya_sup,
     controleur.commune as controleur_commune,
     superviseur.phone as superviseur_phone,
     controleur.phone as controleur_phone,
     controleur.wilaya as controleur_wilaya,
     recenseur.phone as recenseur_phone,
     recenseur.commune as recenseur_commune, 
     recenseur.id_user as id_user_recenseur,
     controleur.id_user as id_user_controleur,
     superviseur.id_user as id_user_superviseur,
     superviseur_national.id_user as id_user_superviseur_national
     FROM users 
     LEFT JOIN superviseur ON users.id_user = superviseur.id_user 
     LEFT JOIN controleur ON users.id_user = controleur.id_user 
     LEFT JOIN recenseur ON users.id_user = recenseur.id_user 
     LEFT JOIN superviseur_national ON users.id_user = superviseur_national.id_user  
     
where superviseur.wilaya = ? ||  controleur.wilaya = ? ||   recenseur.commune LIKE "' . $wilaya_code . '%"
 ');

 $req->execute(array($wilaya_code,$wilaya_code));

$i=0;
    while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
        $output[] = $res;

        if($res['role']=="superviseur"){
                $req1 = $bdd->prepare('select * from communes where wilaya_code = ? group by  wilaya_code ');
                $req1->execute(array($res['wilaya_sup']));
                $wilaya = $req1->fetch(PDO::FETCH_ASSOC);
                $wilaya = $wilaya['wilaya_name_ascii'];
                $output[$i]['wilaya_sup']=$wilaya;
        }
        if($res['role']=="controleur"){
            ///******************************************** */
            //wilaya
            $req2 = $bdd->prepare('select * from communes where wilaya_code =? ');
            $req2->execute(array($res['controleur_wilaya']));
            $res2 = $req2->fetch(PDO::FETCH_ASSOC);
            $wilaya_code = $res['controleur_wilaya'];
           @$wilaya = $res2['wilaya_name_ascii'];
            $output[$i]['wilaya_code_controleur']=$wilaya_code;
            $output[$i]['controleur_wilaya']=$wilaya;
            /************************************************* */
            ///commune
            $comm="";
            $commune=$res['controleur_commune'];
            // print_r($wilaya);
            $commune = explode(',', $commune);

            foreach ($commune as $code) {
                $req1 = $bdd->prepare('SELECT * FROM communes WHERE commune_code = ?');
                $req1->execute(array($code));
                $res2 = $req1->fetch(PDO::FETCH_ASSOC);
    
                if ($res2) {
                    $comm .= $res2['commune_name_ascii'] . ', ';
                }
            }
    
            // Remove the trailing comma and space
            $comm = rtrim($comm, ', ');
    
        
            $output[$i]['controleur_commune']=$comm;
                    }

                    if($res['role']=="superviseur_national"){
                        $wilaya = $res['wilaya'];
                        $wilaya = explode(',',$wilaya);
                        $wil = "";
                            foreach ($wilaya as $code) {
                                            $req3 = $bdd->prepare('SELECT * FROM communes WHERE wilaya_code = ? group by  wilaya_code ');
                                            $req3->execute(array($code));
                                            $res2 = $req3->fetch(PDO::FETCH_ASSOC);
                                            if ($res2) {
                                                $wil .= $res2['wilaya_name_ascii'] . ', ';
                                            }
                                        }
                                        $wil = rtrim($wil, ', ');
                        $output[$i]['superviseur_nat_wilaya']=$wil;
                                }


                                if($res['role']=="recenseur"){
                                    $req4 = $bdd->prepare('SELECT * FROM communes WHERE commune_code = ?  ');
                                    $req4->execute(array($res['recenseur_commune']));
                                    $res4 = $req4->fetch(PDO::FETCH_ASSOC);
                                   @$commune = $res4['commune_name_ascii'];
                                    $output[$i]['recenseur_commune']=$commune;
                                }
        $i++;
    }

    echo json_encode($output);
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