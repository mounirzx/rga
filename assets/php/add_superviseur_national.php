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

$role='superviseur_national';
try {
    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


    $req = $bdd->prepare('INSERT INTO `users`( `username`, `password`, `role`, `date_creation`) VALUES(?,?,?,NOW()) ');

    $id_user = $bdd->lastInsertId();

    $req2 = $bdd->prepare('INSERT INTO `superviseur_national`(`id_user`, `nom_superviseur_national`, `prenom_superviseur_national`, `phone`, `wilaya`, `email`, `creation_date`) VALUES(?,?,?,?,?,?,NOW())');
$req2->execute(array($id_user,$nom_superviseur, $prenom_superviseur,$phone, $wilaya,  $email));


//include('mail_superviseur.php');

$url = 'https://dgl.bneder.dz/rga-mails/';
    // Initialize cURL session
$ch = curl_init($url);

$data = ['username'=>$username,'nonhashedPass'=>$nonhashedPass,'role'=>$role,'email'=>$email];
// Set the POST data
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Execute the request
$response = curl_exec($ch);

// Close cURL session
curl_close($ch);
//include('mail.php');
    echo json_encode(array("response"=> "true"));
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo $msg;
}
?>

