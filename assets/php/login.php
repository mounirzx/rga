<?php
session_start();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include './config.php';

// Function to log failed login attempts
function logFailedAttempt($username) {
    if (!isset($_SESSION['login_attempts']) || !is_array($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = array();
    }

    if (!isset($_SESSION['login_attempts'][$username])) {
        $_SESSION['login_attempts'][$username] = 1;
    } else {
        $_SESSION['login_attempts'][$username]++;
    }
}

// Function to check if login attempts exceed limit
function isBruteForce($username) {
    $maxAttempts = 5; // Set your maximum allowed attempts here
    $loginAttempts = isset($_SESSION['login_attempts'][$username]) ? $_SESSION['login_attempts'][$username] : 0;
    if ($loginAttempts >= $maxAttempts) {
        return true;
    }
    return false;
}

// Function to calculate and return remaining cooldown time
function getCooldownTime($username) {
    $cooldownDuration = 300; // 5 minutes in seconds
    $lastAttemptTime = isset($_SESSION['last_attempt_time'][$username]) ? $_SESSION['last_attempt_time'][$username] : 0;
    $currentTime = time();
    $elapsedTime = $currentTime - $lastAttemptTime;
    $remainingTime = $cooldownDuration - $elapsedTime;
    return max(0, $remainingTime); // Ensure remaining time is not negative
}

if (!isset($_POST['username']) || $_POST['username'] == "" || !isset($_POST['password']) || $_POST['password'] == "") {
    echo json_encode(array("success" => 1)); // Invalid input
} else {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $password = sha1($password); // Hashing the password with SHA1

    // Check if this is a brute force attempt
    if (isBruteForce($username)) {
        $cooldownTime = getCooldownTime($username);
        if ($cooldownTime > 0) {
            echo json_encode(array("success" => 4, "message" => "Trop de tentatives de connexion. Veuillez réessayer dans $cooldownTime secondes."));
            exit();
        }
    }

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
            // Update last_login field in the users table
            $updateLastLogin = $bdd->prepare("UPDATE users SET last_login = NOW() WHERE id_user = ?");
            $updateLastLogin->execute(array($result['id_user']));
         
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

            echo json_encode(array('role' => $result['role'], "success" => 3));
        } else {
            logFailedAttempt($username);
            $_SESSION['last_attempt_time'][$username] = time(); // Record the time of the last failed attempt
            echo json_encode(array("success" => 2)); // User not found
        }
    } catch (Exception $e) {
        echo json_encode(array("success" => 5, "message" => $e->getMessage()));  // Display error message
    }
}
?>
