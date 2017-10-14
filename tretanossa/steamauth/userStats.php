<?php
require 'SteamConfig.php';
$url = file_get_contents("http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=252490&key=".$steamauth['apikey']."&steamid=".$_SESSION['steamid']);
$content = json_decode($url, true);

/* Deaths */
$_SESSION['steam_deaths'] = $content['playerstats']['stats'][0]['value'];
$_SESSION['steam_deaths_suicide'] = $content['playerstats']['stats'][5]['value'];
$_SESSION['steam_deaths_fall'] = $content['playerstats']['stats'][6]['value'];
$_SESSION['steam_deaths_entity'] = $content['playerstats']['stats'][30]['value'];
$_SESSION['steam_deaths_wolf'] = $content['playerstats']['stats'][31]['value'];
$_SESSION['steam_deaths_bear'] = $content['playerstats']['stats'][32]['value'];
$_SESSION['steam_wounded'] = $content['playerstats']['stats'][41]['value'];
$_SESSION['steam_wounded_assisted'] = $content['playerstats']['stats'][42]['value'];
$_SESSION['steam_wounded_healed'] = $content['playerstats']['stats'][43]['value'];

/* Fires */
$_SESSION['steam_bullet_fired'] = $content['playerstats']['stats'][1]['value'];
$_SESSION['steam_arrow_fired'] = $content['playerstats']['stats'][2]['value'];
$_SESSION['steam_bullet_player'] = $content['playerstats']['stats'][8]['value'];
$_SESSION['steam_arrow_entity'] = $content['playerstats']['stats'][9]['value'];
$_SESSION['steam_bullet_entity'] = $content['playerstats']['stats'][11]['value'];
$_SESSION['steam_arrow_building'] = $content['playerstats']['stats'][14]['value'];
$_SESSION['steam_headshot'] = $content['playerstats']['stats'][21]['value'];
$_SESSION['steam_arrow_boar'] = $content['playerstats']['stats'][22]['value'];
$_SESSION['steam_arrow_bear'] = $content['playerstats']['stats'][23]['value'];
$_SESSION['steam_arrow_wolf'] = $content['playerstats']['stats'][24]['value'];
$_SESSION['steam_arrow_stag'] = $content['playerstats']['stats'][25]['value'];
$_SESSION['steam_arrow_chicken'] = $content['playerstats']['stats'][26]['value'];		
$_SESSION['steam_bullet_building'] = $content['playerstats']['stats'][27]['value'];
$_SESSION['steam_arrow_horse'] = $content['playerstats']['stats'][28]['value'];			
$_SESSION['steam_arrow_player'] = $content['playerstats']['stats'][29]['value'];			
$_SESSION['steam_shotgun_fired'] = $content['playerstats']['stats'][33]['value'];
$_SESSION['steam_shotgun_building'] = $content['playerstats']['stats'][34]['value'];
$_SESSION['steam_bullet_bear'] = $content['playerstats']['stats'][35]['value'];	
$_SESSION['steam_shotgun_entity'] = $content['playerstats']['stats'][36]['value'];	
$_SESSION['steam_bullet_stag'] = $content['playerstats']['stats'][37]['value'];			
$_SESSION['steam_bullet_wolf'] = $content['playerstats']['stats'][38]['value'];	
$_SESSION['steam_bullet_boar'] = $content['playerstats']['stats'][39]['value'];	
$_SESSION['steam_bullet_sign'] = $content['playerstats']['stats'][40]['value'];	
$_SESSION['steam_bullet_player_corpse'] = $content['playerstats']['stats'][44]['value'];	
$_SESSION['steam_bullet_corpse'] = $content['playerstats']['stats'][45]['value'];	
			
/* Misc */
$_SESSION['steam_item_drop'] = $content['playerstats']['stats'][3]['value'];
$_SESSION['steam_bp_studied'] = $content['playerstats']['stats'][4]['value'];

/* Kills */
$_SESSION['steam_kill_player'] = $content['playerstats']['stats'][7]['value'];
$_SESSION['steam_kill_bear'] = $content['playerstats']['stats'][15]['value'];
$_SESSION['steam_kill_boar'] = $content['playerstats']['stats'][16]['value'];
$_SESSION['steam_kill_stag'] = $content['playerstats']['stats'][17]['value'];
$_SESSION['steam_kill_chicken'] = $content['playerstats']['stats'][18]['value'];
$_SESSION['steam_kill_horse'] = $content['playerstats']['stats'][19]['value'];
$_SESSION['steam_kill_wolf'] = $content['playerstats']['stats'][20]['value'];

/* Harvesting */
$_SESSION['steam_harvest_stone'] = $content['playerstats']['stats'][10]['value'];
$_SESSION['steam_harvest_cloth'] = $content['playerstats']['stats'][12]['value'];
$_SESSION['steam_harvest_wood'] = $content['playerstats']['stats'][13]['value'];

/* ------------------------ RETURNS ------------------------ */

/* Headshots */
$steamstats['headshot'] = $_SESSION['steam_headshot'];
/* Bow Accuracy */
$steamstats['steam_arrow_fired'] = $_SESSION['steam_arrow_fired'];
$steamstats['steam_arrow_player'] = $_SESSION['steam_arrow_player'];
/* Rifle Accuracy */
$steamstats['steam_bullet_fired'] = $_SESSION['steam_bullet_fired'];
$steamstats['steam_bullet_player'] = $_SESSION['steam_bullet_player'];
/* Building */
$steamstats['steam_bullet_building'] = $_SESSION['steam_bullet_building'];
$steamstats['steam_arrow_building'] = $_SESSION['steam_arrow_building'];
$steamstats['steam_shotgun_building'] = $_SESSION['steam_shotgun_building'];
/* Kills */
$steamstats['steam_kill_player'] = $_SESSION['steam_kill_player'];
$steamstats['steam_kill_bear'] = $_SESSION['steam_kill_bear'];
$steamstats['steam_kill_boar'] = $_SESSION['steam_kill_boar'];
$steamstats['steam_kill_stag'] = $_SESSION['steam_kill_stag'];
$steamstats['steam_kill_chicken'] = $_SESSION['steam_kill_chicken'];
$steamstats['steam_kill_horse'] = $_SESSION['steam_kill_horse'];
$steamstats['steam_kill_wolf'] = $_SESSION['steam_kill_wolf'];

/* Deaths */
$steamstats['steam_deaths'] = $_SESSION['steam_deaths'];
$steamstats['steam_deaths_suicide'] = $_SESSION['steam_deaths_suicide'];
$steamstats['steam_deaths_fall'] = $_SESSION['steam_deaths_fall'];
$steamstats['steam_deaths_entity'] = $_SESSION['steam_deaths_entity'];
$steamstats['steam_deaths_wolf'] = $_SESSION['steam_deaths_wolf'];
$steamstats['steam_deaths_bear'] = $_SESSION['steam_deaths_bear'];
$steamstats['steam_wounded'] = $_SESSION['steam_wounded'];
$steamstats['steam_wounded_assisted'] = $_SESSION['steam_wounded_assisted'];
$steamstats['steam_wounded_healed'] = $_SESSION['steam_wounded_healed'];
/* Kill/Death */

/* Harvest */
$steamstats['steam_harvest_stone'] = $_SESSION['steam_harvest_stone'];
$steamstats['steam_harvest_cloth'] = $_SESSION['steam_harvest_cloth'];
$steamstats['steam_harvest_wood'] = $_SESSION['steam_harvest_wood'];



// Version 3.2
?>