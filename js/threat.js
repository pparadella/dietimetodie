function wait(ms) {
    "use strict";
    return new Promise(r => setTimeout(r, ms));
}

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}

async function playDeathSound() {

    "use strict";
	var chars = [
		"AmazonDead",
		"AssassinDead",
		"BarbarianDead",
		"DruidDead",
		"NecromancerDead",
		"PaladinDead",
		"SorceressDead"], randSound = Math.floor((Math.random() * 3) + 1), randChar = Math.floor(Math.random() * (chars.length)), elemDeath = document.getElementById("audio-death");
    
    if (elemDeath === null) {
        elemDeath = document.createElement("audio");
        document.getElementById("page-body").appendChild(elemDeath);
    }
    
    elemDeath.id = "audio-death"
    elemDeath.src = "sounds/DeathSounds/" + chars[randChar] + randSound + ".wav";

    await wait(300);
    
    elemDeath.play();
    
    elemDeath = null;
    randChar = null;
    randSound = null;

    return false;
}

function playSound(charName) {
 
    "use strict";
	var rand = Math.floor((Math.random() * 6) + 1), elem = document.getElementById("audio");

    if (elem === null) {
        elem = document.createElement("audio");
        document.getElementById("page-body").appendChild(elem);
    }

    elem.id = "audio";
    elem.src = "sounds/Common/" + charName + "/" + charName + rand + ".wav";
    
    elem.onended = function(){
        playDeathSound();
        };
    
    elem.play();
    
    elem = null;
    rand = null;

    return false;
}

async function playDeathSoundDebug() {

    "use strict";
	var chars = [
		"AmazonDead",
		"AssassinDead",
		"BarbarianDead",
		"DruidDead",
		"NecromancerDead",
		"PaladinDead",
		"SorceressDead"], randSound = Math.floor((Math.random() * 3) + 1), randChar = Math.floor(Math.random() * (chars.length)), 
        elemDeath = document.getElementById("audio-death-chaos"), randSoundEntrance = Math.floor((Math.random() * 28) + 1), elemWelcome = document.getElementById("audio-welcome");
        
        elemWelcome.src = "sounds/Entrance/Welcome" + randSoundEntrance + ".wav";
        elemWelcome.play();
    
    if (elemDeath === null) {
        elemDeath = document.createElement("audio");
        document.getElementById("page-body").appendChild(elemDeath);
    }
    
    elemDeath.id = "audio-death-chaos"
    elemDeath.src = "sounds/DeathSounds/" + chars[randChar] + randSound + ".wav";
    
    elemDeath.play();
    
    elemDeath = null;
    randChar = null;
    randSound = null;

    return false;
}

async function playSoundChaosDebug() {
    "use strict";
    var chars = [
		"Amazon",
		"Assassin",
		"Barbarian",
		"Druid",
		"Necromancer",
		"Paladin",
		"Sorceress",
        "Baal",
        "Cain",
        "Diablo",
        "Mephisto",
        "Meshif",
        "Tyrael",
        "Warriv",], randChar = Math.floor(Math.random() * (chars.length)), randSound = Math.floor((Math.random() * 3) + 1), elem = document.getElementById("audio-chaos");

    if (elem === null) {
        elem = document.createElement("audio");
        document.getElementById("page-body").appendChild(elem);
    }

    elem.id = "audio-chaos";
    elem.src = "sounds/Common/" + chars[randChar] + "/" + chars[randChar] + randSound + ".wav";
    
    elem.onended = function(){
        playDeathSoundDebug();
        playSoundChaosDebug();
        };
    
    elem.play();
    
    elem = null;
    randSound = null;

    return false;
}

function playTyrael(charName) {

    "use strict";
	var rand = Math.floor((Math.random() * 9) + 1), elemTyrael = document.getElementById("audio-tyrael");

    if (elemTyrael === null) {
        elemTyrael = document.createElement("audio");
        document.getElementById("page-body").appendChild(elemTyrael);
    }

    elemTyrael.id = "audio-tyrael";
    elemTyrael.src = "sounds/Common/" + charName + "/" + charName + rand + ".wav";

    elemTyrael.play();

    elemTyrael = null;
    rand = null;

    return false;
}

function playCain(charName) {

    "use strict";
	var rand = Math.floor((Math.random() * 11) + 1), elemCain = document.getElementById("audio-cain");

    if (elemCain === null) {
        elemCain = document.createElement("audio");
        document.getElementById("page-body").appendChild(elemCain);
    }

    elemCain.id = "audio-cain";
    elemCain.src = "sounds/Common/" + charName + "/" + charName + rand + ".wav";

    elemCain.play();

    elemCain = null;
    rand = null;

    return false;
}

function playPrime(charName) {

    "use strict";
	var rand = Math.floor((Math.random() * 3) + 1), elemPrime = document.getElementById("audio-prime");

    if (elemPrime === null) {
        elemPrime = document.createElement("audio");
        document.getElementById("page-body").appendChild(elemPrime);
    }

    elemPrime.id = "audio-prime";
    elemPrime.src = "sounds/Common/" + charName + "/" + charName + rand + ".wav";

    elemPrime.play();

    elemPrime = null;
    rand = null;

    return false;
}