<?php


include './config.php';


$nom_recensseur = $_POST['first_name'];
$prenom_recenseur = $_POST['last_name'];
$commune = $_POST['commune'];
$email = $_POST['email'];
$id_recensseur = $_POST['id_recenseur'];

try {
    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $req = $bdd->prepare('UPDATE `recenseur` SET `nom_recensseur` = ?, `prenom_recenseur` = ?, `commune` = ?, `email` = ? WHERE `id_user` = ?');
    $req->execute(array($nom_recensseur, $prenom_recenseur, $commune,  $email, $id_recensseur));

    echo "true";
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo $msg;
}
?>