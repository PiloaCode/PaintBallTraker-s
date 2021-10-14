<?php
    $title = "PaintBallTraker-s";
    $description = "Page d'accueil du site.";

    include_once 'include/header.inc.php';

?>

<h1> PaintBallTraker's </h1>

<section>

<h2>Qu'est-ce que le paintball?</h2>
<p class="intro"> 
    La paintball est une activité sportive ou de loisir opposant deux équipes dont les joueurs
    sont équipés de masques de protection et de lanceur (ou marqueurs). Les lanceurs propulsent
    par air comprimé au CO2 des billes de peinture de calibre 0.68 constituées de capsules médicales
    renfermant une gélatine colorée, biodégradable.
</p>

<p class="intro">
    Ces deux équipes  soppose l'une contre l'autre sur différents terrains délimités par des filets 
    de protection.
</p>

<p class="intro"> 
    Le but est de réussir les différentes missions données par l'encadrant. La partie est gagnée lorque
    l'objectif est atteint ou lorsque les joeurs d'une équipe sont totalement éliminés par l'équipe
    adverses au moyen de leurs lanceurs.
</p>

<table>
    <td></td>
    <td> </td>
</table>

<h2>Implémentation d'une carte</h2>
<div id="map">
    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('Coucou Vincent.<br> Easily customizable.')
    .openPopup();
    </script>

</div>

</section>
<?php
    include_once 'include/footer.inc.php';
?>