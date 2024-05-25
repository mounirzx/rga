<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rga";

// Function to establish database connection
function connectToDatabase() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Function to retrieve users from the database
function getUsers() {
    $conn = connectToDatabase();
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $data = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    $conn->close(); // Close connection
    return $data;
}

// Fetch data and return JSON
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $data = getUsers();
    echo json_encode($data);
}
?>
