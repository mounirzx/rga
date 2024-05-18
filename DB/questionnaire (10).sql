-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 04:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rga`
--

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

CREATE TABLE `questionnaire` (
  `id_questionnaire` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `exploitant_cle_unique` varchar(255) NOT NULL,
  `num_qst` text DEFAULT NULL,
  `date_passage` text DEFAULT NULL,
  `commune_code` varchar(4) NOT NULL,
  `nom_zone_district` text DEFAULT NULL,
  `num_zone_district` int(2) DEFAULT NULL,
  `nom_exploitant` text DEFAULT NULL,
  `prenom_exploitant` text DEFAULT NULL,
  `annee_naissance_exploitant` text DEFAULT NULL,
  `sexe_exploitant` text DEFAULT NULL,
  `niveau_instruction` text DEFAULT NULL,
  `niveau_formation_agricole` text DEFAULT NULL,
  `adress_exploitant` text DEFAULT NULL,
  `phone_exploitant` text DEFAULT NULL,
  `email_exploitant` text DEFAULT NULL,
  `nin_exploitant` text DEFAULT NULL,
  `nis_exploitant` text DEFAULT NULL,
  `assurance_exploitant` text DEFAULT NULL,
  `num_sec_sociale` text DEFAULT NULL,

  `caw` text DEFAULT NULL,
  `capa` text DEFAULT NULL,
  `unpa` text DEFAULT NULL,
  `cam` text DEFAULT NULL,
  `ccw` text DEFAULT NULL,
  `dispositif_social` text DEFAULT NULL,

  `num_carte_fellah_exploitant` text DEFAULT NULL,
  `issu_famille_agricole` text DEFAULT NULL,
  `exploitant` text DEFAULT NULL,
  `nb_co_exploitants` text DEFAULT NULL,
  `nature_exploitant` text DEFAULT NULL,

  `nom_exploitation` text DEFAULT NULL,
  `adress_exploitation` text DEFAULT NULL,
  `statut_juridique_de_lexploitation` text DEFAULT NULL,
  `longitude_x_prefix` text DEFAULT NULL,
  `lon_exploitation` text DEFAULT NULL,
  `lat_exploitation` text DEFAULT NULL,
  `activite_exploitation` text DEFAULT NULL,
  `type_activite_exploitation` text DEFAULT NULL,
  
  `route_national` text DEFAULT NULL,
  `chemin_de_wilaya` text DEFAULT NULL,
  `route_communale` text DEFAULT NULL,
  `piste` text DEFAULT NULL,
  `acces_agricole` text DEFAULT NULL,
  `acces_rural` text DEFAULT NULL,

  `reseau_electrique` text DEFAULT NULL,
  `reseau_telephonique` text DEFAULT NULL,
  `reseau_telephonique_si_oui` text DEFAULT NULL,
  `reseau_internet` text DEFAULT NULL,
  `reseau_internet_si_oui` text DEFAULT NULL,
  `si_exploi_eai_eac` text DEFAULT NULL,

  `reference_cadastrale_ilot` text DEFAULT NULL,
  `reference_cadastrale_section` text DEFAULT NULL,

  `si_exploi_eac` text DEFAULT NULL,
  `exploi_superficie_hec` text DEFAULT NULL,
  `exploi_superficie_are` text DEFAULT NULL,

  `exploit_est_un_bloc` text DEFAULT NULL,
  `exploit_est_un_bloc_oui` text DEFAULT NULL,

  `exploit_indus_sur_exploitation` text DEFAULT NULL,
  `exp_indu_si_oui_nombre_menage` text DEFAULT NULL,

  `surface_bati_occupe` text DEFAULT NULL,
  `surface_non_bati_occupe` text DEFAULT NULL,
  
  `eng_reseau_electrique` text DEFAULT NULL,
  `eng_groupe_electrogene` text DEFAULT NULL,
  `eng_energie_solaire` text DEFAULT NULL,
  `eng_energie_eolienne` text DEFAULT NULL,
  `eng_energie_carburant` text DEFAULT NULL,
  `autres_sources_d_energie` text DEFAULT NULL,
  
  `oliviers` text DEFAULT NULL,
  `figuiers` text DEFAULT NULL,
  `grenadiers` text DEFAULT NULL,
  `amandiers` text DEFAULT NULL,
  `vigne` text DEFAULT NULL,
  `palmiers_dattiers` text DEFAULT NULL,
  `noyaux_pepins` text DEFAULT NULL,
  `cognassiers` text DEFAULT NULL,
  `caroubier` text DEFAULT NULL,
  `autre_arbres_isoles` int(11) DEFAULT NULL,

  `pratiquez_vous_lagriculture_biologique` text DEFAULT NULL,
  `si_oui_avez_vous_un_certificat` text DEFAULT NULL,
  `pratiquez_vous_laquaculture_integree_a_lagriculture` text DEFAULT NULL,
  `pratiquez_vous_l_heliciculture` text DEFAULT NULL,
  `pratiquez_vous_la_myciculture` text DEFAULT NULL,
  `pratiquez_vous_une_agriculture_conventionnee` text DEFAULT NULL,

  `tomate_industrielle` text DEFAULT NULL,
  `cereales` text DEFAULT NULL,
  `aviculture` text DEFAULT NULL,
  `maraichages` text DEFAULT NULL,
  `pomme_de_terre` text DEFAULT NULL,
  `autre_division` text DEFAULT NULL,
  
  `chapt_bovins` text DEFAULT NULL,
  `chapt_dont_vaches_laitieres_blm` text DEFAULT NULL,
  `chapt_dont_vaches_laitieres_bla` text DEFAULT NULL,
  `chapt_dont_vaches_laitieres_bll` text DEFAULT NULL,
  `chapt_ovins` text DEFAULT NULL,
  `chapt_dont_brebis` text DEFAULT NULL,
  `chapt_caprins` text DEFAULT NULL,
  `chapt_dont_chevres` text DEFAULT NULL,
  `chapt_camelins` text DEFAULT NULL,
  `chapt_dont_chamelles` text DEFAULT NULL,
  `chapt_equins` text DEFAULT NULL,
  `chapt_dont_juments` text DEFAULT NULL,
  `chapt_cuniculture` text DEFAULT NULL,
  `chapt_mulets` text DEFAULT NULL,
  `chapt_anes` text DEFAULT NULL,

  `chapt_poules_ponte` text DEFAULT NULL,
  `chapt_poules_chair` text DEFAULT NULL,
  `chapt_dindes_ponte` text DEFAULT NULL,
  `chapt_dindes_chair` text DEFAULT NULL,
  `chapt_autre_aviculture_ponte` text DEFAULT NULL,
  `chapt_autre_aviculture_chair` text DEFAULT NULL,

  `chapt_ruches_modernes` text DEFAULT NULL,
  `chapt_dont_sont_pleines` text DEFAULT NULL,
  `chapt_ruches_traditionnelles` text DEFAULT NULL,
  `chapt_dont_sont_pleines_2` text DEFAULT NULL,

  `chapt_Pratiquez_transhumance` int(11) DEFAULT NULL,
  `bat_exploitation_agricole_sont_exploites` text DEFAULT NULL,
-- here zx 

  `batiments_dhabitation_nombre` text DEFAULT NULL,
  `batiments_dhabitation_surface` text DEFAULT NULL,


  `bergerie_nombre` text DEFAULT NULL,
  `bergerie_surface` text DEFAULT NULL,
  `etable_nombre` text DEFAULT NULL,
  `etable_surface` text DEFAULT NULL,
  `ecurie_de_chevaux_nombre` text DEFAULT NULL,
  `ecurie_de_chevaux_surface` text DEFAULT NULL,
  `poulailler_batis_en_dur_nombre` text DEFAULT NULL,
  `poulailler_batis_en_dur_surface` text DEFAULT NULL,
  `poulailler_sous_serre_nombre` text DEFAULT NULL,
  `poulailler_sous_serre_surface` text DEFAULT NULL,
  `serres_tunnels_nombre` text DEFAULT NULL,
  `serres_tunnels_surface` text DEFAULT NULL,
  `serres_multichapelles_nombre` text DEFAULT NULL,
  `serres_multichapelles_surface` text DEFAULT NULL,




  `batiment_de_stockage_nombre` text DEFAULT NULL,
  `batiment_de_stockage_surface` text DEFAULT NULL,

  `batiment_dentreposage_des_produits_agricoles_nombre` text DEFAULT NULL,
  `batiment_dentreposage_des_produits_agricoles_surface` text DEFAULT NULL,
  `batiment_pour_le_remisage_du_materiel_agricole_nombre` text DEFAULT NULL,
  `batiment_pour_le_remisage_du_materiel_agricole_surface` text DEFAULT NULL,
  `autres_batiment_stockage_nombre` text DEFAULT NULL,
  `autres_batiment_stockage_surface` text DEFAULT NULL,
  `caves_nombre` text DEFAULT NULL,
  `caves_surface` text DEFAULT NULL,
  `unite_de_conditionnement_nombre` text DEFAULT NULL,
  `unite_de_conditionnement_surface` text DEFAULT NULL,
  `unite_de_transformation_nombre` text DEFAULT NULL,
  `unite_de_transformation_surface` text DEFAULT NULL,
  `centre_de_collecte_de_lait_nombre` text DEFAULT NULL,
  `centre_de_collecte_de_lait_surface` text DEFAULT NULL,
  `autre_batiments_nombre` text DEFAULT NULL,
  `autre_batiments_surface` text DEFAULT NULL,

  `chambre_froide_nombre` text DEFAULT NULL,
  `chambre_froide_surface` text DEFAULT NULL,



  `eau_barrage` text DEFAULT NULL,
  `eau_exploitation_type_irrigation` text DEFAULT NULL,
  `eau_station_depuration` text DEFAULT NULL,
  `eau_ensemble_de_forages` text DEFAULT NULL,
  `eau_puits` text DEFAULT NULL,
  `total_eau_puits` text DEFAULT NULL,
  `eau_forage` text DEFAULT NULL,
  `total_eau_forage` text DEFAULT NULL,
  `eau_pompage_doued` text DEFAULT NULL,
  `eau_crues_doued` text DEFAULT NULL,
  `eau_petit_barrage` text DEFAULT NULL,
  `eau_retenu_collinaire` text DEFAULT NULL,
  `eau_forage_collectif` text DEFAULT NULL,
  `eau_foggara` text DEFAULT NULL,
  `eau_source` text DEFAULT NULL,
  `total_eau_source` text DEFAULT NULL,
  `eau_station_depuration_2` text DEFAULT NULL,
  `eau_autres_ress` text DEFAULT NULL,
  `eau_aspersion_classique` text DEFAULT NULL,
  `eau_gravitaire` text DEFAULT NULL,
  `eau_epandage_de_crues` text DEFAULT NULL,
  `eau_goutte_a_goutte` text DEFAULT NULL,
  `eau_pivots` text DEFAULT NULL,
  `eau_enrouleur` text DEFAULT NULL,
  `eau_pluie_artificielle` text DEFAULT NULL,
  `eau_foggara_hec` text DEFAULT NULL,
  `eau_autre_hec` text DEFAULT NULL,
  `eau_bassin_d_accumulation` text DEFAULT NULL,
  `eau_bassin_geomembrane` text DEFAULT NULL,
  `eau_reservoir` text DEFAULT NULL,
  `eau_citrene_souple` text DEFAULT NULL,
  `eau_mare_deau` text DEFAULT NULL,
  `eau_ced` text DEFAULT NULL,
  `eau_digue` text DEFAULT NULL,
  `eau_total_forage` text DEFAULT NULL,
  `eau_total_puits` text DEFAULT NULL,
  `eau_total_source` text DEFAULT NULL,
  `eau_autres_1` text DEFAULT NULL,
  `co_exploitants_y_compris_exploitant_principa_l` text DEFAULT NULL,
  `co_exploitants_y_compris_exploitant_principa_2` text DEFAULT NULL,
  `co_exploitants_y_compris_exploitant_principa_3` text DEFAULT NULL,
  `co_exploitants_y_compris_exploitant_principa_4` text DEFAULT NULL,
  `ouvriers_agricoles_1` text DEFAULT NULL,
  `ouvriers_agricoles_2` text DEFAULT NULL,
  `ouvriers_agricoles_3` text DEFAULT NULL,
  `ouvriers_agricoles_4` text DEFAULT NULL,
  `ouvriers_agricoles_etranges_1` text DEFAULT NULL,
  `ouvriers_agricoles_etranges_2` text DEFAULT NULL,
  `ouvriers_agricoles_etranges_3` text DEFAULT NULL,
  `ouvriers_agricoles_etranges_4` text DEFAULT NULL,
  `main_oeuvre_ordinnaire_1` text DEFAULT NULL,
  `main_oeuvre_ordinnaire_2` text DEFAULT NULL,
  `main_oeuvre_ordinnaire_3` text DEFAULT NULL,
  `main_oeuvre_ordinnaire_4` text DEFAULT NULL,
  `main_oeuvre_qualifiee_1` text DEFAULT NULL,
  `main_oeuvre_qualifiee_2` text DEFAULT NULL,
  `main_oeuvre_qualifiee_3` text DEFAULT NULL,
  `main_oeuvre_qualifiee_4` text DEFAULT NULL,
  `mo_exploitant_individuel_1` text DEFAULT NULL,
  `mo_exploitant_individuel_2` text DEFAULT NULL,
  `mo_exploitant_individuel_3` text DEFAULT NULL,
  `mo_exploitant_individuel_4` text DEFAULT NULL,
  `mo_adultes_plus_15_ans_11` text DEFAULT NULL,
  `mo_adultes_plus_15_ans_22` text DEFAULT NULL,
  `mo_adultes_plus_15_ans_3` text DEFAULT NULL,
  `mo_adultes_plus_15_ans_4` text DEFAULT NULL,
  `mo_enfants_moins_15_ans_1` text DEFAULT NULL,
  `mo_enfants_moins_15_ans_2` text DEFAULT NULL,
  `mo_enfants_moins_15_ans_3` text DEFAULT NULL,
  `mo_enfants_moins_15_ans_4` text DEFAULT NULL,
  `ma_nombre_de_personnes` text DEFAULT NULL,
  `ma_adultes_plus_15_ans_m` text DEFAULT NULL,
  `ma_adultes_plus_15_ans_f` text DEFAULT NULL,
  `ma_enfants_moins_15_ans_m` text DEFAULT NULL,
  `ma_enfants_moins_15_ans_f` text DEFAULT NULL,
  `ui_semences_selectionnees` text DEFAULT NULL,
  `ui_semences_certifiees` text DEFAULT NULL,
  `ui_semences_de_la_ferme` text DEFAULT NULL,
  `ui_bio` text DEFAULT NULL,
  `ui_engrais_azotes` text DEFAULT NULL,
  `ui_engrais_phosphates` text DEFAULT NULL,
  `ui_autres_engrais_mineraux` text DEFAULT NULL,
  `ui_engrais_organique` text DEFAULT NULL,
  `ui_fumier` text DEFAULT NULL,
  `ui_produits_phytosanitaires` text DEFAULT NULL,
  `ui_vaccins` text DEFAULT NULL,
  `ui_medicaments_veterinaires` text DEFAULT NULL,
  `fa_credit_bancaire` text DEFAULT NULL,
  `fa_propres_ressources` text DEFAULT NULL,
  `fa_soutien_public` text DEFAULT NULL,
  `fa_emprunt_a_un_tiers` text DEFAULT NULL,
  `fa_financiere` text DEFAULT NULL,
  `fa_materiel` text DEFAULT NULL,
  `fa_culture` text DEFAULT NULL,
  `fa_cultures` text DEFAULT NULL,
  `fa_intrants` text DEFAULT NULL,
  `fa_ettahadi` text DEFAULT NULL,
  `fa_classique` text DEFAULT NULL,
  `fa_leasing` text DEFAULT NULL,
  `fa_rfig` text DEFAULT NULL,
  `fa_avez_vous_contracte_une_assurance_agricole` text DEFAULT NULL,
  `fa_si_oui_quelle_compagnie` text DEFAULT NULL,
  `fa_terre` text DEFAULT NULL,
  `fa_personnel` text DEFAULT NULL,
  `fa_batiments` text DEFAULT NULL,
  `fa_materiels` text DEFAULT NULL,
  `fa_cheptel` text DEFAULT NULL,
  `ee_fournisseurs_de_services_situes_dans_la_commune` text DEFAULT NULL,
  `ee_mode_mobilisation_materiel` text DEFAULT NULL,
  `ee_mode_exploitation_materiel` text DEFAULT NULL,
  `ee_banque` text DEFAULT NULL,
  `ee_poste` text DEFAULT NULL,
  `ee_fournisseur` text DEFAULT NULL,
  `ee_veterinaire` text DEFAULT NULL,
  `ee_laboratoire` text DEFAULT NULL,
  `ee_bureau_detudes` text DEFAULT NULL,
  `ee_cooperatives_specialisees` text DEFAULT NULL,
  `ee_assurances` text DEFAULT NULL,
  `ee_vente_sur_pied` text DEFAULT NULL,
  `ee_au_marche_de_gros` text DEFAULT NULL,
  `ee_intermediaire` text DEFAULT NULL,
  `ee_vente_directe` text DEFAULT NULL,
  `ee_local` text DEFAULT NULL,
  `ee_national` text DEFAULT NULL,
  `ee_international` text DEFAULT NULL,
  `ee_cooperative_agricole` text DEFAULT NULL,
  `ee_association_professionnelle_agricole` text DEFAULT NULL,
  `ee_groupe_d_interet_commun_gic` text DEFAULT NULL,
  `ee_autre_organisation` text DEFAULT NULL,
  `ee_cwifa` text DEFAULT NULL,
  `ee_consommationauto` text DEFAULT NULL,
  `etat` text DEFAULT NULL


) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionnaire`
--

