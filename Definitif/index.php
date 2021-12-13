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
    <h2>Paintball Compétition</h2>  
    <div class="slider">
      <div class="slide active">
        <img src="img/home_caroussel_img1.png" alt="">
        <!--
        <div class="info">
          <h2></h2>
          <p></p>
        </div>
        -->
      </div>
      <div class="slide">
        <img src="img/home_caroussel_img2.png" alt="">
        <!--
        <div class="info">
          <h2></h2>
          <p></p>
        </div>
        -->
      </div>
      <div class="slide">
        <img src="img/home_caroussel_img3.png" alt="">
        <!--
        <div class="info">
          <h2></h2>
          <p></p>
        </div>
        -->
      </div>
      <div class="slide">
        <img src="img/home_caroussel_img4.png" alt="">
        <!--
        <div class="info">
          <h2></h2>
          <p></p>
        </div>
        -->
      </div>
      <div class="slide">
        <img src="img/home_caroussel_img5.png" alt="">
        <!--
        <div class="info">
          <h2></h2>
          <p</p>
        </div>
        -->
      </div>
      <div class="navigation">
        <i class="fas fa-chevron-left prev-btn"></i>
        <i class="fas fa-chevron-right next-btn"></i>
      </div>
      <div class="navigation-visibility">
        <div class="slide-icon active"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
      </div>
    </div>
    <p class="intro" style="margin-top: 10%"> 
    Chaque équipe est composée de 5 joueurs, auxquels s'ajoutent 2 remplaçants maximum, 1 coach, avec des marqueurs semi-automatiques assistés limités à 10 billes par seconde. Le format de jeu est de type « long », il s'agit dans une limite de temps (15 minutes) de jouer le maximum de parties, celles-ci se terminant lorsqu'un joueur a réussi à toucher la base adverse, la première équipe totalisant 5 points d'écart ou celle en tête à la fin du temps gagne.
    </p>

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
    <p class="intro"    style="margin-bottom: 10%">
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

<h2>Votre position</h2>
<div id="carte"></div>
<!-- leafletjs JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>


<?php
    include_once 'include/footeur.inc.php';
?>