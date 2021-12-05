<?php
    $title="Matchs";
    $description="permet de voir les matchs du joueur";
    $h1 = "Vos Matchs";
    include_once 'include/head.inc.php';
    include_once 'include/function.inc.php'
?>
    <div class=" buttonMatchs">
        <input class="btn btn-primary" type="button" id="addMatch" value="ajouter un match"     />
        <input class="btn btn-primary" type="button" id="printMatch" value="afficher matchs"     />
        <input class="btn btn-primary" type="button" id="addMEquipe" value="ajouter une équipe"     />
    </div>

    <div id="result">

    </div>
   
<script src="Ajax.js"> </script>
<?php
    // echo afficheTabMatch("");
    include_once 'include/footeur.inc.php';
?>