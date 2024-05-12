<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include('config.php');

// Decode JSON input into an associative array
$form = json_decode(file_get_contents("php://input"), true);
$data = $form['form'];
$formDataArrayStatut = $form['formDataArrayStatut'] ?? [];

// Exclude fields not part of the questionnaire main table
$excludeFields = ['cultures_herbacees_1', 'cultures_herbacees_2', 'cultures_herbacees_3', 'cultures_herbacees_4', 'terres_au_repos_jacheres_1', 'terres_au_repos_jacheres_2', 'terres_au_repos_jacheres_3', 'terres_au_repos_jacheres_4', 'plantations_arboriculture_1', 'plantations_arboriculture_2', 'plantations_arboriculture_3', 'plantations_arboriculture_4', 'prairies_naturelles_1', 'prairies_naturelles_2', 'prairies_naturelles_3', 'prairies_naturelles_4', 'superficie_agricole_utile_sau_1', 'superficie_agricole_utile_sau_2', 'superficie_agricole_utile_sau_3', 'superficie_agricole_utile_sau_4', 'pacages_et_parcours_1', 'pacages_et_parcours_2', 'surfaces_improductives_1', 'surfaces_improductives_2', 'superficie_agricole_totale_sat_1', 'superficie_agricole_totale_sat_2', 'terres_forestieres_bois_forets_maquis_vides_labourables_1', 'terres_forestieres_bois_forets_maquis_vides_labourables_2', 'surface_totale_st_1', 'surface_totale_st_2'];
$fieldsQuestionnaire = array_diff(array_keys($data), $excludeFields);

try {
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    $bdd->exec("SET NAMES 'utf8'");
    $bdd->exec("SET CHARACTER SET utf8");

    // Update questionnaire table
    $sqlSetParts = [];
    foreach ($fieldsQuestionnaire as $field) {
        $sqlSetParts[] = "`$field` = :$field";
    }
    $sqlSetString = implode(", ", $sqlSetParts);
    $updateQuery = "UPDATE `questionnaire` SET $sqlSetString WHERE `id_questionnaire` = :id_questionnaire";
    $stmt = $bdd->prepare($updateQuery);
    foreach ($fieldsQuestionnaire as $field) {
        $stmt->bindValue(":$field", $data[$field]);
    }
    $stmt->bindValue(':id_questionnaire', $data['id_questionnaire']);
    $stmt->execute();

    // Handle status_juridique updates and inserts
    foreach ($formDataArrayStatut as $formData) {
        if (!empty($formData['id'])) {  // Assuming 'id' is the primary key in `status_juridique`
            $updateStmt = $bdd->prepare("UPDATE `status_juridique` SET `origine_des_terres` = :origine_des_terres, `status_juridique` = :status_juridique, `superfecie_sj` = :superfecie_sj, `superfecie_sj_are` = :superfecie_sj_are WHERE `id` = :id AND `id_questionnaire` = :id_questionnaire");
            $updateStmt->execute($formData);
        } else {
            $insertStmt = $bdd->prepare("INSERT INTO `status_juridique` (`id_questionnaire`, `origine_des_terres`, `status_juridique`, `superfecie_sj`, `superfecie_sj_are`) VALUES (:id_questionnaire, :origine_des_terres, :status_juridique, :superfecie_sj, :superfecie_sj_are)");
            $insertStmt->execute(array_merge($formData, ['id_questionnaire' => $data['id_questionnaire']]));
        }
    }

    echo json_encode(['response' => "success", 'message' => "Records updated successfully"]);
} catch (PDOException $e) {
    echo json_encode(["response" => "error", "message" => $e->getMessage()]);
}
?>
