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
define('OGP_LANG_game', "Játék");
define('OGP_LANG_select_mod', "Válassz modot");
define('OGP_LANG_manual_workshop_mod_id', "Workshop mod ID közvetlen megadása");
define('OGP_LANG_manual_workshop_mod_id_info', "A mod azonosítóját a mod URL-jén találja, például 1379153273 az ARK: Survival Evolved Solar Paneljéhez. Telepíthetsz több modot, vesszővel elválasztva őket.");
define('OGP_LANG_update_in_progress', "Frissítés folyamatban");
define('OGP_LANG_refresh_steam_workshop_status', "Frissítsd a Steam Műhely állapotát");
define('OGP_LANG_update_completed', "A frissítés befejeződött");
define('OGP_LANG_mod_does_not_belong_to_workshop', "A %s mod nem tartozik a Workshop-hoz");
define('OGP_LANG_mod_installation_started', "Mod telepítése elkezdődött");
define('OGP_LANG_failed_to_start_steam_workshop', "Steam Workshop indítása sikertelen");
define('OGP_LANG_connection_error', "Kapcsolat hiba");
define('OGP_LANG_install_mod', "Modok telepítése");
define('OGP_LANG_show_mod_info', "Mod információk megjelenítése");
define('OGP_LANG_select_game', "Válassz játékot");
define('OGP_LANG_save_config', "Beállítások mentése");
define('OGP_LANG_mod_key_not_found_from_xml', "%s Mod kulcs nem található az xml-ben");
define('OGP_LANG_workshop_id', "Műhely ID");
define('OGP_LANG_workshop_id_info', "A Workshop ID a Workshop URL-jén találja, például a 440900 a Conan Exiles számára");
define('OGP_LANG_mods_path', "Modok elérési útja");
define('OGP_LANG_mods_path_info', "A modok mappa relatív elérési útja.");
define('OGP_LANG_regex', "Regex");
define('OGP_LANG_regex_info', "Egy reguláris kifejezés, amely megegyezik a modokkal a konfigurációs fájlban");
define('OGP_LANG_mods_backreference_index', "Modok visszahivatkozott indexe");
define('OGP_LANG_mods_backreference_index_info', "A visszahivatkozás helye a regex azon részéből, amely megfelel a modok listának, 0-val kezdve.");
define('OGP_LANG_variable', "Változó");
define('OGP_LANG_variable_info', "A modok listáját tartalmazó változó, ha van ilyen.");
define('OGP_LANG_place_after', "Hely után");
define('OGP_LANG_place_after_info', "A konfigurációs fájlnak az a része, ahol a mods lista megjelenik, ha van ilyen. Hozzáadódik a konfigurációs fájlhoz, ha még nem létezik. Ha az adott változó nincs, akkor az e szakasz utáni sorba kerül.");
define('OGP_LANG_mod_string', "Mod string");
define('OGP_LANG_mod_string_info', "Az a karakterlánc, amely a mod-ot képviseli a mod listában. Érvényes helyettesítések: %workshop_mod_id%, %first_file% (az első fájl, az az első fájl, amely megtalálható a mod mappában amit a SteamCMD letöltött)");
define('OGP_LANG_string_separator', "Stringelválasztó");
define('OGP_LANG_string_separator_info', "Az a karakter, amely elválasztja a modokat a konfigurációs fájlban, például új sor karakter (\\n) vagy vessző (,).");
define('OGP_LANG_filepath', "Fájl elérési út");
define('OGP_LANG_filepath_info', "A konfigurációs fájl elérési útja, amelyben a modoknak listázva kell lenniük.");
define('OGP_LANG_post_install', "Postinstall forgatókönyv");
define('OGP_LANG_post_install_info', "A szükséges parancsok a bash-ban a modok áthelyezéséhez a modok mappába. Érvényes helyettesítések: % mods_full_path% (a Wokshop modok mappájának teljes elérési útja), % workshop_mod_id%, %first_file% (az első fájl, az az első fájl, amely megtalálható a mod mappában amit a SteamCMD letöltött)");
define('OGP_LANG_install_mods', "Modok telepítése");
define('OGP_LANG_uninstall_mods', "Modok eltávolítása");
define('OGP_LANG_failed_uninstalling_mod', "Nem sikerült eltávolítani a(z) %s modot");
define('OGP_LANG_uninstall', "Szkript eltávolítása");
define('OGP_LANG_uninstall_info', "Ez az a parancsfájl, amelyet egy mod eltávolításakor kerül meghívásra. Érvényes helyettesítők: % mods_full_path% (a wokshop mods mappájának teljes elérési útja), % mod_string% (a mod karakterlánc a mod konfigurációs fájljában szereplő név ehhez a modhoz).");
define('OGP_LANG_remove_mods', "Modok eltávolítása");
define('OGP_LANG_do_not_close_this_page_while_mods_are_being_installed', "Ne zárd be ezt az oldalt a modok telepítése közben.");
define('OGP_LANG_no_game_server_selected', "Nincs kiválasztva játékszerver");
define('OGP_LANG_there_are_no_mods_installed_on_this_game_server', "Ezen a játékkiszolgálón nincs telepítve mod");
define('OGP_LANG_workshop_configuration_not_found', "Műhely konfiguráció nem található");
define('OGP_LANG_download_method', "Letöltési módszer");
define('OGP_LANG_anonymous_login', "Névtelen bejelentkezés");
define('OGP_LANG_select_at_least_one_mod_or_enter_mod_id', "Válassz ki legalább egy modot, vagy írd be a mod azonosítóját.");
define('OGP_LANG_no_game_servers_assigned', "Nincsen egy kiszolgáló sem hozzárendelve a fiókodhoz.");
?>