INSERT INTO `questionnaire` (`id_questionnaire`, `commune_code`, `num_qst`, `exploitant_cle_unique`, `date_passage`, `nom_zone_district`, `num_zone_district`, `user`, `nom_exploitant`, `prenom_exploitant`, `annee_naissance_exploitant`, `sexe_exploitant`, `niveau_instruction`, `niveau_formation_agricole`, `adress_exploitant`, `phone_exploitant`, `email_exploitant`, `nin_exploitant`, `nis_exploitant`, `caw`, `capa`, `unpa`, `ccw`, `cam`, `dispositif_social`, `num_carte_fellah_exploitant`, `assurance_exploitant`, `num_sec_sociale`, `issu_famille_agricole`, `exploitant`, `nb_co_exploitants`, `nature_exploitant`, `nom_exploitation`, `adress_exploitation`, `statut_juridique_de_lexploitation`, `activite_exploitation`, `type_activite_exploitation`, `lat_exploitation`, `lon_exploitation`, `longitude_x_prefix`, `route_national`, `chemin_de_wilaya`, `route_communale`, `piste`, `acces_agricole`, `acces_rural`, `reseau_electrique`, `reseau_telephonique`, `reseau_telephonique_si_oui`, `reseau_internet`, `reseau_internet_si_oui`, `reference_cadastrale_ilot`, `reference_cadastrale_section`, `si_exploi_eai_eac`, `si_exploi_eac`, `exploi_superficie_hec`, `exploi_superficie_are`, `exploit_est_un_bloc`, `exploit_est_un_bloc_oui`, `exploit_indus_sur_exploitation`, `exp_indu_si_oui_nombre_menage`, `surface_bati_occupe`, `surface_non_bati_occupe`, `eng_reseau_electrique`, `eng_groupe_electrogene`, `eng_energie_solaire`, `eng_energie_eolienne`, `eng_energie_carburant`, `autres_sources_d_energie`, `oliviers`, `figuiers`, `noyaux_pepins`, `vigne`, `amandiers`, `grenadiers`, `cognassiers`, `palmiers_dattiers`, `caroubier`, `autre_arbres_isoles`, `pratiquez_vous_lagriculture_biologique`, `si_oui_avez_vous_un_certificat`, `pratiquez_vous_laquaculture_integree_a_lagriculture`, `pratiquez_vous_l_heliciculture`, `pratiquez_vous_une_agriculture_conventionnee`, `tomate_industrielle`, `cereales`, `aviculture`, `maraichages`, `pomme_de_terre`, `autre_division`, `pratiquez_vous_la_myciculture`, `chapt_bovins`, `chapt_dont_vaches_laitieres_blm`, `chapt_dont_vaches_laitieres_bla`, `chapt_dont_vaches_laitieres_bll`, `chapt_ovins`, `chapt_dont_brebis`, `chapt_equins`, `chapt_dont_juments`, `chapt_caprins`, `chapt_dont_chevres`, `chapt_camelins`, `chapt_dont_chamelles`, `chapt_mulets`, `chapt_anes`, `chapt_cuniculture`, `chapt_ruches_modernes`, `chapt_dont_sont_pleines`, `chapt_ruches_traditionnelles`, `chapt_dont_sont_pleines_2`, `chapt_poules_ponte`, `chapt_poules_chair`, `chapt_dindes_ponte`, `chapt_dindes_chair`, `chapt_autre_aviculture_ponte`, `chapt_autre_aviculture_chair`, `chapt_Pratiquez_transhumance`, `bat_exploitation_agricole_sont_exploites`, `eau_barrage`, `eau_exploitation_type_irrigation`, `eau_station_depuration`, `eau_ensemble_de_forages`, `eau_puits`, `total_eau_puits`, `eau_forage`, `total_eau_forage`, `eau_pompage_doued`, `eau_crues_doued`, `eau_petit_barrage`, `eau_retenu_collinaire`, `eau_forage_collectif`, `eau_foggara`, `eau_source`, `total_eau_source`, `eau_station_depuration_2`, `eau_autres_ress`, `eau_aspersion_classique`, `eau_gravitaire`, `eau_epandage_de_crues`, `eau_goutte_a_goutte`, `eau_pivots`, `eau_enrouleur`, `eau_pluie_artificielle`, `eau_foggara_hec`, `eau_autre_hec`, `eau_bassin_d_accumulation`, `eau_bassin_geomembrane`, `eau_reservoir`, `eau_citrene_souple`, `eau_mare_deau`, `eau_ced`, `eau_digue`, `eau_total_forage`, `eau_total_puits`, `eau_total_source`, `eau_autres_1`, `co_exploitants_y_compris_exploitant_principa_l`, `co_exploitants_y_compris_exploitant_principa_2`, `co_exploitants_y_compris_exploitant_principa_3`, `co_exploitants_y_compris_exploitant_principa_4`, `ouvriers_agricoles_1`, `ouvriers_agricoles_2`, `ouvriers_agricoles_3`, `ouvriers_agricoles_4`, `ouvriers_agricoles_etranges_1`, `ouvriers_agricoles_etranges_2`, `ouvriers_agricoles_etranges_3`, `ouvriers_agricoles_etranges_4`, `main_oeuvre_ordinnaire_1`, `main_oeuvre_ordinnaire_2`, `main_oeuvre_ordinnaire_3`, `main_oeuvre_ordinnaire_4`, `main_oeuvre_qualifiee_1`, `main_oeuvre_qualifiee_2`, `main_oeuvre_qualifiee_3`, `main_oeuvre_qualifiee_4`, `mo_exploitant_individuel_1`, `mo_exploitant_individuel_2`, `mo_exploitant_individuel_3`, `mo_exploitant_individuel_4`, `mo_adultes_plus_15_ans_11`, `mo_adultes_plus_15_ans_22`, `mo_adultes_plus_15_ans_3`, `mo_adultes_plus_15_ans_4`, `mo_enfants_moins_15_ans_1`, `mo_enfants_moins_15_ans_2`, `mo_enfants_moins_15_ans_3`, `mo_enfants_moins_15_ans_4`, `ma_nombre_de_personnes`, `ma_adultes_plus_15_ans_m`, `ma_adultes_plus_15_ans_f`, `ma_enfants_moins_15_ans_m`, `ma_enfants_moins_15_ans_f`, `ui_semences_selectionnees`, `ui_semences_certifiees`, `ui_semences_de_la_ferme`, `ui_bio`, `ui_engrais_azotes`, `ui_engrais_phosphates`, `ui_autres_engrais_mineraux`, `ui_engrais_organique`, `ui_fumier`, `ui_produits_phytosanitaires`, `ui_vaccins`, `ui_medicaments_veterinaires`, `fa_credit_bancaire`, `fa_propres_ressources`, `fa_soutien_public`, `fa_emprunt_a_un_tiers`, `fa_financiere`, `fa_materiel`, `fa_culture`, `fa_cultures`, `fa_intrants`, `fa_ettahadi`, `fa_classique`, `fa_leasing`, `fa_rfig`, `fa_avez_vous_contracte_une_assurance_agricole`, `fa_si_oui_quelle_compagnie`, `fa_terre`, `fa_personnel`, `fa_batiments`, `fa_materiels`, `fa_cheptel`, `ee_fournisseurs_de_services_situes_dans_la_commune`, `ee_mode_mobilisation_materiel`, `ee_mode_exploitation_materiel`, `ee_banque`, `ee_poste`, `ee_fournisseur`, `ee_veterinaire`, `ee_laboratoire`, `ee_bureau_detudes`, `ee_cooperatives_specialisees`, `ee_assurances`, `ee_vente_sur_pied`, `ee_au_marche_de_gros`, `ee_intermediaire`, `ee_vente_directe`, `ee_local`, `ee_national`, `ee_international`, `ee_cooperative_agricole`, `ee_association_professionnelle_agricole`, `ee_groupe_d_interet_commun_gic`, `ee_autre_organisation`, `ee_cwifa`, `ee_consommationauto`, `etat`, `batiment_de_stockage_nombre`, `batiment_de_stockage_surface`, `bergerie_nombre`, `bergerie_surface`, `etable_nombre`, `etable_surface`, `ecurie_de_chevaux_nombre`, `ecurie_de_chevaux_surface`, `poulailler_batis_en_dur_nombre`, `poulailler_batis_en_dur_surface`, `poulailler_sous_serre_nombre`, `poulailler_sous_serre_surface`, `batiments_dhabitation_nombre`, `batiments_dhabitation_surface`, `serres_tunnels_nombre`, `serres_tunnels_surface`, `serres_multichapelles_surface`, `serres_multichapelles_nombre`, `batiment_dentreposage_des_produits_agricoles_nombre`, `batiment_dentreposage_des_produits_agricoles_surface`, `autres_batiment_stockage_nombre`, `autres_batiment_stockage_surface`, `batiment_pour_le_remisage_du_materiel_agricole_nombre`, `batiment_pour_le_remisage_du_materiel_agricole_surface`, `caves_nombre`, `caves_surface`, `unite_de_conditionnement_nombre`, `unite_de_conditionnement_surface`, `unite_de_transformation_nombre`, `unite_de_transformation_surface`, `centre_de_collecte_de_lait_nombre`, `centre_de_collecte_de_lait_surface`, `autre_batiments_nombre`, `autre_batiments_surface`, `chambre_froide_nombre`, `chambre_froide_surface`) VALUES
(1, 'N/A', '', 'Tet-Tet-02-0--null000000000000000001-N/A--', '0--0--2024', NULL, NULL, 88, 'Tet', 'Tet', '02-0--null', NULL, NULL, NULL, '', '', '', '000000000000000001', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '0', '0', 'on', 'on', 'on', 'on', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'on', '', 'on', 'on', 'on', NULL, 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', '', '', '', '', '', '', '', '', '', 'on', 'on', '0', 'on', '0', 'on', 'on', '', '', '', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', 'on', 'on', 'on', 'on', '-', NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'N/A', '', '--02-0--null465323200000000000-N/A--', '0--0--2024', NULL, NULL, 88, '', '', '02-0--null', NULL, NULL, NULL, '', '', '', '465323200000000000', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '1', '1', 'on', 'on', 'on', 'on', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'on', '', 'on', 'on', 'on', NULL, 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', '', '', '', '', '', '', '', '', '', 'on', 'on', '0', 'on', '0', 'on', 'on', '', '', '', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', 'on', 'on', 'on', 'on', '-', NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'N/A', '', 'Test-Test-02-0--null120000210000000000-N/A--', '0--0--2024', NULL, NULL, 88, 'Test', 'Test', '02-0--null', NULL, NULL, NULL, '', '', '', '120000210000000000', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '1', '1', 'on', 'on', 'on', 'on', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'on', '', 'on', 'on', 'on', NULL, 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', '', '', '', '', '', '', '', '', '', 'on', 'on', '0', 'on', '0', 'on', 'on', '40', '20', '30', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', 'on', 'on', 'on', 'on', '-', NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'N/A', '', 'Hhhh-Hhhh-02-0--null120388151515151515-N/A--', '0--0--2024', NULL, NULL, 88, 'Hhhh', 'Hhhh', '02-02-null', NULL, NULL, NULL, '', '', '', '120388151515151515', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '0', '0', '0', '0', '0', '0', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '0', '', '0', '0', '0', NULL, '0', NULL, '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '1', '1', '12', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '0', '0', '0', '0', '-', NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'N/A', '', '--02-0--null654321544221212121-N/A--', '0--0--2024', NULL, NULL, 88, '', '', '02-0--null', NULL, NULL, NULL, '', '', '', '654321544221212121', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '0', '0', 'on', 'on', 'on', 'on', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'on', '', 'on', 'on', 'on', NULL, 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', '', '', '', '', '', '', '', '', '', 'on', 'on', '0', 'on', '0', 'on', 'on', '', '', '', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', 'on', 'on', 'on', 'on', '-', NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'N/A', '', '--02-0--null654321544221212122-N/A--', '0--0--2024', NULL, NULL, 88, '', '', '02-02-null', NULL, NULL, NULL, '', '', '', '654321544221212122', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '1', '1', '0', '0', '0', '0', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '0', '', '0', '0', '0', NULL, '0', NULL, '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '0', '0', '0', '0', '-', NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'N/A', '', 'Sd-Sd-02-0--null456456451121000000-N/A--', '0--0--2024', NULL, NULL, 88, 'Sd', 'Sd', '02-02-null', NULL, NULL, NULL, '', '', '', '456456451121000000', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '1', '1', '0', '0', '0', '0', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '0', '', '0', '0', '0', NULL, '1', NULL, '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '12', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '0', '0', '0', '0', '-', NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'N/A', '', 'Ff-Ff-02-0--null222222222333333333-N/A--', '0--0--2024', NULL, NULL, 88, 'Ff', 'Ff', '02-0--null', NULL, NULL, NULL, '', '', '', '222222222333333333', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '0', '0', 'on', 'on', 'on', 'on', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'on', '', 'on', 'on', 'on', NULL, 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', '', '', '', '', '', '', '', '', '', 'on', 'on', '0', 'on', '0', 'on', 'on', '2', '2', '2', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', 'on', 'on', 'on', 'on', '-', NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'N/A', '', 'Cc-Cc-02-0--null232111111111111111-N/A--', '0--0--2024', NULL, NULL, 88, 'Cc', 'Cc', '02-0--null', NULL, NULL, NULL, '', '', '', '232111111111111111', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '1', '1', 'on', 'on', 'on', 'on', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'on', '', 'on', 'on', 'on', NULL, 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', '', '', '', '', '', '', '', '', '', 'on', 'on', '0', 'on', '0', 'on', 'on', '2', '2', '2', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', 'on', 'on', 'on', 'on', '-', NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'N/A', '', 'Cc-Cc-02-0--null537111111111111111-N/A--', '0--0--2024', NULL, NULL, 88, 'Cc', 'Cc', '02-02-null', NULL, NULL, NULL, '', '', '', '537111111111111111', '', '1', '1', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '1', '1', '0', '0', '0', '0', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, '1', '0', '0', '1', '0', '0', NULL, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '0', '', '0', '0', '0', NULL, '0', NULL, '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '1', '2', '4', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '0', '0', '0', '0', '-', NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'N/A', '', 'TEST-Test-02-0--null785421012540000000-N/A--24.00', '0--0--2024', NULL, NULL, 88, 'TEST', 'Test', '02-0--null', NULL, NULL, NULL, '', '', '', '785421012540000000', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', 'on', 'on', 'on', 'on', 'on', 'on', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'on', '', 'on', 'on', 'on', NULL, 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', '', '', '', '', '', '', '', '', '', 'on', 'on', '0', 'on', '0', 'on', 'on', '', '', '', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', 'on', 'on', 'on', 'on', '-', NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'N/A', '', 'Tbbbb-Tbbbb-02-0--null452125528000010001-N/A--', '0--0--2024', NULL, NULL, 88, 'Tbbbb', 'Tbbbb', '02-0--null', NULL, NULL, NULL, '', '', '', '452125528000010001', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '1', '1', '1', '1', '1', '1', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '1', '', '1', '1', '1', NULL, '1', NULL, '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '1', '', '', '', '', '', '', '', '', '', '1', '1', '', '1', '', '1', '1', '20', '20', '20', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '1', '1', '1', '1', '1', '-', NULL, NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'N/A', '', 'Gg-Gg-02-0--null125400005220000000-N/A-Test-', '0--0--2024', NULL, NULL, 88, 'Gg', 'Gg', '02-0--null', NULL, NULL, NULL, '', '', '', '125400005220000000', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, 'Test', '', NULL, NULL, NULL, '', '', 'EST', '1', '1', '1', '1', '1', '1', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '1', '', '1', '1', '1', NULL, '1', NULL, '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '1', '', '', '', '', '', '', '', '', '', '1', '1', '0', '1', '0', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '1', '1', '1', '1', '1', '-', NULL, NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'N/A', '', '--02-0--null-N/A--', '0--0--2024', NULL, NULL, 88, '', '', '02-0--null', NULL, NULL, NULL, '', '', '', '', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', 'on', 'on', 'on', 'on', 'on', 'on', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'on', '', 'on', 'on', 'on', NULL, 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', '', '', '', '', '', '', '', '', '', 'on', 'on', '0', 'on', '0', 'on', 'on', '', '', '', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', 'on', 'on', 'on', 'on', '-', NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'N/A', '', 'TEST-Test-02-0--null200020002000001111-N/A--', '0--0--2024', NULL, NULL, 88, 'TEST', 'Test', '02-0--null', NULL, NULL, NULL, '', '', '', '200020002000001111', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', 'on', 'on', 'on', 'on', 'on', 'on', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'on', '', 'on', 'on', 'on', NULL, 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', '', '', '', '', '', '', '', '', '', 'on', 'on', '0', 'on', '0', 'on', 'on', '', '', '', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', 'on', 'on', 'on', 'on', '-', NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'N/A', '', 'RGA-RGA-02-0--null320002100020002120-N/A--', '0--0--2024', NULL, NULL, 88, 'RGA', 'RGA', '02-0--null', NULL, NULL, NULL, '', '', '', '320002100020002120', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', 'on', 'on', 'on', 'on', 'on', 'on', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'on', '', 'on', 'on', 'on', NULL, 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', '', '', '', '', '', '', '', '', '', 'on', 'on', '0', 'on', '0', 'on', 'on', '', '', '', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', 'on', 'on', 'on', 'on', '-', NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'N/A', '', '--02-0--null555555555555555555-N/A--', '0--0--2024', NULL, NULL, 88, '', '', '02-0--null', NULL, NULL, NULL, '', '', '', '555555555555555555', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', 'on', 'on', 'on', 'on', 'on', 'on', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'on', '', 'on', 'on', 'on', NULL, 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', '', '', '', '', '', '', '', '', '', 'on', 'on', '0', 'on', '0', 'on', 'on', '', '', '', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', 'on', 'on', 'on', 'on', '-', NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 'N/A', '', '--02-0--null456546456456456456-N/A--', '0--0--2024', NULL, NULL, 88, '', '', '02-0--null', NULL, NULL, NULL, '', '', '', '456546456456456456', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', 'on', 'on', 'on', 'on', 'on', 'on', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'on', '', 'on', 'on', 'on', NULL, 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', '', '', '', '', '', '', '', '', '', 'on', 'on', '0', 'on', '0', 'on', 'on', '', '', '', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', 'on', 'on', 'on', 'on', '-', NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'N/A', '', '--02-0--null456546456456456256-N/A--', '0--0--2024', NULL, NULL, 88, '', '', '02-0--null', NULL, NULL, NULL, '', '', '', '456546456456456256', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', 'on', 'on', 'on', 'on', 'on', 'on', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'on', '', 'on', 'on', 'on', NULL, 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', '', '', '', '', '', '', '', '', '', 'on', 'on', '0', 'on', '0', 'on', 'on', '', '', '', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', 'on', 'on', 'on', 'on', '-', NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 'N/A', '', '--02-0--null455555555555555555-N/A--', '0--0--2024', 'N/A', 0, 88, '', '', '02-0--null', NULL, NULL, NULL, '', '', '', '455555555555555555', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', 'on', 'on', 'on', 'on', 'on', 'on', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'on', '', 'on', 'on', 'on', NULL, 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', '', '', '', '', '', '', '', '', '', 'on', 'on', '0', 'on', '0', 'on', 'on', '', '', '', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', 'on', 'on', 'on', 'on', '-', NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'N/A', '', '--02-0--null6546456456456456-N/A--', '0--0--2024', 'fgdgfdfgfdg', 45, 88, '', '', '02-0--null', NULL, NULL, NULL, '', '', '', '6546456456456456', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', 'on', 'on', 'on', 'on', 'on', 'on', NULL, '-', '-', '-', '-', '', NULL, '-', '', '', '', NULL, '', NULL, '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'on', '', 'on', 'on', 'on', NULL, 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', '', '', '', '', '', '', '', '', '', 'on', 'on', '0', 'on', '0', 'on', 'on', '', '', '', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', 'on', 'on', 'on', 'on', '-', NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 'N/A', '', 'ABES-Mounir-03-03-1903555555555555555555-N/A--12', '0--0--2024', '', 0, 88, 'ABES', 'Mounir', '03-03-1903', NULL, NULL, NULL, '', '', '', '555555555555555555', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', NULL, '', NULL, '', '', '', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '0', '', '0', '0', '0', NULL, '0', NULL, '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '0', '0', '0', '0', '-', NULL, NULL, '0', '1', '0', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'N/A', '', '--02-0--null444444444444444444-N/A--', '0--0--2024', '', 0, 88, '', '', '02-0--null', NULL, NULL, NULL, '', '', '', '444444444444444444', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, '545', '888', NULL, '', '', '', NULL, '', NULL, '', '', '', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '0', '', '0', '0', '0', NULL, '0', NULL, '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '0', '0', '0', '0', '-', NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'N/A', '', '--02-0--null454454545555555555-N/A--', '0--0--2024', '', 0, 88, '', '', '02-0--null', NULL, NULL, NULL, '', '', '', '454454545555555555', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '', '', NULL, '', NULL, '', '', '', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '0', '', '0', '0', '0', NULL, '0', NULL, '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '0', '0', '0', '0', '-', NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'N/A', '', '--02-0--null45445454555555555-N/A--', '0--0--2024', '', 0, 88, '', '', '02-0--null', NULL, NULL, NULL, '', '', '', '45445454555555555', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '', '', NULL, '', NULL, '', '', '', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '0', '', '0', '0', '0', NULL, '0', NULL, '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '0', '0', '0', '0', '-', NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 'N/A', '', '--02-0--null454454545555555556-N/A--', '0--0--2024', '', 0, 88, '', '', '02-0--null', NULL, NULL, NULL, '', '', '', '454454545555555556', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, '222', '444', NULL, '', '', '', NULL, '', NULL, '', '', '', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '0', '', '0', '0', '0', NULL, '0', NULL, '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '0', '0', '0', '0', '-', NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 'N/A', '', '--02-0--null213123123123123123-N/A--1', '0--0--2024', '', 0, 88, '', '', '02-0--null', NULL, NULL, NULL, '', '', '', '213123123123123123', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '', '', NULL, '', NULL, '', '', '', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, '99999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '0', '', '0', '0', '0', NULL, '0', NULL, '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '0', '0', '0', '0', '-', NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 'N/A', '', '--02-0--null212111111111111111-N/A--', '0--0--2024', '', 0, 88, '', '', '02-0--null', NULL, NULL, NULL, '', '', '', '212111111111111111', '', '0', '0', '0', '0', '0', '0', '', NULL, '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', 'EST', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '', '', NULL, '', NULL, '', '', '', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '0', '', '0', '0', '0', NULL, '0', NULL, '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, '0', '0', '0', '0', '0', '-', NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'En attente', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`id_questionnaire`),
  ADD UNIQUE KEY `exploitant_cle_unique` (`exploitant_cle_unique`(157)),
  ADD KEY `idx_exploitant_cle_unique` (`exploitant_cle_unique`(250));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questionnaire`
--
ALTER TABLE `questionnaire`
  MODIFY `id_questionnaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;