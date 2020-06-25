<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2018 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */
define('OGP_LANG_game', "Jeu");
define('OGP_LANG_select_mod', "Sélectionnez le mod");
define('OGP_LANG_manual_workshop_mod_id', "ID du mod Workshop ");
define('OGP_LANG_manual_workshop_mod_id_info', "Vous trouverez l&apos;ID du mod dans l&apos;URL du mod, par exemple 1379153273 pour ARK: Survival Evolved&apos;s Solar Panel. Vous pouvez installer plusieurs mods en les séparant par une virgule.");
define('OGP_LANG_update_in_progress', "Mise à jour en cours");
define('OGP_LANG_refresh_steam_workshop_status', "Actualiser l&apos;état de Steam Workshop");
define('OGP_LANG_update_completed', "Mise à jour terminée");
define('OGP_LANG_mod_does_not_belong_to_workshop', "Le mod %s n&apos;appartient pas au Workshop de ce jeu");
define('OGP_LANG_mod_installation_started', "L&apos;installation du mod a commencé");
define('OGP_LANG_failed_to_start_steam_workshop', "Impossible de démarrer Steam Workshop");
define('OGP_LANG_connection_error', "Erreur de connexion");
define('OGP_LANG_install_mod', "Installer des mods");
define('OGP_LANG_show_mod_info', "Afficher les informations sur les mods");
define('OGP_LANG_select_game', "Sélectionner le jeu");
define('OGP_LANG_save_config', "Enregistrer la configuration");
define('OGP_LANG_mod_key_not_found_from_xml', "Clé du mod %s non trouvée dans le fichier XML.");
define('OGP_LANG_workshop_id', "AppID du Jeu");
define('OGP_LANG_workshop_id_info', "Vous trouverez l&apos;AppID du jeu dans l&apos;URL du magasin Steam, par exemple 440900 pour Conan Exiles");
define('OGP_LANG_mods_path', "Chemin des mods");
define('OGP_LANG_mods_path_info', "Le chemin relatif pour le dossier mods.");
define('OGP_LANG_regex', "Regex");
define('OGP_LANG_regex_info', "Une expression régulière qui correspond aux mods dans le fichier de configuration");
define('OGP_LANG_mods_backreference_index', "Index des références arrière des mods");
define('OGP_LANG_mods_backreference_index_info', "La position de la référence arrière de la partie du regex qui correspond à la liste des mods, commence par 0.");
define('OGP_LANG_variable', "Variable");
define('OGP_LANG_variable_info', "La variable qui contient la liste des mods, si applicable.");
define('OGP_LANG_place_after', "Placer après");
define('OGP_LANG_place_after_info', "La section du fichier de configuration où la liste des mods apparaît, le cas échéant. Il sera ajouté au fichier de configuration s&apos;il n&apos;existe pas encore. Si la variable donnée n&apos;est pas présente, elle sera placée dans la ligne après cette section.");
define('OGP_LANG_mod_string', "Chaine du mod");
define('OGP_LANG_mod_string_info', "La chaine qui représente le mod dans la liste des mods. Remplacements valides: %workshop_mod_id%, %first_file% (first file est le premier fichier trouvé dans le dossier du mod téléchargé par SteamCMD)");
define('OGP_LANG_string_separator', "Séparateur de chaine");
define('OGP_LANG_string_separator_info', "Le caractère qui sépare les mods dans le fichier de configuration, par exemple le caractère nouvelle ligne (\\n) ou la virgule (,).");
define('OGP_LANG_filepath', "Chemin du fichier");
define('OGP_LANG_filepath_info', "Le chemin du fichier de configuration où les mods doivent être listés.");
define('OGP_LANG_post_install', "Script de post-installation");
define('OGP_LANG_post_install_info', "Les commandes nécessaires en bash pour déplacer les mods vers le dossier des mods. Remplacements valides: %mods_full_path% (le chemin complet vers le dossier des mods du Workshop), %workshop_mod_id%, %first_file% (first file est le premier fichier trouvé dans le dossier du mod téléchargé par SteamCMD)");
define('OGP_LANG_install_mods', "Installer des mods");
define('OGP_LANG_uninstall_mods', "Désinstaller les mods");
define('OGP_LANG_failed_uninstalling_mod', "Echec de la désinstallation du mod %s");
define('OGP_LANG_uninstall', "Script de désinstallation");
define('OGP_LANG_uninstall_info', "Ceci est le script appelé quand un mod est désinstallé. Remplacements valides: %mods_full_path% (le chemin complet vers le dossier des mods du Workshop), %mod_string% (mod string est le nom listé dans le fichier de configuration pour ce mod).");
define('OGP_LANG_remove_mods', "Supprimer les mods");
define('OGP_LANG_do_not_close_this_page_while_mods_are_being_installed', "Ne fermez pas cette page pendant l'installation des mods.");
define('OGP_LANG_no_game_server_selected', "Aucun serveur de jeu sélectionné");
define('OGP_LANG_there_are_no_mods_installed_on_this_game_server', "Il n&apos;y a pas de mods installés sur ce serveur de jeu");
define('OGP_LANG_workshop_configuration_not_found', "La configuration du Workshop est introuvable");
define('OGP_LANG_download_method', "Méthode de téléchargement");
define('OGP_LANG_anonymous_login', "Login anonyme");
define('OGP_LANG_select_at_least_one_mod_or_enter_mod_id', "Sélectionner au moins un mod ou entrer un ID de mod.");
define('OGP_LANG_no_game_servers_assigned', "Il n&apos;y a pas de serveur assigné sur votre compte.");
?>