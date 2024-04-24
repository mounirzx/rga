<?php


include './config.php';

session_start();

$id_controleur = $_SESSION['id_user'];

$nom_recensseur = $_POST['first_name'];
$prenom_recenseur = $_POST['last_name'];
$commune = $_POST['commune'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];
$nonhashedPass = $_POST["password"];
$password=sha1($password);

$role='controleur';
try {
    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $req = $bdd->prepare('INSERT INTO `users`( `username`, `password`, `role`, `date_creation`) VALUES(?,?,?,NOW()) ');
    $req->execute(array($username,$password,'recenseur'));

    $id_user = $bdd->lastInsertId();


    $req = $bdd->prepare('INSERT INTO `recenseur`( `id_user`, `nom_recensseur`, `prenom_recenseur`, `commune`, `email`, `controleur`,phone) VALUES(?,?,?,?,?,?,?)');
    $req->execute(array($id_user,$nom_recensseur, $prenom_recenseur, $commune,  $email, $id_controleur,$phone));
    include('mail.php');
    echo "true";
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo $msg;
}
?>