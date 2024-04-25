<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include('config.php');

$form = json_decode(file_get_contents("php://input"), true);
// $formDataArrayCodeCulture = isset($form->formDataArrayCodeCulture) ? $form->formDataArrayCodeCulture : [];

// Log received data
error_log("Received data: " . json_encode($form));

    $data = $form['form'];
    $formDataArrayStatut = $form['formDataArrayStatut'];
    $formDataArrayCodeCulture = $form['formDataArrayCodeCulture'];
    
    try {
        $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
        $bdd->exec("SET NAMES 'utf8'");
        $bdd->exec("SET CHARACTER SET utf8");

        // Begin a transaction
        $bdd->beginTransaction();

        // Delete all existing records
        $deleteStmt = $bdd->prepare("DELETE FROM `status_juridique` WHERE `id_questionnaire` = :id_questionnaire");
        $deleteStmt->bindValue(':id_questionnaire', $data['id_questionnaire']);
        $deleteStmt->execute();

        // Commit the transaction to actually delete the records
        $bdd->commit();

        // Update questionnaire data
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





        
        // Insert new records or update existing ones
        foreach ($formDataArrayStatut as $formData) {
            if (!empty($formData['mode_dexploitation_des_terres']) &&
                !empty($formData['origine_des_terres']) &&
                !empty($formData['superficie_hectare']) &&
                !empty($formData['superficie_are'])) {

                // Check if the record is new (no ID provided)
                if (!isset($formData['id'])) {
                    // Insert new record
                    $insertStmt = $bdd->prepare("INSERT INTO `status_juridique` 
                                                 (`id_questionnaire`, `status_juridique`, `origine_terre`, `superfecie_sj`, `superfecie_sj_are`) 
                                                 VALUES (:id_questionnaire, :status_juridique, :origine_terre, :superfecie_sj, :superfecie_sj_are)");

                    $insertStmt->bindValue(':id_questionnaire', $data['id_questionnaire']);
                    $insertStmt->bindValue(':status_juridique', $formData['mode_dexploitation_des_terres']);
                    $insertStmt->bindValue(':origine_terre', $formData['origine_des_terres']);
                    $insertStmt->bindValue(':superfecie_sj', $formData['superficie_hectare']);
                    $insertStmt->bindValue(':superfecie_sj_are', $formData['superficie_are']);
                    $insertStmt->execute();
                } else {
                    // Update existing record
                    $updateStmt = $bdd->prepare("UPDATE `status_juridique` 
                                                 SET `status_juridique` = :status_juridique, 
                                                     `origine_terre` = :origine_terre, 
                                                     `superfecie_sj` = :superfecie_sj, 
                                                     `superfecie_sj_are` = :superfecie_sj_are 
                                                 WHERE `id` = :id");

                    $updateStmt->bindValue(':status_juridique', $formData['mode_dexploitation_des_terres']);
                    $updateStmt->bindValue(':origine_terre', $formData['origine_des_terres']);
                    $updateStmt->bindValue(':superfecie_sj', $formData['superficie_hectare']);
                    $updateStmt->bindValue(':superfecie_sj_are', $formData['superficie_are']);
                    $updateStmt->bindValue(':id', $formData['id']);
                    $updateStmt->execute();
                }
            }
        }



// Insert data into the utilisation_du_sol table for each set of dynamic data
foreach ($formDataArrayCodeCulture as $formData) {
    // Check if the required fields are not empty
    if (!empty($formData['code_culture']) && !empty($formData['superficie_hec']) && !empty($formData['superficie_are']) && isset($formData['en_intercalaire'])) {
        // Check if the record is new (no ID provided)
        if (empty($formData['id'])) {
            // Insert new record
            $insertStmt = $bdd->prepare("INSERT INTO `utilisation_du_sol`
                                        (`id_questionnaire`, `code_culture`, `superficie_hec`, `superficie_are`, `en_intercalaire`) 
                                        VALUES (:id_questionnaire, :code_culture, :superficie_hec, :superficie_are, :en_intercalaire)");

            $insertStmt->bindValue(':id_questionnaire',  $data['id_questionnaire']);
            $insertStmt->bindValue(':code_culture', $formData['code_culture']);
            $insertStmt->bindValue(':superficie_hec', $formData['superficie_hec']);
            $insertStmt->bindValue(':superficie_are', $formData['superficie_are']);
            $insertStmt->bindValue(':en_intercalaire', $formData['en_intercalaire']);
            $insertStmt->execute();
        } else {
            // Update existing record
            $updateStmt = $bdd->prepare("UPDATE `utilisation_du_sol` 
                                        SET `code_culture` = :code_culture, 
                                            `superficie_hec` = :superficie_hec, 
                                            `superficie_are` = :superficie_are, 
                                            `en_intercalaire` = :en_intercalaire 
                                        WHERE `id` = :id");

            $updateStmt->bindValue(':code_culture', $formData['code_culture']);
            $updateStmt->bindValue(':superficie_hec', $formData['superficie_hec']);
            $updateStmt->bindValue(':superficie_are', $formData['superficie_are']);
            $updateStmt->bindValue(':en_intercalaire', $formData['en_intercalaire']);
            $updateStmt->bindValue(':id', $formData['id']);
            $updateStmt->execute();
        }
    }
}





















        http_response_code(200);
        echo json_encode(['response' => "success", 'message' => "Records updated successfully"]);
    } catch (Exception $e) {
        // Rollback the transaction in case of failure
        $bdd->rollBack();

        http_response_code(500);
        echo json_encode(["response" => "error", "message" => $e->getMessage()]);
    }
?>
