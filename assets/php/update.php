<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include('config.php');

// Decode the JSON input into an associative array
$form = json_decode(file_get_contents("php://input"), true);
   


    $data = $form['form'];
    $formDataArrayStatut = $form['formDataArrayStatut'];
    $formDataArrayCodeMateriel = $form['formDataArrayCodeMateriel'];
    $formDataArrayCodeCulture = $form['formDataArrayCodeCulture'];
    $formDataArraySuperficie = $form['formDataArraySuperficie'];
   
    

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



   // Prepare SQL query to update each field based on name and value pairs
   foreach ($formDataArraySuperficie as $item) {
    $field = $item['name'];
    $value = $item['value'];

    // Construct SQL statement
    $sql = "UPDATE superficie_exploitation SET `$field` = :value WHERE id_questionnaire = :id_questionnaire";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':value', $value, PDO::PARAM_STR);
    $stmt->bindParam(':id_questionnaire', $data['id_questionnaire'], PDO::PARAM_INT);
    $stmt->execute();
}







// Check if the questionnaire already exists
$cleQuery = $bdd->prepare("SELECT `id_status_juridique`, `cle_status_juridique`, `id_questionnaire` FROM `status_juridique` WHERE `id_questionnaire` = :id_questionnaire");
$cleQuery->bindValue(':id_questionnaire', $data['id_questionnaire']);
$cleQuery->execute();
$cleResult = $cleQuery->fetch(PDO::FETCH_ASSOC);

if ($cleResult) {
    // If it exists, delete the existing records
    $deleteStmt = $bdd->prepare("DELETE FROM `status_juridique` WHERE `id_questionnaire` = :id_questionnaire");
    $deleteStmt->bindValue(':id_questionnaire', $data['id_questionnaire']);
    $deleteStmt->execute();
}






// Insert new records for the questionnaire
foreach ($formDataArrayStatut as $formData) {
    if (!empty($formData['origine_des_terres']) && !empty($formData['status_juridique']) && !empty($formData['superfecie_sj']) && !empty($formData['superfecie_sj_are'])) {
        // Generate a unique cle_status_juridique value
        $cle_status_juridique = substr($data['id_questionnaire'] . "-" . $formData['origine_des_terres'] . "-" . $formData['status_juridique'], 0, 8);

        // Check if the generated cle_status_juridique already exists
        $checkDuplicateQuery = $bdd->prepare("SELECT COUNT(*) AS count FROM `status_juridique` WHERE `cle_status_juridique` = :cle_status_juridique");
        $checkDuplicateQuery->bindValue(':cle_status_juridique', $cle_status_juridique);
        $checkDuplicateQuery->execute();
        $duplicateCount = $checkDuplicateQuery->fetchColumn();

        if ($duplicateCount == 0) {
            // No duplicate, insert the record
            $reqStatusJuridique = $bdd->prepare("INSERT INTO `status_juridique` (`cle_status_juridique`, `id_questionnaire`, `origine_des_terres`, `status_juridique`, `superfecie_sj`, `superfecie_sj_are`) VALUES (:cle_status_juridique, :id_questionnaire, :origine_des_terres, :status_juridique, :superfecie_sj, :superfecie_sj_are)");
            $reqStatusJuridique->execute([
                'cle_status_juridique' => $cle_status_juridique,
                'id_questionnaire' => $data['id_questionnaire'],
                'origine_des_terres' => $formData['origine_des_terres'],
                'status_juridique' => $formData['status_juridique'],
                'superfecie_sj' => $formData['superfecie_sj'],
                'superfecie_sj_are' => $formData['superfecie_sj_are']
            ]);
        } else {
            // Duplicate found, update the existing record
            $updateStmt = $bdd->prepare("UPDATE `status_juridique` SET `origine_des_terres` = :origine_des_terres, `status_juridique` = :status_juridique, `superfecie_sj` = :superfecie_sj, `superfecie_sj_are` = :superfecie_sj_are WHERE `cle_status_juridique` = :cle_status_juridique");
            $updateStmt->bindValue(':origine_des_terres', $formData['origine_des_terres']);
            $updateStmt->bindValue(':status_juridique', $formData['status_juridique']);
            $updateStmt->bindValue(':superfecie_sj', $formData['superfecie_sj']);
            $updateStmt->bindValue(':superfecie_sj_are', $formData['superfecie_sj_are']);
            $updateStmt->bindValue(':cle_status_juridique', $cle_status_juridique);
            $updateStmt->execute();
        }
    }
}















