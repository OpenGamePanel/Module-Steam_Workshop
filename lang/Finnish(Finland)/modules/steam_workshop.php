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
define('OGP_LANG_game', "Peli");
define('OGP_LANG_select_mod', "Valitse modi");
define('OGP_LANG_manual_workshop_mod_id', "Manuaalinen Workshop modi ID");
define('OGP_LANG_manual_workshop_mod_id_info', "Löydät modi-id:n modin URL-osoitteesta, esimerkiksi 1379153273 ARK: Survival Evolvedin Solar Panel. Voit asentaa useita modeja erottamalla ne pilkulla.");
define('OGP_LANG_update_in_progress', "Päivitys on käynnissä");
define('OGP_LANG_refresh_steam_workshop_status', "Päivitä Steam Workshopin tila");
define('OGP_LANG_update_completed', "Päivitys valmis");
define('OGP_LANG_mod_does_not_belong_to_workshop', "Modi %s ei kuulu Workshoppiin");
define('OGP_LANG_mod_installation_started', "Modin asennus alkoi");
define('OGP_LANG_failed_to_start_steam_workshop', "Steam Workshopin käynnistäminen epäonnistui");
define('OGP_LANG_connection_error', "Yhteysvirhe");
define('OGP_LANG_install_mod', "Asenna modit");
define('OGP_LANG_show_mod_info', "Näytä moditiedot");
define('OGP_LANG_select_game', "Valitse peli");
define('OGP_LANG_save_config', "Tallenna määritykset");
define('OGP_LANG_mod_key_not_found_from_xml', "Modi-avainta %s ei löydy xml:stä.");
define('OGP_LANG_workshop_id', "Workshopin ID");
define('OGP_LANG_workshop_id_info', "Workshop-ID löytyy Workshopin URL-osoitteesta, esimerkiksi 440900 Conan Exiles");
define('OGP_LANG_mods_path', "Modin polku");
define('OGP_LANG_mods_path_info', "Modi-kansion suhteellinen polku.");
define('OGP_LANG_regex', "Regex");
define('OGP_LANG_regex_info', "Säännöllinen lauseke, joka vastaa määritystiedoston modeja");
define('OGP_LANG_mods_backreference_index', "Modien takaisinviittaus indeksi");
define('OGP_LANG_mods_backreference_index_info', "Takaviitteen sijainti regexin osasta, joka vastaa modi-luetteloa, alkaen 0.");
define('OGP_LANG_variable', "Muuttuja");
define('OGP_LANG_variable_info', "Muuttuja, joka sisältää modi-luettelon, jos sellainen on.");
define('OGP_LANG_place_after', "Paikka jälkeen");
define('OGP_LANG_place_after_info', "Määritystiedoston osa, jossa modi-luettelo näkyy, jos sellainen on. Se lisätään määritystiedostoon, jos sitä ei vielä ole olemassa. Jos annettua muuttujaa ei ole, se sijoitetaan tämän osan jälkeiselle riville.");
define('OGP_LANG_mod_string', "Modi-merkkijono");
define('OGP_LANG_mod_string_info', "Merkkijono, joka edustaa modia modi-luettelossa. Kelvolliset korvaukset: %workshop_mod_id%, %first_file% (ensimmäinen tiedosto on ensimmäinen tiedosto, joka löytyy SteamCMD:n lataamasta modi-kansiosta)");
define('OGP_LANG_string_separator', "Merkkijonoerotin");
define('OGP_LANG_string_separator_info', "Merkki, joka erottaa modifikaatiot määritystiedostossa, esimerkiksi uusi rivimerkki (\\n) tai pilkku (,).");
define('OGP_LANG_filepath', "Tiedostopolku");
define('OGP_LANG_filepath_info', "Polku asetustiedostoon jossa modit on lueteltava.");
define('OGP_LANG_post_install', "Asennuksen jälkeinen komentosarja");
define('OGP_LANG_post_install_info', "Tarvittavat komennot bashissa modien siirtämiseksi modi-kansioon. Kelvolliset korvaukset: %mods_full_path% (koko polku Wokshop modi-kansioon), %workshop_mod_id%, %first_file% (ensimmäinen tiedosto on ensimmäinen tiedosto, joka löytyy SteamCMD: n lataamasta modi-kansiosta)");
define('OGP_LANG_install_mods', "Asenna modit");
define('OGP_LANG_uninstall_mods', "Poista modit");
define('OGP_LANG_failed_uninstalling_mod', "Modin %s asennuksen poisto epäonnistui");
define('OGP_LANG_uninstall', "Poista komentosarja");
define('OGP_LANG_uninstall_info', "Tämä on komentosarja, jota kutsutaan, kun modi poistetaan, kelvolliset korvaukset: %mods_full_path% (koko polku wokshop modi-kansioon), %mod_string% (modi-merkkijono on tämän modin määritystiedostossa mainittu nimi).");
define('OGP_LANG_remove_mods', "Poista modit");
define('OGP_LANG_do_not_close_this_page_while_mods_are_being_installed', "Älä sulje tätä sivua, kun modeja asennetaan.");
define('OGP_LANG_no_game_server_selected', "Pelipalvelinta ei ole valittu");
define('OGP_LANG_there_are_no_mods_installed_on_this_game_server', "Tähän pelipalvelimeen ei ole asennettu modeja");
define('OGP_LANG_workshop_configuration_not_found', "Workshop määrityksiä ei löytynyt");
define('OGP_LANG_download_method', "Lataustapa");
define('OGP_LANG_anonymous_login', "Anonyymi kirjautuminen");
define('OGP_LANG_select_at_least_one_mod_or_enter_mod_id', "Valitse vähintään yksi modi tai kirjoita modin-ID.");
define('OGP_LANG_no_game_servers_assigned', "Tilillesi ei ole määritetty palvelimia.");
?>