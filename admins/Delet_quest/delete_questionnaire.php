<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id_questionnaire'])) {
        $id_questionnaire = $_POST['id_questionnaire'];

        // Replace this with your database connection details
        $servername = "localhost";
        $username = "root";
        $password = "rootRGAdb";
        $dbname = "rga";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            echo json_encode(['success' => false, 'message' => 'Database connection failed']);
            exit();
        }

        // Array of tables and respective columns to delete from
        $tables = [
            'coherence_superficie' => 'id_quest',
            'materiel_agricole' => 'id_questionnaire',
            'questionnaire' => 'id_questionnaire',
            'status_juridique' => 'id_questionnaire',
            'superficie_exploitation' => 'id_questionnaire',
            'utilisation_du_sol' => 'id_questionnaire'
        ];

        // Track if all deletions are successful
        $all_deleted = true;

        // Loop through tables and delete the entry
        foreach ($tables as $table => $column) {
            $sql = "DELETE FROM $table WHERE $column = ?";
            // Prepare statement
            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("i", $id_questionnaire);
                if (!$stmt->execute()) {
                    $all_deleted = false;
                }
                $stmt->close();
            } else {
                $all_deleted = false;
            }
        }

        if ($all_deleted) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to delete from one or more tables']);
        }

        $conn->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Questionnaire ID not provided']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>
