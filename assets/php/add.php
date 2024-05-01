

<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include('config.php');

$form = json_decode(file_get_contents("php://input"));
    
$data = $form->form;

$formDataArray = isset($form->formDataArray) ? $form->formDataArray : [];
$formDataArrayStatut = isset($form->formDataArrayStatut) ? $form->formDataArrayStatut : [];
$formDataArrayCodeCulture = isset($form->formDataArrayCodeCulture) ? $form->formDataArrayCodeCulture : [];
$formDataArrayCodeMateriel = isset($form->formDataArrayCodeMateriel) ? $form->formDataArrayCodeMateriel : [];
    ob_start();
            echo "Debug: ", print_r($formDataArrayCodeCulture, true);
            $logData = ob_get_clean();
            
            // Define log file path
            $logFilePath = __DIR__ . '/logfile.log';
            
            // Append the captured data to the log file
            file_put_contents($logFilePath, $logData, FILE_APPEND);

try {
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    // Explicitly setting the connection character set to UTF-8 to ensure consistency
    $bdd->exec("SET NAMES 'utf8'");
    $bdd->exec("SET CHARACTER SET utf8");

    // Prepare parameters for SQL statement for questionnaire table
    $paramsQuestionnaire = [];
    $fieldsQuestionnaire = array_keys(get_object_vars($data));

    // Remove unwanted keys from $fieldsQuestionnaire
    $fieldsQuestionnaire = array_diff($fieldsQuestionnaire, ['origine_des_terres', 'status_juridique', 'superficie_hectare', 'superficie_are']);

    // Filter out keys mentioned in the error message
    $errorKeys = ['cultures_herbacees_1', 'cultures_herbacees_2', 'cultures_herbacees_3', 'cultures_herbacees_4', 'terres_au_repos_jacheres_1', 'terres_au_repos_jacheres_2', 'terres_au_repos_jacheres_3', 'terres_au_repos_jacheres_4', 'plantations_arboriculture_1', 'plantations_arboriculture_2', 'plantations_arboriculture_3', 'plantations_arboriculture_4', 'prairies_naturelles_1', 'prairies_naturelles_2', 'prairies_naturelles_3', 'prairies_naturelles_4', 'superficie_agricole_utile_sau_1', 'superficie_agricole_utile_sau_2', 'superficie_agricole_utile_sau_3', 'superficie_agricole_utile_sau_4', 'pacages_et_parcours_1', 'pacages_et_parcours_2', 'surfaces_improductives_1', 'surfaces_improductives_2', 'superficie_agricole_totale_sat_1', 'superficie_agricole_totale_sat_2', 'terres_forestieres_bois_forets_maquis_vides_labourables_1', 'terres_forestieres_bois_forets_maquis_vides_labourables_2', 'surface_totale_st_1', 'surface_totale_st_2'];
    $fieldsQuestionnaire = array_diff($fieldsQuestionnaire, $errorKeys);
   
    // Concatenate keys to create a unique identifier
    $cle =  $data->nom_exploitant . '-'. 
    $data->prenom_exploitant. '-'.
    $data->annee_naissance_exploitant. ''.
    $data->nin_exploitant. '-'.
    $data->commune_code. '-'.
    $data->nom_exploitation .'-'.
    $data->surface_totale_st_1;
 
    // Add the new column and its dummy value to the parameters
    $paramsQuestionnaire['exploitant_cle_unique'] = $cle;
    $fieldsQuestionnaire[] = 'exploitant_cle_unique'; // Include the new column in the field list


    foreach ($fieldsQuestionnaire as $field) {
        if (!isset($paramsQuestionnaire[$field])) {
            $paramsQuestionnaire[$field] = isset($data->$field) ? $data->$field : null;
        }
    }

    // Prepare the SQL query
    $sqlColumnsQuestionnaire = implode(", ", array_map(function($field) { return "`$field`"; }, $fieldsQuestionnaire));
    $sqlValuesQuestionnaire = implode(", ", array_map(function($field) { return ":" . $field; }, $fieldsQuestionnaire));
    $reqQuestionnaire = $bdd->prepare("INSERT INTO `questionnaire` ($sqlColumnsQuestionnaire) VALUES ($sqlValuesQuestionnaire)");
    $reqQuestionnaire->execute($paramsQuestionnaire);

    // Get the last inserted ID of the questionnaire table
    $lastInsertId = $bdd->lastInsertId();

     // Insert data into the status_juridique table for each set of dynamic data
     foreach ($formDataArrayStatut as $formData) {
        if (!empty($formData->origine_des_terres) && !empty($formData->status_juridique) && !empty($formData->superfecie_sj) && !empty($formData->superfecie_sj_are)) {
            $cle_status_juridique = substr($lastInsertId . "-" .$formData->origine_des_terres."-".$formData->status_juridique, 0, 8);
            // ob_start();
            // echo "Debug: ", print_r($formDataArrayStatut, true);
            // $logData = ob_get_clean();
            
            // // Define log file path
            // $logFilePath = __DIR__ . '/logfile.log';
            
            // // Append the captured data to the log file
            // file_put_contents($logFilePath, $logData, FILE_APPEND);
             $reqStatusJuridique = $bdd->prepare("INSERT INTO `status_juridique` (`cle_status_juridique`, `id_questionnaire`, `origine_des_terres`, `status_juridique`, `superfecie_sj`, `superfecie_sj_are`) VALUES (:cle_status_juridique, :id_questionnaire, :origine_des_terres, :status_juridique, :superfecie_sj, :superfecie_sj_are)");
    
            try {
                $reqStatusJuridique->execute([
                    'cle_status_juridique' => $cle_status_juridique,
                    'id_questionnaire' => $lastInsertId,
                    'origine_des_terres' => $formData->origine_des_terres,
                    'status_juridique' => $formData->status_juridique,
                    'superfecie_sj' => $formData->superfecie_sj,
                    'superfecie_sj_are' => $formData->superfecie_sj_are
                ]);
                //echo "Insertion successful for ID: {$lastInsertId}\n";
            } catch (PDOException $e) {
                echo "Insertion failed: " . $e->getMessage() . "\n";
            }
        }
    }


    if (!empty($lastInsertId)) {
        // Prepare parameters for SQL statement
        $paramsSuperficieExploitation = [
            'id_questionnaire' => $lastInsertId,
            'cultures_herbacees_1' => $data->cultures_herbacees_1, // Assuming you have this field directly in the $data object
            'cultures_herbacees_2' => $data->cultures_herbacees_2,
            'cultures_herbacees_3' => $data->cultures_herbacees_3,
            'cultures_herbacees_4' => $data->cultures_herbacees_4,
            'terres_au_repos_jacheres_1' => $data->terres_au_repos_jacheres_1,
            'terres_au_repos_jacheres_2' => $data->terres_au_repos_jacheres_2,
            'terres_au_repos_jacheres_3' => $data->terres_au_repos_jacheres_3,
            'terres_au_repos_jacheres_4' => $data->terres_au_repos_jacheres_4,
            'plantations_arboriculture_1' => $data->plantations_arboriculture_1,
            'plantations_arboriculture_2' => $data->plantations_arboriculture_2,
            'plantations_arboriculture_3' => $data->plantations_arboriculture_3,
            'plantations_arboriculture_4' => $data->plantations_arboriculture_4,
            'prairies_naturelles_1' => $data->prairies_naturelles_1,
            'prairies_naturelles_2' => $data->prairies_naturelles_2,
            'prairies_naturelles_3' => $data->prairies_naturelles_3,
            'prairies_naturelles_4' => $data->prairies_naturelles_4,
            'superficie_agricole_utile_sau_1' => $data->superficie_agricole_utile_sau_1,
            'superficie_agricole_utile_sau_2' => $data->superficie_agricole_utile_sau_2,
            'superficie_agricole_utile_sau_3' => $data->superficie_agricole_utile_sau_3,
            'superficie_agricole_utile_sau_4' => $data->superficie_agricole_utile_sau_4,
            'pacages_et_parcours_1' => $data->pacages_et_parcours_1,
            'pacages_et_parcours_2' => $data->pacages_et_parcours_2,
            'surfaces_improductives_1' => $data->surfaces_improductives_1,
            'surfaces_improductives_2' => $data->surfaces_improductives_2,
            'superficie_agricole_totale_sat_1' => $data->superficie_agricole_totale_sat_1,
            'superficie_agricole_totale_sat_2' => $data->superficie_agricole_totale_sat_2,
            'terres_forestieres_bois_forets_maquis_vides_labourables_1' => $data->terres_forestieres_bois_forets_maquis_vides_labourables_1,
            'terres_forestieres_bois_forets_maquis_vides_labourables_2' => $data->terres_forestieres_bois_forets_maquis_vides_labourables_2,
            'surface_totale_st_1' => $data->surface_totale_st_1,
            'surface_totale_st_2' => $data->surface_totale_st_2
        ];
    
        // Insert data into the superficie_exploitation table
        $reqSuperficieExploitation = $bdd->prepare("INSERT INTO `superficie_exploitation` (`id_questionnaire`, `cultures_herbacees_1`, `cultures_herbacees_2`, `cultures_herbacees_3`, `cultures_herbacees_4`, `terres_au_repos_jacheres_1`, `terres_au_repos_jacheres_2`, `terres_au_repos_jacheres_3`, `terres_au_repos_jacheres_4`, `plantations_arboriculture_1`, `plantations_arboriculture_2`, `plantations_arboriculture_3`, `plantations_arboriculture_4`, `prairies_naturelles_1`, `prairies_naturelles_2`, `prairies_naturelles_3`, `prairies_naturelles_4`, `superficie_agricole_utile_sau_1`, `superficie_agricole_utile_sau_2`, `superficie_agricole_utile_sau_3`, `superficie_agricole_utile_sau_4`, `pacages_et_parcours_1`, `pacages_et_parcours_2`, `surfaces_improductives_1`, `surfaces_improductives_2`, `superficie_agricole_totale_sat_1`, `superficie_agricole_totale_sat_2`, `terres_forestieres_bois_forets_maquis_vides_labourables_1`, `terres_forestieres_bois_forets_maquis_vides_labourables_2`, `surface_totale_st_1`, `surface_totale_st_2`) VALUES (:id_questionnaire, :cultures_herbacees_1, :cultures_herbacees_2, :cultures_herbacees_3, :cultures_herbacees_4, :terres_au_repos_jacheres_1, :terres_au_repos_jacheres_2, :terres_au_repos_jacheres_3, :terres_au_repos_jacheres_4, :plantations_arboriculture_1, :plantations_arboriculture_2, :plantations_arboriculture_3, :plantations_arboriculture_4, :prairies_naturelles_1, :prairies_naturelles_2, :prairies_naturelles_3, :prairies_naturelles_4, :superficie_agricole_utile_sau_1, :superficie_agricole_utile_sau_2, :superficie_agricole_utile_sau_3, :superficie_agricole_utile_sau_4, :pacages_et_parcours_1, :pacages_et_parcours_2, :surfaces_improductives_1, :surfaces_improductives_2, :superficie_agricole_totale_sat_1, :superficie_agricole_totale_sat_2, :terres_forestieres_bois_forets_maquis_vides_labourables_1, :terres_forestieres_bois_forets_maquis_vides_labourables_2, :surface_totale_st_1, :surface_totale_st_2)");
    
        $reqSuperficieExploitation->execute($paramsSuperficieExploitation);
    }






// Assuming $lastInsertId is already obtained from a prior insertion into another table, e.g., questionnaire
//$lastInsertId = $bdd->lastInsertId();

// Insert data into the utilisation_des_sol table for each set of dynamic data
// foreach ($formDataArrayCodeCulture as $formData) {
//     // Ensure all required fields are not empty
//     if (!empty($formData->code_culture) && !empty($formData->superficie_hec) && !empty($formData->superficie_are) && !empty($formData->en_intercalaire)) {
//         // Generate a unique key for each entry
//         $cleUtilisationDuSol = substr($lastInsertId . "-" . $formData->code_culture, 0, 10);  // Adjust size based on your column size

//         // Prepare the SQL statement to avoid SQL injection and manage database interactions securely
//         $reqUtilisationDuSol = $bdd->prepare("INSERT INTO `utilisation_des_sol` (`cle_utilisation`, `id_questionnaire`, `code_culture`, `superficie_hec`, `superficie_are`, `en_intercalaire`) VALUES (:cle_utilisation, :id_questionnaire, :code_culture, :superficie_hec, :superficie_are, :en_intercalaire)");

//         try {
//             // Execute the prepared statement with parameters
//             $reqUtilisationDuSol->execute([
//                 'cle_utilisation' => $cleUtilisationDuSol,
//                 'id_questionnaire' => $lastInsertId,
//                 'code_culture' => $formData->code_culture,
//                 'superficie_hec' => $formData->superficie_hec,
//                 'superficie_are' => $formData->superficie_are,
//                 'en_intercalaire' => $formData->en_intercalaire
//             ]);

//             // Optionally, output a success message (you could also log this instead)
//             echo "Insertion successful for ID: {$lastInsertId}, Key: {$cleUtilisationDuSol}\n";
//         } catch (PDOException $e) {
//             // Handle any errors during the database interaction
//             echo "Insertion failed: " . $e->getMessage() . "\n";
//         }
//     }
// }







foreach ($formDataArrayCodeCulture as $formData) {
    if (!empty($formData->code_materiel) && !empty($formData->code_materiel_nombre)) {
        // Assuming 'code_culture' is equivalent to 'code_materiel' and using 'superficie_hec' as 'code_materiel_nombre'
        $cle_materiel_agricole = substr($lastInsertId . "-" . $formData->code_materiel."-".$formData->code_materiel_nombre, 0, 4); // Ensure this fits your `int(4)`
       
        // Corrected SQL statement to reflect your table structure
        $reqMaterielAgricole = $bdd->prepare("INSERT INTO `materiel_agricole` (`cle_materiel_agricole`, `id_questionnaire`, `code_materiel`, `code_materiel_nombre`) VALUES (:cle_materiel_agricole, :id_questionnaire, :code_materiel, :code_materiel_nombre)");

        try {
            // Execute the prepared statement with correct parameters
            $reqMaterielAgricole->execute([
                'cle_materiel_agricole' => $cle_materiel_agricole,
                'id_questionnaire' => $lastInsertId,
                'code_materiel' => $formData->code_materiel, // mapped from 'code_culture'
                'code_materiel_nombre' => $formData->code_materiel_nombre // assuming you map 'superficie_hec' here for demonstration
            ]);

            echo "Insertion successful for ID: {$lastInsertId}, Key: {$cle_materiel_agricole}\n";
        } catch (PDOException $e) {
            echo "Insertion failed: " . $e->getMessage() . "\n";
        }
    } else {
        echo "Data validation failed: Some fields are empty.\n";
    }
}































foreach ($formDataArrayCodeMateriel as $formData) {
    // Validate the formData elements before attempting to insert.
    if (!empty($formData->code_materiel) && !empty($formData->code_materiel_nombre) && is_numeric($formData->code_materiel_nombre)) {
        try {
            $reqMaterielAgricole = $bdd->prepare("INSERT INTO `materiel_agricole` (`id_questionnaire`, `code_materiel`, `code_materiel_nombre`) VALUES (:id_questionnaire, :code_materiel, :code_materiel_nombre)");
            $reqMaterielAgricole->execute([
                'id_questionnaire' => $lastInsertId,
                'code_materiel' => $formData->code_materiel,
                'code_materiel_nombre' => $formData->code_materiel_nombre
            ]);
        } catch (PDOException $e) {
            // Error handling, could log or return an error message.
            echo "Error inserting materiel data: " . $e->getMessage();
        }
    } else {
        // Optional: feedback/log for why insertion did not occur
        // echo "Invalid materiel data provided.";
    }
}








echo json_encode(['response' => true]);
} catch (Exception $e) {
$msg = $e->getMessage();
echo json_encode(["response" => false, "error" => $msg]);
}
?>






