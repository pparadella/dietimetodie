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
		<canvas id="myChart" width="740" height="200"></canvas>
	</div>
</div>
<? } ?> 
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>