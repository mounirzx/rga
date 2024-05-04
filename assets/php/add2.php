<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header('Content-Type: application/json');
include('config.php');

$form = json_decode(file_get_contents("php://input"));
$data = $form->form; // Make sure this variable is correctly assigned and not null

try {
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    $bdd->exec("SET NAMES 'utf8'");
    $bdd->exec("SET CHARACTER SET utf8");

    // Generic function to insert data into any table
    function insertData($pdo, $tableName, $dataObject, $lastInsertId) {
        $stmt = $pdo->query("SHOW COLUMNS FROM `$tableName`");
        $columns = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
        
        $filteredData = array_intersect_key((array)$dataObject, array_flip($columns));
        $filteredData['id_questionnaire'] = $lastInsertId; // Adding last inserted ID
        

        $sqlColumns = implode(", ", array_map(function($field) { return "`$field`"; }, array_keys($filteredData)));
        $sqlValues = ":" . implode(", :", array_keys($filteredData));

        $query = $pdo->prepare("INSERT INTO `$tableName` ($sqlColumns) VALUES ($sqlValues)");
        $query->execute($filteredData);
    }


     // Query the database to get column names from the table
     $stmt = $bdd->query("SHOW COLUMNS FROM superficie_exploitation");
     $columns = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
     $columnFilter = array_flip($columns);
 
     // Filter incoming data against the table columns
     $filteredData = array_intersect_key((array)$data, $columnFilter);
     
     // Assume id_questionnaire is managed separately if not included in the form
     $lastInsertId = $bdd->lastInsertId();
     $filteredData['id_questionnaire'] = $lastInsertId; // Ensuring the questionnaire ID is set
 
     // Generate the SQL dynamically
     $sqlColumns = implode(", ", array_map(function($field) { return "`$field`"; }, array_keys($filteredData)));
     $sqlValues = ":" . implode(", :", array_keys($filteredData));
     $query = $bdd->prepare("INSERT INTO `superficie_exploitation` ($sqlColumns) VALUES ($sqlValues)");
     $query->execute($filteredData);


    // Insert data into each table dynamically
    foreach (['status_juridique', 'utilisation_du_sol', 'materiel_agricole'] as $table) {
        $formDataArray = $form->{$table} ?? [];
        foreach ($formDataArray as $item) {
            insertData($bdd, $table, $item, $bdd->lastInsertId());
        }
    }

    echo json_encode(['response' => true]);
} catch (Exception $e) {
    http_response_code(500); // Set appropriate response code
    echo json_encode(['response' => false, 'error' => $e->getMessage()]);
}
?>
