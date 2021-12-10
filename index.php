<?php
    $title = "PaintBallTrakers";
    $description = "Page d'accueil du site.";
    $h1 = "Paintball Trackers";
    include_once 'include/head.inc.php';  
?>

<!--Elements de ma page d'accueil--> 
<!-- texte d'explication du jeux de Paintball et de présentation du site -->
<div class="row">
  <section>
    <h2>Qu'est-ce que le paintball?</h2>
    <!-- texte explicatif du Paintball -->
    <p class="intro"> 
        La paintball est une activité sportive ou de loisir opposant deux équipes dont les joueurs
        sont équipés de masques de protection et de lanceur (ou marqueurs). Les lanceurs propulsent
        par air comprimé au CO2 des billes de peinture de calibre 0.68 constituées de capsules médicales
        renfermant une gélatine colorée, biodégradable.Ces deux équipes  soppose l'une contre l'autre sur 
        différents terrains délimités par des filets de protection. Le but est de réussir les différentes 
        missions données par l'encadrant. La partie est gagnée lorque l'objectif est atteint ou lorsque 
        les joeurs d'une équipe sont totalement éliminés par l'équipe adverses au moyen de leurs lanceurs.
    </p>
    
    <h2> Paintball Loisir</h2>
    <div class="row">
      <div class="col-12 col-md-6 col-xl-3">
        <!--Card Battle Royale-->
        <div class="pCard_card_BR">
          <!--Partie haute de la Card-->
          <div class="pCard_up">
            <div class="pCard_add_BR">
              <i class="fas fa-plus"></i>
            </div>
          </div>
          <!--Partie basse de la Card -->
          <div class="pCard_down">
            <div>
              <p>Battle Royale</p>
            </div>
          </div>
          <!--Verso de la Card-->
          <div class="pCard_back">
            <p>Dans ce mode de jeu vous êtes 10 sur le terrain , chacun pour sa peau , un seul en sortira vivant , et se verra récompensé d’un cadeau !</p>
          </div>
        </div>
      </div>  
      <div class="col-12 col-md-6 col-xl-3">
        <!--Card DeathMatch-->
        <div class="pCard_card_DM">
            <div class="pCard_up">
              <div class="pCard_add_DM">
                <i class="fas fa-plus"></i>
              </div>
            </div>
            <div class="pCard_down">
              <div>
                <p>Deathmatch</p>
              </div>
            </div>
            <div class="pCard_back">
            <p>Deux équipes s'affronte, la dernière équipe à rester dans le match gagne la partie</p>
          </div>
        </div> 
      </div>
      <div class="col-12 col-md-6 col-xl-3">
        <!--Card Le Fort-->
        <div class="pCard_card_LF">
            <div class="pCard_up">
              <div class="pCard_add_LF">
                <i class="fas fa-plus"></i>
              </div>
            </div>
            <div class="pCard_down">
              <div>
                <p>Le Fort</p>
              </div>
            </div>
            <div class="pCard_back">
            <p>Defendez votre Fort plus de 20 minutes contre les assailants afin de gagnez la partie.</p>
          </div>
        </div> 
      </div>
      <div class="col-12 col-md-6 col-xl-3">
        <!--Card La Bombe-->
        <div class="pCard_card_LB">
            <div class="pCard_up">
              <div class="pCard_add_LB">
                <i class="fas fa-plus"></i>
              </div>
            </div>
            <div class="pCard_down">
              <div>
                <p>Les Bombes</p>
              </div>
            </div>
            <div class="pCard_back">
            <p>La première équipe qui ramène la bombe près du camps ennemie, gagne la partie. Attention, la bombe doit être portée par 4 joueurs !</p>
          </div>
        </div> 
      </div>
    </div>
<?php
  $url = "http://www.mapquestapi.com/geocoding/v1/address?key=JNpXOp83Sf56uozkto3vj0Bp39GEjN7c&location=Paris";
 
  $json = file_get_contents($url);
  $obj = json_decode($json);
  $res = $obj->{'results'};
  $id = $res[0]->{'providedLocation'};
  $resid = $id->{'location'};  
    echo "<h2> Voici ma ville  :".$resid."</h2>";
  
  //echo'<h2>'.$url.'</h2>';
  //echo'<h2>'.$json.'</h2>';
  
