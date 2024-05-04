<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header('Content-Type: application/json');
include('config.php');

$form = json_decode(file_get_contents("php://input"));
$data = $form->form;
$formDataArrayStatut = isset($form->formDataArrayStatut) ? $form->formDataArrayStatut : [];
$formDataArrayCodeCulture = isset($form->formDataArrayCodeCulture) ? $form->formDataArrayCodeCulture : [];
$formDataArrayCodeMateriel = isset($form->formDataArrayCodeMateriel) ? $form->formDataArrayCodeMateriel : [];

try {
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $bdd->exec("SET NAMES 'utf8'");
    $bdd->exec("SET CHARACTER SET utf8");

    $paramsQuestionnaire = [];
    $fieldsQuestionnaire = array_keys(get_object_vars($data));
    $fieldsQuestionnaire = array_diff($fieldsQuestionnaire, ['origine_des_terres', 'status_juridique', 'superficie_hectare', 'superficie_are']);
    $errorKeys = ['cultures_herbacees_1', 'cultures_herbacees_2', 'cultures_herbacees_3', 'cultures_herbacees_4', 'terres_au_repos_jacheres_1', 'terres_au_repos_jacheres_2', 'terres_au_repos_jacheres_3', 'terres_au_repos_jacheres_4', 'plantations_arboriculture_1', 'plantations_arboriculture_2', 'plantations_arboriculture_3', 'plantations_arboriculture_4', 'prairies_naturelles_1', 'prairies_naturelles_2', 'prairies_naturelles_3', 'prairies_naturelles_4', 'superficie_agricole_utile_sau_1', 'superficie_agricole_utile_sau_2', 'superficie_agricole_utile_sau_3', 'superficie_agricole_utile_sau_4', 'pacages_et_parcours_1', 'pacages_et_parcours_2', 'surfaces_improductives_1', 'surfaces_improductives_2', 'superficie_agricole_totale_sat_1', 'superficie_agricole_totale_sat_2', 'terres_forestieres_bois_forets_maquis_vides_labourables_1', 'terres_forestieres_bois_forets_maquis_vides_labourables_2', 'surface_totale_st_1', 'surface_totale_st_2'];
    $fieldsQuestionnaire = array_diff($fieldsQuestionnaire, $errorKeys);
    $cle = $data->nom_exploitant . '-' . $data->prenom_exploitant . '-' . $data->annee_naissance_exploitant . '' . $data->nin_exploitant . '-' . $data->commune_code . '-' . $data->nom_exploitation . '-' . $data->surface_totale_st_1;
    $paramsQuestionnaire['exploitant_cle_unique'] = $cle;
    $fieldsQuestionnaire[] = 'exploitant_cle_unique';
    foreach ($fieldsQuestionnaire as $field) {
        if (!isset($paramsQuestionnaire[$field])) {
            $paramsQuestionnaire[$field] = isset($data->$field) ? $data->$field : null;
        }
    }
    $sqlColumnsQuestionnaire = implode(", ", array_map(function($field) { return "`$field`"; }, $fieldsQuestionnaire));
    $sqlValuesQuestionnaire = implode(", ", array_map(function($field) { return ":" . $field; }, $fieldsQuestionnaire));
    $reqQuestionnaire = $bdd->prepare("INSERT INTO `questionnaire` ($sqlColumnsQuestionnaire) VALUES ($sqlValuesQuestionnaire)");
    $reqQuestionnaire->execute($paramsQuestionnaire);
    $lastInsertId = $bdd->lastInsertId();
    foreach ($formDataArrayStatut as $formData) {
        if (!empty($formData->origine_des_terres) && !empty($formData->status_juridique) && !empty($formData->superfecie_sj) && !empty($formData->superfecie_sj_are)) {
            $cle_status_juridique = substr($lastInsertId . "-" . $formData->origine_des_terres . "-" . $formData->status_juridique, 0, 8);
            $reqStatusJuridique = $bdd->prepare("INSERT INTO `status_juridique` (`cle_status_juridique`, `id_questionnaire`, `origine_des_terres`, `status_juridique`, `superfecie_sj`, `superfecie_sj_are`) VALUES (:cle_status_juridique, :id_questionnaire, :origine_des_terres, :status_juridique, :superfecie_sj, :superfecie_sj_are)");
            $reqStatusJuridique->execute(['cle_status_juridique' => $cle_status_juridique, 'id_questionnaire' => $lastInsertId, 'origine_des_terres' => $formData->origine_des_terres, 'status_juridique' => $formData->status_juridique, 'superfecie_sj' => $formData->superfecie_sj, 'superfecie_sj_are' => $formData->superfecie_sj_are]);
        }
    }
     $stmt = $bdd->query("SHOW COLUMNS FROM superficie_exploitation");
     $columns = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
     $columnFilter = array_flip($columns);
     $filteredData = array_intersect_key((array)$data, $columnFilter);
     $lastInsertId = $bdd->lastInsertId();
     $filteredData['id_questionnaire'] = $lastInsertId; 
     $sqlColumns = implode(", ", array_map(function($field) { return "`$field`"; }, array_keys($filteredData)));
     $sqlValues = ":" . implode(", :", array_keys($filteredData));
     $query = $bdd->prepare("INSERT INTO `superficie_exploitation` ($sqlColumns) VALUES ($sqlValues)");
     $query->execute($filteredData);
    foreach ($formDataArrayCodeCulture as $formData) {
        if (!empty($formData->code_culture) && !empty($formData->superficie_hec) && !empty($formData->superficie_are) && !empty($formData->en_intercalaire)) {
            $cle_code_culture = $lastInsertId . "-" . $formData->code_culture . "-" . $formData->superficie_hec . "-" . $formData->superficie_are;
            $reqUtilisationDuSol = $bdd->prepare("INSERT INTO `utilisation_du_sol` (`cle_code_culture`, `id_questionnaire`, `code_culture`, `superficie_hec`, `superficie_are`, `en_intercalaire`) VALUES (:cle_code_culture, :id_questionnaire, :code_culture, :superficie_hec, :superficie_are, :en_intercalaire)");
            $reqUtilisationDuSol->execute(['cle_code_culture' => $cle_code_culture, 'id_questionnaire' => $lastInsertId, 'code_culture' => $formData->code_culture, 'superficie_hec' => $formData->superficie_hec, 'superficie_are' => $formData->superficie_are, 'en_intercalaire' => $formData->en_intercalaire]);
        }
    }
    foreach ($formDataArrayCodeMateriel as $formData) {
        ob_start();
        echo "Debug: ", print_r($formDataArrayCodeMateriel, true);
        $logData = ob_get_clean();
        $logFilePath = __DIR__ . '/logfile.log';
        file_put_contents($logFilePath, $logData, FILE_APPEND);
        if (!empty($formData->code_materiel) && !empty($formData->code_materiel_nombre)) {
            $cle_materiel_agricole = $lastInsertId . "-" . $formData->code_materiel . "-" . $formData->code_materiel_nombre;
            $reqMaterielAgricole = $bdd->prepare("INSERT INTO `materiel_agricole` (`cle_materiel_agricole`, `id_questionnaire`, `code_materiel`, `code_materiel_nombre`) VALUES (:cle_materiel_agricole, :id_questionnaire, :code_materiel, :code_materiel_nombre)");
            $reqMaterielAgricole->execute(['cle_materiel_agricole' => $cle_materiel_agricole, 'id_questionnaire' => $lastInsertId, 'code_materiel' => $formData->code_materiel, 'code_materiel_nombre' => $formData->code_materiel_nombre]);
        }
    }
    echo json_encode(['response' => true]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['response' => false, 'error' => $e->getMessage()]);
}
?>
