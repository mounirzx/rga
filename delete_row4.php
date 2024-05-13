<?php
// Database configuration settings
$host = 'localhost'; // or your host
$dbname = 'rga';
$username = 'root';
$password = '';

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from POST
    $origine_des_terres = $_POST['origine_des_terres'];

    // Prepare a DELETE SQL query
    $sql = "DELETE FROM `status_juridique` WHERE `origine_des_terres` = ? ";
    $stmt = $pdo->prepare($sql);

    try {
        // Execute the query with the provided values
        $stmt->execute([$origine_des_terres]);

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