// Check if the questionnaire already exists
$query = $bdd->prepare("SELECT `id`, `cle_code_culture`, `id_questionnaire`, `code_culture` FROM `utilisation_du_sol` WHERE `id_questionnaire` = :id_questionnaire");
$query->bindValue(':id_questionnaire', $data['id_questionnaire']);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

if ($result) {
    // If it exists, delete the existing records
    $deleteStmt = $bdd->prepare("DELETE FROM `utilisation_du_sol` WHERE `id_questionnaire` = :id_questionnaire");
    $deleteStmt->bindValue(':id_questionnaire', $data['id_questionnaire']);
    $deleteStmt->execute();
}

// Insert new records for the questionnaire
foreach ($formDataArrayCodeCulture as $formData) {
    if (!empty($formData['code_culture']) && !empty($formData['superficie_hec']) && !empty($formData['superficie_are'])) {
        // Generate a unique cle_code_culture value
        $cle_code_culture = substr($data['id_questionnaire'] . "-" . $formData['code_culture'] . "-" . $formData['superficie_hec'], 0, 8);

        // Check if the generated cle_code_culture already exists
        $checkDuplicateQuery = $bdd->prepare("SELECT COUNT(*) AS count FROM `utilisation_du_sol` WHERE `cle_code_culture` = :cle_code_culture");
        $checkDuplicateQuery->bindValue(':cle_code_culture', $cle_code_culture);
        $checkDuplicateQuery->execute();
        $duplicateCount = $checkDuplicateQuery->fetchColumn();

        if ($duplicateCount == 0) {
            // No duplicate, insert the record
            $insertStmt = $bdd->prepare("INSERT INTO `utilisation_du_sol` (`cle_code_culture`, `id_questionnaire`, `code_culture`, `superficie_hec`, `superficie_are`, `en_intercalaire`) VALUES (:cle_code_culture, :id_questionnaire, :code_culture, :superficie_hec, :superficie_are, :en_intercalaire)");

            $insertStmt->execute([
                'cle_code_culture' => $cle_code_culture,
                'id_questionnaire' => $data['id_questionnaire'],
                'code_culture' => $formData['code_culture'],
                'superficie_hec' => $formData['superficie_hec'],
                'superficie_are' => $formData['superficie_are'],
                'en_intercalaire' => $formData['en_intercalaire']
            ]);
        } else {
            // Duplicate found, update the existing record
            $updateStmt = $bdd->prepare("UPDATE `utilisation_du_sol` SET `code_culture` = :code_culture, `superficie_hec` = :superficie_hec, `superficie_are` = :superficie_are, `en_intercalaire` = :en_intercalaire WHERE `cle_code_culture` = :cle_code_culture");
            $updateStmt->bindValue(':code_culture', $formData['code_culture']);
            $updateStmt->bindValue(':superficie_hec', $formData['superficie_hec']);
            $updateStmt->bindValue(':superficie_are', $formData['superficie_are']);
            $updateStmt->bindValue(':en_intercalaire', $formData['en_intercalaire']);
            $updateStmt->bindValue(':cle_code_culture', $cle_code_culture);
            $updateStmt->execute();
        }
    }
}




























// Check if the questionnaire already exists
$cleQueryMateriel = $bdd->prepare("SELECT `id_materiel_agricol`, `cle_materiel_agricole`, `id_questionnaire` FROM `materiel_agricole` WHERE `id_questionnaire` = :id_questionnaire");
$cleQueryMateriel->bindValue(':id_questionnaire', $data['id_questionnaire']);
$cleQueryMateriel->execute();
$cleResultMateriel = $cleQueryMateriel->fetch(PDO::FETCH_ASSOC);

if ($cleResultMateriel) {
    // If it exists, delete the existing records
    $deleteStmt = $bdd->prepare("DELETE FROM `materiel_agricole` WHERE `id_questionnaire` = :id_questionnaire");
    $deleteStmt->bindValue(':id_questionnaire', $data['id_questionnaire']);
    $deleteStmt->execute();
}

