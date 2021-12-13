<?php
    session_start();
    session_destroy();
    
    // version local du lien: https://localhost/Projet_web/PaintBallTraker-s/index.php
    // version en ligne du lien: https://piloa.alwaysdata.net/
    header("location:https://paintballtrackers.com/index.php");
    
    include_once 'include/head.inc.php';
?>

<?php
    include_once 'include/footeur.inc.php';
?>