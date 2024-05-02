import puppeteer from "puppeteer";
import fs from "fs";
import path from "path";
import { fileURLToPath } from "url";


// Correctly obtain __filename and __dirname
const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

// Specify the folder and file name
const folderName = "files";
const fileName = "test.jpg";
const filePath = path.join(__dirname, folderName, fileName);
const content = "This is the content of my file.";
const delay = 0;

// Function to wait for a specified number of milliseconds
const waitFor = (centiseconds) => {
  const milliseconds = centiseconds * 10; // Convert centiseconds to milliseconds
  return new Promise(resolve => setTimeout(resolve, milliseconds));
};

// Create the file with some content
fs.writeFile(filePath, content, (err) => {
  if (err) {
    console.error("Error creating the file:", err.message);
    return;
  }
  console.log(
    `File '${fileName}' has been created in the folder '${folderName}'.`
  );
});
// ############################################# Browser part #############################################

(async () => {
  const browser = await puppeteer.launch({
     headless: false, // Launch in headful mode
    executablePath:
    
     "C:\\Program Files (x86)\\Microsoft\\Edge\\Application\\msedge.exe",
      // "C:\\Program Files\\Mozilla Firefox\\firefox.exe", // Use Mozilla ,
      // "C:\\Program Files\\LibreWolf\\librewolf.exe", // Use LibreWolf ,
     // "C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe", // Use chrome ,
      
      args: ['--start-maximized'] 
  });


  const page = await browser.newPage();
// ############################################# END Browser part #############################################

// ############################################# Monitors size #############################################

//  for 24pouce monitors 

  await page.setViewport({
    width: 1900,
    height: 920,
    deviceScaleFactor: 1,
  });


// for > 20 pouce monitors 
//  await page.setViewport({
//   width: 1400,
//   height: 640,
//   deviceScaleFactor: 1,
// });

 // for 20 pouce monitors 
//  await page.setViewport({
//   width: 1580,
//   height: 720,
//   deviceScaleFactor: 1,
// });

//############################################# End monitor size #############################################



  // await page.goto("http://213.179.181.50/workingrga/" , { delay: delay });
  await page.goto("http://localhost/rga" , { delay: delay });


  await page.type("#username", "admin", { delay: delay });
  await page.type("#password", "admin", { delay: delay });
  await page.click("#login");

  // await page.waitForSelector("#day_of_passage");
  // await page.select("#day_of_passage", "12", { delay: 10 });
  // await page.waitForSelector("#month_of_passage");
  // await page.select("#month_of_passage", "10", { delay: 10 });

  // await page.waitForSelector("#year_of_passage");
  // await page.select("#year_of_passage", "2024", { delay: 10 });











  function generateRandomNumber(length) {
    let result = "";
    for (let i = 0; i < length; i++) {
      result += Math.floor(Math.random() * 10); // Generates a random digit (0-9)
    }
    return result;
  }













  // //######################## II- Identification de l'exploitant تعريف المستثمر########################
  await page.waitForSelector('input[name="nom_exploitant"]');
  await page.type('input[name="nom_exploitant"]', "Mounir", { delay: delay });
  
  await page.waitForSelector('input[name="prenom_exploitant"]');
  await page.type('input[name="prenom_exploitant"]', "Abes", { delay: delay });
  
  // await page.waitForSelector("#jour_de_naissance");
  await page.type("#jour_de_naissance", "08", { delay: delay });
  
  // await page.waitForSelector("#mois_de_naissance");
  await page.type("#mois_de_naissance", "09", { delay: delay });
  
  // await page.waitForSelector("#mois_de_naissance");
  await page.type("#mois_de_naissance", "1998", { delay: delay });
  
  await page.waitForSelector('select[name="sexe_exploitant"]');
  await page.click('select[name="sexe_exploitant"]');
  await waitFor(delay);
  await page.select('select[name="sexe_exploitant"]', "1"); // Selects the option with value "2"
  
  await page.waitForSelector('select[name="niveau_instruction"]');
  await page.click('select[name="niveau_instruction"]');
  await waitFor(delay);
  await page.select('select[name="niveau_instruction"]', "5"); // Selects the option with value "1"
  
  await page.waitForSelector('select[name="niveau_formation_agricole"]');
  await page.click('select[name="niveau_formation_agricole"]');
  await waitFor(delay);
  await page.select('select[name="niveau_formation_agricole"]', "9"); // Selects the option with value "1"
  
  await page.type('input[name="adress_exploitant"]',"Adresse exploitant agricole", { delay: delay }); // Selects the option with value "1"
  await page.type('input[name="phone_exploitant"]', "077"+generateRandomNumber(7), { delay: delay }); // Selects the option with value "1"
  await page.type('input[name="email_exploitant"]', "m.abes@bneder.dz", { delay: delay }); // Selects the option with value "1"
  //await page.waitForSelector('input[name="inscription_exploitant"]');
  

  // Check the checkboxes based on your requirement
  await waitFor(delay);
  await page.click("#caw"); // Check the first checkbox
  await waitFor(delay);
  await page.click("#capa"); // Check the third checkbox
  await waitFor(delay);
  await page.click("#ccw"); // Check the third checkbox
  await waitFor(delay);
  await page.click("#unpa"); // Check the third checkbox
  await waitFor(delay);
  await page.click("#cam"); // Check the third checkbox
  await waitFor(delay);
  await page.click("#dispositif_social"); // Check the third checkbox

  // await page.click("#can"); // Check the third checkbox
  // await page.click("#appareils_sociaux"); // Check the third checkbox





  await page.type('input[name="nin_exploitant"]',generateRandomNumber(20), { delay: delay });
  await page.type('input[name="nis_exploitant"]',generateRandomNumber(20), { delay: delay });
  await page.type('input[name="num_carte_fellah_exploitant"]',generateRandomNumber(7), { delay: delay });

  await page.waitForSelector('select[name="assurance_exploitant"]');
  await page.click('select[name="assurance_exploitant"]');
  await waitFor(delay);
  await page.select('select[name="assurance_exploitant"]', "1");

  await page.type('input[name="num_sec_sociale"]', generateRandomNumber(12) , { delay: delay });

  await page.waitForSelector('select[name="issu_famille_agricole"]');
  await page.click('select[name="issu_famille_agricole"]');
  await waitFor(delay);
  await page.select('select[name="issu_famille_agricole"]', "1");

  await page.type('input[name="nature_exploitant"]', "Nature de l'exploitant", { delay: delay });
  
  await page.waitForSelector('select[name="exploitant"]');
  await page.click('select[name="exploitant"]');
  await waitFor(delay);
  await page.select('select[name="exploitant"]', "1");

  await page.type('input[name="nb_co_exploitants"]',generateRandomNumber(7), { delay: delay });
  




  
   //######################## III - Identification de l'exploitant تعريف المستثمرة########################
  
  await page.type('input[name="nom_exploitation"]',"Mes terres", { delay: delay });
  await page.type('input[name="adress_exploitation"]',"Adress", { delay: delay });

  await page.waitForSelector('select[name="statut_juridique_de_lexploitation"]');
  await page.click('select[name="statut_juridique_de_lexploitation"]');
  await waitFor(delay);
  await page.select('select[name="statut_juridique_de_lexploitation"]',"1");


  await page.waitForSelector('select[name="type_activite_exploitation"]');
  await page.click('select[name="type_activite_exploitation"]');
  await waitFor(delay);
  await page.select('select[name="type_activite_exploitation"]', "1");

  await page.type('input[name="lon_exploitation"]',"25.2154", { delay: delay });
  await page.type('input[name="lat_exploitation"]',"12.54621", { delay: delay });
  
  
  await page.waitForSelector('#activite_exploitation');
  await page.click('#activite_exploitation');
  await waitFor(delay);
  await page.select('#activite_exploitation', "1");
  
  
  await waitFor(delay);
  await page.click("#route_national");
  await waitFor(delay);
  await page.click("#chemin_de_wilaya");
  await waitFor(delay);
  await page.click("#route_communale");
  await waitFor(delay);
  await page.click("#piste");
  await waitFor(delay);
  await page.click("#acces_agricole");
  await waitFor(delay);
  await page.click("#acces_rural");
 
 

  await page.waitForSelector('select[name="reseau_electrique"]');
  await page.click('select[name="reseau_electrique"]');
  await waitFor(delay);
  await page.select('select[name="reseau_electrique"]', "1");

  await page.waitForSelector('select[name="reseau_telephonique"]');
  await page.click('select[name="reseau_telephonique"]');
  await waitFor(delay);
  await page.select('select[name="reseau_telephonique"]', "1");

  await page.waitForSelector('select[name="reseau_telephonique_si_oui"]');
  await page.click('select[name="reseau_telephonique_si_oui"]');
  await waitFor(delay);
  await page.select('select[name="reseau_telephonique_si_oui"]', "1");

  await page.waitForSelector('select[name="reseau_internet"]');
  await page.click('select[name="reseau_internet"]');
  await waitFor(delay);
  await page.select('select[name="reseau_internet"]', "1");

  await page.waitForSelector('select[name="reseau_internet_si_oui"]');
  await page.click('select[name="reseau_internet_si_oui"]');
  await waitFor(delay);
  await page.select('select[name="reseau_internet_si_oui"]', "1");



//######################## Statut juridique des terres ########################


await page.click("#addForm");

await page.waitForSelector('select[name="origine_des_terres_2"]');
await page.click('select[name="origine_des_terres_2"]');
await waitFor(delay);
await page.select('select[name="origine_des_terres_2"]', "1");

await page.waitForSelector('select[name="mode_dexploitation_des_terres_2"]');
await page.click('select[name="mode_dexploitation_des_terres_2"]');
await waitFor(delay);
await page.select('select[name="mode_dexploitation_des_terres_2"]', '1');

await page.type('input[name="superficie_hectare_2"]',"100", { delay: delay });
await page.type('input[name="superficie_are_2"]',"10", { delay: delay });









await page.click("#addForm");


await page.waitForSelector('select[name="origine_des_terres_3"]');
await page.click('select[name="origine_des_terres_3"]');
await waitFor(delay);
await page.select('select[name="origine_des_terres_3"]', "2");

await page.waitForSelector('select[name="mode_dexploitation_des_terres_3"]');
await page.click('select[name="mode_dexploitation_des_terres_3"]');
await waitFor(delay);
await page.select('select[name="mode_dexploitation_des_terres_3"]', '2');


await page.type('input[name="superficie_hectare_3"]',"200", { delay: delay });
await page.type('input[name="superficie_are_3"]',"20", { delay: delay });






await page.click("#addForm");



await page.waitForSelector('select[name="origine_des_terres_4"]');
await page.click('select[name="origine_des_terres_4"]');
await waitFor(delay);
await page.select('select[name="origine_des_terres_4"]', "3");

await page.waitForSelector('select[name="mode_dexploitation_des_terres_4"]');
await page.click('select[name="mode_dexploitation_des_terres_4"]');
await waitFor(delay);
await page.select('select[name="mode_dexploitation_des_terres_4"]', '3');

await page.type('input[name="superficie_hectare_4"]',"300", { delay: delay });
await page.type('input[name="superficie_are_4"]',"30", { delay: delay });



//######################## end Statut juridique des terres /########################


























  


  
  
  // await page.waitForSelector('#');
  // await page.click('#');
  // await waitFor(delay);
  // await page.select('#', "1");
  //







































 


  




 await page.type('input[name="reference_cadastrale"]',"3000", { delay: delay });

 await page.waitForSelector('select[name="si_exploi_eai_eac"]');
 await page.click('select[name="si_exploi_eai_eac"]');
 await waitFor(delay);
 await page.select('select[name="si_exploi_eai_eac"]', '1');
  
 await page.type('input[name="si_exploi_eac"]',"3000", { delay: delay });
 await page.type('input[name="exploi_superficie_hec"]',"7000", { delay: delay });
 await page.type('input[name="exploi_superficie_are"]',"8000", { delay: delay });

// surface 

await page.type('input[name="cultures_herbacees_1"]',"1000", { delay: delay });
await page.type('input[name="cultures_herbacees_2"]',"20", { delay: delay });
await page.type('input[name="cultures_herbacees_3"]',"3000", { delay: delay });
await page.type('input[name="cultures_herbacees_4"]',"40", { delay: delay });


await page.type('input[name="terres_au_repos_jacheres_1"]',"8000", { delay: delay });
await page.type('input[name="terres_au_repos_jacheres_2"]',"60", { delay: delay });
await page.type('input[name="terres_au_repos_jacheres_3"]',"7000", { delay: delay });
await page.type('input[name="terres_au_repos_jacheres_4"]',"20", { delay: delay });
 


await page.type('input[name="plantations_arboriculture_1"]',"5000", { delay: delay });
await page.type('input[name="plantations_arboriculture_2"]',"30", { delay: delay });
await page.type('input[name="plantations_arboriculture_3"]',"2000", { delay: delay });
await page.type('input[name="plantations_arboriculture_4"]',"10", { delay: delay });
 


await page.type('input[name="prairies_naturelles_1"]',"9000", { delay: delay });
await page.type('input[name="prairies_naturelles_2"]',"60", { delay: delay });
await page.type('input[name="prairies_naturelles_3"]',"2000", { delay: delay });
await page.type('input[name="prairies_naturelles_4"]',"30", { delay: delay });
 


await page.type('input[name="pacages_et_parcours_1"]',"6000", { delay: delay });
await page.type('input[name="pacages_et_parcours_2"]',"30", { delay: delay });


await page.type('input[name="surfaces_improductives_1"]',"8000", { delay: delay });
await page.type('input[name="surfaces_improductives_2"]',"70", { delay: delay });



await page.type('input[name="terres_forestieres_bois_forets_maquis_vides_labourables_1"]',generateRandomNumber(4), { delay: delay });
await page.type('input[name="terres_forestieres_bois_forets_maquis_vides_labourables_2"]',generateRandomNumber(2), { delay: delay });






// select
await page.waitForSelector('#exploit_est_un_bloc');
await page.click('#exploit_est_un_bloc');
await waitFor(delay);
await page.select('#exploit_est_un_bloc', "1");

// num

await page.type('#exploit_est_un_bloc_oui',generateRandomNumber(4), { delay: delay });

// select
await page.waitForSelector('#exploit_indus_sur_exploitation');
await page.click('#exploit_indus_sur_exploitation');
await waitFor(delay);
await page.select('#exploit_indus_sur_exploitation', "1");

// num
await page.type('#exp_indu_si_oui_nombre_menage',generateRandomNumber(4), { delay: delay });
//here 2 inputs
await page.type('#surface_bati_occupe',generateRandomNumber(4), { delay: delay });
await page.type('#surface_non_bati_occupe',generateRandomNumber(4), { delay: delay });



// check
await page.click('#eng_reseau_electrique');
await waitFor(delay);
await page.click('#eng_groupe_electrogene');
await waitFor(delay);
await page.click('#eng_energie_solaire');
await waitFor(delay);
await page.click('#eng_energie_eolienne');
await waitFor(delay);
await page.click('#eng_energie_carburant');
await waitFor(delay);
await page.click('#autres_sources_d_energie');






await page.click("#addForm2");

await page.waitForSelector('#code_culture_1');
 await page.click('#code_culture_1');
 await waitFor(delay);
 await page.select('#code_culture_1', "1");

 await page.type('#superficie_hec_1',"658", { delay: delay });
 await page.type('#superficie_are_1',"768", { delay: delay });
 await page.type('#en_intercalaire_1',"854", { delay: delay });
 
 await page.click("#addForm2");

 await page.waitForSelector('#code_culture_2');
 await page.click('#code_culture_2');
 await waitFor(delay);
 await page.select('#code_culture_2', "2");

 await page.type('#superficie_hec_2',generateRandomNumber(3), { delay: delay });
 await page.type('#superficie_are_2',generateRandomNumber(3), { delay: delay });
 await page.type('#en_intercalaire_2',generateRandomNumber(3), { delay: delay });
 
 await page.click("#addForm2");
 await page.waitForSelector('#code_culture_3');
 await page.click('#code_culture_3');
 await waitFor(delay);
 await page.select('#code_culture_3', "3");

 await page.type('#superficie_hec_3',generateRandomNumber(3), { delay: delay });
 await page.type('#superficie_are_3',generateRandomNumber(3), { delay: delay });
 await page.type('#en_intercalaire_3',generateRandomNumber(3), { delay: delay });
 
 await page.click("#addForm2");

 await page.waitForSelector('#code_culture_4');
 await page.click('#code_culture_4');
 await waitFor(delay);
 await page.select('#code_culture_4', "4");

 await page.type('#superficie_hec_4',generateRandomNumber(3), { delay: delay });
 await page.type('#superficie_are_4',generateRandomNumber(3), { delay: delay });
 await page.type('#en_intercalaire_4',generateRandomNumber(3), { delay: delay });
 
 await page.click("#addForm2");
 
 await page.waitForSelector('#code_culture_5');
 await page.click('#code_culture_5');
 await waitFor(delay);
 await page.select('#code_culture_5', "5");

 await page.type('#superficie_hec_5',generateRandomNumber(3), { delay: delay });
 await page.type('#superficie_are_5',generateRandomNumber(3), { delay: delay });
 await page.type('#en_intercalaire_5',generateRandomNumber(3), { delay: delay });
 
 await page.click("#addForm2");

 await page.waitForSelector('#code_culture_6');
 await page.click('#code_culture_6');
 await waitFor(delay);
 await page.select('#code_culture_6', "1");

 await page.type('#superficie_hec_6',generateRandomNumber(3), { delay: delay });
 await page.type('#superficie_are_6',generateRandomNumber(3), { delay: delay });
 await page.type('#en_intercalaire_6',generateRandomNumber(3), { delay: delay });








 await page.type('#oliviers',"3", { delay: delay });
 await page.type('#grenadiers',"4", { delay: delay });
 await page.type('#figuiers',"5", { delay: delay });
 await page.type('#cognassiers',"6", { delay: delay });
 await page.type('#noyaux_pepins',"7", { delay: delay });
 await page.type('#palmiers_dattiers',"8", { delay: delay });
 await page.type('#vigne',"9", { delay: delay });
 await page.type('#amandiers',"1", { delay: delay });
 await page.type('#caroubier',"1", { delay: delay });
 

 await page.waitForSelector('#pratiquez_vous_lagriculture_biologique');
 await page.click('#pratiquez_vous_lagriculture_biologique');
 await waitFor(delay);
 await page.select('#pratiquez_vous_lagriculture_biologique', "1");

 await page.waitForSelector('#si_oui_avez_vous_un_certificat');
 await page.click('#si_oui_avez_vous_un_certificat');
 await waitFor(delay);
 await page.select('#si_oui_avez_vous_un_certificat', "1");

 await page.waitForSelector('#pratiquez_vous_laquaculture_integree_a_lagriculture');
 await page.click('#pratiquez_vous_laquaculture_integree_a_lagriculture');
 await waitFor(delay);
 await page.select('#pratiquez_vous_laquaculture_integree_a_lagriculture', "1");
 
 await page.waitForSelector('#pratiquez_vous_l_heliciculture');
 await page.click('#pratiquez_vous_l_heliciculture');
 await waitFor(delay);
 await page.select('#pratiquez_vous_l_heliciculture', "1");

 await page.waitForSelector('#pratiquez_vous_la_myciculture');
 await page.click('#pratiquez_vous_la_myciculture');
 await waitFor(delay);
 await page.select('#pratiquez_vous_la_myciculture', "1");

 await page.waitForSelector('#pratiquez_vous_une_agriculture_conventionnee');
 await page.click('#pratiquez_vous_une_agriculture_conventionnee');
 await waitFor(delay);
 await page.select('#pratiquez_vous_une_agriculture_conventionnee', "1");




 await page.click('#tomate_industrielle');
 await waitFor(delay);

 await page.click('#cereales');
 await waitFor(delay);

 await page.click('#aviculture');
 await waitFor(delay);

 await page.click('#maraichages');
 await waitFor(delay);
 
 await page.click('#pomme_de_terre');
 await waitFor(delay);

 await page.click('#autre_division');
 await waitFor(delay);







//  VI-Cheptel المواشي     (Campagne agricole الموسم الفلاحي 2023-2024)

await page.type('#chapt_bovins',generateRandomNumber(2), { delay: delay });
await page.type('#chapt_dont_vaches_laitieres_blm',generateRandomNumber(2), { delay: delay });
await page.type('#chapt_dont_vaches_laitieres_bla',generateRandomNumber(2), { delay: delay });
await page.type('#chapt_dont_vaches_laitieres_bll',generateRandomNumber(2), { delay: delay });

await page.type('#chapt_ovins',generateRandomNumber(2), { delay: delay });
await page.type('#chapt_dont_brebis',generateRandomNumber(2), { delay: delay });

await page.type('#chapt_caprins',generateRandomNumber(2), { delay: delay });
await page.type('#chapt_dont_chevres',generateRandomNumber(2), { delay: delay });

await page.type('#chapt_equins',generateRandomNumber(2), { delay: delay });
await page.type('#chapt_dont_juments',generateRandomNumber(2), { delay: delay });

await page.type('#chapt_camelins',generateRandomNumber(2), { delay: delay });
await page.type('#chapt_dont_chamelles',generateRandomNumber(2), { delay: delay });

await page.type('#chapt_mulets',generateRandomNumber(2), { delay: delay });
await page.type('#chapt_anes',generateRandomNumber(2), { delay: delay });
await page.type('#chapt_cuniculture',generateRandomNumber(2), { delay: delay });

await page.type('#chapt_ruches_modernes',generateRandomNumber(2), { delay: delay });
await page.type('#chapt_dont_sont_pleines',generateRandomNumber(2), { delay: delay });
await page.type('#chapt_ruches_traditionnelles',generateRandomNumber(2), { delay: delay });
await page.type('#chapt_dont_sont_pleines_2',generateRandomNumber(2), { delay: delay });


await page.type('#chapt_poules_ponte',generateRandomNumber(2), { delay: delay });
await page.type('#chapt_poules_chair',generateRandomNumber(2), { delay: delay });
await page.type('#chapt_dindes_ponte',generateRandomNumber(2), { delay: delay });
await page.type('#chapt_dindes_chair',generateRandomNumber(2), { delay: delay });
await page.type('#chapt_autre_aviculture_ponte',generateRandomNumber(2), { delay: delay });
await page.type('#chapt_autre_aviculture_chair',generateRandomNumber(2), { delay: delay });



await page.waitForSelector('#chapt_Pratiquez_transhumance');
await page.click('#chapt_Pratiquez_transhumance');
await waitFor(delay);
await page.select('#chapt_Pratiquez_transhumance', "1");



// VII- Batiments d'exploitation مباني الإستغلال

 
 await page.waitForSelector('select[name="bat_exploitation_agricole_sont_exploites"]');
 await page.click('select[name="bat_exploitation_agricole_sont_exploites"]');
 await waitFor(delay);
 await page.select('select[name="bat_exploitation_agricole_sont_exploites"]', '2'); // Selecting option "1" for mode_dexploitation_des_terres in the first row

 await page.type('input[name="batiments_dhabitation_nombre"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="batiments_dhabitation_surface"]',generateRandomNumber(3), { delay: delay });


 await page.type('input[name="batiment_de_stockage_nombre"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="batiment_de_stockage_surface"]',generateRandomNumber(3), { delay: delay });


 await page.type('input[name="batiment_dentreposage_des_produits_agricoles_nombre"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="batiment_dentreposage_des_produits_agricoles_surface"]',generateRandomNumber(3), { delay: delay });

 await page.type('input[name="batiment_pour_le_remisage_du_materiel_agricole_nombre"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="batiment_pour_le_remisage_du_materiel_agricole_surface"]',generateRandomNumber(3), { delay: delay });

 await page.type('input[name="caves_nombre"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="caves_surface"]',generateRandomNumber(3), { delay: delay });

 await page.type('input[name="unite_de_conditionnement_nombre"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="unite_de_conditionnement_surface"]',generateRandomNumber(3), { delay: delay });

 await page.type('input[name="unite_de_transformation_nombre"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="unite_de_transformation_surface"]',generateRandomNumber(3), { delay: delay });

 await page.type('input[name="autre_batiments_nombre"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="autre_batiments_surface"]',generateRandomNumber(3), { delay: delay });

 await page.type('input[name="centre_de_collecte_de_lait_nombre"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="centre_de_collecte_de_lait_surface"]',generateRandomNumber(3), { delay: delay });

 await page.type('input[name="serres_tunnels_nombre"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="serres_tunnels_surface"]',generateRandomNumber(3), { delay: delay });


 await page.type('input[name="serres_multichapelles_nombre"]',generateRandomNumber(2), { delay: delay });
//  await page.type('input[name="serres_multichapelles_surface"]',"653", { delay: delay });

 await page.type('input[name="bergerie_nombre"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="bergerie_surface"]',generateRandomNumber(4), { delay: delay });

 await page.type('input[name="etable_nombre"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="etable_surface"]',generateRandomNumber(4), { delay: delay });

 await page.type('input[name="ecurie_de_chevaux_nombre"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="ecurie_de_chevaux_surface"]',generateRandomNumber(4), { delay: delay });

 await page.type('input[name="poulailler_batis_en_dur_nombre"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="poulailler_batis_en_dur_surface"]',generateRandomNumber(4), { delay: delay });

 await page.type('input[name="poulailler_sous_serre_nombre"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="poulailler_sous_serre_surface"]',generateRandomNumber(4), { delay: delay });

 await page.type('input[name="chambre_froide_nombre"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="chambre_froide_surface"]',generateRandomNumber(4), { delay: delay });


// VIII- Matériel agricole العتاد الفلاحي

await page.waitForSelector('select[name="ee_mode_exploitation_materiel"]');
await page.click('select[name="ee_mode_exploitation_materiel"]');
await waitFor(delay);
await page.select('select[name="ee_mode_exploitation_materiel"]', "1");



await page.click('#addForm3');

  await page.waitForSelector('select[name="code_materiel_1"]');
  await page.click('select[name="code_materiel_1"]');
  await waitFor(delay);
  await page.select('select[name="code_materiel_1"]', "1");
  
  //input
  await page.type('#code_materiel_nombre_1',generateRandomNumber(2), { delay: delay });


  
  
  await page.click('#addForm3');
  


  await page.waitForSelector('#code_materiel_2');
  await page.click('#code_materiel_2');
  await waitFor(delay);
  await page.select('#code_materiel_2', "2");


  await page.type('#code_materiel_nombre_2',generateRandomNumber(2), { delay: delay });
  
  await page.click('#addForm3');
  


  await page.waitForSelector('#code_materiel_3');
  await page.click('#code_materiel_3');
  await waitFor(delay);
  await page.select('#code_materiel_3', "2");


  await page.type('#code_materiel_nombre_3',generateRandomNumber(2), { delay: delay });






  await page.waitForSelector('#eau_exploitation_type_irrigation');
  await page.click('#eau_exploitation_type_irrigation');
  await waitFor(delay);
  await page.select('#eau_exploitation_type_irrigation', "1");































































  


  

//   jour_de_naissance

// mois_de_naissance
//   annee_de_naissance
  









 // IX- Ressources en eau الموارد المائية99

 await page.type('input[name="eau_barrage"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="eau_station_depuration"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="eau_ensemble_de_forages"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="eau_puits"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="eau_forage"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="eau_pompage_doued"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="eau_crues_doued"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="eau_petit_barrage"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="eau_retenu_collinaire"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="eau_foggara"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="eau_source"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="eau_station_depuration_2"]',generateRandomNumber(2), { delay: delay });
 await page.type('input[name="eau_autres_ress"]',generateRandomNumber(2), { delay: delay });


 
 
// 999
await page.type('input[name="eau_aspersion_classique"]',generateRandomNumber(3), { delay: delay });
await page.type('input[name="eau_gravitaire"]',generateRandomNumber(3), { delay: delay });
await page.type('input[name="eau_epandage_de_crues"]',generateRandomNumber(3), { delay: delay });
await page.type('input[name="eau_goutte_a_goutte"]',generateRandomNumber(3), { delay: delay });
await page.type('input[name="eau_pivots"]',generateRandomNumber(3), { delay: delay });
await page.type('input[name="eau_enrouleur"]',generateRandomNumber(3), { delay: delay });
await page.type('input[name="eau_pluie_artificielle"]',generateRandomNumber(3), { delay: delay });
await page.type('input[name="eau_foggara_hec"]',generateRandomNumber(3), { delay: delay });
await page.type('input[name="eau_autre_hec"]',generateRandomNumber(3), { delay: delay });

// checkbox
 await page.click('input[name="eau_bassin_d_accumulation"]');
  await waitFor(delay);
  await page.click('input[name="eau_mare_deau"]');
  await waitFor(delay);
  await page.click('input[name="eau_bassin_geomembrane"]');
  await waitFor(delay);
  await page.click('input[name="eau_ced"]');
  await waitFor(delay);
  await page.click('input[name="eau_reservoir"]');
  await waitFor(delay);
  await page.click('input[name="eau_digue"]');
  await waitFor(delay);
  await page.click('input[name="eau_citrene_souple"]');
  await waitFor(delay);
  await page.click('input[name="eau_autres_1"]');
  await waitFor(delay);





//    X- Main d'œuvre اليد العاملة




   await page.type('input[name="co_exploitants_y_compris_exploitant_principa_l"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="co_exploitants_y_compris_exploitant_principa_2"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="co_exploitants_y_compris_exploitant_principa_3"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="co_exploitants_y_compris_exploitant_principa_4"]',generateRandomNumber(2), { delay: delay });

   await page.type('input[name="ouvriers_agricoles_1"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="ouvriers_agricoles_2"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="ouvriers_agricoles_3"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="ouvriers_agricoles_4"]',generateRandomNumber(2), { delay: delay });

   await page.type('input[name="ouvriers_agricoles_etranges_1"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="ouvriers_agricoles_etranges_2"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="ouvriers_agricoles_etranges_3"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="ouvriers_agricoles_etranges_4"]',generateRandomNumber(2), { delay: delay });

   await page.type('input[name="main_oeuvre_ordinnaire_1"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="main_oeuvre_ordinnaire_2"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="main_oeuvre_ordinnaire_3"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="main_oeuvre_ordinnaire_4"]',generateRandomNumber(2), { delay: delay });

   await page.type('input[name="main_oeuvre_qualifiee_1"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="main_oeuvre_qualifiee_2"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="main_oeuvre_qualifiee_3"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="main_oeuvre_qualifiee_4"]',generateRandomNumber(2), { delay: delay });

   await page.type('input[name="mo_exploitant_individuel_1"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="mo_exploitant_individuel_2"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="mo_exploitant_individuel_3"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="mo_exploitant_individuel_4"]',generateRandomNumber(2), { delay: delay });

   await page.type('input[name="mo_adultes_plus_15_ans_11"]',generateRandomNumber(2), { delay: delay });
   await page.type('input[name="mo_adultes_plus_15_ans_22"]',generateRandomNumber(2), { delay: delay });
    await page.type('input[name="mo_adultes_plus_15_ans_3"]',generateRandomNumber(2), { delay: delay });
    await page.type('input[name="mo_adultes_plus_15_ans_4"]',generateRandomNumber(2), { delay: delay });

    await page.type('input[name="mo_enfants_moins_15_ans_1"]',generateRandomNumber(2), { delay: delay });
    await page.type('input[name="mo_enfants_moins_15_ans_2"]',generateRandomNumber(2), { delay: delay });
     await page.type('input[name="mo_enfants_moins_15_ans_3"]',generateRandomNumber(2), { delay: delay });
     await page.type('input[name="mo_enfants_moins_15_ans_4"]',generateRandomNumber(2), { delay: delay });

//    Ménage agricole    الأسرة الفلاحية


await page.type('input[name="ma_nombre_de_personnes"]',generateRandomNumber(2), { delay: delay });
await page.type('input[name="ma_adultes_plus_15_ans_1"]',generateRandomNumber(2), { delay: delay });
await page.type('input[name="ma_adultes_plus_15_ans_2"]',generateRandomNumber(2), { delay: delay });
await page.type('input[name="ma_enfants_moins_15_ans_11"]',generateRandomNumber(2), { delay: delay });
await page.type('input[name="ma_enfants_moins_15_ans_22"]',generateRandomNumber(2), { delay: delay });

// XII- Utilisation d'intrants - إستخدام المدخلات   (Campagne agricole الموسم الفلاحي 2023-2024)

await page.click('input[name="ui_semences_selectionnees"]');
await waitFor(delay);
await page.click('input[name="ui_semences_certifiees"]');
await waitFor(delay);
await page.click('input[name="ui_semences_de_la_ferme"]');
await waitFor(delay);
await page.click('input[name="ui_bio"]');
await waitFor(delay);




await page.click('input[name="ui_engrais_azotes"]');
await waitFor(delay);
await page.click('input[name="ui_engrais_phosphates"]');
await waitFor(delay);
await page.click('input[name="ui_autres_engrais_mineraux"]');
await waitFor(delay);



await page.click('input[name="ui_engrais_organique"]');
await waitFor(delay);
await page.click('input[name="ui_fumier"]');
await waitFor(delay);
await page.click('input[name="ui_produits_phytosanitaires"]');
await waitFor(delay);



await page.click('input[name="ui_vaccins"]');
await waitFor(delay);
await page.click('input[name="ui_medicaments_veterinaires"]');
await waitFor(delay);

await page.click('input[name="fa_credit_bancaire"]');
await waitFor(delay);
await page.click('input[name="fa_propres_ressources"]');
await waitFor(delay);
await page.click('input[name="fa_soutien_public"]');
await waitFor(delay);
await page.click('input[name="fa_emprunt_a_un_tiers"]');
await waitFor(delay);

await page.click('input[name="fa_financiere"]');
await waitFor(delay);
await page.click('input[name="fa_materiel"]');
await waitFor(delay);
await page.click('input[name="fa_cultures"]');
await waitFor(delay);






await page.click('input[name="fa_ettahadi"]');
await waitFor(delay);
await page.click('input[name="fa_classique"]');
await waitFor(delay);
await page.click('input[name="fa_leasing"]');
await waitFor(delay);
await page.click('input[name="fa_rfig"]');
await waitFor(delay);




await page.waitForSelector('#fa_avez_vous_contracte_une_assurance_agricole');
 await page.click('#fa_avez_vous_contracte_une_assurance_agricole');
 await waitFor(delay);
 await page.select('#fa_avez_vous_contracte_une_assurance_agricole', "1");

//  await page.waitForSelector('#fa_si_oui_quelle_compagnie');
//  await page.click('#fa_si_oui_quelle_compagnie');
//  await waitFor(delay);
//  await page.select('#fa_si_oui_quelle_compagnie', "1");

await page.click('input[name="fa_terre"]');
await waitFor(delay);
await page.click('input[name="fa_batiments"]');
await waitFor(delay);
await page.click('input[name="fa_cheptel"]');
await waitFor(delay);

await page.waitForSelector('#ee_fournisseurs_de_services_situes_dans_la_commune');
 await page.click('#ee_fournisseurs_de_services_situes_dans_la_commune');
 await waitFor(delay);
 await page.select('#ee_fournisseurs_de_services_situes_dans_la_commune', "1");




await page.click('input[name="fa_personnel"]');
await waitFor(delay);

await page.click('input[name="fa_materiels"]');
await waitFor(delay);


// XIV - Environnement de l'exploitation محيط المستثمرةS


// await page.waitForSelector('input[name="ee_fournisseurs_de_services_situes_dans_la_commune"]');
//  await page.click('input[name="ee_fournisseurs_de_services_situes_dans_la_commune"]');
//  await waitFor(delay);
//  await page.select('input[name="ee_fournisseurs_de_services_situes_dans_la_commune"]', "1");


 await page.click('input[name="ee_banque"]');
await waitFor(delay);
await page.click('input[name="ee_poste"]');
await waitFor(delay);
await page.click('input[name="ee_fournisseur"]');
await waitFor(delay);
await page.click('input[name="ee_veterinaire"]');
await waitFor(delay);
await page.click('input[name="ee_laboratoire"]');
await waitFor(delay);
 
 
await page.click('input[name="ee_bureau_detudes"]');
await waitFor(delay);
await page.click('input[name="ee_cooperatives_specialisees"]');
await waitFor(delay);
 
await page.click('input[name="ee_assurances"]');
await waitFor(delay)
 





await page.click('input[name="ee_vente_sur_pied"]');
await waitFor(delay);
await page.click('input[name="ee_au_marche_de_gros"]');
await waitFor(delay);
await page.click('input[name="ee_intermediaire"]');
await waitFor(delay);
await page.click('input[name="ee_vente_directe"]');
await waitFor(delay);
 


await page.click('input[name="ee_local"]');
await waitFor(delay);
await page.click('input[name="ee_national"]');
await waitFor(delay);
await page.click('input[name="ee_international"]');
await waitFor(delay);




await page.click('input[name="ee_cooperative_agricole"]');
await waitFor(delay);
await page.click('input[name="ee_association_professionnelle_agricole"]');
await waitFor(delay);
await page.click('input[name="ee_groupe_d_interet_commun_gic"]');
await waitFor(delay);
await page.click('input[name="ee_autre_associations"]');
await waitFor(delay);
await page.click('input[name="ee_cwifa"]');
await waitFor(delay);










  // Wait for the "Submit Date" button to be present and become clickable
  await page.waitForSelector("#submitDate");

  // Click on the "Submit Date" button
  await page.click("#submitDate");

  // Take a screenshot after clicking the button
  // await page.screenshot({
  //   path: "./screens/samplechapters1.jpg", // You can change the file name and path as per your preference.
  //   fullPage: true,
  // });

  // Close the browser
  await browser.close();
})();
