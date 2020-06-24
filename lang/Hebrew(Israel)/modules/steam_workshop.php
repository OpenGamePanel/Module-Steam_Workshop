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
define('OGP_LANG_manual_workshop_mod_id_info', "אתה תמצא את מזהה המוד בקישור של המוד, לדוגמה: 1379153273 בשביל ARK: Survival Evolved's Solar Panel אתה  יכול להתקין כמה מודים, ולהפריד אותם באמצעות פסיק.");
define('OGP_LANG_update_in_progress', "עדכון בתהליך");
define('OGP_LANG_refresh_steam_workshop_status', "רענן את מצב סטים workshop");
define('OGP_LANG_update_completed', "עדכון הושלם");
define('OGP_LANG_mod_does_not_belong_to_workshop', "המוד %s אינו שייך לסדנה");
define('OGP_LANG_mod_installation_started', "התקנת מודים החלה");
define('OGP_LANG_failed_to_start_steam_workshop', "נכשל בהפעלת Steam Workshop");
define('OGP_LANG_connection_error', "שגיאת חיבור");
define('OGP_LANG_install_mod', "התקן מודים");
define('OGP_LANG_show_mod_info', "הצג מידע מודים");
define('OGP_LANG_select_game', "בחר משחק");
define('OGP_LANG_save_config', "שמור קובץ הגדרה");
define('OGP_LANG_mod_key_not_found_from_xml', "מפתח מוד %s לא נמצא מ- XML.");
define('OGP_LANG_workshop_id', "מזהה workshop");
define('OGP_LANG_workshop_id_info', "תמצא את מזהה הסדנה בכתובת האתר של הסדנה, למשל 440900 עבור קונאן גולים");
define('OGP_LANG_mods_path', "נתיב מודים");
define('OGP_LANG_mods_path_info', "הנתיב היחסי לתיקיית המודים.");
define('OGP_LANG_regex', "Regex");
define('OGP_LANG_regex_info', "ביטוי רגיל התואם את המצבים בקובץ התצורה");
define('OGP_LANG_mods_backreference_index', "אינדקס התייחסות אחורית מודים");
define('OGP_LANG_mods_backreference_index_info', "מיקום ההתייחסות האחורית מהחלק של ה- regex התואם את רשימת המודים, החל מ- 0.");
define('OGP_LANG_variable', "משתנה");
define('OGP_LANG_variable_info', "המשתנה המכיל את רשימת המצבים, אם יש.");
define('OGP_LANG_place_after', "הצב אחרי");
define('OGP_LANG_place_after_info', "החלק בקובץ התצורה בו מופיעה רשימת המצבים, אם בכלל. זה יתווסף לקובץ config אם הוא עדיין לא קיים. אם המשתנה הנתון אינו קיים, הוא ימוקם בשורה אחרי פרק זה.");
define('OGP_LANG_mod_string', "מוד string");
define('OGP_LANG_mod_string_info', "המחרוזת המייצגת את המוד ברשימת המודים. תחליפים תקפים:% workshop_mod_id%, %first_file (הקובץ הראשון הוא הקובץ הראשון שנמצא בתיקיית mod שהורדה על ידי SteamCMD)");
define('OGP_LANG_string_separator', "מפריד מיתרים");
define('OGP_LANG_string_separator_info', "התו המפריד בין המצבים בקובץ התצורה, למשל תו שורה חדש (\\ n) או תרדמת (,).");
define('OGP_LANG_filepath', "נתיב קובץ");
define('OGP_LANG_filepath_info', "הנתיב של קובץ התצורה בו יש לרשום את המצבים.");
define('OGP_LANG_post_install', "סקריפט לאחר התקנה");
define('OGP_LANG_post_install_info', "הפקודות הנחוצות בבסיס כדי להעביר את המצבים לתיקיית המצבים. תחליפים תקפים:% mods_full_path% (הנתיב המלא לתיקיית Mods Wokshop),% workshop_mod_id%,  %first_file% (הקובץ הראשון הוא הקובץ הראשון שנמצא בתיקיית mod שהורדה על ידי SteamCMD)");
define('OGP_LANG_install_mods', "התקן מודים");
define('OGP_LANG_uninstall_mods', "הסר מודים");
define('OGP_LANG_failed_uninstalling_mod', "נכשל בהסרת מוד %s");
define('OGP_LANG_uninstall', "הסר סקריפט");
define('OGP_LANG_uninstall_info', "זה הסקריפט הנקרא כאשר הסרת התקנה של mod, תחליפים תקפים:% mods_full_path% (הנתיב המלא לתיקיית mods wokshop),% mod_string% (מחרוזת mod היא השם המופיע בקובץ התצורה של מצב זה).");
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