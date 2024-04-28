<?php

include './config.php';




$nom_superviseur = $_POST["first_name"];
$prenom_superviseur = $_POST["last_name"];

$wilaya = implode(',',$_POST["wilaya"]);
$phone = $_POST["phone"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$nonhashedPass = $_POST["password"];
$password=sha1($password);

$role='superviseur national';
try {
    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


    $req = $bdd->prepare('INSERT INTO `users`( `username`, `password`, `role`, `date_creation`) VALUES(?,?,?,NOW()) ');
    $req->execute(array($username,$password,'superviseur_national'));

    $id_user = $bdd->lastInsertId();

    $req2 = $bdd->prepare('INSERT INTO `superviseur_national`(`id_user`, `nom_superviseur_national`, `prenom_superviseur_national`, `phone`, `wilaya`, `email`, `creation_date`) VALUES(?,?,?,?,?,?,NOW())');
$req2->execute(array($id_user,$nom_superviseur, $prenom_superviseur,$phone, $wilaya,  $email));


//include('mail_superviseur.php');
include('mail.php');
    echo json_encode(array("response"=> "true"));
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo $msg;
}
?>

