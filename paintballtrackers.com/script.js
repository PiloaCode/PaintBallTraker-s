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


/* Les options pour afficher la France */
const mapOptions = {
    center: [46.225, 0.132],
    zoom: 5
}

/* Les options pour affiner la localisation */
const locationOptions = {
    maximumAge: 10000,
    timeout: 5000,
    enableHighAccuracy: true
};

/* Création de la carte */
var map = new L.map("carte", mapOptions);

/* Création de la couche OpenStreetMap */
var layer = new L.TileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
    { attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors' });

/* Ajoute la couche de la carte */
map.addLayer(layer);

/* Verifie que le navigateur est compatible avec la géolocalisation */
if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(handleLocation, handleLocationError, locationOptions);
} else {
    /* Le navigateur n'est pas compatible */
    alert("Géolocalisation indisponible");
}

function handleLocation(position) {
    /* Zoom avant de trouver la localisation */
    map.setZoom(16);
    /* Centre la carte sur la latitude et la longitude de la localisation de l'utilisateur */
    map.panTo(new L.LatLng(position.coords.latitude, position.coords.longitude));
}

function handleLocationError(msg) {
    alert("Erreur lors de la géolocalisation");
}

