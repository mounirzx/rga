<?php
// Database connection parameters
include('config.php');

// Function to establish database connection using PDO
function connectToDatabase() {
    global $servername, $username, $password, $dbname;
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}

// Function to delete a user from the database
function deleteUser($id, $role) {
    $conn = connectToDatabase();
    try {
        // Define the expected roles
        $validRoles = ['controleur', 'superviseur', 'superviseur_national', 'recenceur', 'admin_central'];

        // Check if the provided role is valid
        if (!in_array($role, $validRoles)) {
            return "Invalid role";
        }

        // Delete from appropriate tables based on the role
        switch ($role) {
            case 'controleur':
                // Additional deletion from controleur table
                $stmt = $conn->prepare("DELETE FROM controleur WHERE id_user = :id");
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                break;

            case 'superviseur':
                // Additional deletion from superviseur_national table
                $stmt = $conn->prepare("DELETE FROM superviseur WHERE id_user = :id");
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                break;
            case 'superviseur_national':
                    // Additional deletion from superviseur_national table
                    $stmt = $conn->prepare("DELETE FROM superviseur_national WHERE id_user = :id");
                    $stmt->bindParam(':id', $id);
                    $stmt->execute();
                    break;
            case 'recenceur':
                        // Additional deletion from superviseur_national table
                        $stmt = $conn->prepare("DELETE FROM recenceur WHERE id_user = :id");
                        $stmt->bindParam(':id', $id);
                        $stmt->execute();
                        break;
            case 'admin_central':
                            // Additional deletion from superviseur_national table
                            $stmt = $conn->prepare("DELETE FROM admin_central WHERE id_user = :id");
                            $stmt->bindParam(':id', $id);
                            $stmt->execute();
                            break;
            // Add other cases for other roles

            default:
                // No additional table to delete from
                break;
        }

        // Always delete from users table
        $stmt = $conn->prepare("DELETE FROM users WHERE id_user = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return "User deleted successfully";
    } catch(PDOException $e) {
        return "Error deleting user: " . $e->getMessage();
    }
}

// Check if the ID and role parameters are set in the request
if (isset($_POST['id']) && isset($_POST['role'])) {
    $id = $_POST['id'];
    $role = $_POST['role'];
    echo deleteUser($id, $role);
} else {
    echo "No user ID or role specified";
}
?>
