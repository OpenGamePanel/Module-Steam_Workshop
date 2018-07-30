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
define('OGP_LANG_game', "Juego");
define('OGP_LANG_select_mod', "Selecciona un mod");
define('OGP_LANG_manual_workshop_mod_id', "Introducción manual de ID del mod");
define('OGP_LANG_manual_workshop_mod_id_info', "Encontrará la ID del mod en la URL del mod en la página del workshop, for ejemplo 1379153273 para Solar Panel de ARK: Survival Evolved. Usted puede instalar multiple mods separándolos con una coma.");
define('OGP_LANG_update_in_progress', "Actualización en progreso, espere...");
define('OGP_LANG_refresh_steam_workshop_status', "Refrescar estado de Steam Workshop");
define('OGP_LANG_update_completed', "<b>Actualización completa.</b>");
define('OGP_LANG_mod_does_not_belong_to_workshop', "El mod %s no pertenece al Workshop.");
define('OGP_LANG_mod_installation_started', "Instalación del mod iniciada.");
define('OGP_LANG_failed_to_start_steam_workshop', "Fallo al iniciar Steam Workshop.");
define('OGP_LANG_connection_error', "Error de conexión");
define('OGP_LANG_install_mod', "Instalar mods");
define('OGP_LANG_show_mod_info', "Mostrar información de los mods");
define('OGP_LANG_select_game', "Seleccione Juego");
define('OGP_LANG_save_config', "Guardar Configuración");
define('OGP_LANG_mod_key_not_found_from_xml', "La clave del mod %s no se encontró en el archivo XML.");
define('OGP_LANG_workshop_id', "ID del Workshop");
define('OGP_LANG_workshop_id_info', "Encontrará la ID del Workshop en la URL de la página del Workshop, por ejemplo 440900 para Conan Exiles");
define('OGP_LANG_mods_path', "Ruta a la carpeta de mods");
define('OGP_LANG_mods_path_info', "La ruta relativa a la carpeta donde se descargarán los mods.");
define('OGP_LANG_regex', "Regex");
define('OGP_LANG_regex_info', "Una expresión regular que busca una coincidencia con la lista de mods instalados dentro del archivo de configuración especificado.");
define('OGP_LANG_mods_backreference_index', "Indice de retroreferencia");
define('OGP_LANG_mods_backreference_index_info', "Indice de la retroreferencia que contiene la lista de mods en la expresión regular especificada, empezando por el indice 0.");
define('OGP_LANG_variable', "Variable");
define('OGP_LANG_variable_info', "La variable que contiene la lista de mods, si existe.");
define('OGP_LANG_place_after', "Poner después de");
define('OGP_LANG_place_after_info', "La sección del archivo de configuración donde la lista de mods aparece, si existiera. Ésta será añadida si no existe aún. Si la variable no está presente entonces esta será añadida en la linea siguiente a ésta etiqueta de sección.");
define('OGP_LANG_mod_string', "Cadena de mod");
define('OGP_LANG_mod_string_info', "Esta cadena representa el mod en la lista de mods. Reemplazos validos: %workshop_mod_id%, %first_file% (first_file es el primer archivo encontrado en la carpeta descargada por SteamCMD)");
define('OGP_LANG_string_separator', "Separador de cadenas");
define('OGP_LANG_string_separator_info', "Es el carácter que separa los mods in la lista de mods del archivo de configuración, por ejemplo un carácter de nueva linea (\\n) o una coma (,).");
define('OGP_LANG_filepath', "Ruta del archivo");
define('OGP_LANG_filepath_info', "La ruta relativa al archivo de configuración donde los mods deben ser listados.");
define('OGP_LANG_post_install', "Script post-instalación");
define('OGP_LANG_post_install_info', "Los comandos necesarios, en bash, para mover los mods a la carpeta de destino, Reemplazos validos: %mods_full_path% (la ruta completa a la carpeta de mods), %workshop_mod_id%, %first_file% (first_file es el primer archivo encontrado en la carpeta del mod descargado por SteamCMD)");
define('OGP_LANG_install_mods', "Instalar mods");
define('OGP_LANG_uninstall_mods', "Desinstalar mods");
define('OGP_LANG_failed_uninstalling_mod', "Falló la desinstalación del mod %s");
define('OGP_LANG_uninstall', "Script de desinstalación");
define('OGP_LANG_uninstall_info', "Se llama a este script cuando un mod es desinstalado. Reemplazos validos: %mods_full_path% (la ruta completa a la carpeta de mods del workshop), %mod_string% (mod string es el nombre listado en el archivo de configuración para este mod).");
define('OGP_LANG_remove_mods', "Eliminar Mods");
define('OGP_LANG_do_not_close_this_page_while_mods_are_being_installed', "No cierre la pagina mientras los mods están siendo instalados");
define('OGP_LANG_no_game_server_selected', "No ha seleccionado ningún servidor");
define('OGP_LANG_there_are_no_mods_installed_on_this_game_server', "No hay mods instalados en este servidor de juegos");
define('OGP_LANG_workshop_configuration_not_found', "No se encontró configuración de Workshop para este juego");
define('OGP_LANG_download_method', "Método de descarga");
define('OGP_LANG_anonymous_login', "Inicio de sesión anonimo");
define('OGP_LANG_select_at_least_one_mod_or_enter_mod_id', "Seleccione al menos un mod o introduzca un ID de mod ");
define('OGP_LANG_no_game_servers_assigned', "No tiene ningún servidor asignado a su cuenta.");
?>