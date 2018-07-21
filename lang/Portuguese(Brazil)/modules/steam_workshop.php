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
define('OGP_LANG_game', "Jogo");
define('OGP_LANG_select_mod', "Selecionar mod");
define('OGP_LANG_manual_workshop_mod_id', "ID manual da oficina");
define('OGP_LANG_manual_workshop_mod_id_info', "Você irá encontrar o ID na URL do mod, por exemplo: 1379153273 para ARK:Survival Evolved's Painel Solar. Você pode instalar vários mods, cada um separado por virgula.");
define('OGP_LANG_update_in_progress', "Atualização em progresso");
define('OGP_LANG_refresh_steam_workshop_status', "Atualizar Status da oficina steam");
define('OGP_LANG_update_completed', "Atualização Completa");
define('OGP_LANG_mod_does_not_belong_to_workshop', "O mod %s não pertence a oficina");
define('OGP_LANG_mod_installation_started', "Instalação do mod iniciada");
define('OGP_LANG_failed_to_start_steam_workshop', "Falha ao iniciar a oficina steam");
define('OGP_LANG_connection_error', "Erro de conexão ");
define('OGP_LANG_install_mod', "Instalar mods");
define('OGP_LANG_show_mod_info', "Mostrar informações do mod");
define('OGP_LANG_select_game', "Selecionar Game");
define('OGP_LANG_save_config', "Salvar configuração ");
define('OGP_LANG_mod_key_not_found_from_xml', "Chave do mod %s não encontrado no xml.");
define('OGP_LANG_workshop_id', "ID da oficina");
define('OGP_LANG_workshop_id_info', "Você irá encontrar o ID da oficina na URL da oficina, por exemplo 440900 para Conan Exiles");
define('OGP_LANG_mods_path', "Caminho do mod");
define('OGP_LANG_mods_path_info', "O Caminho Atual da pasta dos mods");
define('OGP_LANG_regex', "Regex");
define('OGP_LANG_regex_info', "A regular expression that matches the mods in the configuration file");
define('OGP_LANG_mods_backreference_index', "Mods backreference index");
define('OGP_LANG_mods_backreference_index_info', "The position of the back reference from the part of the regex that match the mods list, starting by 0.");
define('OGP_LANG_variable', "Variável");
define('OGP_LANG_variable_info', "A variável que contem a lista de mods, se houver.");
define('OGP_LANG_place_after', "Coloque Após");
define('OGP_LANG_place_after_info', "A seção do arquivo de configuração onde a lista de mods aparece, se houver. Ele será adicionado ao arquivo de configuração, se ainda não existir. Se a variável fornecida não estiver presente, ela será colocada na linha após esta seção.");
define('OGP_LANG_mod_string', "Mod string");
define('OGP_LANG_mod_string_info', "A string que representa o mod na lista de mod. Substituições válidas: %workshop_mod_id%,%f irst_file% (o primeiro arquivo é o primeiro encontrado na pasta mod baixada pelo steamcmd)");
define('OGP_LANG_string_separator', "Separador de string");
define('OGP_LANG_string_separator_info', "O caractere que separa os mods no arquivo de configuração, por exemplo, caractere de nova linha (\\ n) ou virgula (,).");
define('OGP_LANG_filepath', "Caminho do arquivo");
define('OGP_LANG_filepath_info', "O caminho do arquivo de configuração onde os mods tem de ser listados.");
define('OGP_LANG_post_install', "Script de pós-instalação");
define('OGP_LANG_post_install_info', "Os comandos necessários, em bash, para mover os mods para a pasta dos mods, substituição valida: %mods_full_path% (o caminho completo para a pasta mods da oficina), %workshop_mod_id%, %first_file% (o primeiro arquivo é o arquivo encontrado na pasta de mod baixado pelo steamsmd)");
define('OGP_LANG_install_mods', "Instalar mods");
define('OGP_LANG_uninstall_mods', "Desinstalar mods");
define('OGP_LANG_failed_uninstalling_mod', "Falha ao desinstalar o mod %s");
define('OGP_LANG_uninstall', "Desinstalar Script");
define('OGP_LANG_uninstall_info', "Este é o script chamado quando um mod é desinstalado, Substituições validas: %mods_full_path% (o caminho completo para a pasta mod da oficina), %mod_string% (mod string é o nome listado no arquivo de configuração para este mod).");
define('OGP_LANG_remove_mods', "Remover mods");
define('OGP_LANG_do_not_close_this_page_while_mods_are_being_installed', "Não feche esta pagina enquanto o mod esta sendo instalado!!");
define('OGP_LANG_no_game_server_selected', "Nenhum servidor de jogo selecionado");
define('OGP_LANG_there_are_no_mods_installed_on_this_game_server', "Não há mod instalado nesse game server");
define('OGP_LANG_workshop_configuration_not_found', "Configuração da oficina não encontrado");
define('OGP_LANG_download_method', "Método de download");
define('OGP_LANG_anonymous_login', "Login Anônimo");
define('OGP_LANG_select_at_least_one_mod_or_enter_mod_id', "Selecione pelo menos um mod ou insira um ID de mod.");
?>
