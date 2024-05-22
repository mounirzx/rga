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
    $code_materiel = $_POST['code_materiel'];

    // Prepare a DELETE SQL query
    $sql = "DELETE FROM `materiel_agricole` WHERE `code_materiel` = ? ";
    $stmt = $bdd->prepare($sql);

    try {
        // Execute the query with the provided values
        $stmt->execute([$code_materiel]);

        // Check if any rows were affected
        if ($stmt->rowCount()) {
            echo 'Row(s) deleted successfully';
        } else {
            echo 'No rows matched the criteria';
        }
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
} else {
    echo 'Invalid request method';
}
?>
