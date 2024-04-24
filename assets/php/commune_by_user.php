<?php


include './config.php';



try {

    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));



if(isset($_POST['wil']) && $_POST['wil']=="all" ){


    
session_start();

$wilaya_code = $_SESSION['wilaya'];
$role = $_SESSION['role'];
$id_user = $_SESSION['id_user'];
    if($role=='controleur'){




        $req = $bdd->prepare("SELECT * FROM `communes`
        left join controleur on communes.wilaya_code = controleur.wilaya 
         WHERE wilaya_code =? and id_user = ? AND controleur.commune LIKE CONCAT('%', communes.commune_code, '%')");
        $req->execute(array($wilaya_code,$id_user));

        while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
            $output[] = $res;
        } //fin while

    }else if($role=='superviseur'){
            $req = $bdd->prepare('SELECT * FROM `communes` WHERE wilaya_code =?');
            $req->execute(array($wilaya_code));
            $output = [];
            while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
                $output[] = $res;
            } //fin while
            }


            else if($role=='superviseur_national'){


                $wilaya_code = $_POST['wilaya_code'];
                $req = $bdd->prepare('SELECT * FROM `communes` WHERE wilaya_code =?');
                $req->execute(array($wilaya_code));
                $output = [];
                while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
                    $output[] = $res;
                } //fin while
                }

}elseif(isset($_POST['wil'])  ){
        $wilaya_code = $_POST['wil'];

        
  
        $req = $bdd->prepare('SELECT * FROM `communes` WHERE wilaya_code =?');
        $req->execute(array($wilaya_code));
        $output = [];
        while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
            $output[] = $res;
        } //fin while
        }




    // while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
    //     $output[] = $res;
    // } //fin while



    echo json_encode($output);
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo json_encode(array("reponse" => "false", "place" => "tc", "message" => $msg, "type" => "danger", "icon" => "nc-icon nc-bell-55", "autoDismiss" => 0));
}

//}else{
  //  echo false;
//}