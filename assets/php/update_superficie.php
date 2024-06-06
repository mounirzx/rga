<?php

include './config.php';

// Connexion à la base de données
try {
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

$req = $bdd->prepare('SELECT * FROM superficie_exploitation');
$req->execute();
while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
    $surface_totale_st_1 = $res['surface_totale_st_1'];
    $surface_totale_st_2 = $res['surface_totale_st_2'];
    $id_questionnaire = $res['id_questionnaire'];




    if (strpos($surface_totale_st_2, '.') !== false) {
        // Remove dot from surface_totale_st_2
        $surface_totale_st_2 = str_replace('.', '', $surface_totale_st_2);
    }

    // Concatenate and parse to float
    $st_en_hectar = floatval($surface_totale_st_1 . "." . $surface_totale_st_2);

        $req2 = $bdd->prepare('update questionnaire set st_en_hectar=? where id_questionnaire =? ');
        $req2->execute(array($st_en_hectar,$id_questionnaire));
        
} // fin while

?>
