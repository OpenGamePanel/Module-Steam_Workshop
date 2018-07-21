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
define('OGP_LANG_manual_workshop_mod_id', "ID du Workshop manuel");
define('OGP_LANG_manual_workshop_mod_id_info', "You'll find the mod id at the URL of the mod, for example 1379153273 for ARK: Survival Evolved's Solar Panel. You can install multiple mods separating them by coma.");
define('OGP_LANG_update_in_progress', "Mise à jour en cours");
define('OGP_LANG_refresh_steam_workshop_status', "Actualiser l'état de Steam Workshop");
define('OGP_LANG_update_completed', "Mise à jour terminée");
define('OGP_LANG_mod_does_not_belong_to_workshop', "The mod %s does not belong to the workshop");
define('OGP_LANG_mod_installation_started', "L'installation du mod a commencé");
define('OGP_LANG_failed_to_start_steam_workshop', "Échec de démarrage de Steam Workshop");
define('OGP_LANG_connection_error', "Erreur de connexion");
define('OGP_LANG_install_mod', "Installer des mods");
define('OGP_LANG_show_mod_info', "Afficher les informations sur les mods");
define('OGP_LANG_select_game', "Sélectionnez le jeu");
define('OGP_LANG_save_config', "Enregistrer la configuration");
define('OGP_LANG_mod_key_not_found_from_xml', "Mod key %s not found from xml.");
define('OGP_LANG_workshop_id', "ID du workshop");
define('OGP_LANG_workshop_id_info', "Vous trouverez l'ID du Workshop à l'URL du Workshop, par exemple 440900 pour Conan Exiles");
define('OGP_LANG_mods_path', "Mods path");
define('OGP_LANG_mods_path_info', "Le chemin relatif pour le dossier mods.");
define('OGP_LANG_regex', "Regex");
define('OGP_LANG_regex_info', "Une expression régulière (Regex) qui correspond aux mods dans le fichier de configuration");
define('OGP_LANG_mods_backreference_index', "Mods backreference index");
define('OGP_LANG_mods_backreference_index_info', "The position of the back reference from the part of the regex that match the mods list, starting by 0.");
define('OGP_LANG_variable', "Variable");
define('OGP_LANG_variable_info', "The variable that cointains the mods list, if any.");
define('OGP_LANG_place_after', "Place after");
define('OGP_LANG_place_after_info', "La section du fichier de configuration où la liste des mods apparaît, le cas échéant. Il sera ajouté au fichier de configuration s'il n'existe pas encore. Si la variable donnée n'est pas présente, elle sera placée dans la ligne après cette section.");
define('OGP_LANG_mod_string', "Mod string");
define('OGP_LANG_mod_string_info', "The string that represents the mod in the mod list. Valid replacements: %workshop_mod_id%, %first_file% (first file is the first file found in the mod folder downloaded by steamcmd)");
define('OGP_LANG_string_separator', "String separator");
define('OGP_LANG_string_separator_info', "The character that separates the mods in the configuration file, for example new line character (\\n) or coma (,).");
define('OGP_LANG_filepath', "Chemin du fichier");
define('OGP_LANG_filepath_info', "Le chemin du fichier de configuration où les mods doivent être listés.");
define('OGP_LANG_post_install', "Script de post-installation");
define('OGP_LANG_post_install_info', "The necessary commands, in bash, to move the mods to the mods folder, Valid replacements: %mods_full_path% (the full path to the wokshop mods folder),  %workshop_mod_id%, %first_file% (first file is the first file found in the mod folder downloaded by steamcmd)");
define('OGP_LANG_install_mods', "Installer des mods");
define('OGP_LANG_uninstall_mods', "Désinstaller les mods");
define('OGP_LANG_failed_uninstalling_mod', "Echec de la désinstallation du mod %s");
define('OGP_LANG_uninstall', "Script de désinstallation");
define('OGP_LANG_uninstall_info', "This is the script called when a mod is uninstalled, Valid replacements: %mods_full_path% (the full path to the wokshop mods folder), %mod_string% (mod string is the name listed in the configuration file for this mod).");
define('OGP_LANG_remove_mods', "Supprimer les mods");
define('OGP_LANG_do_not_close_this_page_while_mods_are_being_installed', "Ne fermez pas cette page pendant l'installation des mods.");
define('OGP_LANG_no_game_server_selected', "Aucun serveur de jeu sélectionné");
define('OGP_LANG_there_are_no_mods_installed_on_this_game_server', "Il n'y a pas de mods installés sur ce serveur de jeu");
define('OGP_LANG_workshop_configuration_not_found', "Configuration du Workshop est introuvable");
define('OGP_LANG_download_method', "Méthode de téléchargement");
define('OGP_LANG_anonymous_login', "Connexion anonyme");
define('OGP_LANG_select_at_least_one_mod_or_enter_mod_id', "Select at least one mod or enter a mod id.");
?>
