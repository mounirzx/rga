<?php


include './config.php';




$nom_controleur = $_POST["first_name"];
$prenom_controleur = $_POST["last_name"];
$wilaya = $_POST["wilaya"];
$commune = implode(',',$_POST['commune']);

$email = $_POST["email"];
$phone = $_POST["phone"];
$id_controleur = $_POST["id_controleur"];
$role = "controleur";
$username = $_POST["username"];
$nonhashedPass= $_POST["password"];
try {
    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $req = $bdd->prepare('UPDATE `controleur` SET `nom_controleur` = ?, `prenom_controleur` = ?, `wilaya` = ?, `commune` = ?, `email` = ? ,phone=? WHERE `id_user` = ?');
$req->execute(array($nom_controleur, $prenom_controleur, $wilaya, $commune, $email, $phone,$id_controleur));

 

$nonhashedPass= $_POST["password"];

if((isset($_POST["password"]))){
 

    $password = $_POST["password"];
    if($password!=""){
        $password = sha1($password);
    
        $req = $bdd->prepare('UPDATE `users` SET password=? , nonhashedpass=? ,username=? WHERE id_user=?');
        $req->execute(array($password,$nonhashedPass,$username, $id_controleur));
    
    }
}
$url = 'https://rga.madr.gov.dz/rga-mails/rga-update-mails.php';
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