<?php


include './config.php';




$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];

$email = $_POST["email"];
$phone = $_POST["phone"];
$id_user=$_POST["id_user"];
$role = "administrateur central";
$username = $_POST["username"];
$nonhashedPass= $_POST["password"];
try {
    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $req = $bdd->prepare('UPDATE `admin_central` SET `nom_admin`=?,`prenom_admin`=?,`phone`=?,`email`=? WHERE id_user=? ');
$req->execute(array($first_name, $last_name, $phone, $email,$id_user));



if(isset($_POST['password'])){
    $password = $_POST["password"];
    if($password!=""){
        $password = sha1($password);
    
        $req = $bdd->prepare('UPDATE `users` SET password=?,nonhashedpass=? WHERE id_user=?');
        $req->execute(array($password,$nonhashedPass, $id_user));
    
    }
}
$url = 'https://dgl.bneder.dz/rga-mails/rga-update-mails.php';
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