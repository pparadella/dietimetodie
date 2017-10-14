function speakAgain() {
    "use strict";
    
    var request = new XMLHttpRequest();
    request.open('GET', "http://olavoparno.xyz/quotes.txt", true);
    request.responseType = 'blob';
    request.onload = function () {
        var reader = new FileReader();
        reader.readAsText(request.response);
        reader.onload = function (e) {
            var idSpeech = document.getElementById("hkSpeech"), arraySpeech, strSpeech, randQuote, lastQuote;
            
            strSpeech = e.target.result;
            arraySpeech = strSpeech.split(";");
            
            randQuote = Math.floor(Math.random() * arraySpeech.length);
            lastQuote = idSpeech.getAttribute("last-quote");
            
            while (lastQuote.toString() === randQuote.toString()) {
                
                randQuote = Math.floor(Math.random() * arraySpeech.length);
            }
            
            idSpeech.setAttribute("last-quote", randQuote);
            
            strSpeech = arraySpeech[randQuote];
            
            idSpeech.textContent = strSpeech;
        };
    };
    request.send();
}