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
define('OGP_LANG_game', "Spiel");
define('OGP_LANG_select_mod', "Modus auswählen");
define('OGP_LANG_manual_workshop_mod_id', "Manuelle Workshop Mod ID");
define('OGP_LANG_manual_workshop_mod_id_info', "Die Mod-ID findest du ind der Mod-URL.
Beispiel: \"1379153273\" für ARK: Survival Evolved's Solar Panel.
Du kannst mehrere Mods installieren wenn du die Mod-ID's durch ein Komma trennst");
define('OGP_LANG_update_in_progress', "Update wird durchgeführt");
define('OGP_LANG_refresh_steam_workshop_status', "Aktualisiere Steam Workshop Status");
define('OGP_LANG_update_completed', "Update Abgeschlossen");
define('OGP_LANG_mod_does_not_belong_to_workshop', "Der Mod: %s gehört nicht zum Workshop");
define('OGP_LANG_mod_installation_started', "Modinstallation gestartet");
define('OGP_LANG_failed_to_start_steam_workshop', "Steam Workshop konnte nicht gestartet werden");
define('OGP_LANG_connection_error', "Verbindungsfehler");
define('OGP_LANG_install_mod', "Mods Installieren");
define('OGP_LANG_show_mod_info', "Ziege Mod Informationen");
define('OGP_LANG_select_game', "Spiel auswählen");
define('OGP_LANG_save_config', "Konfiguration Speichern");
define('OGP_LANG_mod_key_not_found_from_xml', "Mod key %s wurde in der XML Datei nicht gefunden.");
define('OGP_LANG_workshop_id', "Workshop ID");
define('OGP_LANG_workshop_id_info', "Die Mod-ID findest du ind der Mod-URL.
Beispiel: \"440900 \" für Conan Exiles");
define('OGP_LANG_mods_path', "Mod Pfad");
define('OGP_LANG_mods_path_info', "Der relative Pfad für den Mod-Ordner");
define('OGP_LANG_regex', "Regex");
define('OGP_LANG_regex_info', "Ein regulärer Ausdruck, der den Mods in der Konfigurationsdatei entspricht");
define('OGP_LANG_mods_backreference_index', "Mods-Backreferenz-Index");
define('OGP_LANG_mods_backreference_index_info', "Die Position des Rückverweises aus dem Teil der Regex, der mit der Mods-Liste übereinstimmt, beginnend mit 0.");
define('OGP_LANG_variable', "Variable");
define('OGP_LANG_variable_info', "Die Variable, die die Mods-Liste enthält, falls vorhanden.");
define('OGP_LANG_place_after', "Danach einfügen");
define('OGP_LANG_place_after_info', "Der Abschnitt der Konfigurationsdatei, in dem die Mods-Liste angezeigt wird, sofern vorhanden. Es wird der Konfigurationsdatei hinzugefügt, falls noch nicht vorhanden. Wenn die angegebene Variable nicht vorhanden ist, wird sie in die Zeile nach diesem Abschnitt eingefügt.");
define('OGP_LANG_mod_string', "Mod string");
define('OGP_LANG_mod_string_info', "Die Zeichenfolge, die den Mod in der Modliste darstellt. Gültige Ersetzungen:
%workshop_mod_id %ffirst_file% (Die erste Datei die in dem von SteamCMD heruntergeladenen Mod-Ordner gefunden wurde.)");
define('OGP_LANG_string_separator', "String Separator");
define('OGP_LANG_string_separator_info', "Das Zeichen, das die Mods in der Konfigurationsdatei trennt, z. B. neues Zeilenzeichen (\\ n) oder Koma (,).");
define('OGP_LANG_filepath', "Dateipfad");
define('OGP_LANG_filepath_info', "Der Pfad der Konfigurationsdatei, in der die Mods aufgeführt werden müssen.");
define('OGP_LANG_post_install', "nachinstallation Script");
define('OGP_LANG_post_install_info', "Die notwendigen Befehle in bash, um die Mods in den Mods-Ordner zu verschieben. Gültige Ersetzungen: %mods_full_path% (der vollständige Pfad zum Wokshop Mods-Ordner), %workshop_mod_id%, %first_file% (die erste Datei, die in dem von SteamCMD heruntergeladenen Mod-Ordner gefunden wurde.)");
define('OGP_LANG_install_mods', "Mods Installieren");
define('OGP_LANG_uninstall_mods', "Mods deinstallieren");
define('OGP_LANG_failed_uninstalling_mod', "Mod deinstallation von: %s fehlgeschlagen");
define('OGP_LANG_uninstall', "Skript deinstallieren");
define('OGP_LANG_uninstall_info', "Dieses Skript wird aufgerufen, wenn ein Mod deinstalliert wird. Gültige Ersetzungen: %mods_full_path% (der vollständige Pfad zum Wokshop-Mods-Ordner), %mod_string%  (mod string ist der Name, der in der Konfigurationsdatei für diesen mod aufgeführt ist).");
define('OGP_LANG_remove_mods', "Mods entfernen");
define('OGP_LANG_do_not_close_this_page_while_mods_are_being_installed', "Diese Seite nicht schließen, während Mods installiert werden.");
define('OGP_LANG_no_game_server_selected', "Keine Game Server ausgewählt");
define('OGP_LANG_there_are_no_mods_installed_on_this_game_server', "Auf diesem Spielserver sind keine Mods installiert");
define('OGP_LANG_workshop_configuration_not_found', "Workshopkonfiguration nicht gefunden");
define('OGP_LANG_download_method', "Downloadmethode");
define('OGP_LANG_anonymous_login', "Anonymer Login");
define('OGP_LANG_select_at_least_one_mod_or_enter_mod_id', "Wähle mindestens eine Mod oder gib eine Mod-ID ein.");
define('OGP_LANG_no_game_servers_assigned', "Ihrem Konto sind keine Server zugeordnet.");
?>