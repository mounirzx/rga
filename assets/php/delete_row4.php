<?php

include './config.php';

// Create a new PDO instance
try {
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from POST
    $cle_status_juridique = $_POST['cle_status_juridique'];

    // Prepare a DELETE SQL query
    $sql = "DELETE FROM `status_juridique` WHERE `cle_status_juridique` = ? ";
    $stmt = $bdd->prepare($sql);

    try {
        // Execute the query with the provided values
        $stmt->execute([$cle_status_juridique]);

        // Check if any rows were affected
        if ($stmt->rowCount()) {
            echo true;
        } else {
            echo false;
        }
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
} else {
    echo 'Invalid request method';
}
?>
