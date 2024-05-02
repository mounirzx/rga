<?php


include './config.php';




$nom_superviseur = $_POST["first_name"];
$prenom_superviseur = $_POST["last_name"];
$wilaya = $_POST["wilaya"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$id_superviseur = $_POST["id_superviseur"];
$role="superviseur";

try {
    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $req = $bdd->prepare('UPDATE `superviseur` SET `nom_superviseur`=?,`prenom_superviseur`=?,`wilaya`=?,`phone`=?,`email`=? WHERE id_user=?');
$req->execute(array($nom_superviseur, $prenom_superviseur, $wilaya, $phone, $email, $id_superviseur));


if((isset($_POST["password"]))){
    
$nonhashedPass= $_POST["password"];
    $password = $_POST["password"];
    if($password!=""){
        $password = sha1($password);
    
        $req = $bdd->prepare('UPDATE `users` SET password=? WHERE id_user=?');
        $req->execute(array($password, $id_superviseur));
    
    }
}

$url = 'https://dgl.bneder.dz/rga-update-mails.php';
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
    echo "true";
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo $msg;
}
?>