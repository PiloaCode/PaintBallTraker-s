<?php
    $title = "PaintBallTraker-s";
    $description = "Page d'accueil du site.";

    include_once 'include/head.inc.php';
?>
<script type="text/javascript" src="test.js" >

</script>
<h1 id="h1Paint"> PaintBallTraker's </h1>

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

  <h3> Quels sont les principaux mode de jeux du paintball?</h3>

    Les principaux modes de jeux au Paintball sont:
    <ul>
      <li> Battle royale </li>
      <li> Le Deathmatch par équipe </li>
      <li> Le Fort </li>
      <li> Les Bombes </li>
    </ul>

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
        <img class="card-img-top" src="images/icon-force.png" alt="Card image cap">
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
        <img class="card-img-top" src="images/icon-confiance.png" alt="Card image cap">
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
        <img class="card-img-top" src="images/icon-poids.png" alt="Card image cap">
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



<?php
    include_once 'include/footeur.inc.php';
?>