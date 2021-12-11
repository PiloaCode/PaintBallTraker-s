<?php
    session_start();
    session_destroy();
    
    header("location:https://localhost/Projet_web/PaintBallTraker-s/index.php");
    
    include_once 'include/head.inc.php';
?>

<?php
    include_once 'include/footeur.inc.php';
?>