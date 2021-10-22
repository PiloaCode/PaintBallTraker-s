<?php
    $title = "PaintBallTraker-s";
    $description = "Page d'accueil du site.";
    $h1 = "Paintball Tracker's";
    include_once 'include/header.inc.php';

?>
<body>
      <!--Elements de ma page d'accueil-->
      <section class="home-section">    

        <h2>Qu'est-ce que le paintball?</h2>

        <!-------------CODE VINCENT------------->

        <div class='row'>

<div class="col-12 col-lg-4">
<div class="card maCard" id="card1">
  <div class="imgCard">
  <img class="card-img-top" src="img/icon-force.png" alt="Card image cap">
  </div>
  <div class="card-body">
  <h5>Augmente la force et l'endurance</h5>
    <p class="card-text"> Ramper, courir,plonger,esquiiver... Le paintball est un véritable concentré de plusieurs sports.
      D'une manière générale, au sortir d'une partie, les joueurs sont réellement exténué.
      En outre, cette activité tonifie le corps sans même que l'on s'en rende compte.</p>
  </div>
</div>
</div>

<div class="col-12 col-lg-4">
<div class="card maCard" id="card2">
<div id="imgCard2" class="imgCard">
  <img class="card-img-top" src="img/icon-confiance.png" alt="Card image cap">
</div>
  <h5>Gain de confiance en soi</h5>
  <div class="card-body">
    <p class="card-text">Vous êtes plutôt timide dans la vie? Affirmez-vous lors des parties de paintball!
      Souvent, cette activitépermet à des personnes plutôt réservées de prendre un leadership et 
      d'accroître leur confiance en elle.

    </p>
  </div>
</div>
</div>

<div class="col-12 col-lg-4">
<div class="card maCard" id="card3" >
  <div class="imgCard" id="imgCardCible">
  <img class="card-img-top" src="img/icon-poids.png" alt="Card image cap">
</div>
  <h5> Permet la perte de poids </h5>
  <div class="card-body">
    <p class="card-text textCard">Si vous souhaitez perdre du poids, le paintball s'avère être une 
      alternative tout à fait crédible et sérieuse. Du fait de l'exercice intense, vous
      brûlez des calories et d'améliorez vos cycles de sommeil. Grâce à ce sport, vous
      réduisez le risque de maladies cardiaques, pression artérielle et de dépression.
      
    </p>
  </div>

</div>
</div>
</div>


        <!-------------------------------------->
        <div>
          <p style="text-align: center;"> 
              La paintball est une activité sportive ou de loisir opposant deux équipes dont les joueurs
              sont équipés de masques de protection et de lanceur (ou marqueurs). Les lanceurs propulsent
              par air comprimé au CO2 des billes de peinture de calibre 0.68 constituées de capsules médicales
              renfermant une gélatine colorée, biodégradable.
              Ces deux équipes  soppose l'une contre l'autre sur différents terrains délimités par des filets 
              de protection.
              Le but est de réussir les différentes missions données par l'encadrant. La partie est gagnée lorque
              l'objectif est atteint ou lorsque les joeurs d'une équipe sont totalement éliminés par l'équipe
              adverses au moyen de leurs lanceurs.
          </p>
         </div>
          <!--
          <h2>Clubs aux alentours</h2>
          <div id="map">
              <script>
                  var map = L.map('map').setView([48.4990487,2.3663295], 12.5);

                  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                  }).addTo(map);

                  L.marker([48.4990487,2.3663295]).addTo(map)
                      .bindPopup('Paintball SelectPark.<br>Rue de Boigny, 91590 Baulne, France.')
                      .openPopup();
              </script>
          </div>
          -->
          <h2>Calcul itinéraire</h2>
          <script>
            function go() {
          map = L.map("map").setView([47, 2.424], 7);
          var lyrMaps = L.geoportalLayer.WMTS({
              layer: "GEOGRAPHICALGRIDSYSTEMS.MAPS",
          }, { // leafletParams
              opacity: 0.7
          });
          map.addLayer(lyrMaps) ;
          var routeCtrl = L.geoportalControl.Route({
          });
        map.addControl(routeCtrl);

      }

      Gp.Services.getConfig({
          apiKey : "53p4y6s38oqms2vkep7c0p0v",
          onSuccess : go
      }) ;

      var infoDiv= document.getElementById("info") ;
      infoDiv.innerHTML= "<p> Extension Leaflet version "+Gp.leafletExtVersion+" ("+Gp.leafletExtDate+")</p>" ;

          </script>
          <div id="map"></div>
          <div id="info"></div>      
</body>
<?php
    include_once 'include/footer.inc.php';
?>