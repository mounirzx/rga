<?php
// Include your database configuration file
include('config.php');

header('Content-Type: application/json');  // Ensure the output is treated as JSON

// Check if the ID parameter is provided in the request
if (isset($_GET['id']) && is_numeric($_GET['id'])) { // Check if 'id' is provided and is a number
    $id = $_GET['id'];

    try {
        // Establish a connection to the database
        $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        // Prepare the SQL query to fetch all related data by ID using LEFT JOIN
        $stmt = $bdd->prepare("
            SELECT q.*, 
                uds.code_culture, uds.superficie_hec, uds.superficie_are, uds.en_intercalaire,
                se.cultures_herbacees_1, se.terres_au_repos_jacheres_1, se.plantations_arboriculture_1, 
                se.prairies_naturelles_1, se.superficie_agricole_utile_sau_1,
                ma.code_materiel, ma.code_materiel_nombre, ma.ee_mode_mobilisation_materiel, ma.ee_mode_exploitation_materiel,
                sj.origine_des_terres, sj.status_juridique, sj.superfecie_sj, sj.superfecie_sj_are
            FROM questionnaire q
            LEFT JOIN utilisation_du_sol uds ON q.id_questionnaire = uds.id_questionnaire
            LEFT JOIN superficie_exploitation se ON q.id_questionnaire = se.id_questionnaire
            LEFT JOIN materiel_agricole ma ON q.id_questionnaire = ma.id_questionnaire
            LEFT JOIN status_juridique sj ON q.id_questionnaire = sj.id_questionnaire
            WHERE q.id_questionnaire = :id
        ");

        // Bind the ID parameter and execute the query
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // Fetch the results as an associative array
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
          // Fetch data from status_juridique table
        $stmt_sj = $bdd->prepare("
        SELECT origine_des_terres, status_juridique, superfecie_sj, superfecie_sj_are
        FROM status_juridique
        WHERE id_questionnaire = :id
        ");
        $stmt_sj->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt_sj->execute();
        $result['status_juridique'] = $stmt_sj->fetchAll(PDO::FETCH_ASSOC);


          // Fetch data from materiel_agricole table
        $stmt_ma = $bdd->prepare("
        SELECT code_materiel, code_materiel_nombre, ee_mode_mobilisation_materiel, ee_mode_exploitation_materiel
        FROM materiel_agricole
        WHERE id_questionnaire = :id
        ");
        $stmt_ma->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt_ma->execute();
        $result['materiel_agricole'] = $stmt_ma->fetchAll(PDO::FETCH_ASSOC);

        // Check if result is empty (no data found for the provided ID)
        if (!$result) {
            echo json_encode(["error" => "No data found for the provided ID"]);
        } else {
            echo json_encode($result);
        }
    } catch (PDOException $e) {
        echo json_encode(["error" => $e->getMessage()]);
    }
} else {
    echo json_encode(["error" => "ID parameter is missing or invalid"]);
}
?>
