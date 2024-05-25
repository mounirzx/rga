<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Assuming empty password
$dbname = "rga";

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the request method is POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the data sent from the client
        $id = $_POST['id'];
        $column = $_POST['column'];
        $value = $_POST['value'];

        // If the column is 'password', hash the value using SHA1 and update both 'password' and 'nonhashedpass' columns
       // If the column is 'password', hash the value using SHA1 and update both 'password' and 'nonhashedpass' columns
if ($column === 'nonhashedpass') {
    $hashedValue = sha1($value);

    // Prepare the SQL update query
    $sql = "UPDATE users SET password = :password, nonhashedpass = :nonhashedpass WHERE id_user = :id";

    // Prepare the statement
    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':password', $hashedValue);
    $stmt->bindParam(':nonhashedpass', $value);
    $stmt->bindParam(':id', $id);

    // Execute the statement
    $stmt->execute();

    // Close the cursor
    $stmt->closeCursor();
}  else {
            // If the column is not 'password', update only the specified column
            // Prepare the SQL update query
            $sql = "UPDATE users SET $column = :value WHERE id_user = :id";

            // Prepare the statement
            $stmt = $pdo->prepare($sql);

            // Bind parameters
            $stmt->bindParam(':value', $value);
            $stmt->bindParam(':id', $id);

            // Execute the statement
            $stmt->execute();

            // Close the cursor
            $stmt->closeCursor();
        }
    }

    // Close the database connection
    $pdo = null;
} catch(PDOException $e) {
    // Print error message if something goes wrong
    echo "Error: " . $e->getMessage();
}
?>
