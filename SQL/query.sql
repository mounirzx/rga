
-- Modification Valeur des champ avec condition
UPDATE rga.questionnaire  
SET exploitant = 
( CASE  
WHEN (exploitant = '1') THEN '2' 
WHEN (exploitant = '2') THEN '1' 
ELSE  (exploitant)
END );