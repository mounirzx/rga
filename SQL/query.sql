
-- Modification Valeur des champ avec condition
UPDATE rga.questionnaire  
SET exploitant = 
( CASE  
WHEN (exploitant = '1') THEN '2' 
WHEN (exploitant = '2') THEN '1' 
ELSE  (exploitant)
END );



UPDATE rga.questionnaire  
SET exploit_est_un_bloc = 
( CASE  
WHEN (exploit_est_un_bloc = '1') THEN '2' 
WHEN (exploit_est_un_bloc = '2') THEN '1' 
ELSE  (exploit_est_un_bloc)
END );

SELECT COUNT(exploit_est_un_bloc) FROM questionnaire WHERE exploit_est_un_bloc="1"
SELECT COUNT(exploit_est_un_bloc) FROM questionnaire WHERE exploit_est_un_bloc="2"

1:
2:

swap between nom et prenom recenseur:
UPDATE recenseur
SET 
    nom_recensseur = @tmp := LEFT(nom_recensseur, 50), 
    nom_recensseur = LEFT(prenom_recenseur, 100), 
    prenom_recenseur = @tmp;

swap between nom et prenom controleur:
UPDATE controleur
SET 
    nom_controleur = @tmp := LEFT(nom_controleur, 100),  
    nom_controleur = LEFT(prenom_controleur, 100),      
    prenom_controleur = @tmp


-- swap between nom et prenom superviseur:
UPDATE superviseur
SET 
    nom_superviseur = @tmp := LEFT(nom_superviseur, 100),  
    nom_superviseur = LEFT(prenom_superviseur, 100),      
    prenom_superviseur = @tmp


-- swap between nom et prenom superviseur_national:
UPDATE superviseur_national
SET 
    nom_superviseur_national = @tmp := LEFT(nom_superviseur_national, 100),  
    nom_superviseur_national = LEFT(prenom_superviseur_national, 100),      
    prenom_superviseur_national = @tmp


-- swap between nom et prenom admin_central:
UPDATE admin_central
SET 
    nom_admin = @tmp := LEFT(nom_admin, 100),  
    nom_admin = LEFT(prenom_admin, 100),      
    prenom_admin = @tmp
