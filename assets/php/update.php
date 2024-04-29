<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include('config.php');

$form = json_decode(file_get_contents("php://input"), true);

  
   // $cle_status_juridique=$form['id_questionnaire'].$form['status_juridique'];

    ob_start();
    echo "Debug: ", print_r($cle_status_juridiqu, true);
    $logData = ob_get_clean();
    
    // Define log file path
    $logFilePath = __DIR__ . '/logfile.log';
    
    // Append the captured data to the log file
    file_put_contents($logFilePath, $logData, FILE_APPEND);




// Start capturing the output
ob_start();
echo "Debug: ", print_r($paramsQuestionnaire, true);
$logData = ob_get_clean();

// Define log file path
$logFilePath = __DIR__ . '/logfile.log';

// Append the captured data to the log file
file_put_contents($logFilePath, $logData, FILE_APPEND);


// Log received data
error_log("Received data: " . json_encode($form));

if (isset($form['form']) && isset($form['formDataArrayStatut'])) {
    $data = $form['form'];
    $formDataArrayStatut = $form['formDataArrayStatut'];

    try {
        $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
        $bdd->exec("SET NAMES 'utf8'");
        $bdd->exec("SET CHARACTER SET utf8");

        // Begin a transaction
        $bdd->beginTransaction();

        // Fetch columns from the database
        $stmt = $bdd->prepare("SHOW COLUMNS FROM `questionnaire`");
        $stmt->execute();
        $tableColumns = $stmt->fetchAll(PDO::FETCH_COLUMN);

        // Delete all existing records
        $deleteStmt = $bdd->prepare("DELETE FROM `status_juridique` WHERE `id_questionnaire` = :id_questionnaire");
        $deleteStmt->bindValue(':id_questionnaire', $data['id_questionnaire']);
        $deleteStmt->execute();

        $paramsQuestionnaire = [];
        foreach ($data as $field => $value) {
            if (!empty($field) && in_array($field, $tableColumns)) {  // Ensure the field is not empty and exists in the table
                $paramsQuestionnaire[$field] = $value;
            }
        }






        // Prepare SQL set part
        $sqlSetPart = [];
        foreach ($paramsQuestionnaire as $key => $value) {
            $sqlSetPart[] = "`$key` = :$key";
        }
        $sqlSetParts = implode(", ", $sqlSetPart);

        $reqQuestionnaire = $bdd->prepare("UPDATE `questionnaire` SET $sqlSetParts WHERE `id_questionnaire` = :id_questionnaire");
        $reqQuestionnaire->execute($paramsQuestionnaire);




      

     

        // Insert new records or update existing ones
        foreach ($formDataArrayStatut as $formData) {
            if (!empty($formData['origine_des_terres']) &&
            !empty($formData['status_juridique']) &&
            !empty($formData['superfecie_sj']) &&
                !empty($formData['superfecie_sj_are'])) {



                // Check if the record is new (no ID provided)
                if (!isset($formData['id'])) {

                   

                    $insertStmt = $bdd->prepare("INSERT INTO `status_juridique`
                        (`id_questionnaire`, `origine_des_terres`,`status_juridique`,  `superfecie_sj`, `superfecie_sj_are`)
                        VALUES (:id_questionnaire, :origine_des_terres, :status_juridique,  :superfecie_sj, :superfecie_sj_are)");

                    $insertStmt->bindValue(':id_questionnaire', $data['id_questionnaire']);
                    $insertStmt->bindValue(':origine_des_terres', $formData['origine_des_terres']);
                    $insertStmt->bindValue(':status_juridique', $formData['status_juridique']);
                    $insertStmt->bindValue(':superfecie_sj', $formData['superfecie_sj']);
                    $insertStmt->bindValue(':superfecie_sj_are', $formData['superfecie_sj_are']);
                    $insertStmt->execute();
                } else {
                    $updateStmt = $bdd->prepare("UPDATE `status_juridique`
                        SET  `origine_des_terres` = :origine_des_terres, `status_juridique` = :status_juridique `superfecie_sj` = :superfecie_sj, `superfecie_sj_are` = :superfecie_sj_are
                        WHERE `id` = :id");

                    $updateStmt->bindValue(':origine_des_terres', $formData['origine_des_terres']);
                    $updateStmt->bindValue(':status_juridique', $formData['status_juridique']);
                    $updateStmt->bindValue(':superfecie_sj', $formData['superficie_hectare']);
                    $updateStmt->bindValue(':superfecie_sj_are', $formData['superfecie_sj_are']);
                    $insertStmt->bindValue(':id_questionnaire', $data['id_questionnaire']);
                    $updateStmt->execute();
                }
            }
        }

        $bdd->commit();
        echo json_encode(['response' => "success", 'message' => "Records updated successfully"]);
    } catch (Exception $e) {
        $bdd->rollBack();
        echo json_encode(["response" => "error", "message" => $e->getMessage()]);
    }
} else {
    echo json_encode(["response" => "error", "message" => "Invalid data received"]);
}
?>
