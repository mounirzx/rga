<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include('config.php');

$form = json_decode(file_get_contents("php://input"), true);

error_log("Received data: " . json_encode($form));

if (!isset($form['form'])) {
    echo json_encode(["response" => "error", "message" => "Invalid data received"]);
    exit;
}

$data = $form['form'];
$formDataArrayStatut = $form['formDataArrayStatut'] ?? [];
$formDataArraySol = $form['formDataArraySol'] ?? [];
$formDataArrayCodeMateriel = $form['formDataArrayCodeMateriel'] ?? [];

try {
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    $bdd->exec("SET NAMES 'utf8'");
    $bdd->exec("SET CHARACTER SET utf8");

    $bdd->beginTransaction();

    // Update main questionnaire
    $paramsQuestionnaire = [];
    // Filter out keys mentioned in the error message
$errorKeys = ['cultures_herbacees_1', 'cultures_herbacees_2', 'cultures_herbacees_3', 'cultures_herbacees_4', 'terres_au_repos_jacheres_1', 'terres_au_repos_jacheres_2', 'terres_au_repos_jacheres_3', 'terres_au_repos_jacheres_4', 'plantations_arboriculture_1', 'plantations_arboriculture_2', 'plantations_arboriculture_3', 'plantations_arboriculture_4', 'prairies_naturelles_1', 'prairies_naturelles_2', 'prairies_naturelles_3', 'prairies_naturelles_4', 'superficie_agricole_utile_sau_1', 'superficie_agricole_utile_sau_2', 'superficie_agricole_utile_sau_3', 'superficie_agricole_utile_sau_4', 'pacages_et_parcours_1', 'pacages_et_parcours_2', 'surfaces_improductives_1', 'surfaces_improductives_2', 'superficie_agricole_totale_sat_1', 'superficie_agricole_totale_sat_2', 'terres_forestieres_bois_forets_maquis_vides_labourables_1', 'terres_forestieres_bois_forets_maquis_vides_labourables_2', 'surface_totale_st_1', 'surface_totale_st_2'];
$fieldsQuestionnaire = array_diff($fieldsQuestionnaire, $errorKeys);
foreach ($fieldsQuestionnaire as $field) {
    $paramsQuestionnaire[$field] = isset($data->$field) ? $data->$field : null;
}
    foreach ($data as $field => $value) {
        $paramsQuestionnaire[$field] = $value;
    }

    $sqlSetParts = implode(", ", array_map(function($field) { return "`$field` = :$field"; }, array_keys($paramsQuestionnaire)));
    $reqQuestionnaire = $bdd->prepare("UPDATE `questionnaire` SET $sqlSetParts WHERE `id_questionnaire` = :id_questionnaire");
    $reqQuestionnaire->execute($paramsQuestionnaire);

    // Handle `status_juridique` updates
    foreach ($formDataArrayStatut as $formData) {
        if (!empty($formData['id'])) {
            $updateStmt = $bdd->prepare("UPDATE `status_juridique` SET `origine_des_terres` = :origine_des_terres, `status_juridique` = :status_juridique, `superfecie_sj` = :superfecie_sj, `superfecie_sj_are` = :superfecie_sj_are WHERE `id` = :id AND `id_questionnaire` = :id_questionnaire");
            $updateStmt->execute($formData);
        } else {
            $insertStmt = $bdd->prepare("INSERT INTO `status_juridique` (`id_questionnaire`, `origine_des_terres`, `status_juridique`, `superfecie_sj`, `superfecie_sj_are`) VALUES (:id_questionnaire, :origine_des_terres, :status_juridique, :superfecie_sj, :superfecie_sj_are)");
            $insertStmt->execute(array_merge($formData, ['id_questionnaire' => $data['id_questionnaire']]));
        }
    }

    // // Handle `utilisation_du_sol` updates
    // foreach ($formDataArraySol as $formData) {
    //     // Assume all `utilisation_du_sol` records are new or decide based on your application logic
    //     $insertSolStmt = $bdd->prepare("INSERT INTO `utilisation_du_sol` (`id_questionnaire`, `code_culture`, `superficie_hec`, `superficie_are`, `en_intercalaire`) VALUES (:id_questionnaire, :code_culture, :superficie_hec, :superficie_are, :en_intercalaire)");
    //     $insertSolStmt->execute(array_merge($formData, ['id_questionnaire' => $data['id_questionnaire']]));
    // }

    // // Handle `materiel_agricole` updates
    // foreach ($formDataArrayCodeMateriel as $formData) {
    //     // Similarly, assume new insertions or update based on some identifier
    //     $insertMatStmt = $bdd->prepare("INSERT INTO `materiel_agricole` (`id_questionnaire`, `code_materiel`, `code_materiel_nombre`, `ee_mode_mobilisation_materiel`, `ee_mode_exploitation_materiel`) VALUES (:id_questionnaire, :code_materiel, :code_materiel_nombre, :ee_mode_mobilisation_materiel, :ee_mode_exploitation_materiel)");
    //     $insertMatStmt->execute(array_merge($formData, ['id_questionnaire' => $data['id_questionnaire']]));
    // }

    $bdd->commit();
    echo json_encode(['response' => "success", 'message' => "Records updated successfully"]);
} catch (Exception $e) {
    $bdd->rollBack();
    echo json_encode(["response" => "error", "message" => $e->getMessage()]);
}
?>
