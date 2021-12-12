<?php
    session_start();
    session_destroy();
    
    header("location:http://localhost/www/PaintBallTraker-s/sitevincent/index.php");
    
    include_once 'include/head.inc.php';
?>

<?php
    include_once 'include/footeur.inc.php';
?>