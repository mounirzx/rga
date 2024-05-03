<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
include('config.php');
 
$form = json_decode(file_get_contents("php://input"));
$data = $form->form;
 
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
    
 
    // Prepare parameters for SQL statement for questionnaire table
    $paramsQuestionnaire = [];
    $fieldsQuestionnaire = array_keys(get_object_vars($data));
 
    // Concatenate keys to create a unique identifier
    $cle =  $data->nom_exploitant;
 
    // Add the new column and its dummy value to the parameters
    $paramsQuestionnaire['exploitant_cle_unique'] = $cle;
    $fieldsQuestionnaire[] = 'exploitant_cle_unique'; // Include the new column in the field list
 
    foreach ($fieldsQuestionnaire as $field) {
        if (!isset($paramsQuestionnaire[$field])) {
            $paramsQuestionnaire[$field] = isset($data->$field) ? $data->$field : null;
        }
    }
 
    // Prepare the SQL query
    $sqlColumnsQuestionnaire = implode(", ", array_map(function($field) { return "`$field`"; }, $fieldsQuestionnaire));
    $sqlValuesQuestionnaire = implode(", ", array_map(function($field) { return ":" . $field; }, $fieldsQuestionnaire));
    $reqQuestionnaire = $bdd->prepare("INSERT INTO `questionnaire` ($sqlColumnsQuestionnaire) VALUES ($sqlValuesQuestionnaire)");
    $reqQuestionnaire->execute($paramsQuestionnaire);

    
 
    // Get the last inserted ID of the questionnaire table
    $lastInsertId = $bdd->lastInsertId();
 
    // Process other collections
    foreach ($tableMappings as $key => $tableName) {
        if ($tableName !== 'questionnaire') {
            if (isset($form->$key)) {
                processCollection($bdd, $tableName, $form->$key, $key, $lastInsertId);
            }
        }
    }
 
    // Send success response
    echo json_encode(['response' => true]);
} catch (Exception $e) {
    // Send error response
    echo json_encode(["response" => false, "error" => $e->getMessage()]);
}
 
function processCollection($db, $table, $collection, $key, $lastInsertId) {
    foreach ($collection as $item) {
        // Add id_questionnaire for child tables
        $item->id_questionnaire = $lastInsertId;
 
        // Add cle for status_juridique table
        if ($table === 'status_juridique') {
            $item->cle_status_juridique = $lastInsertId . "-" . $item->origine_des_terres . "-" . $item->status_juridique;
        }
        // Add cle for utilisation_du_sol table
        if ($table === 'utilisation_du_sol') {
            $item->cle_code_culture = $lastInsertId . "-" . $item->code_culture . "-" . $item->superficie_hec . "-" . $item->superficie_are;
        }
        // Add cle for materiel_agricole table
        if ($table === 'materiel_agricole') {
            $item->cle_materiel_agricole = $lastInsertId . "-" . $item->code_materiel . "-" . $item->code_materiel_nombre;
        }
        //   // Add cle for materiel_agricole table
        //   if ($table === 'superficie_exploitation') {
        //     $item->cle_materiel_agricole = $lastInsertId . "-" . $item->code_materiel . "-" . $item->code_materiel_nombre;
        // }




        insertData($db, $table, (array) $item, $key);
        
    }
}
 
function insertData($db, $table, $data, $key) {
    // Prepare the SQL statement
    $keys = array_keys($data);
    $fields = implode(", ", array_map(function($field) { return "`$field`"; }, $keys));
    $placeholders = ":" . implode(", :", $keys);
    $stmt = $db->prepare("INSERT INTO `$table` ($fields) VALUES ($placeholders)");
 
    // Execute the statement with filtered data
    $stmt->execute($data);
}
?>