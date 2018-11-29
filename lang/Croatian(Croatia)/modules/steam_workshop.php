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
define('OGP_LANG_game', "Igra");
define('OGP_LANG_select_mod', "Izaberite Mod");
define('OGP_LANG_manual_workshop_mod_id', "Workshop mod ID Ručno");
define('OGP_LANG_manual_workshop_mod_id_info', "Naći ćete mod id na URL modu, na primjer 1379153273 za ARK: Survival Evolved's Solar Panel. Možete instalirati više modova koji se razdvajaju od strane coma.");
define('OGP_LANG_update_in_progress', "Ažuriranje u tijeku");
define('OGP_LANG_refresh_steam_workshop_status', "Osjvežiti Steam Workshop status");
define('OGP_LANG_update_completed', "Ažuriranje je dovršeno");
define('OGP_LANG_mod_does_not_belong_to_workshop', "Mod %s ne pripada Workshopu");
define('OGP_LANG_mod_installation_started', "Instalacija moda je započela");
define('OGP_LANG_failed_to_start_steam_workshop', "Pokretanje Steam Workshop nije uspjelo");
define('OGP_LANG_connection_error', "Greška u povezivanju");
define('OGP_LANG_install_mod', "Instalirajte modove");
define('OGP_LANG_show_mod_info', "Prikaži informacije o modovima");
define('OGP_LANG_select_game', "Odaberite Igru");
define('OGP_LANG_save_config', "Spremi konfiguraciju");
define('OGP_LANG_mod_key_not_found_from_xml', "Mod ključ %s nije pronađen iz xml-a.");
define('OGP_LANG_workshop_id', "Workshop ID");
define('OGP_LANG_workshop_id_info', "ID Workshopa naći ćete u URL-u Workshopa , na primjer 440900 za Conan Exiles");
define('OGP_LANG_mods_path', "Putanje modova");
define('OGP_LANG_mods_path_info', "Realtivno putanje za mapu modova");
define('OGP_LANG_regex', "Regex");
define('OGP_LANG_regex_info', "Regularni izraz koji odgovara modima u konfiguracijskoj datoteci");
define('OGP_LANG_mods_backreference_index', "Indeks povratnih informacija modova");
define('OGP_LANG_mods_backreference_index_info', "Položaj povratnih informacija od dijela regexa koji odgovara popisu moda, počevši od 0.");
define('OGP_LANG_variable', "Varijabla");
define('OGP_LANG_variable_info', "Varijabla koja sadrži popis modova, ako ih ima.");
define('OGP_LANG_place_after', "Mjesto nakon");
define('OGP_LANG_place_after_info', "Dio konfiguracijske datoteke gdje se pojavljuje popis moda, ako ih ima. Bit će dodano konfiguracijskoj datoteci ako još ne postoji. Ako navedena varijabla nije prisutna, tada će biti stavljen u retku nakon ovog odjeljka.");
define('OGP_LANG_mod_string', "Mod String");
define('OGP_LANG_mod_string_info', "Niz koji predstavlja mod u modu popisa. Važeće zamjene:% workshop_mod_id%, %first_file% (prva datoteka je prva datoteka pronađena u mod mapi preuzeta od strane SteamCMD)");
define('OGP_LANG_string_separator', "String razdvajanje");
define('OGP_LANG_string_separator_info', "Karakter koji razdvaja modove u konfiguracijskoj datoteci, npr. Novi znak linije (\\ n) ili coma (,).");
define('OGP_LANG_filepath', "Putanje datoteke");
define('OGP_LANG_filepath_info', "Put konfiguracijske datoteke u kojoj moraju biti navedeni modovi.");
define('OGP_LANG_post_install', "Postinstall Skripta");
define('OGP_LANG_post_install_info', "Potrebne naredbe u bash za pomicanje moda u mapu mods. Važeća zamjena:% mods_full_path% (puni put do mape Wokshop mods),% workshop_mod_id%, %first_file% (prva datoteka prva je datoteka pronađena u mod preuzeta od strane SteamCMD)");
define('OGP_LANG_install_mods', "Instalirati modove");
define('OGP_LANG_uninstall_mods', "Deinstalirati modove");
define('OGP_LANG_failed_uninstalling_mod', "Neuspješno deinstaliranje moda %s");
define('OGP_LANG_uninstall', "Deinstalirati Skriptu");
define('OGP_LANG_uninstall_info', "Ovo je skripta koja se zove kada je mod deinstaliran, Važeće zamjene:% mods_full_path% (puni put do mape wokshop mods),% mod_string% (mod string je naziv naveden u konfiguracijskoj datoteci za ovaj mod).");
define('OGP_LANG_remove_mods', "Ukloniti Modove");
define('OGP_LANG_do_not_close_this_page_while_mods_are_being_installed', "Nemojte zatvoriti ovu stranicu dok instalirate modove.");
define('OGP_LANG_no_game_server_selected', "Nije odabrana nijedna igra");
define('OGP_LANG_there_are_no_mods_installed_on_this_game_server', "Na ovoj igri nema instaliranih modova");
define('OGP_LANG_workshop_configuration_not_found', "Workshop konfiguracija nije pronađena");
define('OGP_LANG_download_method', "Preuzimanje Metode");
define('OGP_LANG_anonymous_login', "Anonimna Prijava");
define('OGP_LANG_select_at_least_one_mod_or_enter_mod_id', "Odaberite barem jedan mod ili unesite mod ID.");
define('OGP_LANG_no_game_servers_assigned', "Nemate nijedan server dodijeljen vašem računu.");
?>