<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include('config.php');

$form = json_decode(file_get_contents("php://input"));
$data = $form->form;
$paramsQuestionnaire = [];
$fieldsQuestionnaire = array_keys(get_object_vars($data));
$fieldsQuestionnaire = array_diff($fieldsQuestionnaire, ['origine_des_terres', 'status_juridique', 'superficie_hectare', 'superficie_are']);

// Filter out keys mentioned in the error message
$errorKeys = ['cultures_herbacees_1', 'cultures_herbacees_2', 'cultures_herbacees_3', 'cultures_herbacees_4', 'terres_au_repos_jacheres_1', 'terres_au_repos_jacheres_2', 'terres_au_repos_jacheres_3', 'terres_au_repos_jacheres_4', 'plantations_arboriculture_1', 'plantations_arboriculture_2', 'plantations_arboriculture_3', 'plantations_arboriculture_4', 'prairies_naturelles_1', 'prairies_naturelles_2', 'prairies_naturelles_3', 'prairies_naturelles_4', 'superficie_agricole_utile_sau_1', 'superficie_agricole_utile_sau_2', 'superficie_agricole_utile_sau_3', 'superficie_agricole_utile_sau_4', 'pacages_et_parcours_1', 'pacages_et_parcours_2', 'surfaces_improductives_1', 'surfaces_improductives_2', 'superficie_agricole_totale_sat_1', 'superficie_agricole_totale_sat_2', 'terres_forestieres_bois_forets_maquis_vides_labourables_1', 'terres_forestieres_bois_forets_maquis_vides_labourables_2', 'surface_totale_st_1', 'surface_totale_st_2'];
$fieldsQuestionnaire = array_diff($fieldsQuestionnaire, $errorKeys);
foreach ($fieldsQuestionnaire as $field) {
    $paramsQuestionnaire[$field] = isset($data->$field) ? $data->$field : null;
}

// Assuming that 'id_questionnaire' is a property in your $data object that holds the record ID
$paramsQuestionnaire['id_questionnaire'] = $data->id_questionnaire; // Make sure this is correctly assigned

try {
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    $bdd->exec("SET NAMES 'utf8'");
    $bdd->exec("SET CHARACTER SET utf8");

    // Prepare SQL set part
    $sqlSetPart = [];
    foreach ($paramsQuestionnaire as $key => $value) {
        if ($key !== 'id_questionnaire') {  // Exclude id_questionnaire from the SET part of the update
            $sqlSetPart[] = "`$key` = :$key";
        }
    }
    $sqlSetParts = implode(", ", $sqlSetPart);

    $reqQuestionnaire = $bdd->prepare("UPDATE `questionnaire` SET $sqlSetParts WHERE `id_questionnaire` = :id_questionnaire");
    $reqQuestionnaire->execute($paramsQuestionnaire);




      

     
        echo json_encode(['response' => "success", 'message' => "Records updated successfully"]);
    } catch (Exception $e) {
      
        echo json_encode(["response" => "error", "message" => $e->getMessage()]);
    }

?>
