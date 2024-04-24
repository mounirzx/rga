<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include('config.php');

// Mocking $data for testing purposes
$data = [
    'commune_code' => '123456',
    'wilaya_code' => '7890',
    'nom_exploitant' => 'John Doe',
    'prenom_exploitant' => 'Jane Doe'
];

try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    // Concatenate keys to create a unique identifier
    $unique_key = $data['commune_code'] . '-' . $data['wilaya_code'];

    // Insert or Update Query with JOIN
    $query = "INSERT INTO questionnaire (unique_key, nom_exploitant, prenom_exploitant, commune_code) 
              SELECT :unique_key, :nom_exploitant, :prenom_exploitant, c.commune_code 
              FROM communes c 
              LEFT JOIN questionnaire q ON c.commune_code = q.commune_code 
              WHERE c.commune_code = :commune_code";

    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':unique_key' => $unique_key,
        ':nom_exploitant' => $data['nom_exploitant'],
        ':prenom_exploitant' => $data['prenom_exploitant'],
        ':commune_code' => $data['commune_code']
    ]);

    echo json_encode(['response' => "true", 'message' => 'Data inserted successfully']);
} catch (Exception $e) {
    echo json_encode(["response" => "false", "message" => $e->getMessage()]);
}
?>
