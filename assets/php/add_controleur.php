<?php


include './config.php';

session_start();

$id_u = $_SESSION['id_user'];


$nom_controleur = $_POST["first_name"];
$prenom_controleur = $_POST["last_name"];
$wilaya = $_POST["wilaya"];
$commune = implode(',',$_POST['commune']);
$email = $_POST["email"];
$phone = $_POST["phone"];
$username = $_POST["username"];
$password = $_POST["password"];
$nonhashedPass = $_POST["password"];
$password=sha1($password);

$role='controleur';

try {
    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $req = $bdd->prepare('INSERT INTO `users`( `username`, `password`, `role`, `date_creation`) VALUES(?,?,?,NOW()) ');
    $req->execute(array($username,$password,'controleur'));

    $id_user = $bdd->lastInsertId();



    $req = $bdd->prepare('INSERT INTO `controleur`(`nom_controleur`, `prenom_controleur`,  `id_user`, `wilaya`, `commune`, `email`, phone,`added_by`, `date_creation`) VALUES(?,?,?,?,?,?,?,?,NOW())');
    $req->execute(array($nom_controleur, $prenom_controleur,$id_user, $wilaya, $commune, $email,$phone,$id_u));
   
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
    echo "true";
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo $msg;
}
?>