<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include('config.php');

$form = json_decode(file_get_contents("php://input"), true);
$data = $form['form'];
$formDataArrayStatut = $form['formDataArrayStatut'] ?? [];

try {
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    $bdd->beginTransaction();
    $bdd->exec("SET NAMES 'utf8'");
    $bdd->exec("SET CHARACTER SET utf8");

    $paramsQuestionnaire = [];
    $fieldsQuestionnaire = array_keys(get_object_vars((object)$data));
    $errorKeys = ['cultures_herbacees_1', 'cultures_herbacees_2', 'cultures_herbacees_3', 'cultures_herbacees_4', 'terres_au_repos_jacheres_1', 'terres_au_repos_jacheres_2', 'terres_au_repos_jacheres_3', 'terres_au_repos_jacheres_4', 'plantations_arboriculture_1', 'plantations_arboriculture_2', 'plantations_arboriculture_3', 'plantations_arboriculture_4', 'prairies_naturelles_1', 'prairies_naturelles_2', 'prairies_naturelles_3', 'prairies_naturelles_4', 'superficie_agricole_utile_sau_1', 'superficie_agricole_utile_sau_2', 'superficie_agricole_utile_sau_3', 'superficie_agricole_utile_sau_4', 'pacages_et_parcours_1', 'pacages_et_parcours_2', 'surfaces_improductives_1', 'surfaces_improductives_2', 'superficie_agricole_totale_sat_1', 'superficie_agricole_totale_sat_2', 'terres_forestieres_bois_forets_maquis_vides_labourables_1', 'terres_forestieres_bois_forets_maquis_vides_labourables_2', 'surface_totale_st_1', 'surface_totale_st_2'];
    $fieldsQuestionnaire = array_diff($fieldsQuestionnaire, $errorKeys);
    $sqlSetPart = [];
    foreach ($fieldsQuestionnaire as $field) {
        if (isset($data[$field])) {
            $sqlSetPart[] = "`$field` = :$field";
            $paramsQuestionnaire[$field] = $data[$field];
        }
    }
    $sqlSetPart = implode(", ", $sqlSetPart);
    $paramsQuestionnaire['id_questionnaire'] = $data['id_questionnaire'];

    $reqQuestionnaire = $bdd->prepare("UPDATE `questionnaire` SET $sqlSetPart WHERE `id_questionnaire` = :id_questionnaire");
    $reqQuestionnaire->execute($paramsQuestionnaire);

    // foreach ($formDataArrayStatut as $formData) {
    //     if (!empty($formData['mode_dexploitation_des_terres']) && !empty($formData['origine_des_terres']) && !empty($formData['superficie_hectare']) && !empty($formData['superficie_are'])) {
    //         $sql = "INSERT INTO `status_juridique` (`id_questionnaire`, `status_juridique`, `origine_terre`, `superfecie_sj`, `superfecie_sj_are`) 
    //                 VALUES (:id_questionnaire, :status_juridique, :origine_terre, :superfecie_sj, :superfecie_sj_are) 
    //                 ON DUPLICATE KEY UPDATE 
    //                 status_juridique = :status_juridique, 
    //                 origine_terre = :origine_terre, 
    //                 superfecie_sj = :superfecie_sj, 
    //                 superfecie_sj_are = :superfecie_sj_are";
    //         $reqStatusJuridique = $bdd->prepare($sql);
    //         $reqStatusJuridique->execute([
    //             'id_questionnaire' => $data['id_questionnaire'],
    //             'status_juridique' => $formData['mode_dexploitation_des_terres'],
    //             'origine_terre' => $formData['origine_des_terres'],
    //             'superfecie_sj' => $formData['superficie_hectare'],
    //             'superfecie_sj_are' => $formData['superficie_are']
    //         ]);
    //     }
    // }

    $bdd->commit();
    http_response_code(200);
    echo json_encode(['response' => "success", 'message' => "Data successfully updated"]);
} catch (Exception $e) {
    $bdd->rollBack();
    http_response_code(500);
    echo json_encode(["response" => "error", "message" => $e->getMessage()]);
}
?>
