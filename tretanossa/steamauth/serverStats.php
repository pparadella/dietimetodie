<?php
$url = file_get_contents("https://api.rust-servers.info/status/490");
$content = json_decode($url, true);

$_SESSION['server_name'] = $content['name'];
$_SESSION['server_status'] = $content['status'];
$_SESSION['server_players'] = $content['players'];
$_SESSION['server_players_max'] = $content['players_max'];
$_SESSION['server_fps'] = $content['fps'];
$_SESSION['server_uptime'] = $content['uptime'];

$serverstats['server_name'] = $_SESSION['server_name'];
$serverstats['server_status'] = $_SESSION['server_status'];
$serverstats['server_players'] = $_SESSION['server_players'];
$serverstats['server_players_max'] = $_SESSION['server_players_max'];
$serverstats['server_fps'] = $_SESSION['server_fps'];
$serverstats['server_uptime1'] = str_replace("day", "dia", $_SESSION['server_uptime']);
$serverstats['server_uptime2'] = str_replace("days", "dias", $serverstats['server_uptime1']);


// Version 3.2
?>