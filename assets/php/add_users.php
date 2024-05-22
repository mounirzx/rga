<?php


include './config.php';

session_start();

if(empty($_POST['email']) ||   empty($_POST['username']) ||  empty($_POST['password'])){
    echo json_encode(array("response"=> "false"));
}else{
$nom_superviseur = $_POST["first_name"];
$prenom_superviseur = $_POST["last_name"];
$role = $_POST["role"];

if($role=="superviseur_national"){

    $nom_superviseur = $_POST["first_name"];
    $prenom_superviseur = $_POST["last_name"];
    
    $wilaya = implode(',',$_POST["wilaya"]);



}elseif($role=="superviseur"){
    $nom_superviseur = $_POST["first_name"];
    $prenom_superviseur = $_POST["last_name"];
    $wilaya = $_POST["wilaya"];

    
    
}elseif($role=="controleur"){
    $id_u = $_SESSION['id_user'];


    $nom_controleur = $_POST["first_name"];
    $prenom_controleur = $_POST["last_name"];
    $wilaya = $_POST["wilaya"];
    $commune = implode(',',$_POST['commune']);

}elseif($role=="recenseur"){
    $id_controleur = $_SESSION['id_user'];

    $nom_recensseur = $_POST['first_name'];
    $prenom_recenseur = $_POST['last_name'];
    $commune = $_POST['commune'];

    
    }else{

            $wilaya = $_POST["wilaya"];
            $commune = $_POST['commune'];

         
          
            
    }

    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nonhashedPass = $_POST["password"];
    $password=sha1($password);
    $link='rga.madr.gov.dz';

try {
    //connexion a la base de données
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $req = $bdd->prepare('INSERT INTO `users`( `username`, `password`,nonhashedpass, `role`, `date_creation`) VALUES(?,?,?,?,NOW()) ');
    $req->execute(array($username, $password, $nonhashedPass,$role));

    $id_user = $bdd->lastInsertId();

    if ($role == 'superviseur_national') {
        $req2 = $bdd->prepare('INSERT INTO `superviseur_national`(`id_user`, `nom_superviseur_national`, `prenom_superviseur_national`, `phone`, `wilaya`, `email`, `creation_date`) VALUES(?,?,?,?,?,?,NOW())');
        $req2->execute(array($id_user,$nom_superviseur, $prenom_superviseur,$phone, $wilaya,  $email));
    } elseif ($role == 'superviseur') {
        $req2 = $bdd->prepare('INSERT INTO `superviseur`(`id_user`, `nom_superviseur`, `prenom_superviseur`, `phone`, `wilaya`, `email`, `creation_date`) VALUES(?,?,?,?,?,?,NOW())');
        $req2->execute(array($id_user,$nom_superviseur, $prenom_superviseur,$phone, $wilaya,  $email));
    } elseif ($role == 'controleur') {
        $req2 = $bdd->prepare('INSERT INTO `controleur`(`nom_controleur`, `prenom_controleur`,  `id_user`, `wilaya`, `commune`, `email`, phone,`added_by`, `creation_date`) VALUES(?,?,?,?,?,?,?,?,NOW())');
        $req2->execute(array($nom_controleur, $prenom_controleur,$id_user, $wilaya, $commune, $email,$phone,$id_u));
    } elseif ($role == 'recenseur') {
        $req2 = $bdd->prepare('INSERT INTO `recenseur`( `id_user`, `nom_recensseur`, `prenom_recenseur`, `commune`, `email`, `controleur`,phone) VALUES(?,?,?,?,?,?,?)');
        $req2->execute(array($id_user,$nom_recensseur, $prenom_recenseur, $commune,  $email, $id_controleur,$phone));
    
    }elseif ($role == 'admin_central') {
        $req2 = $bdd->prepare('INSERT INTO `admin_central`(`id_user`, `nom_admin`, `prenom_admin`, `phone`, `email`) VALUES(?,?,?,?,?)');
        $req2->execute(array($id_user,$nom_superviseur, $prenom_superviseur, $phone, $email));
    
    }

    
   

    // Update last_login field for the newly added user
    $updateLastLogin = $bdd->prepare("UPDATE users SET last_login = NOW() WHERE id_user = ?");
    $updateLastLogin->execute(array($id_user));

    // Include the code for sending emails
    $url = 'https://rga.madr.gov.dz/rga-mails/';
    // Initialize cURL session
    $ch = curl_init($url);

    $data = ['username'=>$username, 'nonhashedPass'=>$nonhashedPass, 'role'=>$role, 'email'=>$email,'link'=>$link];
    // Set the POST data
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    // Execute the request
    $response = curl_exec($ch);
    // Close cURL session
    curl_close($ch);

    echo json_encode(array("response"=> "true"));
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo $msg;
}
}
?>
