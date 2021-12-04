<?php
    $title = "confirm";
    $description= "page pour confirmer l'inscription de l'utilisateur";
    include_once 'include/head.inc.php';
    include_once 'include/function.inc.php';
    include_once 'Ajax.js';
?>

<?php
    validRegistation();
    include_once 'include/footeur.inc.php';
?>