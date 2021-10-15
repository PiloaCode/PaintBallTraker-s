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