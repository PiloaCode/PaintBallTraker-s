$(function() {
    "use strict";
    $(".pCard_add").click(function() {
        $(".pCard_card").toggleClass("pCard_on");
        $(".pCard_add i").toggleClass("fas fa-minus");
    });
});