<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include 'config.php';

$formData = json_decode(file_get_contents("php://input"))->form;

// Define a mapping from form data keys to database table names
$tableMappings = [
    'data' => 'questionnaire',
    'formDataArrayStatut' => 'status_juridique',
    'formDataArrayCodeCulture' => 'utilisation_du_sol',
    'formDataArrayCodeMateriel' => 'materiel_agricole',
    'formDataArraySuperficie' => 'superficie_exploitation' // New table mapping
];

// Log debug information
ob_start();
echo "Debug: " . print_r($formData, true);
$logData = ob_get_clean();
$logFilePath = __DIR__ . '/logfile.log';
file_put_contents($logFilePath, $logData, FILE_APPEND);

try {
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $bdd->exec("SET NAMES 'utf8'");
    $bdd->exec("SET CHARACTER SET utf8");

    foreach ($tableMappings as $key => $tableName) {
        if (isset($formData->$key)) {
            processCollection($bdd, $tableName, $formData->$key);
        }
    }

    echo json_encode(['response' => true]);
} catch (Exception $e) {
    echo json_encode(["response" => false, "error" => $e->getMessage()]);
}

function processCollection($db, $table, $collection)
{
    foreach ($collection as $item) {
        $lastInsertId = insertData($db, $table, (array) $item);
    }
}

function insertData($db, $table, $data)
{
    $keys = array_keys($data);
    $fields = implode(", ", array_map(function ($field) {
        return "`$field`";
    }, $keys));
    $placeholders = ":" . implode(", :", $keys);
    $stmt = $db->prepare("INSERT INTO `$table` ($fields) VALUES ($placeholders)");
    $stmt->execute($data);
    return $db->lastInsertId();
}

?>
