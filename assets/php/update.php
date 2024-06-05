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
   
    

    // // Debugging: Log formDataArrayStatut to check content
    // ob_start();
    // echo "Debug: ", print_r($formDataArraySuperficie, true);
    // $logData = ob_get_clean();
    // $logFilePath = __DIR__ . '/logfile.log';
    // file_put_contents($logFilePath, $logData, FILE_APPEND);

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
        $bdd->beginTransaction();
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
$cleQuery1 = $bdd->prepare("SELECT `id_status_juridique`, `cle_status_juridique`, `id_questionnaire` FROM `status_juridique` WHERE `id_questionnaire` = :id_questionnaire");
$cleQuery1->bindValue(':id_questionnaire', $data['id_questionnaire']);
$cleQuery1->execute();
$cleResul1 = $cleQuery1->fetch(PDO::FETCH_ASSOC);

$id_status_juridique = ($cleResul1 !== false && is_array($cleResul1)) ? $cleResul1['id_status_juridique'] : 0;
$cle_status_juridique = ($cleResul1 !== false && is_array($cleResul1)) ? $cleResul1['cle_status_juridique'] : '';
$id_questionnaire = ($cleResul1 !== false && is_array($cleResul1)) ? $cleResul1['id_questionnaire'] : 0;

foreach ($formDataArrayStatut as $formData) {
    if (!empty($formData['origine_des_terres']) && !empty($formData['status_juridique']) && !empty($formData['superfecie_sj']) && !empty($formData['superfecie_sj_are'])) {
        // Generate a unique cle_status_juridique value
        $cle_status_juridique = substr($data['id_questionnaire'] . "-" . $formData['origine_des_terres'] . "-" . $formData['status_juridique'], 0, 20);

        // Check if the generated cle_status_juridique already exists
        $checkDuplicateQuery1 = $bdd->prepare("SELECT COUNT(*) AS count FROM `status_juridique` WHERE `cle_status_juridique` = :cle_status_juridique");
        $checkDuplicateQuery1->bindValue(':cle_status_juridique', $cle_status_juridique);
        $checkDuplicateQuery1->execute();
        $duplicateCount = $checkDuplicateQuery1->fetchColumn();

        if ($duplicateCount == 0) {
            // Insert new record
            $insertStmt1 = $bdd->prepare("INSERT INTO `status_juridique` (`cle_status_juridique`, `id_questionnaire`, `origine_des_terres`, `status_juridique`, `superfecie_sj`, `superfecie_sj_are`) VALUES (:cle_status_juridique, :id_questionnaire, :origine_des_terres, :status_juridique, :superfecie_sj, :superfecie_sj_are)");

            $insertStmt1->execute([
                'cle_status_juridique' => $cle_status_juridique,
                'id_questionnaire' => $data['id_questionnaire'],
                'origine_des_terres' => $formData['origine_des_terres'],
                'status_juridique' => $formData['status_juridique'],
                'superfecie_sj' => $formData['superfecie_sj'],
                'superfecie_sj_are' => $formData['superfecie_sj_are']
            ]);
        } else {
            // Duplicate found, update the existing record
            $updateStmt1 = $bdd->prepare("UPDATE `status_juridique` SET `origine_des_terres` = :origine_des_terres, `status_juridique` = :status_juridique, `superfecie_sj` = :superfecie_sj, `superfecie_sj_are` = :superfecie_sj_are WHERE `cle_status_juridique` = :cle_status_juridique");
            $updateStmt1->bindValue(':origine_des_terres', $formData['origine_des_terres']);
            $updateStmt1->bindValue(':status_juridique', $formData['status_juridique']);
            $updateStmt1->bindValue(':superfecie_sj', $formData['superfecie_sj']);
            $updateStmt1->bindValue(':superfecie_sj_are', $formData['superfecie_sj_are']);
            $updateStmt1->bindValue(':cle_status_juridique', $cle_status_juridique);
            $updateStmt1->execute();
        }
    }
}



















        
























$cleQuery2 = $bdd->prepare("SELECT `id`, `cle_code_culture`, `id_questionnaire`, `code_culture` FROM `utilisation_du_sol` WHERE `id_questionnaire` = :id_questionnaire");
$cleQuery2->bindValue(':id_questionnaire', $data['id_questionnaire']);
$cleQuery2->execute();
$cleResul2 = $cleQuery2->fetch(PDO::FETCH_ASSOC);

$id = ($cleResul2 !== false && is_array($cleResul2)) ? $cleResul2['id'] : 0;
$cle_code_culture = ($cleResul2 !== false && is_array($cleResul2)) ? $cleResul2['cle_code_culture'] : '';
$id_questionnaire = ($cleResul2 !== false && is_array($cleResul2)) ? $cleResul2['id_questionnaire'] : 0;




