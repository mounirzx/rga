<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include('config.php');

$form = json_decode(file_get_contents("php://input"));

// Define a mapping from form data keys to database table names
$tableMappings = [
    'data' => 'questionnaire',
    'formDataArrayStatut' => 'status_juridique',
    'formDataArrayCodeCulture' => 'utilisation_du_sol',
    'formDataArrayCodeMateriel' => 'materiel_agricole',
    //'formDataArraySuperficie' => 'superficie_exploitation' // Example mapping
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

    foreach ($form as $key => $dataGroup) {
        if (isset($tableMappings[$key])) {
            $tableName = $tableMappings[$key];
            if (is_array($dataGroup) || is_object($dataGroup)) {
                processCollection($bdd, $tableName, (array)$dataGroup);
            } else {
                insertData($bdd, $tableName, (array)$dataGroup);
            }
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

function processCollection($db, $table, $collection) {
    foreach ($collection as $item) {
        insertData($db, $table, (array) $item);
    }
}
?>
