<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include './config.php';

if (!isset($_POST['username']) || $_POST['username'] == "" || !isset($_POST['password']) || $_POST['password'] == "") {
    echo 1; // Invalid input
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = sha1($password); // Hashing the password with SHA1

    try {
        $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        // Base SQL query to select user and commune details
        $sql = 'select * from users ';

        if(substr($username, 0, 1) === 'S'  && is_numeric(substr($username, 1, 1))){
         
            $sql.= ' left join  superviseur on users.id_user  = superviseur.id_user  left join communes on superviseur.wilaya =  communes.wilaya_code ';
         }
         if(substr($username, 0, 1) === 'C'){
             $sql.= ' left join  controleur on users.id_user  = controleur.id_user left join communes on controleur.wilaya =  communes.wilaya_code ';
          }


        $sql .= 'WHERE users.username = ? AND users.password = ?';
        $req = $bdd->prepare($sql);
        $req->execute(array($username, $password));
        $count = $req->rowCount();
        $result = $req->fetch(PDO::FETCH_ASSOC);

        if ($count > 0) {
            session_start();
            $_SESSION['is_login'] = 'yes';
            $_SESSION['id_user'] = $result['id_user'];
            $_SESSION['role'] = $result['role'];
            $_SESSION['username'] = $result['username'];
         
 
            if(substr($username, 0, 1) === 'S'  && is_numeric(substr($username, 1, 1))){
                $_SESSION['wilaya']=$result['wilaya'];
                $_SESSION['wilaya_name']=$result['wilaya_name_ascii'];
           
                }
             
                if(substr($username, 0, 1) === 'C'){
                
                 $_SESSION['wilaya']=$result['wilaya'];
                 $_SESSION['wilaya_name']=$result['wilaya_name_ascii'];
                 }
            echo 3;  // Success
        } else {
            echo 2; // User not found
        }
    } catch (Exception $e) {
        echo $e->getMessage();  // Display error message
    }
}
?>