foreach ($formDataArrayCodeCulture as $formData) {
    if (!empty($formData['code_culture'])) {
        // Generate a unique cle_code_culture value
        $cle_code_culture = substr($data['id_questionnaire'] . "-" . $formData['code_culture'], 0, 20);

        // Check if the generated cle_code_culture already exists
        $checkDuplicateQuery2 = $bdd->prepare("SELECT COUNT(*) AS count FROM `utilisation_du_sol` WHERE `cle_code_culture` = :cle_code_culture");
        $checkDuplicateQuery2->bindValue(':cle_code_culture', $cle_code_culture);
        $checkDuplicateQuery2->execute();
        $duplicateCounts = $checkDuplicateQuery2->fetchColumn();

        if ($duplicateCounts == 0) {
            // Insert new record
            $insertStmt2 = $bdd->prepare("INSERT INTO `utilisation_du_sol` (`cle_code_culture`, `id_questionnaire`, `code_culture`, `superficie_hec`, `superficie_are`, `en_intercalaire`) VALUES (:cle_code_culture, :id_questionnaire, :code_culture, :superficie_hec, :superficie_are, :en_intercalaire)");

            $insertStmt2->execute([
                'cle_code_culture' => $cle_code_culture,
                'id_questionnaire' => $data['id_questionnaire'],
                'code_culture' => $formData['code_culture'],
                'superficie_hec' => $formData['superficie_hec'] ?? NULL,
                'superficie_are' => $formData['superficie_are'] ?? NULL,
                'en_intercalaire' => $formData['en_intercalaire'] ?? NULL
            ]);
        } else {
            // Duplicate found, update the existing record
            $updateStmt2 = $bdd->prepare("UPDATE `utilisation_du_sol` SET `code_culture` = :code_culture, `superficie_hec` = :superficie_hec, `superficie_are` = :superficie_are, `en_intercalaire` = :en_intercalaire WHERE `cle_code_culture` = :cle_code_culture");
            $updateStmt2->bindValue(':code_culture', $formData['code_culture']);
            $updateStmt2->bindValue(':superficie_hec', $formData['superficie_hec']);
            $updateStmt2->bindValue(':superficie_are', $formData['superficie_are']);
            $updateStmt2->bindValue(':en_intercalaire', $formData['en_intercalaire']);
            $updateStmt2->bindValue(':cle_code_culture', $cle_code_culture);
            $updateStmt2->execute();
        }
    }
    $formData['code_culture'] = '';
    $formData['superficie_hec'] = '';
    $formData['superficie_are'] = '';
    $formData['en_intercalaire'] = '';
}

















// Check if the questionnaire already exists
$cleQuery3 = $bdd->prepare("SELECT `id_materiel_agricol`, `cle_materiel_agricole`, `id_questionnaire`, `code_materiel_nombre` FROM `materiel_agricole` WHERE `id_questionnaire` = :id_questionnaire");
$cleQuery3->bindValue(':id_questionnaire', $data['id_questionnaire']);
$cleQuery3->execute();
$cleResult3 = $cleQuery3->fetch(PDO::FETCH_ASSOC);

$id_materiel_agricol = ($cleResult3 !== false && is_array($cleResult3)) ? $cleResult3['id_materiel_agricol'] : 0;
$cle_materiel_agricole = ($cleResult3 !== false && is_array($cleResult3)) ? $cleResult3['cle_materiel_agricole'] : '';
$id_questionnaire = ($cleResult3 !== false && is_array($cleResult3)) ? $cleResult3['id_questionnaire'] : 0;

