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
define('OGP_LANG_game', "משחק");
define('OGP_LANG_select_mod', "בחר מוד");
define('OGP_LANG_manual_workshop_mod_id', "מזהה מוד workshop ידני");
define('OGP_LANG_manual_workshop_mod_id_info', "You'll find the mod id at the URL of the mod, for example 1379153273 for ARK: Survival Evolved's Solar Panel. You can install multiple mods separating them by coma.");
define('OGP_LANG_update_in_progress', "עדכון בתהליך");
define('OGP_LANG_refresh_steam_workshop_status', "רענן את מצב סטים workshop");
define('OGP_LANG_update_completed', "עדכון הושלם");
define('OGP_LANG_mod_does_not_belong_to_workshop', "The mod %s does not belong to the Workshop");
define('OGP_LANG_mod_installation_started', "התקנת מודים החלה");
define('OGP_LANG_failed_to_start_steam_workshop', "נכשל בהפעלת Steam Workshop");
define('OGP_LANG_connection_error', "שגיאת חיבור");
define('OGP_LANG_install_mod', "התקן מודים");
define('OGP_LANG_show_mod_info', "הצג מידע מודים");
define('OGP_LANG_select_game', "בחר משחק");
define('OGP_LANG_save_config', "שמור קובץ הגדרה");
define('OGP_LANG_mod_key_not_found_from_xml', "Mod key %s not found from xml.");
define('OGP_LANG_workshop_id', "מזהה workshop");
define('OGP_LANG_workshop_id_info', "You'll find the Workshop ID at the URL of the Workshop, for example 440900 for Conan Exiles");
define('OGP_LANG_mods_path', "נתיב מודים");
define('OGP_LANG_mods_path_info', "The relative path for the mods folder.");
define('OGP_LANG_regex', "Regex");
define('OGP_LANG_regex_info', "A regular expression that matches the mods in the configuration file");
define('OGP_LANG_mods_backreference_index', "Mods Backreference Index");
define('OGP_LANG_mods_backreference_index_info', "The position of the back reference from the part of the regex that match the mods list, starting by 0.");
define('OGP_LANG_variable', "משתנה");
define('OGP_LANG_variable_info', "The variable that cointains the mods list, if any.");
define('OGP_LANG_place_after', "הצב אחרי");
define('OGP_LANG_place_after_info', "The section of the configuration file where the mods list appears, if any. It will be added to the config file if does not exists yet. If the given variable is not present then it will be placed in the line after this section.");
define('OGP_LANG_mod_string', "מוד string");
define('OGP_LANG_mod_string_info', "The string that represents the mod in the mod list. Valid replacements: %workshop_mod_id%, %first_file% (first file is the first file found in the mod folder downloaded by SteamCMD)");
define('OGP_LANG_string_separator', "String Separator");
define('OGP_LANG_string_separator_info', "The character that separates the mods in the configuration file, for example new line character (\\n) or coma (,).");
define('OGP_LANG_filepath', "נתיב קובץ");
define('OGP_LANG_filepath_info', "The path of the configuration file where the mods must be listed.");
define('OGP_LANG_post_install', "סקריפט לאחר התקנה");
define('OGP_LANG_post_install_info', "The necessary commands in bash to move the mods to the mods folder. Valid replacements: %mods_full_path% (the full path to the Wokshop mods folder), %workshop_mod_id%, %first_file% (first file is the first file found in the mod folder downloaded by SteamCMD)");
define('OGP_LANG_install_mods', "התקן מודים");
define('OGP_LANG_uninstall_mods', "הסר מודים");
define('OGP_LANG_failed_uninstalling_mod', "נכשל בהסרת מוד %s");
define('OGP_LANG_uninstall', "הסר סקריפט");
define('OGP_LANG_uninstall_info', "This is the script called when a mod is uninstalled, Valid replacements: %mods_full_path% (the full path to the wokshop mods folder), %mod_string% (mod string is the name listed in the configuration file for this mod).");
define('OGP_LANG_remove_mods', "הסר מודים");
define('OGP_LANG_do_not_close_this_page_while_mods_are_being_installed', "אל תסגור דף זה בזמן התקנת המודים");
define('OGP_LANG_no_game_server_selected', "לא נבחר שרת משחק");
define('OGP_LANG_there_are_no_mods_installed_on_this_game_server', "אין מודים מותקנים על שרת המשחק הזה");
define('OGP_LANG_workshop_configuration_not_found', "הגדרת workshop לא נמצאה");
define('OGP_LANG_download_method', "שיטת הורדה");
define('OGP_LANG_anonymous_login', "התחברות אנונימית");
define('OGP_LANG_select_at_least_one_mod_or_enter_mod_id', "בחר לפחות מוד אחד או הכנס מזהה מוד.");
define('OGP_LANG_no_game_servers_assigned', "אין לך שרתים מוקצים לחשבון שלך.");
?>