<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include('config.php');

// Decode the JSON input into an associative array
$form = json_decode(file_get_contents("php://input"), true);
$data = $form['form'];
$formDataArrayStatut = $form['formDataArrayStatut'] ?? [];


// Debugging: Log formDataArrayStatut to check content
ob_start();
echo "Debug: ", print_r($formDataArrayStatut, true);
$logData = ob_get_clean();
$logFilePath = __DIR__ . '/logfile.log';
file_put_contents($logFilePath, $logData, FILE_APPEND);

// Prepare the list of fields to update, excluding specific fields
$excludeFields = ['origine_des_terres', 'status_juridique', 'superficie_hectare', 'superficie_are'];
$errorKeys = [
    'cultures_herbacees_1', 'cultures_herbacees_2', 'cultures_herbacees_3', 'cultures_herbacees_4', 
    'terres_au_repos_jacheres_1', 'terres_au_repos_jacheres_2', 'terres_au_repos_jacheres_3', 'terres_au_repos_jacheres_4',
    'plantations_arboriculture_1', 'plantations_arboriculture_2', 'plantations_arboriculture_3', 'plantations_arboriculture_4', 
    'prairies_naturelles_1', 'prairies_naturelles_2', 'prairies_naturelles_3', 'prairies_naturelles_4', 
    'superficie_agricole_utile_sau_1', 'superficie_agricole_utile_sau_2', 'superficie_agricole_utile_sau_3', 'superficie_agricole_utile_sau_4', 
    'pacages_et_parcours_1', 'pacages_et_parcours_2', 'surfaces_improductives_1', 'surfaces_improductives_2', 
    'superficie_agricole_totale_sat_1', 'superficie_agricole_totale_sat_2', 'terres_forestieres_bois_forets_maquis_vides_labourables_1', 'terres_forestieres_bois_forets_maquis_vides_labourables_2', 
    'surface_totale_st_1', 'surface_totale_st_2'
];
$fieldsQuestionnaire = array_diff(array_keys($data), array_merge($excludeFields, $errorKeys));

try {
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    $bdd->exec("SET NAMES 'utf8'");
    $bdd->exec("SET CHARACTER SET utf8");

    // Construct the SQL query for the update
    $sqlSetParts = [];
    foreach ($fieldsQuestionnaire as $field) {
        if ($field !== 'id_questionnaire') {
            $sqlSetParts[] = "`$field` = :$field";
        }
    }
    $sqlSetString = implode(", ", $sqlSetParts);
    $reqQuestionnaire = $bdd->prepare("UPDATE `questionnaire` SET $sqlSetString WHERE `id_questionnaire` = :id_questionnaire");

    // Bind values to the prepared statement
    foreach ($fieldsQuestionnaire as $field) {
        $reqQuestionnaire->bindValue(":$field", $data[$field]);
    }
    $reqQuestionnaire->bindValue(':id_questionnaire', $data['id_questionnaire']);
    $reqQuestionnaire->execute();

    echo json_encode(['response' => "success", 'message' => "Records updated successfully"]);
} catch (Exception $e) {
    echo json_encode(["response" => "error", "message" => $e->getMessage()]);
}

?>
