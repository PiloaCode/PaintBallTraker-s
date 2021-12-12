<?php
    //element a remplire pour le head
    $title = "confirm";
    $description= "page pour confirmer l'inscription de l'utilisateur";
    $h1 = "Confirmer votre identité!";

    include_once 'include/head.inc.php';
    include_once 'include/function.inc.php';
    
?>

<?php
    validRegistation();
    include_once 'include/footeur.inc.php';
?>