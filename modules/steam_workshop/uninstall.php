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
require_once("includes/lib_remote.php");
require_once("modules/config_games/server_config_parser.php");
require_once("modules/steam_workshop/functions.php");
require_once('includes/form_table_class.php');
echo '<link rel="stylesheet" type="text/css" href="modules/steam_workshop/steam_workshop.css">';
function exec_ogp_module()
{
	Global $db,$view;
	echo '<h2>Steam Workshop</h2>';
	define('CONFIGS', "modules/steam_workshop/game_configs/");
	
	$isAdmin = $db->isAdmin($_SESSION['user_id']);
	if($isAdmin)
		$server_homes = $db->getHomesFor('admin', $_SESSION['user_id']);
	else	
		$server_homes = $db->getHomesFor('user_and_group', $_SESSION['user_id']);
	
	if(empty($server_homes))
	{
		print_failure(get_lang('no_game_homes_assigned'));
		return;
	}
	else
	{
		if(!isset($_POST['uninstall']))
		{
			$home_string = (isset($_GET['home_id-mod_id-ip-port']) && $_GET['home_id-mod_id-ip-port'] != "")?"&home_id-mod_id-ip-port=".$_GET['home_id-mod_id-ip-port']:"";
			echo "<ul><li><a href='?m=steam_workshop&p=main$home_string'>".get_lang('install_mods')."</a></li></ul>";
			$games[''] = get_lang('select_game');
			foreach($server_homes as $server_home)
			{
				$server_xml = read_server_config(SERVER_CONFIG_LOCATION."/".$server_home['home_cfg_file']);
				if(isset($server_xml->installer) and $server_xml->installer == "steamcmd")
				{
					$mod_xml = xml_get_mod($server_xml, $server_home['mod_key']);
					if(isset($mod_xml->installer_name) and !in_array((string)$mod_xml->installer_name, get_blacklist()))
						$games["$server_home[home_id]-$server_home[mod_id]-$server_home[ip]-$server_home[port]"] = $server_home['home_name'];
				}
			}
			
			$ft = new FormTable();
			$ft->start_form("home.php", "get");
			$ft->start_table();
			$ft->add_field_hidden('m', $_GET['m']);
			$ft->add_field_hidden('p', $_GET['p']);
			$ft->add_custom_field('game', create_drop_box_from_array_onchange($games,"home_id-mod_id-ip-port",@$_GET['home_id-mod_id-ip-port']));
			$ft->end_table();
			$ft->end_form();
		}
		
		if(isset($_GET['home_id-mod_id-ip-port']) && $_GET['home_id-mod_id-ip-port'] != "")
			list($home_id, $mod_id, $ip, $port) = explode("-", $_GET['home_id-mod_id-ip-port']);
		else
		{
			print_failure(get_lang('no_game_server_selected'));
			$continue = False;
			return;
		}
	}
	
	if($isAdmin) 
		$home_cfg = $db->getGameHome($home_id);
	else
		$home_cfg = $db->getUserGameHome($_SESSION['user_id'],$home_id);
	
	if($home_cfg)
	{
		$server_xml = read_server_config(SERVER_CONFIG_LOCATION."/".$home_cfg['home_cfg_file']);
		if($server_xml === FALSE)
		{
			print_failure(get_lang_f('failed_reading_xml_file', SERVER_CONFIG_LOCATION."/".$home_cfg['home_cfg_file']));
			return;
		}
		
		if(!isset($home_cfg['mods'][$mod_id]['mod_key']))
		{
			print_failure(get_lang_f('mod_id_does_not_exists_in_home', $mod_id, $home_id));
			return;
		}
			
		$modkey = $home_cfg['mods'][$mod_id]['mod_key'];
		$mod_xml = xml_get_mod($server_xml, $modkey);
		
		if (!$mod_xml)
		{
			print_failure(get_lang_f('mod_key_not_found_from_xml', $modkey));
			return;
		}
		
		preg_match('/(linux|win)(32|64)?/i', $home_cfg['game_key'], $matches);
		
		if(!isset($matches[1]))
		{
			print_failure(get_lang_f('unable_to_get_os_from_game_key', $home_cfg['game_key']));
			return;
		}
		
		if(strtolower($matches[1]) == 'linux')
			$os = "Linux";
		elseif(strtolower($matches[1]) == 'win')
			$os = "Windows";
		
		if(!isset($os))
		{
			print_failure(get_lang_f('unable_to_get_os_from_game_key', $home_cfg['game_key']));
			return;
		}
		
		$xml_file = CONFIGS.$mod_xml->installer_name."_".$os.".xml";
		
		if(!file_exists($xml_file))
		{
			print_failure(get_lang('no_workshop_configuration_available_for_this_game'));
			return;
		}
		
		$dom = new DOMDocument();
		
		if ( @$dom->load($xml_file) === FALSE )
		{
			print_failure(get_lang('workshop_configuration_file_has_bad_format'));
			return;
		}
				
		$xml = simplexml_load_file($xml_file);
		
		if($xml !== false)
		{
			$remote = new OGPRemoteLibrary($home_cfg['agent_ip'],$home_cfg['agent_port'],$home_cfg['encryption_key'], $home_cfg['timeout']);
			
			if($remote->status_chk() !== 1)
			{
				print_failure(get_lang('remote_server_offline'));
			}
						
			if(isset($_POST['uninstall']) and isset($_POST['mod_string']))
			{
				$output = "";
				foreach($_POST['mod_string'] as $mod_string)
				{
					$result = remove_mod($home_cfg, $remote, $xml, $mod_string);
					if($result !== FALSE)
						$output .= $result."\n";
					else
						$output .= get_lang_f('failed_uninstalling_mod', $mod_string)."\n";
				}
				echo "<pre>$output</pre>";
				echo "<a href='?m=steam_workshop&p=uninstall&home_id-mod_id-ip-port=".$_GET['home_id-mod_id-ip-port']."'>".get_lang('back')."</a>";
			}
			else
			{
				$mods = get_installed_mods($home_cfg, $remote, $xml);
				
				if($mods and count($mods) > 0)
				{
					$ft = new FormTable();
					$ft->start_form("?m=steam_workshop&p=uninstall&home_id-mod_id-ip-port=".$_GET['home_id-mod_id-ip-port'], "post", "autocomplete=\"off\"");
					$ft->start_table();
					echo '<tr><td><div id="uninstall_scrolling_checkbox">';
					foreach($mods as $mod_id => $mod_name)
						echo "<input type='checkbox' id='select_mod_$mod_id' name='mod_string[]' value='$mod_id'><label for='select_mod_$mod_id'>$mod_name</label><br>";
					echo '</div></td></tr>';
					$ft->end_table();
					$ft->add_button("submit", "uninstall", get_lang('uninstall_mods'));
					$ft->end_form();
				}
				else
				{
					print_failure(get_lang('there_are_no_mods_installed_on_this_game_server'));
					return;
				}
			}
		}
		else
		{
			print_failure(get_lang('workshop_configuration_file_has_bad_format'));
			return;
		}
	}
	else
	{
		print_failure(get_lang('game_home_not_found'));
		return;
	}
}
?>
