<?
require 'steamauth/steamauth.php';
require 'steamauth/serverStats.php';

    if(isset($_SESSION['steamid']))
    {
        $id = $_SESSION['steamid'];
        require 'steamauth/userInfo.php';
        require 'steamauth/userStats.php';
    } 
    else
    {
        #Not loged in
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Treta Nossa de Cada Dia!</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  </head>
  <body>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
            <h1 class="status">
                Nome servidor: <?=$serverstats['server_name'];?> |
            </h1>
            <h1 class="status">
                &nbsp;Status: <?=$serverstats['server_status'];?> |
            </h1>
            <h1 class="status">
                &nbsp;Players online: <?=$serverstats['server_players'];?>/<?=$serverstats['server_players_max'];?> |
            </h1>
            <h1 class="status">
                &nbsp;FPS: <?=$serverstats['server_fps'];?> |
            </h1>
            <h1 class="status">
                &nbsp;UPTIME: <?=$serverstats['server_uptime2'];?>
            </h1>
			<div class="btn-group">
				<button class="btn btn-default">
                    <? if(isset($_SESSION['steamid'])) { ?>   
                        <a href="#" class="steamLogin">
                            <img class="imgProfile" src="<?=$steamprofile['avatar'];?>"><?=$steamprofile['personaname'];?>
                        </a>
                    <? } else { ?>
                        <a href="#" class="steamLogin"><? echo loginbutton('rectangle');?></a>
                    <? } ?> 
				</button> 
				<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
                    <? if(isset($_SESSION['steamid'])) { ?> 
                        <li>
                            <a href="steamauth/logout.php">Logout</a>
                        </li>
                    <? } ?>
					<li class="divider">
					</li>
					<li>
						<a href="about.php">Sobre nós</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

    <? if(isset($_SESSION['steamid'])) { ?> 
	<div class="row">
		<div class="col-md-3">
            <span class="label label-default">Headshots</span>
            <h1><img class="imgScale" src="img/stats/skull-crack.svg"><?=$steamstats['headshot'];?></h1>
		</div>
		<div class="col-md-3">
            <span class="label label-default">Precisão de arco</span>
            <h1><img class="imgScale" src="img/stats/arrow-flights.svg"><?=$steamstats['steam_arrow_fired'];?></h1>
            <p>Flechas lançadas em jogadores: <?=$steamstats['steam_arrow_player'];?></p>
		</div>
		<div class="col-md-3">
            <span class="label label-default">Precisão de rifle</span>
            <h1><img class="imgScale" src="img/stats/gunshot.svg"><?=$steamstats['steam_bullet_fired'];?></h1>
            <p>Tiros dados em jogadores: <?=$steamstats['steam_bullet_player'];?></p>
		</div>
		<div class="col-md-3">
            <span class="label label-default">Tiros dados em construções</span>
            <h1><img class="imgScale" src="img/stats/trebuchet.svg"><?=$steamstats['steam_bullet_building'];?></h1>
            <p>Flecha: <?=$steamstats['steam_arrow_building'];?></p>
            <p>Shotgun: <?=$steamstats['steam_shotgun_building'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
            <span class="label label-default">Frags</span>
            <h1><img class="imgScale" src="img/stats/backstab.svg"><?=$steamstats['steam_kill_player'];?></h1>
            <p>Ursos: <?=$steamstats['steam_kill_bear'];?></p>
            <p>Javalis: <?=$steamstats['steam_kill_boar'];?></p>
            <p>Veados: <?=$steamstats['steam_kill_stag'];?></p>
            <p>Galinhas: <?=$steamstats['steam_kill_chicken'];?></p>
            <p>Cavalos: <?=$steamstats['steam_kill_horse'];?></p>
            <p>Lobos: <?=$steamstats['steam_kill_wolf'];?></p>
		</div>
		<div class="col-md-3">
            <span class="label label-default">Mortes</span>
            <h1><img class="imgScale" src="img/stats/skull-crossed-bones.svg"><?=$steamstats['steam_deaths'];?></h1>
            <p>Suicídio: <?=$steamstats['steam_deaths_suicide'];?></p>
            <p>Queda: <?=$steamstats['steam_deaths_fall'];?></p>
            <p>Armadilhas: <?=$steamstats['steam_deaths_entity'];?></p>
            <p>Lobos: <?=$steamstats['steam_kill_wolf'];?></p>
            <p>Ursos: <?=$steamstats['steam_deaths_bear'];?></p>
		</div>
		<div class="col-md-3">
            <span class="label label-default">Frags/Mortes</span>
            <h1><img class="imgScale" src="img/stats/triple-skulls.svg"></h1>
		</div>
		<div class="col-md-3">
            <span class="label label-default">Coletado</span>
            <h1><img class="imgScale" src="img/stats/firewood.png"></h1>
            <p>Pedra: <?=$steamstats['steam_harvest_stone'];?></p>
            <p>Pano: <?=$steamstats['steam_harvest_cloth'];?></p>
            <p>Madeira: <?=$steamstats['steam_harvest_wood'];?></p>
		</div>
	</div>
</div>
<? } ?> 
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>