// Insert new records for the questionnaire
foreach ($formDataArrayCodeMateriel as $formData) {
    if (!empty($formData['code_materiel']) && !empty($formData['code_materiel_nombre']) && !empty($formData['ee_mode_mobilisation_materiel']) && !empty($formData['ee_mode_exploitation_materiel'])) {
        // Generate a unique cle_materiel_agricole value
        $cle_materiel_agricole = substr($data['id_questionnaire'] . "-" . $formData['code_materiel'] . "-" . $formData['code_materiel_nombre'], 0, 20);

        // Check if the generated cle_materiel_agricole already exists
        $checkDuplicateQuery = $bdd->prepare("SELECT COUNT(*) AS count FROM `materiel_agricole` WHERE `cle_materiel_agricole` = :cle_materiel_agricole");
        $checkDuplicateQuery->bindValue(':cle_materiel_agricole', $cle_materiel_agricole);
        $checkDuplicateQuery->execute();
        $duplicateCount = $checkDuplicateQuery->fetchColumn();

        if ($duplicateCount == 0) {
            // No duplicate, insert the record
            $reqMaterielAgricole = $bdd->prepare("INSERT INTO `materiel_agricole` (`cle_materiel_agricole`, `id_questionnaire`, `code_materiel`, `code_materiel_nombre`, `ee_mode_mobilisation_materiel`, `ee_mode_exploitation_materiel`) VALUES (:cle_materiel_agricole, :id_questionnaire, :code_materiel, :code_materiel_nombre, :ee_mode_mobilisation_materiel, :ee_mode_exploitation_materiel)");
            $reqMaterielAgricole->execute([
                'cle_materiel_agricole' => $cle_materiel_agricole,
                'id_questionnaire' => $data['id_questionnaire'],
                'code_materiel' => $formData['code_materiel'],
                'code_materiel_nombre' => $formData['code_materiel_nombre'],
                'ee_mode_mobilisation_materiel' => $formData['ee_mode_mobilisation_materiel'],
                'ee_mode_exploitation_materiel' => $formData['ee_mode_exploitation_materiel']
            ]);
        } else {
            // Duplicate found, update the existing record
            $updateStmt = $bdd->prepare("UPDATE `materiel_agricole` SET `code_materiel` = :code_materiel, `code_materiel_nombre` = :code_materiel_nombre, `ee_mode_mobilisation_materiel` = :ee_mode_mobilisation_materiel, `ee_mode_exploitation_materiel` = :ee_mode_exploitation_materiel WHERE `cle_materiel_agricole` = :cle_materiel_agricole");
            $updateStmt->bindValue(':code_materiel', $formData['code_materiel']);
            $updateStmt->bindValue(':code_materiel_nombre', $formData['code_materiel_nombre']);
            $updateStmt->bindValue(':ee_mode_mobilisation_materiel', $formData['ee_mode_mobilisation_materiel']);
            $updateStmt->bindValue(':ee_mode_exploitation_materiel', $formData['ee_mode_exploitation_materiel']);
            $updateStmt->bindValue(':cle_materiel_agricole', $cle_materiel_agricole);
            $updateStmt->execute();
        }
    }
}























/*********************************************************************** */
/********************************************* modification wissem 21/05/2024 10:44 ***************************************************************** */
$id_questionnaire= $data['id_questionnaire'];

$message = $form['message'];
$controleSatSumsjtest2 = $form['controleSatSumsjtest2'];

$coherence_util_sol="";
$message_coherence_util_sol="";
$coherence_stat_jur="";
$message_coherence_stat_jur="";
if($message=="green"){
    $coherence_util_sol = "text-success";
}if($message=="orange"){
    $coherence_util_sol = "text-warning";
    $message_coherence_util_sol="La somme des sup occupées est différente de la SAU";
}if($message=="red"){
    $coherence_util_sol = "text-danger";
    $message_coherence_util_sol="La somme des sup occupées dépasse 2,99 fois la SAU";
}


if($controleSatSumsjtest2=="green"){
    $coherence_stat_jur="text-success";
}if($controleSatSumsjtest2=="orange"){
    $coherence_stat_jur="text-warning";
    $message_coherence_stat_jur="SAT est déffirente de la somme des sup. à statut";
}if($controleSatSumsjtest2=="red"){
    $coherence_stat_jur="text-danger";
    $message_coherence_stat_jur="La somme des sup. à statut dépasse 5% la SAT";
}
/********************************************* modification wissem 21/05/2024 10:44 ***************************************************************** */
$req4=$bdd->prepare('UPDATE `coherence_superficie` SET `coherence_stat_jur`=?,`message_coherence_stat_jur`=?,`coherence_util_sol`=?,`message_coherence_util_sol`=? WHERE id_quest=?');
$req4->execute(array($coherence_stat_jur,$message_coherence_stat_jur,$coherence_util_sol,$message_coherence_util_sol,$id_questionnaire));




/************************************************************************ */









        echo json_encode(['response' => "success", 'message' => "Records updated successfully"]);
    } catch (Exception $e) {
        echo json_encode(["response" => "error", "message" => $e->getMessage()]);
    }

?>
