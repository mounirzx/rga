<?php
// Include your database configuration file
include('config.php');

// Check if the ID parameter is provided in the request
if (isset($_GET['id'])) { // Changed parameter name to 'id'
    // Get the ID from the request
    $id = $_GET['id']; // Changed parameter name to 'id'

    try {
        // Establish a connection to the database
        $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        // Prepare the SQL query to fetch questionnaire data by ID
        $stmt = $bdd->prepare("SELECT * FROM questionnaire WHERE id_questionnaire = :id");

        // Bind the ID parameter and execute the query
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Fetch the result as an associative array
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if result is empty (no data found for the provided ID)
        if (!$result) {
            // Return a custom message indicating no data found
            echo json_encode(["error" => "No data found for the provided ID"]);
        } else {
            // Return the result as JSON
            echo json_encode($result);
        }
    } catch (PDOException $e) {
        // Handle any database errors
        echo json_encode(["error" => $e->getMessage()]);
    }
} else {
    // Return an error message if the ID parameter is not provided
    echo json_encode(["error" => "ID parameter is missing"]);
}
?>
