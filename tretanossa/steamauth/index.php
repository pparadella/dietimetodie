<?
require 'steamauth/steamauth.php';


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
<!DOCTYPE HTML>
<html>
<head>
<title>Treta Nossa de Cada Dia!</title>
<!--<link rel="stylesheet" type="text/css" href="style.min.css">-->
<link rel="shortcut icon" type="image/png" href="favicon.png"/>
<!--<script src="js/script.js"></script>-->
<style type="text/css">
    body {        
        background-size: cover;
        background-image: url(img/background-tiksi3.jpg);
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        position: fixed;
        z-index: -1;
        color: white;
        text-align: center;
    }    
    
    .bg_video{
         position: fixed; 
         right: 0; 
         bottom: 0;
         min-width: 100%; 
         min-height: 120%;
         width: auto; 
         height: auto; 
         background: url(img/hkportrait.jpg) no-repeat;
         background-size: cover; 
         z-index: -1;
     } 
    
    .top {
        text-align:right;
        position:fixed;
        top:0;
        left:0;
        width:100%;
        height:4%;
        color: mediumseagreen;
        background-color: transparent;
        font-size:1.3em;
        font-weight: 700;
        font-family: sans-serif;
        padding-bottom: 28px;
        z-index: 2;
    }
    
    .bottom {
        text-align:center;
        position:fixed;
        bottom:0;
        left:0;
        width:100%;
        height:8%;
        color: mediumseagreen;
        background-color: black;
        font-size:1.3em;
        font-weight: 700;
        font-family: sans-serif;
        padding-bottom: 100px;
    }
    
    .hkQuote {
        margin-top: 2px;
    }
    
    .steamLogin {
        text-decoration: none;
    }
    
    .steamLogin a, a:visited, a:active, a:hover {
        text-decoration: none;
    }
    
    .imgProfile {
        padding-bottom: 3px;   
        text-decoration: none;
    }
    
    .imgProfile a, a:visited, a:active, a:hover {
        text-decoration: none;
        color: black;
    }
    
    .dropdown {
        position: relative;
        display: inline-block;
        padding: 8px 8px 8px 8px;
        background-color: gray;
        text-decoration: none;
        text-align: center;
    }

    .dropdown-content {
        display: none;
        position: relative;
        background-color: dimgray;
        min-width: 150px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: gray;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover {
        background-color: dimgray;
    }
    
    .kill-ratio {
        text-align: left;
        padding-left: 15px;
    }
</style>
</head>
<body>
<? if(isset($_SESSION['steamid'])) { ?> 
    <div class="kill-ratio">
        <h1>Player kills: <?=$steamstats['kill_player'];?></h1>
        <h1>Total deaths: <?=$steamstats['deaths'];?></h1>
        <h1>Wounded: <?=$steamstats['wounded'];?></h1>
        <h1>Stag kills: <?=$steamstats['kill_stag'];?></h1>
        <h1>Death entiity: <?=$steamstats['deaths_entity'];?></h1>
    </div>
<? } ?> 
<div class="top">
    <? if(isset($_SESSION['steamid'])) { ?>   
    <div class="dropdown">
        <a href="#" class="steamLogin"><img class="imgProfile" src="<?=$steamprofile['avatar'];?>"><?=$steamprofile['personaname'];?></a>
            <div class="dropdown-content">
                <a href="steamauth/logout.php">Logout</a>
            </div>
    </div>
    <? } else { ?>
    <div class="dropdown">
        <a href="#" class="steamLogin"><? echo loginbutton('rectangle'); ?></a>
    </div>
    <? } ?> 
</div>

<!--
<div class="bottom">
    <h4 class="hkQuote" id="hkSpeech" last-quote="0">Query: This "meatbag" is an incoherent babble of useless information. Can I shoot him?</h4>
</div>
-->
</body>
</html>