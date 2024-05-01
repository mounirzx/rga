<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include('config.php');

$form = json_decode(file_get_contents("php://input"));

// Define a mapping from form data keys to database table names
$tableMappings = [
    'formDataArrayStatut' => 'status_juridique',
    'formDataArrayCodeCulture' => 'utilisation_du_sol',
    'formDataArrayCodeMateriel' => 'materiel_agricole',
    'data' => 'questionnaire' // Assuming this key is used for main form data
];

ob_start();
echo "Debug: ", print_r($form, true);
$logData = ob_get_clean();
$logFilePath = __DIR__ . '/logfile.log';
file_put_contents($logFilePath, $logData, FILE_APPEND);

try {
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $bdd->exec("SET NAMES 'utf8'");
    $bdd->exec("SET CHARACTER SET utf8");

    // Utility function to generate a key
    function generateKey($lastInsertId, $parts) {
        return substr($lastInsertId . '-' . implode('-', $parts), 0, 8);
    }

    // Insert data for the main form into the questionnaire table and retrieve the last inserted ID
    $mainData = $form->data;
    insertData($bdd, 'questionnaire', (array)$mainData);
    $lastInsertId = $bdd->lastInsertId();

    foreach ($form as $key => $dataGroup) {
        if (isset($tableMappings[$key]) && $key !== 'data') { // Skip main form data already inserted
            $tableName = $tableMappings[$key];
            processCollection($bdd, $tableName, (array)$dataGroup, $lastInsertId);
        }
    }

    echo json_encode(['response' => true]);
} catch (Exception $e) {
    echo json_encode(["response" => false, "error" => $e->getMessage()]);
}

function insertData($db, $table, $data) {
    $keys = array_keys($data);
    $fields = implode(", ", array_map(function($field) { return "`$field`"; }, $keys));
    $placeholders = ":" . implode(", :", $keys);
    $stmt = $db->prepare("INSERT INTO `$table` ($fields) VALUES ($placeholders)");
    $stmt->execute($data);
}

function processCollection($db, $table, $collection, $lastInsertId) {
    foreach ($collection as $item) {
        if ($table == 'status_juridique' || $table == 'utilisation_du_sol' || $table == 'materiel_agricole') {
            // Add custom key generation for specific tables
            $keyParts = [
                $item->origine_des_terres ?? '', // Example for status_juridique
                $item->code_culture ?? '',       // Example for utilisation_du_sol
                $item->code_materiel ?? ''       // Example for materiel_agricole
            ];
            $item->cle = generateKey($lastInsertId, $keyParts);
        }
        $item->id_questionnaire = $lastInsertId;
        insertData($db, $table, (array)$item);
    }
}
?>
