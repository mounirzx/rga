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

    // Handle `utilisation_du_sol` updates
    foreach ($formDataArraySol as $formData) {
        // Assume all `utilisation_du_sol` records are new or decide based on your application logic
        $insertSolStmt = $bdd->prepare("INSERT INTO `utilisation_du_sol` (`id_questionnaire`, `code_culture`, `superficie_hec`, `superficie_are`, `en_intercalaire`) VALUES (:id_questionnaire, :code_culture, :superficie_hec, :superficie_are, :en_intercalaire)");
        $insertSolStmt->execute(array_merge($formData, ['id_questionnaire' => $data['id_questionnaire']]));
    }

    // Handle `materiel_agricole` updates
    foreach ($formDataArrayCodeMateriel as $formData) {
        // Similarly, assume new insertions or update based on some identifier
        $insertMatStmt = $bdd->prepare("INSERT INTO `materiel_agricole` (`id_questionnaire`, `code_materiel`, `code_materiel_nombre`, `ee_mode_mobilisation_materiel`, `ee_mode_exploitation_materiel`) VALUES (:id_questionnaire, :code_materiel, :code_materiel_nombre, :ee_mode_mobilisation_materiel, :ee_mode_exploitation_materiel)");
        $insertMatStmt->execute(array_merge($formData, ['id_questionnaire' => $data['id_questionnaire']]));
    }

    $bdd->commit();
    echo json_encode(['response' => "success", 'message' => "Records updated successfully"]);
} catch (Exception $e) {
    $bdd->rollBack();
    echo json_encode(["response" => "error", "message" => $e->getMessage()]);
}
?>
