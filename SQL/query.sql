
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