foreach ($formDataArrayCodeMateriel as $formData) {
    if (!empty($formData['code_materiel']) && !empty($formData['code_materiel_nombre']) && !empty($formData['ee_mode_mobilisation_materiel']) && !empty($formData['ee_mode_exploitation_materiel'])) {
        // Generate a unique cle_materiel_agricole value
        $cle_materiel_agricole = substr($data['id_questionnaire'] . "-" . $formData['code_materiel'] . "-" . $formData['code_materiel_nombre'], 0, 20);

        // Check if the generated cle_materiel_agricole already exists
        $checkDuplicateQuery3 = $bdd->prepare("SELECT COUNT(*) AS count FROM `materiel_agricole` WHERE `cle_materiel_agricole` = :cle_materiel_agricole");
        $checkDuplicateQuery3->bindValue(':cle_materiel_agricole', $cle_materiel_agricole);
        $checkDuplicateQuery3->execute();
        $duplicateCountss = $checkDuplicateQuery3->fetchColumn();

        if ($duplicateCountss == 0) {
            // Insert new record
            $insertStmt3 = $bdd->prepare("INSERT INTO `materiel_agricole` (`cle_materiel_agricole`, `id_questionnaire`, `code_materiel`, `code_materiel_nombre`, `ee_mode_mobilisation_materiel`, `ee_mode_exploitation_materiel`) VALUES (:cle_materiel_agricole, :id_questionnaire, :code_materiel, :code_materiel_nombre, :ee_mode_mobilisation_materiel, :ee_mode_exploitation_materiel)");

            $insertStmt3->execute([
                'cle_materiel_agricole' => $cle_materiel_agricole,
                'id_questionnaire' => $data['id_questionnaire'],
                'code_materiel' => $formData['code_materiel'],
                'code_materiel_nombre' => $formData['code_materiel_nombre'],
                'ee_mode_mobilisation_materiel' => $formData['ee_mode_mobilisation_materiel'],
                'ee_mode_exploitation_materiel' => $formData['ee_mode_exploitation_materiel']
            ]);
        } else {
            // Duplicate found, update the existing record
            $updateStmt3 = $bdd->prepare("UPDATE `materiel_agricole` SET `code_materiel` = :code_materiel, `code_materiel_nombre` = :code_materiel_nombre, `ee_mode_mobilisation_materiel` = :ee_mode_mobilisation_materiel, `ee_mode_exploitation_materiel` = :ee_mode_exploitation_materiel WHERE `cle_materiel_agricole` = :cle_materiel_agricole");
            $updateStmt3->bindValue(':code_materiel', $formData['code_materiel']);
            $updateStmt3->bindValue(':code_materiel_nombre', $formData['code_materiel_nombre']);
            $updateStmt3->bindValue(':ee_mode_mobilisation_materiel', $formData['ee_mode_mobilisation_materiel']);
            $updateStmt3->bindValue(':ee_mode_exploitation_materiel', $formData['ee_mode_exploitation_materiel']);
            $updateStmt3->bindValue(':cle_materiel_agricole', $cle_materiel_agricole);
            $updateStmt3->execute();
             // Empty the variables to avoid duplicates
  
        }
    }
    $formData['code_materiel'] = '';
    $formData['code_materiel_nombre'] = '';
    $formData['ee_mode_mobilisation_materiel'] = '';
    $formData['ee_mode_exploitation_materiel'] = '';
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
    $message_coherence_util_sol="La surface d utilisation du sol semble cohérente, elle est comprise entre 1 fois et 3 fois la SAU déclarée";
}if($message=="orange"){
    $coherence_util_sol = "text-warning";
    $message_coherence_util_sol="La surface d utilisation du sol est inférieure à la SAU déclarée";
}if($message=="red"){
    $coherence_util_sol = "text-danger";
    $message_coherence_util_sol="La surface d utilisation du sol est superieure à 3 fois la SAU déclarée";
}


if($controleSatSumsjtest2=="green"){
    $coherence_stat_jur="text-success";
    
    $message_coherence_stat_jur="La surface totale est identique à celle déclarée au statut juridique";
}if($controleSatSumsjtest2=="orange"){
    $coherence_stat_jur="text-warning";
    $message_coherence_stat_jur="La surface totale est superieure à celle déclarée au statut juridique";
}if($controleSatSumsjtest2=="red"){
    $coherence_stat_jur="text-danger";
    $message_coherence_stat_jur="La surface totale est inferieure à celle déclarée au statut juridique";
}
/********************************************* modification wissem 21/05/2024 10:44 ***************************************************************** */

//modification 26/05/2024 wissem omri 
$req5 = $bdd->prepare('select * from coherence_superficie where id_quest = ?  ');
$req5->execute(array($id_questionnaire));
$count= $req5->rowCount();
if($count==0){
    $req4=$bdd->prepare('INSERT INTO `coherence_superficie`(`id_quest`, `coherence_stat_jur`, `message_coherence_stat_jur`, `coherence_util_sol`, `message_coherence_util_sol`) VALUES (?,?,?,?,?)');
    $req4->execute(array($id_questionnaire,$coherence_stat_jur,$message_coherence_stat_jur,$coherence_util_sol,$message_coherence_util_sol));
}else{
    $req4=$bdd->prepare('UPDATE `coherence_superficie` SET `coherence_stat_jur`=?,`message_coherence_stat_jur`=?,`coherence_util_sol`=?,`message_coherence_util_sol`=? WHERE id_quest=?');
    $req4->execute(array($coherence_stat_jur,$message_coherence_stat_jur,$coherence_util_sol,$message_coherence_util_sol,$id_questionnaire));
}






/************************************************************************ */





$bdd->commit();



        echo json_encode(['response' => "success", 'message' => "Records updated successfully"]);
    } catch (Exception $e) {
        if ($bdd->inTransaction()) {
            $bdd->rollBack();
        }
        echo json_encode(["response" => "error", "message" => $e->getMessage()]);
    }

?>
