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
define('OGP_LANG_game', "游戏");
define('OGP_LANG_select_mod', "选择模组");
define('OGP_LANG_manual_workshop_mod_id', "Steam创意工坊模组ID");
define('OGP_LANG_manual_workshop_mod_id_info', "你可以在Steam创意工坊模组的URL中找到模组ID，例如ARK: Survival Evolved的太阳能板模组为1379153273。你可以通过逗号分隔来安装多个模组。");
define('OGP_LANG_update_in_progress', "更新进行中");
define('OGP_LANG_refresh_steam_workshop_status', "刷新Steam工坊状态");
define('OGP_LANG_update_completed', "更新完成");
define('OGP_LANG_mod_does_not_belong_to_workshop', "模组%s不属于Steam创意工坊");
define('OGP_LANG_mod_installation_started', "模组安装开始");
define('OGP_LANG_failed_to_start_steam_workshop', "启动Steam工坊失败");
define('OGP_LANG_connection_error', "连接错误");
define('OGP_LANG_install_mod', "安装模组");
define('OGP_LANG_show_mod_info', "显示模组信息");
define('OGP_LANG_select_game', "选择游戏");
define('OGP_LANG_save_config', "保存配置");
define('OGP_LANG_mod_key_not_found_from_xml', "从xml中未找到模组键%s。");
define('OGP_LANG_workshop_id', "Steam创意工坊ID");
define('OGP_LANG_workshop_id_info', "你可以在Steam创意工坊的URL中找到工坊ID，例如Conan Exiles的为440900");
define('OGP_LANG_mods_path', "模组路径");
define('OGP_LANG_mods_path_info', "模组文件夹的相对路径。");
define('OGP_LANG_regex', "正则表达式");
define('OGP_LANG_regex_info', "一个匹配配置文件中模组的正则表达式");
define('OGP_LANG_mods_backreference_index', "模组反向引用索引");
define('OGP_LANG_mods_backreference_index_info', "从匹配模组列表的正则表达式部分的反向引用的位置，从0开始。");
define('OGP_LANG_variable', "变量");
define('OGP_LANG_variable_info', "包含模组列表的变量如果有");
define('OGP_LANG_place_after', "放置位置");
define('OGP_LANG_place_after_info', "配置文件中模组列表出现的部分，如果有的话。如果不存在，则会被添加到配置文件中。如果给定的变量不存在，则会被放置在这个部分之后的行。");
define('OGP_LANG_mod_string', "模组字符串");
define('OGP_LANG_mod_string_info', "代表模组列表中模组的字符串。有效的替换： %workshop_mod_id%，%first_file%（first file是通过SteamCMD下载的模组文件夹中找到的第一个文件）");
define('OGP_LANG_string_separator', "字符串分隔符");
define('OGP_LANG_string_separator_info', "配置文件中分隔模组的字符，例如换行符（\\n）或逗号（,）。");
define('OGP_LANG_filepath', "文件路径");
define('OGP_LANG_filepath_info', "必须列出模组的配置文件的路径。");
define('OGP_LANG_post_install', "安装后脚本");
define('OGP_LANG_post_install_info', "移动模组到模组文件夹所需的bash命令。有效的替换： %mods_full_path%（Wokshop模组文件夹的完整路径），%workshop_mod_id%，%first_file%（first file是通过SteamCMD下载的模组文件夹中找到的第一个文件）");
define('OGP_LANG_install_mods', "安装模组");
define('OGP_LANG_uninstall_mods', "卸载模组");
define('OGP_LANG_failed_uninstalling_mod', "卸载模组%s失败");
define('OGP_LANG_uninstall', "卸载脚本");
define('OGP_LANG_uninstall_info', "当一个模组被卸载时调用的脚本，有效的替换：%mods_full_path%（wokshop模组文件夹的完整路径），%mod_string%（mod string是此模组在配置文件中列出的名称）。");
define('OGP_LANG_remove_mods', "移除模组");
define('OGP_LANG_do_not_close_this_page_while_mods_are_being_installed', "安装模组时请不要关闭此页面。");
define('OGP_LANG_no_game_server_selected', "没有选择游戏服务器");
define('OGP_LANG_there_are_no_mods_installed_on_this_game_server', "这个游戏服务器上没有安装模组");
define('OGP_LANG_workshop_configuration_not_found', "未找到Steam创意工坊配置");
define('OGP_LANG_download_method', "下载方法");
define('OGP_LANG_anonymous_login', "匿名登录");
define('OGP_LANG_select_at_least_one_mod_or_enter_mod_id', "至少选择一个模组或输入模组ID。");
define('OGP_LANG_no_game_servers_assigned', "你的账户没有分配任何服务器。");
?>