?>     
    <h2>Paintball Compétition</h2>  
    <div style="text-align: center;">
    <img src="img/home_caroussel_img1.png" style="border-radius: 30px;">
    </div>
    <h2>Que peut vous apporter notre site?</h2>
    <!-- textes explicatifs du site -->
    <p class="intro"> 
      Nous avons construction notre projet autour d'un butte précis, nous voulions appporter un service qui 
      dès lors n'avais pas vraiment éter exploiter. Si il y à bien une chose que nous aimons voir, c'est notre
      évolution et ce dans tout les domaines de notre vie. Pour l'Homme il est important de pouvoir remarquer 
      une évolution Mais il est toujours plus vrai, que lorsque nous touchons au domaine sportif qui est en 
      générale compétitife, cette règle s'applique d'autant plus. Si vous aussi vous aimez voir votre évolution
      au fils du temp, et que vous aimez et pratiquer le paintball, nous vous invitons dès lors à utiliser notre 
      site. 
    </p>
    <p class="intro">
      Notre site internet, possède plusieurs fonctionnalité, la première est la possibilitée pour vous de
      recherche un lieux ou vous pouvez pratiquer le paintball. Vous pouvez par exemple cherchez le lieux le plus
      proche, pour cela il vous suffit de vous rendre sur la page Recherche. Pour se qui est est des
      fonctionnalités se suivie de votre progression, il vous faut créer un compte. Pour cela rendez-vous sur la
      page connexion et appyez sur s'inscrire. Il vous suffira alors de rentrer les informations demandé. Une
      fois connecter de nouvelles pages (s'offrirons à vous) vous serons accessible. Premièrement, il vous sera possible d'inscrire
      les ou l'équipe avec l'esquelle vous jouer, se qui vous sera utile au moment de rentrer de nouvelle information sur
      un nouveau matches. La dexième interaction possible est la possibilité de rentrer les informations de vos
      parties de paintBall. 
    </p>
  </section>
</div>
<!-- Affichage des cartes des bienfais du Paintball -->
<div class='row' id='cardes'>
  <div class="col-12 col-lg-4 test" id="titi">
    <div class="card maCard" id="card1">
      <figure class="imgCard">
        <img class="card-img-top" src="img/icon-force.png" alt="Card image cap">
      </figure>
      <div class="card-body">
        <h5 class="titleCard">Augmente la force et l'endurance</h5>
        <p class="card-text"> Ramper, courir,plonger,esquiiver... Le paintball est un véritable concentré de plusieurs sports.
          D'une manière générale, au sortir d'une partie, les joueurs sont réellement exténué.
          En outre, cette activité tonifie le corps sans même que l'on s'en rende compte.
        </p>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-4">
    <div class="card maCard" >
      <figure class="imgCard ">
        <img class="card-img-top" src="img/icon-confiance.png" alt="Card image cap">
      </figure>
      <div class="card-body">
        <h5 class="titleCard">Gain de confiance en soi</h5>
        <p class="card-text">Vous êtes plutôt timide dans la vie? Affirmez-vous lors des parties de paintball!
          Souvent, cette activitépermet à des personnes plutôt réservées de prendre un leadership et 
          d'accroître leur confiance en elle.
        </p>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-4">
    <div class="card maCard" id="card3" >
      <figure class="imgCard">
        <img class="card-img-top" src="img/icon-poids.png" alt="Card image cap">
      </figure>
      <div class="card-body">
        <h5 class="titleCard"> Permet la perte de poids </h5>
        <p class="card-text ">Si vous souhaitez perdre du poids, le paintball s'avère être une 
          alternative tout à fait crédible et sérieuse. Du fait de l'exercice intense, vous
          brûlez des calories et d'améliorez vos cycles de sommeil. Grâce à ce sport, vous
          réduisez le risque de maladies cardiaques, pression artérielle et de dépression.
        </p>
      </div>
    </div>
  </div>
</div>
<!-----------------CODE ALEXIS--------------------->
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
  <!--
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script type="text/javascript" src="script.js"></script>
-->
<script>


L.mapquest.key = 'KEY';

// 'map' refers to a <div> element with the ID map
L.mapquest.map('map', {
  center: [37.7749, -122.4194],
  layers: L.mapquest.tileLayer('map'),
  zoom: 12
});
</script>
<?php
    include_once 'include/footeur.inc.php';
?>