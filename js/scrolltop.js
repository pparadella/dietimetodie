function topFunction() {
    "use strict";
    if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
        window.scrollTo(200, 0); // first value for left offset, second value for top offset
    } else {
        $('html,body').animate({
            scrollTop: 0,
            scrollLeft: 200
        }, 800, function () {
            $('html,body').clearQueue();
        });
    }
}

function scrollFunction() {
    "use strict";
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

window.onscroll = function () {"use strict"; scrollFunction(); };