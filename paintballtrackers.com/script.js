//Permet d'ouvrir/fermer la card Battle Royale
$(function() {
    "use strict";
    $(".pCard_add_BR").click(function() {
        $(".pCard_card_BR").toggleClass("pCard_on");
        $(".pCard_add_BR i").toggleClass("fa-minus");
    });
});
//Permet d'ouvrir/fermer la card DeathMatch
$(function() {
    "use strict";
    $(".pCard_add_DM").click(function() {
        $(".pCard_card_DM").toggleClass("pCard_on");
        $(".pCard_add_DM i").toggleClass("fa-minus");
    });
});
//Permet d'ouvrir/fermer la card Le Fort
$(function() {
    "use strict";
    $(".pCard_add_LF").click(function() {
        $(".pCard_card_LF").toggleClass("pCard_on");
        $(".pCard_add_LF i").toggleClass("fa-minus");
    });
});
//Permet d'ouvrir/fermer la card La Bombe
$(function() {
    "use strict";
    $(".pCard_add_LB").click(function() {
        $(".pCard_card_LB").toggleClass("pCard_on");
        $(".pCard_add_LB i").toggleClass("fa-minus");
    });
});
