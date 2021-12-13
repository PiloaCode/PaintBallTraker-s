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
//Permet d'ouvrir/fermer la card contact Alexis
$(function() {
  "use strict";
  $(".pCard_add_ctAlexis").click(function() {
      $(".pCard_card_ctAlexis").toggleClass("pCard_on");
      $(".pCard_add_ctAlexis i").toggleClass("fa-minus");
  });
});
//Permet d'ouvrir/fermer la card contact Vincent
$(function() {
  "use strict";
  $(".pCard_add_ctVincent").click(function() {
      $(".pCard_card_ctVincent").toggleClass("pCard_on");
      $(".pCard_add_ctVincent i").toggleClass("fa-minus");
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

/*caroussel*/
const slider = document.querySelector(".slider");
const nextBtn = document.querySelector(".next-btn");
const prevBtn = document.querySelector(".prev-btn");
const slides = document.querySelectorAll(".slide");
const slideIcons = document.querySelectorAll(".slide-icon");
const numberOfSlides = slides.length;
var slideNumber = 0;

//image slider next button
nextBtn.addEventListener("click", () => {
  slides.forEach((slide) => {
    slide.classList.remove("active");
  });
  slideIcons.forEach((slideIcon) => {
    slideIcon.classList.remove("active");
  });

  slideNumber++;

  if(slideNumber > (numberOfSlides - 1)){
    slideNumber = 0;
  }

  slides[slideNumber].classList.add("active");
  slideIcons[slideNumber].classList.add("active");
});

//image slider previous button
prevBtn.addEventListener("click", () => {
  slides.forEach((slide) => {
    slide.classList.remove("active");
  });
  slideIcons.forEach((slideIcon) => {
    slideIcon.classList.remove("active");
  });

  slideNumber--;

  if(slideNumber < 0){
    slideNumber = numberOfSlides - 1;
  }

  slides[slideNumber].classList.add("active");
  slideIcons[slideNumber].classList.add("active");
});

//image slider autoplay
var playSlider;

var repeater = () => {
  playSlider = setInterval(function(){
    slides.forEach((slide) => {
      slide.classList.remove("active");
    });
    slideIcons.forEach((slideIcon) => {
      slideIcon.classList.remove("active");
    });

    slideNumber++;

    if(slideNumber > (numberOfSlides - 1)){
      slideNumber = 0;
    }

    slides[slideNumber].classList.add("active");
    slideIcons[slideNumber].classList.add("active");
  }, 4000);
}
repeater();

//stop the image slider autoplay on mouseover
slider.addEventListener("mouseover", () => {
  clearInterval(playSlider);
});

//start the image slider autoplay again on mouseout
slider.addEventListener("mouseout", () => {
  repeater();
});
